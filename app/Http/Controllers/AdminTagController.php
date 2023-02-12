<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        // LISTADO DE TAGS:
        $tags = Tag::all();
        return view('pages.admin.tags.index', compact(['tags']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        dd("hola", $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // Editamos el tag con el id que nos llega:
        $tag = Tag::find($id);
        // Insertamos en la base de datos los valores
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // Actualizar el tag con el id que nos llega:
        $tag = Tag::find($id);
        // Formateamo e insertamos en la base de datos los valores
        $tag->name = $request->input('name'); // Nombre del tag
        $tag->name = trim($tag->name); // Elimina espacios en blanco
        $tag->name = strtolower($tag->name); // Minúsculas
        $tag->name = ucfirst($tag->name); // Primera letra en mayúscula
        $tag->color = $request->input('color');

        $tag->save();
        // Enviar mensaje de confirmación:
        $request->session()->flash('message', 'Tag actualizado correctamente');
        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        // Borramos el tag con el id que nos llega:
        $tag = Tag::find($id);
        $tag->delete();
        // Borrar el tag de la tabla project_tag
        $tag->projects()->detach();
        // Enviar mensaje de confirmación:
        session()->flash('message', 'Tag eliminado correctamente');
        return redirect()->route('tag.index');
    }
}
