<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'id_product';
    protected $fillable = [
        'name',
        'price',
        'observations',
        'id_category',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id_category');
    }

    public function stores()
    {
        return $this->belongsToMany(Store::class, 'product_store', 'id_product', 'id_store');
    }
}
