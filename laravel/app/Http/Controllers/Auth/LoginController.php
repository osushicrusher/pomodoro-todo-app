<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller, Session;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @return string
     */
    protected $redirectTo = '/home';

    public function redirectTo() {
      $user = Auth::user();
      Session::put(['user_id' => $user->id,]);
      return '/home';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // /**
    //  * GitHubの認証ページヘユーザーを転送するためのルート
    //  *
    //  * @return \Symfony\Component\HttpFoundation\RedirectResponse
    //  */
    // public function redirectToProvider() {
    //   return Socialite::driver("github")->redirect();
    // }

    // /**
    //  * GitHubの認証後に戻るルート
    //  *
    //  * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    //  */
    // public function handleProviderCallback() {
    //   try {
    //     $user = Socialite::with("github")->user();
    //   } catch (Exception $e) {
    //     return redirect('/welcome'); // エラーならウェルカムページに転送
    //   }

    //   // nameかnickNameをuserNameにする
    //   if ($user->getName()) {
    //     $userName = $user->getName();
    //   } else {
    //     $userName = $user->getNickName();
    //   }

    //   // mailアドレスおよび名前を保存
    //   $authUser = User::firstOrCreate([
    //     'email' => $user->getEmail(),
    //     'name' => $userName
    //   ]);
    //   auth()->login($authUser); // ログイン
    //   return redirect()->to('/home'); // homeページに転送
    // }

}
