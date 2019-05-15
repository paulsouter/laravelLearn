<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
 
    protected $table = 'products';
    public $primaryKey = 'productId';

    public function saleItems(){
        return $this->hasMany('App\SaleItem');
    }
}
