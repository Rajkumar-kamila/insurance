<?php

namespace App\Http\Controllers;

use App\Exports\ExportItemlist;
use App\Models\BrandsModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use App\Models\ModelModel;
use App\Models\SidebarModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class ModelController extends Controller
{
    public function index()
    {
        $fetchdata = ModelModel::with('brand_details', 'category_details')->where('flag','!=','2')->get();
        $fetchcat = CategoryModel::where('flag','!=','2')->get();
        $fetchbrand = BrandsModel::where('flag','!=','2')->get();
        return view('master.model.index',compact('fetchdata','fetchcat','fetchbrand'));
    }
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'brand_id' => 'required',
            'category_id' => 'required'
            
        ]);
        if ($validate->fails()) {
            return response()->json(['code' => 400, 'message' => $validate->errors()->toArray()]);
        } 
        else {

            if(!empty($request->name)){
                $name = $request->name;
                $existingcategory = ModelModel::where('name', $name)->first();
            
                if(!empty($existingcategory)){
                    return response()->json(['code' => 400, 'message' => 'Model Already Exists']);
                }else{

                    $data['name'] = $request->name;
                    $data['brand_id'] = $request->brand_id;
                    $data['category_id'] = $request->category_id;
                    $inserted = ModelModel::insert($data);

                    if(!empty($inserted)){
                        return response()->json(['code' => 200, 'message' => 'Model Added Successfully']);
                    }else{
                        return response()->json(['code' => 400, 'message' => 'Something Went wrong Try Again !']);
                    }

                }
                
            }

        }
    }
}
