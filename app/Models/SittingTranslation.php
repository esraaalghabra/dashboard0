<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SittingTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['title', 'content', 'address'];
}
