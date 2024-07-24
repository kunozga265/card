<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationType extends Model
{
    use HasFactory;

    public function publications()
    {
        return $this->hasMany(Publication::class);
    }

    public function downloads()
    {
        return $this->hasMany(Download::class);
    }


    protected $fillable =[
        "name",
        "slug",
    ];
}
