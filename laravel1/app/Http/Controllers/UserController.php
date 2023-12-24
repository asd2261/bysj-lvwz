<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('user.login');
    }
    public function check(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');
      $rule=[
          'name' =>'required|between:3,18',
          'password' =>'required|between:6,18',
      ];
      $message=[
          'name.required' => '用户名不能为空',
          'name.between' => '用户名长度必须在3-18之间',
          'password.required' => '密码不能为空',
          'password.between' => '密码长度必须在6-18之间',
      ];
      $validator = Validator::make($request->all(),$rule,$message);
    if($validator->fails()) {
        foreach($validator->getMessageBag()->toAreay() as $v) {
            $msg-$v[0];
        }
        return,$msg;
    }
    
if($name == 'admin' && $password == '123456') {
        return redirect('user/index');
    }else{
        return back()->with('error','用户名或密码错误');
    }




    }
    
    
    
    
    
    }
}
