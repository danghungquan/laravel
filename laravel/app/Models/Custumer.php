<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custumer extends Model
{
    use HasFactory;
    protected $table = 'custumer';
    protected $fillable = ['address', 'job', 'full_name', 'first_name', 'last_name', 'sex', 'year_of_birth', 'phone', 'email', 'image', 'contact', 'created_at', 'updated_at', 'user_id'];
    public function join_product()
    {
        return $this->hasMany(Product::class, 'custumer_id', 'id');
    }
}
