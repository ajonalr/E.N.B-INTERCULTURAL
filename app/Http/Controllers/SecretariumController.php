<?php

namespace App\Http\Controllers;

use App\Models\Secretarium;
use Illuminate\Http\Request;

/**
 * Class SecretariumController
 * @package App\Http\Controllers
 */
class SecretariumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secretaria = Secretarium::paginate();

        return view('secretarium.index', compact('secretaria'))
            ->with('i', (request()->input('page', 1) - 1) * $secretaria->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $secretarium = new Secretarium();
        return view('secretarium.create', compact('secretarium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     Secretarium::create($request->all());

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
        $secretarium = Secretarium::find($id);

        return view('secretarium.show', compact('secretarium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $secretarium = Secretarium::find($id);

        return view('secretarium.edit', compact('secretarium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Secretarium $secretarium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       Secretarium::find($id)->update($request->all());

        return back();
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $secretarium = Secretarium::find($id)->delete();

        return back();
    }
}
