<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'url', 'description'];
    //cuando insertamos, solo toma en cuenta estos campos

    protected $guarded = ['id', 'approved', 'created_at', 'updated_at'];
    //estos no van

    public function getRouteKeyName()
    {
        return 'url';
    }
}
