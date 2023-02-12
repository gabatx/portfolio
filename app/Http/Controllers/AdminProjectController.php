<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Project;
use App\Models\ProjectTag;
use App\Models\Tag;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;

class AdminProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        // LISTADO DE PROYECTOS: (Recibimos el id del usuario logueado)
        $projects = Project::getProjectsById(auth()->id());
        return view('pages.admin.projects.list.index', compact(['projects']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        // CONFIGURACIÓN DE UN NUEVO PROYECTO:
        // Obtenemos todos los tags de la tabla tags
        $tags = Tag::all();
        return view('pages.admin.projects.config.index', compact(['tags']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        // GUARDAMOS EL PROYECTO:
        // Creamos un nuevo proyecto
        $dataProjects = request()->except('_token');
        //dd($dataProjects);
        // Creamos un nuevo proyecto
        $project = new Project();
        // project->user_id = auth()->user()->id;
        $project->user_id = 1;
        $project->title = $dataProjects['title'];
        $project->subtitle = $dataProjects['subtitle'];
        $project->description = $dataProjects['description'];
        // Guardamos la imagen en la carpeta /storage/app/public/uploads
        $project->cover_image = $request->file('cover_image')->store('uploads', 'public');
        $project->url_repo = $dataProjects['url_repo'];
        //Formateamos las fechas string a date
        $project->start_date = Date::parse($dataProjects['start_date']);
        $project->end_date = Date::parse($dataProjects['end_date']);
        $project->is_active = isset($dataProjects['is_active']) ? 1 : 0;

        // Guardamos el proyecto en la base de datos
        $project->save();

        // Creamos los tags del proyecto
        $tags = $dataProjects['tags'];
        //dd($tags);
        $tags = explode(',', $tags[0]);
        foreach ($tags as $tag) {
            $tag = trim($tag); // Elimina espacios en blanco
            $tag = strtolower($tag); // Minúsculas
            $tag = ucfirst($tag); // Primera letra en mayúscula
            $tag = Tag::firstOrCreate(['name' => $tag]); // Si el tag ya existe, lo devuelve. Si no, lo crea.
            $project->tags()->attach($tag); // Relacionamos el proyecto con el tag
        }
        // Creamos las imágenes del proyecto
        $images = $dataProjects['images'];

        foreach ($images as $image) {
            $imagetoInsert = new Image();
            $imagetoInsert->project_id = $project->id;
            // Guardamos la imagen en la carpeta /storage/app/public/uploads
            $imagetoInsert->name = $image->store('uploads', 'public');
            $imagetoInsert->save();
        }

        return redirect()->route('list-projects.index', session('id'))->with('success', 'Proyecto creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        // CONFIGURACIÓN DE UN PROYECTO EXISTENTE:
        $project = Project::findOrFail($id); // Seleccionamos el proyecto
        // Traemos los tags del proyecto
        $tags = ProjectTag::getTagsProjectById($project->id)->map(fn($tag) => $tag->tag->name);
        // Traemos las imágenes del proyecto
        $images = Image::getImagesProjectById($project->id)->map(fn($image) => $image->name);

        $project->tags = $tags;
        $project->images = $images;

        return view('pages.admin.projects.config.index', compact(['project', 'tags']));
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
        // ACTUALIZAMOS EL PROYECTO:
        $dataProject = request()->except(['_token', '_method']);
        //dd($dataProject);
        // Creamos un nuevo proyecto
        $project = Project::findOrFail($id);
        // project->user_id = auth()->user()->id;
        $project->user_id = 1;
        $project->title = $dataProject['title'];
        $project->subtitle = $dataProject['subtitle'];
        $project->description = $dataProject['description'];

        // Borramos image_cover anterior si existe
        if ($request->hasFile('cover_image')) {
            Storage::delete('public/' . $project->cover_image);
        }
        // Guardamos la imagen en la carpeta /storage/app/public/uploads
        if ($request->hasFile('cover_image')) {
            $project->cover_image = $request->file('cover_image')->store('uploads', 'public');
        }

        if ($request->hasFile('images')) {
            $images = $dataProject['images'];
            foreach ($images as $image) {
                $imageToInsert = new Image();
                $imageToInsert->project_id = $project->id;
                // Guardamos la imagen en la carpeta /storage/app/public/uploads
                $imageToInsert->name = $image->store('uploads', 'public');
                $imageToInsert->save();
            }
        }

        $project->url_repo = $dataProject['url_repo'];
        //Formateamos las fechas string a date
        $project->start_date = Date::parse($dataProject['start_date']);
        $project->end_date = Date::parse($dataProject['end_date']);
        $project->is_active = isset($dataProject['is_active']) ? 1 : 0;

        // Guardamos el proyecto en la base de datos
        $project->save();

        // Creamos los tags del proyecto
        $tags = $dataProject['tags'];

        // Borramos los tags anteriores
        $project->tags()->detach();
        //dd($tags);
        $tags = explode(',', $tags[0]);
        foreach ($tags as $tag) {
            $tag = trim($tag); // Elimina espacios en blanco
            $tag = strtolower($tag); // Minúsculas
            $tag = ucfirst($tag); // Primera letra en mayúscula

            // Si el tag ya existe, lo devuelve. Si no, lo crea.
            $tag = Tag::firstOrCreate(['name' => $tag]); // Si el tag ya existe, lo devuelve. Si no, lo crea.
            $project->tags()->attach($tag); // Relacionamos el proyecto con el tag
        }

        return redirect()->route('list-projects.index', session('id'))->with('success', 'Proyecto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        // BORRAMOS EL PROYECTO:

        $project = Project::findOrFail($id); // Seleccionamos el proyecto
        $project->tags()->detach(); // Desvinculamos los tags del proyecto

        // Seleccionamos las imágenes del proyecto
        $imagesProject = Image::where('project_id', $id)->get(); // Seleccionamos las imágenes del proyecto

        // Borramos las imágenes del proyecto de la carpeta /storage/app/public/uploads
        foreach ($imagesProject as $image) {
            Storage::delete('public/' . $image->name);
        }
        // Borramos las imágenes del proyecto de la base de datos
        foreach ($imagesProject as $image) {
            $image->delete();
        }
        // Borramos la imagen de portada del proyecto de la carpeta /storage/app/public/uploads
        Storage::delete('public/' . $project->cover_image);

        // Borramos el proyecto
        $project->delete();

        return redirect()->route('list-projects.index', session('id'))->with('success', 'Proyecto eliminado correctamente');
    }
}
