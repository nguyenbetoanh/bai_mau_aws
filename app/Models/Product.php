<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog;
class Product extends Model
{
    use HasFactory;
    protected $table='product';
    protected $primaryKey ='productId';
    public $timestamps =false;
    public function catalogs(){
        return $this->belongsToMany(Catalog::class,'catalog_Id','catalogId');
    }
}
