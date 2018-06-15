<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller {
    
    public function index() {
        $clients = Client::all();
        return view('pages.home', ['clients' => $clients]);
    }

    public function new(Request $request) {
        if ($request->ajax()) {
            $client = Client::create($request->all());
            return response()->json($client);
        }
    }

    public function getUpdate(Request $request) {
        if ($request->ajax()) {
            $client = Client::find($request->id);
            return response()->json($client);
        }
    }

    public function update(Request $request) {
        if ($request->ajax()) {
            $client = Client::find($request->id);

            $client->name = $request->name;
            $client->address = $request->address;
            $client->phone = $request->phone;
            $client->email = $request->email;
            $client->save();

            return response()->json($client);
        }
    }

    public function delete(Request $request) {
        if ($request->ajax()) {
            $client = Client::find($request->id);
            $client->delete();

            return response()->json(['done']);
        }
    }
}
