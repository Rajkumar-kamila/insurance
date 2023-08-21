<?php

namespace App\Http\Controllers;
use App\Exports\ExportItemlist;
use Illuminate\Http\Request;
use App\Models\LoginModel;
use App\Models\SidebarModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function index()
    {
        if(!checkaccess('1','read_perm')) {
            redirect('403');
        };

        $fetchdata = LoginModel::where('flag', '0')->where('admin_role', 'admin')->get();
        $fetchsidebar = SidebarModel::get();
        return view('staff.admin.add', compact('fetchdata','fetchsidebar'));    
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:200|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required',
            'c_password' => 'required'
        ]);
        if ($validate->fails()) {
            return response()->json(['code' => 400, 'message' => $validate->errors()->toArray()]);
        } 
        else {

            if(!empty($request->email)){
                $email = $request->email;
                $existingEmail = LoginModel::where('email', $email)->first();
            
                if(!empty($existingEmail)){
                    return response()->json(['code' => 400, 'message' => 'Email Already Exists']);
                }else{

                    
                    if($request->password == $request->c_password){
                        $data['name'] = $request->name;
                        $data['email'] = $request->email;
                        $data['contact'] = $request->phone;
                        $data['admin_role'] = 'admin';
                        $data['password'] = Hash::make($request->password);
                        $inserted = LoginModel::insertGetId($data);


                        if(!empty($inserted)){

                            $savedata['user_id'] = $inserted;
                            $sidebars = $request->sidebar;
                            foreach ($sidebars as $value) {

                                $read_val = "read_" . $value;
                                $write_val = "write_" . $value;

                                $savedata['read_perm'] = $savedata['write_perm'] = 0;

                                if ($request->$read_val == 1) {
                                    $savedata['read_perm'] = 1;
                                }

                                if ($request->$write_val == 1) {
                                    $savedata['write_perm'] = 1;
                                }

                                $savedata['sidebar_id'] = $value;

                                if ($savedata['read_perm'] == '1' || $savedata['write_perm'] == '1') {
                                    DB::table('sidebar_permission')->insert($savedata);
                                }
                            }
                            
                            return response()->json(['code' => 200, 'message' => 'Admin Added Successfully']);
                        }else{
                            return response()->json(['code' => 400, 'message' => 'Something Went wrong Try Again !']);
                        }

                    }else{
                        return response()->json(['code' => 400, 'message' => 'Password and Confirm password not Same !']);

                    }
                    
                }
                
            }

        }
    }

    public function exportadmin()
    {
        $arr = array();
        $export_list = LoginModel::where('flag','!=','2')->where('admin_role', 'admin')->get();
        
        array_push($arr, array(
            'S.no.',
            'Name',
            'Contact',
            'Email',
            'Role',
            'Created At',
        ));

        if (!empty($export_list)) {
            foreach ($export_list as $key => $value) {
                
                // print_r($title);exit;
                
                array_push($arr, array(
                    'S.no.' => $key + 1,
                    'Name' => $value->name ?? '',
                    'Contact' => $value->contact ?? '',
                    'Email' => $value->email ?? '',
                    'Role' => $value->admin_role ?? '',
                    'Created At' => $value->created_at ?? ''
                ));
            }
        }

        return Excel::download(new ExportItemlist($arr), 'admin list.xlsx');
    }

}
