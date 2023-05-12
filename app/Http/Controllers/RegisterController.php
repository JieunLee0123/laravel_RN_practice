<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public function create()
  {
    return view('regist.register');
  }

  public function store(Request $request)
  {
    // request validate
    $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|confirmed|min:8'
    ]);

    // request 데이터베이스 등록
    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password), // PS 해싱하여 반환 [ 보안 ]
    ]);
    
    return View('regist.complete', compact('user')); // 주어진 변수명에 해당하는 값들을 배열로 만들어 반환
  }
}
