<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('name', 'asc')->paginate(20);

        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client();

        return view('admin.clients.view', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Client $client)
    {
        $this->validate($request,[
            'link' => 'url',
            'phone' => 'regex:/(79)[0-9]{9}/'
        ]);

        if ( Client::create($request->except('_token')) ) {
            return redirect('admin/clients')->with('success', 'Клиент успешно создан');
        } else {
            return redirect('admin/clients')->with('error', 'Произошла ошибка при добавлении клиента. Пожалуйста, попробуйте позже');
        }

        return redirect('admin/clients')->with('success', 'Клиент успешно добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('admin.clients.view', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $this->validate($request,[
            'link' => 'url',
            'phone' => 'regex:/(79)[0-9]{9}/'
        ]);


        if ( $client->update($request->except('_token')) ) {
            return redirect('admin/clients')->with('success', 'Клиент успешно обновлен');
        } else {
            return redirect('admin/clients')->with('error', 'Произошла ошибка при обновлении клиента. Пожалуйста, попробуйте позже');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        if ($client->delete()) {
            return redirect('admin/clients')->with('success', 'Клиент успешно удален');
        } else {
            return redirect('admin/clients')->with('error', 'Произошла ошибка при удалении клиента. Пожалуйста, попробуйте позже');
        }
    }

}
