<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestRegister as RequestsRequestRegister;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RequestRegister;
use App\Mail\RegisterSuccess;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    function getFormRegister() 
    {
        $title_page = 'Dang ky';
        return view('auth.register', compact('title_page'));
    }
    function postRegister(RequestRegister $request) 
    {
        $data = $request->except('_token');
        $data['password'] = Hash::make($request->password);//ma hoa hash
        $data['created_at'] = Carbon::now();
        $id = User::insertGetId($data);
        Mail::to($request->email)->send(new RegisterSuccess($request->name));


        if($id) {
            //neu ton tai ma thi chuyen trang login
            if(\Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                toastr()->success('Dang nhap thanh cong');
                return redirect()->intended('/');

            }
            return redirect()->route('get.login');
        }
        return redirect()->back();
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
