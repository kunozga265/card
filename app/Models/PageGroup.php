<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageGroup extends Model
{
    use HasFactory;

    public function sections()
    {
        return $this->hasMany(Page::class);
    }
}
