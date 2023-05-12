<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index()
  {
    return view('auth.login');
  }

  public function authenticate(Request $request)
  {
    $credentials = $request->only('email', 'password');

    // attempt() 사용자를 인증하는 역할
    if (Auth::attempt($credentials)) { // 인증에 성공한 경우의 처리
      $request->session()->regenerate(); // 기존의 세션을 무효화하고, 새로운 세션 ID를 부여
      return redirect()->intended(RouteServiceProvider::HOME);
    }

    return back()->withErrors([ // 인증에 실패한 경우의 처리
      'message' => '메일주소 또는 비밀번호가 올바르지 않습니다.'
    ]);
  }

  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate(); // 세션 삭제
    $request->session()->regenerateToken(); // CSRF 토큰 재발행
    
    return redirect(RouteServiceProvider::HOME);
  }
}
