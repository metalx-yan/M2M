<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
  protected $fillable = ['judul', 'slug', 'halaman', 'tahun'];

  public function bukus()
  {
    return $this->belongsToMany(Tag::class);
  }
}
