<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function index()
    {
        // Check if the user is already authenticated, and if so, redirect to the item_list route
        if(Session::get('admin_login')) {
            return redirect('dashboard');
        }else{
            return view('login');
        }
        // return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function registerform(Request $request)
    {
            $validate = Validator::make($request->all(), [
                'name' => 'required|string|max:200|regex:/^[a-zA-Z\s]+$/',
                'email' => 'required|email',
                'password' => 'required'
            ]);
            if ($validate->fails()) {
                return response()->json(['code' => 401, 'message' => $validate->errors()->toArray()]);
            } 
            else {

                if(!empty($request->email)){
                    $email = $request->email;
                    $existingEmail = LoginModel::where('email', $email)->first();
                
                    if(!empty($existingEmail)){
                        return response()->json(['code' => 401, 'message' => 'Email Already Exists']);
                    }else{
                        $data['name'] = $request->name;
                        $data['email'] = $request->email;
                        $data['password'] = Hash::make($request->password);
                        
                        $inserted = LoginModel::insert($data);
                        if(!empty($inserted)){
                            return response()->json(['code' => 200, 'message' => 'Account Register Successfully']);
                        }else{
                            return response()->json(['code' => 401, 'message' => 'Something Went wrong Try Again !']);
                        }
                    }
                    
                }

            }
    }
   
    public function loginform(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if ($validate->fails()) {
            return response()->json(['code' => 401, 'message' => $validate->errors()->toArray()]);
        } else {
            $email = $request->email;
            $check = LoginModel::where('email', $email)->where('flag','!=','2')->first();

            if ($check) {

                $pass_verify = Hash::check($request->password, $check->password);

                if ($pass_verify) {

                        $session['admin_login'] = ['id' => $check->id, 'name' => $check->name, 'email' => $check->email, 'role' => $check->admin_role, 'contact' => $check->contact];
                        Session::put($session);
                        Cookie::queue('login_email', $check->email, time() + 60 * 60 * 24 * 100);
                        Cookie::queue('login_pass', $check->password, time() + 60 * 60 * 24 * 100);

                    return response()->json(['code' => 200, 'message' => 'Login Successfully']);
                } else {
                    return response()->json(['code' => 400, 'message' => 'Incorrect Password']);
                }
            } else {
                return response()->json(['code' => 400, 'message' => 'Email Address is not registered']);
            }
        }
    }
}
