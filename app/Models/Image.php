<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'project_id',
    ];

    public static function getImagesProjectById($id)
    {
        return self::where('project_id', $id)->get();
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
