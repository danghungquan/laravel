<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;
    protected $table = 'custumer_zone_product';
    protected $fillable = [
        'custumer_id',
        'product_id'
    ];
    public function join_product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
    public function join_custumer()
    {
        return $this->hasOne(Custumer::class, 'id', 'custumer_id');
    }
}
