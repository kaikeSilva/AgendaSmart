<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;
use Intervention\Image\Facades\Image;
use Storage;
use Session;
use Exception;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = Contato::orderBy('nome','ASC')->get();
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

        //tratamento para salvar imagem padrão caso usuario não escolha uma
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

        Session::flash('success', 'Contato cadastrado com sucesso!');
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
        $contato = Contato::find($id);
        //retornar página de alteração de cadastro
        
        return view('contato.alterar',compact('contato'));
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

        //validação
        $data = request()->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'foto' => ''
        ]);

        //tratamento para verificar se usuário escolheu uma nova imagem
        if( request('foto') ) {
            $caminho = request('foto')->store('storage','public');
            $imagem = Image::make(public_path("storage/{$caminho}"))->fit(1100,1100);
            $imagem->save();

            $arrayImagem = ['foto' => $caminho];
        } 

        //se houver uma nova imagem o metodo array_merge metodo substitui sobreescrevendo o valor do 
        //campo foto em $data
        Contato::where('id',$id)->update(array_merge(
            $data,
            $arrayImagem ?? []
        ));
        Session::flash('success', 'Contato atualizado com sucesso com sucesso!');
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contato::destroy($id);
        Session::flash('success', 'Contato deletado com sucesso!');
        return redirect('/');
    }
}
