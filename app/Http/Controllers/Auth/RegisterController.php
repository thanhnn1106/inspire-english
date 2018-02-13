<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
//            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => !empty($data['name']) ?  $data['name'] : '',
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'age' => !empty($data['age']) ?  $data['age'] : 0,
            'username' => !empty($data['username']) ?  $data['username'] : '',
            'role_id' => (int)$data['role_id'],
        ]);
    }

    public function registerMember(Request $request)
    {
        if ($request->isMethod('post')) {
            $rules = array(
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            );
            $paramsAdd = $request->all();
            $validator = Validator::make($paramsAdd, $rules);
            // Return view and error message when data invalid
            if ($validator->fails()) {
                return redirect()->route('member_register')
                            ->withErrors($validator)
                            ->withInput();
            }
            $registerResult = $this->create($request->all());
            if ($registerResult) {

                return redirect(route('member_login'))->with('success', trans('Register successfully. Please login.'));
            }

            return redirect(route('member_register'))->with('error', trans('Register failed. Please try again.'))->withInput();
        }

        return view('member.register.index');
    }

    public function registerGuest(Request $request)
    {
        if ($request->isMethod('post')) {
            $rules = array(
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            );
            $paramsAdd = $request->all();
            $validator = Validator::make($paramsAdd, $rules);
            // Return view and error message when data invalid
            if ($validator->fails()) {
                return redirect()->route('guest_register')
                            ->withErrors($validator)
                            ->withInput();
            }
            $registerResult = $this->create($paramsAdd);
            if ($registerResult) {

                return redirect(route('guest_login'))->with('success', trans('Register successfully. Please login.'));
            }

            return redirect(route('guest_register'))->with('error', trans('Register failed. Please try again.'))->withInput();
        }

        return view('guest.register.index');
    }
}
