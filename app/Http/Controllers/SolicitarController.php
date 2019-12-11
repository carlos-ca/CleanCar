<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Solicitar;
use Illuminate\Http\Request;

class SolicitarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $solicitar = Solicitar::where('servicio', 'LIKE', "%$keyword%")
                ->orWhere('f_servicio', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $solicitar = Solicitar::latest()->paginate($perPage);
        }

        return view('solicitar.index', compact('solicitar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('solicitar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'servicio' => 'required|min:5|max:50',
            'f_servicio' => 'required|min:5',
            'precio' =>'required|min:3',
            'marca' =>'required|min:3',
            'matricula' =>'required|min:3',
            'direccion' =>'required|min:3',
            'colonia' =>'required|min:3'


        ]);
        $requestData = $request->all();
        
        Solicitar::create($requestData);

        return redirect('solicitar')->with('flash_message', 'solicitar added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $solicitar = Solicitar::findOrFail($id);

        return view('solicitar.show', compact('solicitar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $solicitar = Solicitar::findOrFail($id);

        return view('solicitar.edit', compact('solicitar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'servicio' => 'required|min:5|max:20',
            'f_servicio' => 'required|min:1',
            'precio' =>'required|min:3',
            'marca' =>'required|min:3',
            'matricula' =>'required|min:3',
            'direccion' =>'required|min:3',
            'colonia' =>'required|min:3'
        ]);
        $requestData = $request->all();
        
        $solicitar = Solicitar::findOrFail($id);
        $solicitar->update($requestData);

        return redirect('solicitar')->with('flash_message', 'Solicitar updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        S_solicitado::destroy($id);

        return redirect('solicitar')->with('flash_message', 'S_solicitado deleted!');
    }
}