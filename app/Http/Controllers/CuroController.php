<?php

namespace App\Http\Controllers;

use App\Models\Curo;
use App\Models\Grado;
use Illuminate\Http\Request;

/**
 * Class CuroController
 * @package App\Http\Controllers
 */
class CuroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curos = Curo::paginate();

        return view('curo.index', compact('curos'))
            ->with('i', (request()->input('page', 1) - 1) * $curos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $curo = new Curo();
        $grado = Grado::all();
        return view('curo.create', compact('curo', 'grado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Curo::create($request->all());

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curo = Curo::find($id);

        return view('curo.show', compact('curo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curo = Curo::find($id);
        $grado = Grado::all();
        return view('curo.edit', compact('curo', 'grado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Curo $curo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Curo::find($id)->update($request->all());

        return back();
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $curo = Curo::find($id)->delete();

        return back();
    }
}
