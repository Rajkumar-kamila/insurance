<?php

namespace App\Http\Controllers;

use App\Exports\ExportItemlist;
use Illuminate\Http\Request;
use App\Models\LoginModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class ClaimController extends Controller
{
    public function index()
    {
        $fetchdata = LoginModel::where('flag', '0')->where('admin_role', 'claim')->get();
        return view('claim.add',compact('fetchdata'));
    }
    public function addclaim(Request $request)
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

                    // $pass_verify = Hash::check($request->password, $request->c_password);
                    if($request->password == $request->c_password){
                        $data['name'] = $request->name;
                        $data['email'] = $request->email;
                        $data['contact'] = $request->phone;
                        $data['admin_role'] = 'claim';
                        $data['password'] = Hash::make($request->password);
                        $inserted = LoginModel::insert($data);

                        if(!empty($inserted)){
                            return response()->json(['code' => 200, 'message' => 'Claim Added Successfully']);
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
}
