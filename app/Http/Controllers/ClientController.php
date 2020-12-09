<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

use App\Http\Requests\Client\AddNew as ClientAddNew;
use App\Http\Requests\Client\EditRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * Show All Client 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::pagination(10);
        return   response()->json($client , 200);
    }

    

    /**
     * Store a newly created resource in storage.
     * 
     * Create New Clinet add Save To Database
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientAddNew $request)
    {
         Client::create($request->all());
        return response()->json('The client successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * 
     * Show the form for editing   The Clint
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id , EditRequest $client)
    {
        $Client = Client::find($id);
        return response()->json($Client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $Client = Client::find($client->id);
        $Client->update($request->all());
 
        return response()->json('The client successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
 
        return response()->json('The Client successfully deleted');
    }
}
