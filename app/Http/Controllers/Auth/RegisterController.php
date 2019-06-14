<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'perguruan_tinggi' => ['required', 'string', 'max:225'],
            'nidn' => ['required', 'string', 'unique:users'],
            'foto' => ['required', 'string']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */


    protected function newCreate(Request $request){
        $user = new User();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'perguruan_tinggi' => 'required',
            'nidn' => 'required',
        ]);

        if($request->foto != ""){
            $tujuan = "../public/foto_profil";
            $file = $request->file('foto');
            $nama_file = time()."_".$file->getClientOriginalName();
            $file->move($tujuan,$nama_file);
            $user->foto = "foto_profil/".$nama_file;
        }else{
            $user->foto = "../public/foto_profil/foto_default.jpg";
        }


        $user->name = $request->name;
        $user->email = $request->email;
        $user->perguruan_tinggi = $request->perguruan_tinggi;
        $user->nidn = $request->nidn;
        $user->password = Hash::make($request->password);

        $user->Save();

        return redirect('/home');
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'perguruan_tinggi' => $data['perguruan_tinggi'],
            'nidn' => $data['perguruan_tinggi'],
            'foto' => $foto
        ]);
    }
}
