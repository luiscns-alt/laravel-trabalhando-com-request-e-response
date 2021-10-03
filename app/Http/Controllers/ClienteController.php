<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // echo $request->path();
        // echo request()->path();
        // dd(request()->url());
        // dd(request()->method());
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * Método filled vericar se o campo foi preenchido
         */
        // $dados = $request->all();

        // echo $dados['cliente']['nome'];
        // dd($request->foto->store('public'));
        // dd(request()->method());
        // dd(request()->header());
        dd($request->all());
    }
}
