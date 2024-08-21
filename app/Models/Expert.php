<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    use HasFactory;

    public function getSocialLink($name)
    {
        $socials = json_decode($this->socials);
        foreach ($socials as $social) {
            if ($social->name == $name) {
                return $social->link;
            }
        }
        return "#";
    }

    protected $fillable = [
        "photo",
        "name",
        "title",
        "slug",
        "socials",
    ];
}
