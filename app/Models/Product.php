<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title','price','description','category_id','image'];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
    public function specification()
    {
        return $this->hasOne(ProductSpecification::class, 'id','category_id');
    }
}
