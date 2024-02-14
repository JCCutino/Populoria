<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'color'];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
