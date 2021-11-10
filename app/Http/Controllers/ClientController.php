<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::All();

        return view('client.index', ["clients" => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.createclient');
    }

    public function createclients(Request $request)
    {
        $clientsCount = $request->clientsCount;

        if(!$clientsCount) {
            $clientsCount = 1;
        }

        if($request->clientAdd == "plus") {
            $clientsCount++;
        } else if($request->clientAdd == "minus") {
            $clientsCount--;
        }

        return view('client.createclients', ['clientsCount' => $clientsCount]);
    }

    public function createjavascript(Request $request)
    {
        $clientsCount = $request->clientsCount;

        if(!$clientsCount) {
            $clientsCount = 1;
        }

        return view('client.createjavascript', ['clientsCount' => $clientsCount]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client;

        $client->name = $request->client_name;
        $client->surname = $request->client_surname;
        $client->description = $request->client_description;

        $client->save();
        return redirect()->route("client.index");

    }

    public function storeclients(Request $request)
    {
        $clientsCount = count($request->client_name);

        // foreach($request->productTitle as $productTitle) {

        // }

        for($i = 0; $i<$clientsCount; $i++) {

        $client = new Client;

        $client->name = $request->client_name[$i];
        $client->surname = $request->client_surname[$i];
        $client->description = $request->client_description[$i];

        $client->save();

        }

        return redirect()->route("client.index");


    }

    public function storejavascript(Request $request)
    {

        $clientsCount = count($request->client_name);

        for($i = 0; $i<$clientsCount; $i++) {

            $client = new Client;

            $client->name = $request->client_name[$i];
            $client->surname = $request->client_surname[$i];
            $client->description = $request->client_description[$i];

            $client->save();


            }

            return redirect()->route("client.index");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
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
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
