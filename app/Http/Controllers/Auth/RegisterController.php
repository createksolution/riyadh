<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use App\Models\Client;
use App\Models\Freelancer;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function createClient(Request $request){

        if($request->photo){
            $request->photo->move(public_path('profile'), $request->photo->getClientOriginalName());
            $photo = $request->photo->getClientOriginalName();
        }else{
            if($request->sex == 'Homme'){
                $photo = "men.svg";
            }else{
                $photo = "women.svg";
            }
        }
        $form_data = array(
            'name' =>   $request->name,
            'lname' =>   $request->lname,
            'username' =>  $request->username,
            'phone'   => $request->phone,
            'password' => Hash::make($request->password),
            'state'   => $request->state,
            'birth'    => $request->birth,
            'sex'    => $request->sex,
            'adr'  =>$request->adr,
            'type'  =>$request->type,
            'photo'  =>$photo,
        );
        // dd($form_data);die();
        // dd($request);die();
        Client::create($form_data);
        $client = Client::latest('id')->first();
        if($request->type == "agency"){
            Agency::create(['client'=>$client->id, 'agency'=>$request->agency, 'register'=>$request->register, 'agrement'=>$request->agrement]);
        }
        if($request->type == 'freelancer'){
            Freelancer::create(['client'=>$client->id,'activity'=>$request->activity]);
        }
        if (Auth::guard('client')->attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/');
        }
    }
}
