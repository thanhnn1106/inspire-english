<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;

use App\User;

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

    use AuthenticatesUsers{
        logout as performLogout;
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function memberLogin(Request $request)
    {
        $redirect = $request->get('redirect', NULL);
        if($redirect === NULL) {
            $redirect = base64_encode(\URL::previous());
        }

        $data = array(
            'url_redirect' => $redirect,
        );

        if ($request->isMethod('POST')) {

            // validate the info, create rules for the inputs
            $rules = array(
                'email'    => 'required|email',
                'password' => 'required|min:8',
            );

            // run the validation rules on the inputs from the form
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return redirect(route('member_login', ['redirect' => $redirect]))
                            ->withErrors($validator)
                            ->withInput();
            }

            $roleMember = 2;
            $loginUser = User::where('email', $request->get('email'))->where('role_id', $roleMember)->first();

            if($loginUser !== NULL) {
                // create our user data for the authentication
                $userData = array(
                    'email' => $request->get('email'),
                    'password' => $request->get('password'),
                    'role_id' => $loginUser->role_id
                );
                // attempt to do the login
                if (Auth::attempt($userData)) {
                    return redirect(route('member_dashboard'));
                } else {
                    return redirect(route('member_login'));
                }
            }
            return redirect(route('member_login'));
        }

        return view('auth/member_login', $data);
    }

    public function guestLogin(Request $request)
    {
        $redirect = $request->get('redirect', NULL);
        if($redirect === NULL) {
            $redirect = base64_encode(\URL::previous());
        }

        $data = array(
            'url_redirect' => $redirect,
        );

        if ($request->isMethod('POST')) {

            // validate the info, create rules for the inputs
            $rules = array(
                'email'    => 'required|email',
                'password' => 'required|min:8',
            );

            // run the validation rules on the inputs from the form
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return redirect(route('guest_login', ['redirect' => $redirect]))
                            ->withErrors($validator)
                            ->withInput();
            }

            $roleGuest = 3;
            $loginUser = User::where('email', $request->get('email'))->where('role_id', $roleGuest)->first();
            if($loginUser !== NULL) {
                // create our user data for the authentication
                $userData = array(
                    'email' => $request->get('email'),
                    'password' => $request->get('password'),
                    'role_id' => $loginUser->role_id
                );
                // attempt to do the login
                if (Auth::attempt($userData)) {
                    return redirect(route('guest_dashboard'));
                } else {
                    return redirect(route('guest_login'));
                }
            }
            return redirect(route('guest_login'));
        }

        return view('auth/guest_login', $data);
    }
}
