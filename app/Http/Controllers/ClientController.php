<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Client;
use App\Models\Freelancer;
use App\Models\Proprety;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($client){
        $client = Client::find($client);
        if($client->type == 'freelancer'){
            $type = Freelancer::where('client',$client->id)->first();
        }
        if($client->type == 'agency'){
            $type = Agency::where('client',$client->id)->first();
        }
        $proprety = Proprety::where('client',$client->id)->get();
        $state = State::all();
        $freelance = Freelancer::all();
        return view('client.showClient')->with(['client'=>$client,'proprety'=>$proprety, 'type'=>$type,'states'=>$state, 'freelancer'=>$freelance]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$client){

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }

    public function change(Request $request, $client){
        if($request->photo){
            $request->photo->move(public_path('profile'), $request->photo->getClientOriginalName());
            $photo = $request->photo->getClientOriginalName();
        }else{
            $photo = Client::find($client);
            $photo = $photo->photo;
        }
        $form_data = array(
            'name' =>   $request->name,
            'lname' =>   $request->lname,
            'username'   => $request->username,
            'state'   => $request->state,
            'birth'    => $request->birth,
            'sex'    => $request->sex,
            'adr'  =>$request->adr,
            'photo'  =>$photo,
        );
        Client::whereId($client)->update($form_data);
        return redirect()->back()->with(['success' => 'true']);;
    }

    public function profile(){
        $state = State::all();
        $freelance = Freelancer::all();
        if(Auth::guard('client')->user()->type == 'personnel'){
            return view('client.profile')->with(['states'=>$state, 'freelancer'=>$freelance]);
        }
        if(Auth::guard('client')->user()->type == 'agency'){
            $agency = Agency::where('client',Auth::guard('client')->user()->id)->first();
            return view('client.profile')->with(['states'=>$state, 'freelancer'=>$freelance,'agency'=>$agency]);
        }
        if(Auth::guard('client')->user()->type == 'freelancer'){
            $free = Freelancer::where('client',Auth::guard('client')->user()->id)->first();
            return view('client.profile')->with(['states'=>$state, 'freelancer'=>$freelance,'free'=>$free]);
        }
    }

    public function changePassword(Request $request,$id){
        $client = Client::whereId($id)->first();
        if (Hash::check($request->passwordn, $client->password)) {
            try{
                Client::whereId($id)->update(['password'=>Hash::make($request->password)]);
                return redirect()->back()->with(['success' => 'true']);
            }catch(\Throwable $th){
                return response()->json(['errors' => 'true']);
            }
        }else{
            return redirect()->back()->with(['password' => 'true']);
        }
    }

    public function validePassword(Request $request){
        $client = Client::whereId($request->id)->first();
        if (Hash::check($request->password, $client->password)) {
            return  response()->json(['success' => 'true']);
        }else{
            return response()->json(['password' => 'true']);
        }
    }

    public function password(){
        $state = State::all();
        $freelance = Freelancer::all();
        return view('client.password')->with(['states'=>$state, 'freelancer'=>$freelance]);
    }

    public function phone(){
        $state = State::all();
        $freelance = Freelancer::all();
        return view('client.phone')->with(['states'=>$state, 'freelancer'=>$freelance]);
    }

    public function validerPhone($phone){
        if(request()->ajax()){
            $data =  Client::where('phone',$phone)->first();
            if(!empty($data)){
                return response()->json(['error' => "Ce numéro téléphone est déjà utilisé"]);
            }else{
                return response()->json(['suucess' => '']);
            }
        }
    }

    public function clientLogout() {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }

    public function validerUsername($username){
        if(request()->ajax()){
            $data =  Client::where('username',$username)->first();
            if(!empty($data)){
                return response()->json(['error' => "Ce nom d'utilisateur est déjà utilisé"]);
            }else{
                return response()->json(['suucess' => '']);
            }
        }
    }

}
