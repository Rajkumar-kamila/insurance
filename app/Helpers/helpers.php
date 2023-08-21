<?php

use App\Models\LoginModel;
use App\Models\SidebarpermissionModel;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Session;

if (!function_exists('getuserdetail')) {
    function getuserdetail($string)
    {
        $sess = session('admin_login');
        return $sess[$string] ?? '';
    }
}


if (!function_exists('getusersdetail')) {
    function getusersdetail($string)
    {
        $result = LoginModel::where('email', getuserdetail('email'))->first();
        return $result->$string ?? '';
    }
}

function checkpermission($sidebar_id, $permission)
{
    if (getuserdetail('role') == 'super_admin' || getuserdetail('role') == 'admin') {
        return true;
    }

    $query = SidebarpermissionModel::where('user_id', getuserdetail('id'))->where('sidebar_id', $sidebar_id)->where($permission, 1)->first('id');
    if ($query) {
        return true;
    }

    return false;
}

function checkaccess($sidebar_id, $permission)
{
    if (getuserdetail('role') == 'super_admin' || getuserdetail('role') == 'admin') {
        return true;
    }

    $query = SidebarpermissionModel::where('user_id', getuserdetail('id'))->where('sidebar_id', $sidebar_id)->where($permission, 1)->first('id');
    if ($query) {
        return true;
    }

    return false;
}


