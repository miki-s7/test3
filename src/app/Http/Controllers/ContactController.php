<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Requests\UsersRequest;

class ContactController extends Controller
{
    public function register1()
  {
    return view('registerStep1');
  }
  public function register2()
  {
    return view('registerStep2');
  }
  public function login()
  {
    return view('login');
  }

    public function users(UsersRequest $request)
    {
        \DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'pass' => $request->pass
        ]);

        $users = Users::all();
        //return view('/register/step2');
        //return view('index', ['products' => $products]);
    }


    public function weight_target(Weight_targetRequest $request)
    {
        \DB::table('weight_target')->insert([
            'now_weight' => $request->now_weight,
            'target_weight' => $request->target_weight
        ]);

        $weight_target = Weight_target::all();
        //return view('/weight_logs');
        //return view('index', ['products' => $products]);
    }

}
