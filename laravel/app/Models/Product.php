<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'id',
        'name',
        'image',
        'description',
        'status',
        'category_id',
        'custumer_id',
        'created_at',
        'method_sell',
        'from_day_1',
        'from_day_2',
        'from_time_1',
        'from_time_2',
        'day_1',
        'day_2',
        'time_1',
        'time_2',
        'updated_at',
        'quantity'
    ];
    public function join_category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function join_custumer()
    {
        return $this->hasOne(Custumer::class, 'id', 'custumer_id');
    }
    public function scopeSearch($data)
    {
        if ($id = request()->id) {
            $data = $data->where('id', '=', $id);
        }
        return $data;
    }
}
