<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class clientController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view('index',['clients'=>$clients]);
    }

    public function new(Request $request){
        if($request->ajax()){
            $client = Client::create($request->all());
            return response()->json($client);
            //return Response($client);
            //return Redirect::to('/');
        }
    }

    public function getUpdate(Request $request){
        if($request->ajax()){
            $client = Client::find($request->id);
            return response()->json($client);
            //return Response($client);
        }
    }

    public function update(Request $request){
        if($request->ajax()){
            $client = Client::find($request->id);

            $client->name = $request->name;
            $client->address = $request->address;
            $client->phone = $request->phone;
            $client->email = $request->email;
            $client->save();

            //return Response($client);
            return response()->json($client);
        }
    }

    public function delete(Request $request){
        if($request->ajax()){
            // $client = Client::find($request->id);
            // $client->delete();
            //
            // return Response($client);
            $client = Client::find($request->id);
            $client->delete();
            
            return response()->json(['done']);
        }

    }
}
