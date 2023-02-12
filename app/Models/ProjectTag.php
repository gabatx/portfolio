<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTag extends Model
{
    public $table = "project_tag"; // Indicamos el nombre de la tabla que se va a crear en la base de datos.

    use HasFactory;

    protected $fillable = [
        'id',
        'project_id',
        'tag_id',
    ];

    public static function getTagsProjectById($id)
    {
        // Devuelve todos los tags de un proyecto
        return self::where('project_id', $id)->get();
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
