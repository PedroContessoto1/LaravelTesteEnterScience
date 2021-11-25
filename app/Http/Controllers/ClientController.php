<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients', ['clients' => $clients]);
    }

    public function sents()
    {
        $clients = Client::all();
        return view('sent', ['sent' => $clients]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|alpha_num|min:4',
            'cep' => 'required|min:8|max:9',
            'email' => 'required|email:rfc,dns',
            'street' => 'required|min:4',
            'house_number' => 'required|numeric',
            'complement' => 'required',
            'city' => 'required|min:3',
            'birth_date' => 'nullable|date',
            'phone' => 'nullable|min:11|numeric',
        ]);

        if ($validated){
            $client = new Client;
            $client->name = $request->name;
            $client->birth_date = $request->birth_date;
            $client->sex = $request->sex;
            $client->cep = $request->cep;
            $client->street = $request->street;
            $client->house_number = $request->house_number;
            $client->complement = $request->complement;
            $client->city = $request->city;
            $client->states = $request->states;
            $client->email = $request->email;
            $client->phone = $request->phone;

            $client->save();

            return redirect("/sent");

        }
    }
}
