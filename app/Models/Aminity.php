<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aminity extends Model
{
    use HasFactory;

    protected $table = "aminities";

    public function project(){
        return $this->belongsTo(Project::class, 'project_id');
    }
}