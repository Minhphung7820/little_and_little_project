<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = "events";
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nameEvent',
        'slug',
        'image',
        'dateBegin',
        'dateEnd',
        'location',
        'price',
        'content',
        'created_at',
        'updated_at'
    ];
}
