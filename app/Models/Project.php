<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "duration",
        "date",
        "active",
        "funders",
        "countries",
        "implementers",
        "collaborators",
        "objectives",
        "investigators",
    ];
}