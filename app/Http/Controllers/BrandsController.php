<?php

namespace App\Http\Controllers;

use App\Exports\ExportItemlist;
use Illuminate\Http\Request;
use App\Models\BrandsModel;
use App\Models\SidebarModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class BrandsController extends Controller
{
    public function index()
    {
        $fetchdata = BrandsModel::where('flag','!=' ,'2')->get();
        // $fetchsidebar = SidebarModel::where('sidebar_name','!=','admin')->where('sidebar_name','!=','company')->where('sidebar_name','!=','head office')->where('sidebar_name','!=','regional office')->where('sidebar_name','!=','zonal office')->where('sidebar_name','!=','claim')->get();
        return view('master.brands.index',compact('fetchdata'));
    }
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'description' => 'required'
            
        ]);
        if ($validate->fails()) {
            return response()->json(['code' => 400, 'message' => $validate->errors()->toArray()]);
        } 
        else {

            if(!empty($request->name)){
                $name = $request->name;
                $existingBrands = BrandsModel::where('name', $name)->first();
            
                if(!empty($existingBrands)){
                    return response()->json(['code' => 400, 'message' => 'Brands Already Exists']);
                }else{

                    $data['name'] = $request->name;
                    $data['description'] = $request->description;
                    $inserted = BrandsModel::insert($data);

                    if(!empty($inserted)){
                        return response()->json(['code' => 200, 'message' => 'Brands Added Successfully']);
                    }else{
                        return response()->json(['code' => 400, 'message' => 'Something Went wrong Try Again !']);
                    }

                }
                
            }

        }
    }
}
