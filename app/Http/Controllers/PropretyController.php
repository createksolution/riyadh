<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Freelancer;
use App\Models\Image;
use App\Models\Promotion;
use App\Models\Proprety;
use App\Models\State;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PropretyController extends Controller
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
    public function create(){
        $state = State::all();
        $freelance = Freelancer::all();
        $type = Type::all();
        return view("client.propretry.newProprety")->with(["states"=>$state, "freelancer"=>$freelance,"type"=>$type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $user = User::first();
        // $expire =  $user->expire;
        $expire =  15;
        $Date = date("Y-m-d");
        $form_data = array(
            "unique" =>   $request->id,
            "client" =>   $request->client,
            "title" =>  $request->title,
            "photo"   => $request->photo->getClientOriginalName(),
            "status"   => $request->status,
            "type"    => $request->type,
            "price"    => $request->price,
            "area"  =>$request->area,
            "adr"  =>$request->adr,
            "state"   => $request->state,
            "desc"   => $request->desc,
            "sps"  =>json_encode($request->sps),
            "other" =>json_encode($request->other),
            "room" =>$request->room,
            "floor" =>$request->floor,
            "nbrFloor" =>$request->nbrfloor,
            "pay" =>$request->paper,
            "etat" =>$request->etat,
            "payPar" =>$request->paypar,
            "expire" => date("Y-m-d", strtotime($Date. " + ".$expire." days")),
        );
        // dd($form_data);die();
        Proprety::create($form_data);
        $request->photo->move(public_path("gallery"), $request->photo->getClientOriginalName());
        return response()->json(["status"=>true,"redirect_url"=>url("/client/".$request->client."/proprety")]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proprety  $proprety
     * @return \Illuminate\Http\Response
     */
    public function show($proprety){
        $proprety = Proprety::find($proprety);
        $image = Image::where('proprety', $proprety->unique)->get();
        $state = State::all();
        $freelance = Freelancer::all();
        $similar = DB::table('clients')
        ->join('propreties', 'propreties.client', '=', 'clients.id')
        ->where('propreties.state',$proprety->state)
        ->select('propreties.photo as img','propreties.*','propreties.created_at as date','clients.*')
        ->get();
        $client = Client::find($proprety->client);
        return view('client.propretry.showProprety')->with(['client'=>$client,'similair'=>$similar,'image'=>$image,"states"=>$state, "freelancer"=>$freelance,"proprety"=>$proprety]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proprety  $proprety
     * @return \Illuminate\Http\Response
     */
    public function edit(Proprety $proprety)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proprety  $proprety
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$proprety){
        if($request->file()){
            $form_data = array(
                "client" =>   $request->client,
                "title" =>  $request->title,
                "photo"   => $request->photo->getClientOriginalName(),
                "status"   => $request->status,
                "type"    => $request->type,
                "price"    => $request->price,
                "area"  =>$request->area,
                "adr"  =>$request->adr,
                "state"   => $request->state,
                "desc"   => $request->desc,
                "sps"  =>json_encode($request->sps),
                "other" =>json_encode($request->other),
                "room"=>$request->room,
                "floor"=>$request->floor,
                "nbrFloor"=>$request->nbrfloor,
                "pay"=>$request->paper,
                "etat"=>$request->etat,
                "payPar"=>$request->paypar,
            );
            $request->photo->move(public_path("gallery"), $request->photo->getClientOriginalName());
        }else{
            $form_data = array(
                "title" =>  $request->title,
                "status"   => $request->status,
                "type"    => $request->type,
                "price"    => $request->price,
                "area"  =>$request->area,
                "adr"  =>$request->adr,
                "state"   => $request->state,
                "desc"   => $request->desc,
                "sps"  =>json_encode($request->sps),
                "other" =>json_encode($request->other),
                "room"=>$request->room,
                "floor"=>$request->floor,
                "nbrFloor"=>$request->nbrfloor,
                "pay"=>$request->paper,
                "etat"=>$request->etat,
                "payPar"=>$request->paypar,
            );
        }
        Proprety::whereId($proprety)->update($form_data);
        return redirect("/getProprety/".$proprety);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proprety  $proprety
     * @return \Illuminate\Http\Response
     */
    public function destroy($proprety){
        $proprety = Proprety::find($proprety);
        Image::where('proprety',$proprety->unique)->delete();
        Promotion::where('proprety',$proprety->id)->delete();
        $proprety->delete();
    }

    public function getProprety($id){
        $type = Type::all();
        $state = State::all();
        $freelance = Freelancer::all();
        $proprety = Proprety::find($id);
        $image = Image::where("proprety",$proprety->unique)->get();
        return view("client.propretry.editProprty")->with(["type"=>$type, "image"=>$image, "states"=>$state, "freelancer"=>$freelance, "proprety"=>$proprety]);
    }

    public function proprety ($client){
        $state = State::all();
        $freelance = Freelancer::all();
        $proprety = Proprety::where("client",$client)->paginate(15);
        return view("client.propretry.propreties")->with(["states"=>$state, "freelancer"=>$freelance, "proprety"=>$proprety]);
    }
}
