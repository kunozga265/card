<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    public function group()
    {
        return $this->belongsTo(PageGroup::class,"page_group_id","id");
    }

    protected $fillable=[
        "name",
        "page_group_id",
        "image",
        "title",
        "subtitle",
        "description",
    ];
}
