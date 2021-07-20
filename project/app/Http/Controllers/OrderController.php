<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\User;
use App\Models\Client;
use App\Models\Order;
use App\Models\Project;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        $users = User::all();
        $clients = Client::all();
        $projects = Project::all();
        return view('order_resources/index', compact('order','users','clients','projects'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $users = User::all();
        $projects = Project::all();
        return view('order_resources/create', compact('clients', 'users', 'projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
        $storeData = $request->validated();
        $order = Order::create($storeData);
        return redirect('/orders')->with('completed', 'Order has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $users = User::all();
        $clients = Client::all();
        $projects = Project::all();
        return view('order_resources/edit', compact('order','users','clients','projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrderRequest $request, $id)
    {
        
        $updateData = $request->validated();
        Order::whereId($id)->update($updateData);
        return redirect('/orders')->with('completed', 'Order has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect('/orders')->with('completed', 'Order has been deleted');
    }
    
}
