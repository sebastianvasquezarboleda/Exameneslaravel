<?php

namespace App\Http\Controllers;

use App\Models\Procedimiento;
use Illuminate\Http\Request;

/**
 * Class ProcedimientoController
 * @package App\Http\Controllers
 */
class ProcedimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedimientos = Procedimiento::paginate();

        return view('procedimiento.index', compact('procedimientos'))
            ->with('i', (request()->input('page', 1) - 1) * $procedimientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $procedimiento = new Procedimiento();
        return view('procedimiento.create', compact('procedimiento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Procedimiento::$rules);

        $procedimiento = Procedimiento::create($request->all());

        return redirect()->route('procedimiento.index')
            ->with('success', 'Procedimiento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $procedimiento = Procedimiento::find($id);

        return view('procedimiento.show', compact('procedimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $procedimiento = Procedimiento::find($id);

        return view('procedimiento.edit', compact('procedimiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Procedimiento $procedimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procedimiento $procedimiento)
    {
        request()->validate(Procedimiento::$rules);

        $procedimiento->update($request->all());

        return redirect()->route('procedimiento.index')
            ->with('success', 'Procedimiento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $procedimiento = Procedimiento::find($id)->delete();

        return redirect()->route('procedimiento.index')
            ->with('success', 'Procedimiento eliminado');
    }
}
