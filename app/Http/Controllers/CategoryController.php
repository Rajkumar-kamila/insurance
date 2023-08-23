<?php

namespace App\Http\Controllers;

use App\Exports\ExportItemlist;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\SidebarModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;


class CategoryController extends Controller
{
    public function index()
    {
        $fetchdata = CategoryModel::where('flag','!=','2')->get();
        return view('master.category.index',compact('fetchdata'));
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
                $existingcategory = CategoryModel::where('name', $name)->first();
            
                if(!empty($existingcategory)){
                    return response()->json(['code' => 400, 'message' => 'Category Already Exists']);
                }else{

                    $data['name'] = $request->name;
                    $data['description'] = $request->description;
                    $inserted = CategoryModel::insert($data);

                    if(!empty($inserted)){
                        return response()->json(['code' => 200, 'message' => 'Category Added Successfully']);
                    }else{
                        return response()->json(['code' => 400, 'message' => 'Something Went wrong Try Again !']);
                    }

                }
                
            }

        }
    }
}
