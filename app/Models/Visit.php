<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable=[
        "page_area_id",
        "visitor_id",
        "ip",
        "city",
        "region",
        "country",
        "loc",
        "org",
        "postal",
        "timezone",
        "platform",
        "path",
        "method",
        "comments",
    ];
}
