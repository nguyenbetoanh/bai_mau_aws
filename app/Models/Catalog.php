<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Catalog extends Model
{
    use HasFactory;
    protected $table='catalog';
    protected $primaryKey ='catalogId';
    public $timestamps =false;

    public function products(){
        return $this->hasMany(Product::class,'catalog_Id','catalogId');
    }
    public function product(){
        return $this->hasOne(Product::class,'catalog_Id','catalogId')->latestOfMany();
    }
}
