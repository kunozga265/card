<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->hasOne(PublicationType::class,"id","publication_type_id");
    }

    protected $fillable =[
        "title",
        "slug",
        "description",
        "link",
        "path",
        "date",
        "publication_type_id",
        "authors",
    ];
}
