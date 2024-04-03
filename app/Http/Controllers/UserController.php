<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Datatables;

class UserController extends Controller
{
    public function index(Request $request){

        if($request->ajax())
        {
            $data=User::select('*');
            return Datatables::of($data)->addIndexColumn()->make(true);
        }
        return view('user');
    }
      
}
