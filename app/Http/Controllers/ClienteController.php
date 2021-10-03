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

        // dd(
        // $request->input('nome', 'nome não definido'),
        // $request->input('idade', 'idade não definida'),
        // $request->input('em')
        // $request->nome,
        // $request->idade,
        // $request->all(),
        // $request->except('_token')
        // $request->only(['nome', 'idade'])

        /**
         * Métodos query, has e filled
         */
        //Query pega os dados passados na url
        //     //$request->query('nome', 'não envio nada')
        // );
        /**
         * Método Has verifica se existir um campo
         */
        //     if ($request->has('nome')) {
        //         dd('existe');
        //     }
        //     dd('não existe');
        // }
        /**
         * Método filled vericar se o campo foi preenchido
         */
        if ($request->filled('nome', 'idade')) {
            dd('campo nome ou idade foi preenchido');
        }
        dd('campo nome ou idade não foi preenchido');
    }
}
