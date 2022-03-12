<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Sale extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $timestamps = false;
    // protected $primaryKey = 'p_id';
    public function orders()
    {
        return $this->hasMany(Order::class, 'id');
    }
}
