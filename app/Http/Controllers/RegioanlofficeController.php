<?php

namespace App\Http\Controllers;

use App\Exports\ExportItemlist;
use Illuminate\Http\Request;
use App\Models\LoginModel;
use Illuminate\Support\Facades\DB;
use App\Models\SidebarModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class RegioanlofficeController extends Controller
{
    public function index()
    {
        $fetchdata = LoginModel::where('flag', '0')->where('admin_role', 'regional_office')->get();
        $fetchsidebar = SidebarModel::where('sidebar_name','!=','admin')->where('sidebar_name','!=','company')->where('sidebar_name','!=','head office')->where('sidebar_name','!=','regional office')->get();
        return view('staff.regional_office.add',compact('fetchdata','fetchsidebar'));
    }
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'parent_id' => 'required',
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

                    // $pass_verify = Hash::check($request->password, $request->c_password);
                    if($request->password == $request->c_password){
                        $data['parent_id'] = $request->parent_id;
                        $data['name'] = $request->name;
                        $data['email'] = $request->email;
                        $data['contact'] = $request->phone;
                        $data['admin_role'] = 'regional_office';
                        $data['password'] = Hash::make($request->password);
                        $inserted = LoginModel::insert($data);

                        if($request->password == $request->c_password){
                            $data['name'] = $request->name;
                            $data['email'] = $request->email;
                            $data['contact'] = $request->phone;
                            $data['admin_role'] = 'regional_office';
                            $data['password'] = Hash::make($request->password);
                            $inserted = LoginModel::insertGetId($data);
    
                            if(!empty($inserted)){
    
                                $savedata['role_id'] = $inserted;
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
                                    
                                return response()->json(['code' => 200, 'message' => 'Regional Office Added Successfully']);
                            }else{
                                return response()->json(['code' => 400, 'message' => 'Something Went wrong Try Again !']);
                            }
                        }

                    }else{
                        return response()->json(['code' => 400, 'message' => 'Password and Confirm password not Same !']);

                    }
                    
                }
                
            }

        }
    }
}
