<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EmployeeController extends Controller
{
    public function show(){

        $data = User::all();
        
        return view('employee.employee',['values'=>$data]);
    }

    public function delete($id){

        $data = User::find($id);
        $data -> delete();
        return redirect('/employee');
    }

    public function logout(Request $required){

        $required->session()->forget('user_id');
        $required->session()->forget('role');
        return redirect('/');

    }

}
