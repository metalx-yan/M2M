<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['nama','slug'];

    public function bukus()
    {
        return $this->belongsToMany(Buku::class);
    }
}
