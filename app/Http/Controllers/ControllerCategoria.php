<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class ControllerCategoria extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categorias = new Categoria();
        $dados = $categorias::all();
        return view('pagina.categoria.categoria', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = new Categoria();
        $dados = $categorias::all();
        return view('pagina.categoria.categoria_new', compact('dados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Categoria();
        $cat->nome = $request->input('nomeCategoria');
        $cat->save();
        return redirect('categorias/nova');
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
    public function edit($id)
    {
        $dados = Categoria::find($id);
        if(isset($dados)){
            return view('pagina.categoria.categoria_edit', compact('dados'));
        }


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
        $dados = Categoria::find($id);
        if(isset($dados)){
            $dados->nome = $request->input('nomeCategoria');
            $dados->save();
            return redirect('categorias');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Categoria::find($id);
        if(isset($cat)){
            $cat->delete();
            return redirect('categorias');
        }

        return($dado->nome);
    }

    public function indexJson()
    {

        $categorias = new Categoria();
        $dados = $categorias::all();
        return json_encode($dados);
    }
}
