<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "order";
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'type',
        'qty',
        'dateUse',
        'name',
        'email',
        'phone',
        'status_pay',
        'numberCard',
        'nameCard',
        'DateTimeout',
        'dateEndCard',
        'codeCard',
        'total',
        'created_at',
        'updated_at'
    ];
    public function ticket()
    {
        return $this->hasMany(Ticket::class,"idOrder","id");
    }
}
