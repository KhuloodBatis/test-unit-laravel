<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $products = [];

    public function add(Product $product){
        $this->products[] = $product;//to push all products
    }

    public function products(){
        return $this->products;
    }

    public function total(){
        $total = array_reduce($this->products , function($carry,$product){
            return $carry + $product->cost();
      });
         return  $total;
    }
}
