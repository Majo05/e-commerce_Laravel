<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Type;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/index';

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
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('auth.register', [
            'types' => Type::all(),
        ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    { //  'name', 'lastname', 'email', 'password', 'avatar', 'type', 'nroDoc', 'phone', 'address'

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'doctype_id' => ['required'],
            'nroDoc' => ['required', 'numeric'],
            'phone' => ['required', 'numeric'],
            'address' => ['required', 'string', 'max: 255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $path = isset($data['avatar']) ? $data['avatar'] : null;

        if (!is_null($path)) {
            $filename = $path->store('public/avatars');
            $dbFilename = explode('/', $filename);
            $filename = $dbFilename[2];
        }

        $user  = [
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'doctype_id' => $data['doctype_id'],
            'nroDoc' => $data['nroDoc'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'role_id' => 2,
        ];

        if(isset($filename)) {
            $user['avatar'] = $filename;
        }

        return User::create($user);
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    /*  protected function registered(Request $request, $user)
{
return redirect('/index');
}*/
}
