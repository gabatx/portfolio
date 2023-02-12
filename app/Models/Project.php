<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Campos que se pueden rellenar de forma masiva.
    protected $fillable = [
        'id',
        'title',
        'subtitle',
        'description',
        'cover_image',
        'link_repo',
        'date_start',
        'date_end',
        'user_id',
    ];

    public static function getProjectsById($id)
    {
        // Devuelve todos los proyectos de un usuario y que estén activos
        $projects = Project::where('user_id', $id)->where('is_active', 1)->get();
        foreach ($projects as $project) {
            // Recibimos los tags y las imágenes de cada proyecto
            $images = Image::getImagesProjectById($project->id);
            $tags   = ProjectTag::getTagsProjectById($project->id);
            // Convertimos el objeto $tags y las imágenes en un array de strings
            $images = $images->map(fn($image) => $image->name);
            $tags   = $tags->map(fn($tag) => $tag->tag);
            // Insertamos el array de strings $tags en el array $projects
            $project->tags   = $tags;
            $project->images = $images;
        }
        return $projects;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function images()
    {
        return $this->belongsToMany(Image::class);
    }
}
