<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;


class Category extends Model implements TranslatableContract
{
    use Translatable , HasEagerLimit , HasFactory , SoftDeletes;

    public $translatedAttributes = ['title', 'content'];
    protected $fillable = [ 'id', 'image', 'parent', 'created_at', 'updated_at', 'deleted_at'];

}
