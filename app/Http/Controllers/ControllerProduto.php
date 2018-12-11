<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;
class ControllerProduto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexView()
    {
        $produtos = new Produto();
        $dados = $produtos::all();
        return view ('pagina.produto.produto', compact('dados'));
    }
 public function index()
    {
        $produtos = new Produto();
        $dados = $produtos::all();
        return $dados->toJson();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produtos = new Produto();
        $dados = $produtos::all();
        $categoria = new Categoria();
        $categorias = $categoria::all();
        return view('pagina.produto.produto_new', compact('categorias','dados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $produto = new Produto();

        $produto->nome = $request->input('nome');
        $produto->estoque = $request->input('estoque');
        $produto->categoria_id = $request->input('categoria_id');
        $produto->preco = $request->input('preco');
        $produto->save();
        return json_encode($produto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prod = Produto::find($id);
        if(isset($prod)){
            return json_encode($prod);
        }
        return response("Produto não encontrado", 404);
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
        $prod = Produto::find($id);
        if(isset($prod)){
                $prod->nome = $request->input('nome');
                $prod->estoque = $request->input('estoque');
                $prod->categoria_id = $request->input('categoria_id');
                $prod->preco = $request->input('preco');
                $prod->save();
                return json_encode($prod);
            return response('OK', 200);
        }
        return response("Produto não encontrado", 404);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = Produto::find($id);
        if(isset($prod)){
            $prod->delete();
            return response('OK', 200);
        }
        return response("Produto não encontrado", 404);
    }
}
