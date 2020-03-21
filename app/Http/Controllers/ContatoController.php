<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;
use Intervention\Image\Facades\Image;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = Contato::all();
        //retornar página principal
        return view('contato.index',compact('contatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //tratamento para salvar imagem
        //no campo foto que vem em storage, mesmo tendo nomeado como foto
        //somente funciona e lê alguma coisa se uso image
        if( request('foto') ) {
            $caminho = request('foto')->store('storage','public');
            $imagem = Image::make(public_path("storage/{$caminho}"))->fit(1100,1100);
            $imagem->save();
        } else {
            $caminho = "storage/qg4NB1DrmHlMIHD7drlESRjxd5EK34LARmYb63ga.png";
        }

        


        
        //guardar o novo contato no banco
        Contato::create([
            'nome' => request('nome'),
            'telefone' => request('telefone'),
            'foto' => $caminho
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //retornar página de alteração de cadastro
        return view('contato.alterar');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
