<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

include("php/dbh.php");

class AllUsersController extends Controller
{
    //
    public function __invoke()
    {
        return response(DB::table('users')->get(), 200);
    }

    public function create(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $hashedpwd = Hash::make($password);
        $data=array('name'=>$name,'email'=>$email,'password'=>$hashedpwd);
        DB::table('users')->insert($data);
        return redirect('/inloggen', 201);
    }

    public function login(Request $request)
    {
        /*
        $email = $request->input('email');
        $password = $request->input('password');
        $hashedpwd = Hash::make($password);
        $data=array('email'=>$email,'password'=>$hashedpwd);
        $dbData = DB::table('users')->get($data)->where('email', $email);
        if(DB::table('users')->where('password', '=', $password)){
            return redirect('/', 201);
        }
        else{
            return redirect('/inloggen', 201);
        }
        return redirect('/inloggen', 200);
        */
        /*
        $status = null;
        $email = $request->input('email');
        $password = $request->input('password');
        $hashedpwd = Hash::make($password);

        $dbconnect = new \dbconnection();
        $status = $dbconnect->loginUser($hashedpwd);

        print_r($status);

        if ($status == $hashedpwd){
            return redirect('/#succes', 201);
            //return " LOGIN";
        }else if(!$status == null){
            return redirect('/inloggen', 201);
            //return " FALSE";
        }else{
            //return " NULL";
        }*/
        return redirect('/', 201);
    }
}
