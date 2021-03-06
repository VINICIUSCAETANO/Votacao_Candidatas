<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voto;
use App\Candidata;
class VotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $linhas = Voto::orderBy('idVoter')->get();
        
        return view('area_restrita', ['linhas' => $linhas]);
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
        $validaDados = $request->validate([
            'nomeVoter' => 'required|min:10',
            'emailVoter' => 'required|unique:votos,emailVoter'
        ]);
        
        $dados = $request->all();

        $reg = Voto::create($dados);

        if ($reg) {
            return redirect()->route('candidatas.index')
                   ->with('status', 'Ok! Votado com Sucesso');
        } else {
            return redirect()->route('candidatas.index')
                   ->with('status', 'Voto Não Inserido...');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('area_restrita', ['reg' => $reg,]);
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
