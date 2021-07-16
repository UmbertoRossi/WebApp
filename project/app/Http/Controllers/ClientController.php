<?php

namespace App\Http\Controllers;

use App\Models\Client;
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
        $client = Client::all();
        return view('client_resources/index', compact('client'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client_resources/create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$storeData = 0;
        //dd($request, $storeData);
        $storeData = $request->validate([
            'ragioneSociale' => 'required|max:255',
            'partitaIva' => 'required|max:255',
            'telefono' => 'required|numeric',
        ]);
        $client = Client::create($storeData);
        return redirect('/clients')->with('completed', 'Client has been saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('client_resources/edit', compact('client'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $updateData = $request->validate([
            'ragioneSociale' => 'required|max:255',
            'partitaIva' => 'required|max:255',
            'telefono' => 'required|numeric',
        ]);
        Client::whereId($id)->update($updateData);
        return redirect('/clients')->with('completed', 'Client has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect('/clients')->with('completed', 'Client has been deleted');
    }
}
