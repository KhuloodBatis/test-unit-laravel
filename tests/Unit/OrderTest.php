<?php

namespace Tests\Unit;

use App\Models\Order;
use App\Models\Product;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    function test_an_order_consists_of_products()
    {
        $order = $this->createOrdeerWithProducts();

        $this->assertCount(2, $order->products());
    }

    function  test_an_order_can_determine_the_total_cost_of_all_its_products(){
         $order = $this->createOrdeerWithProducts();

         $this->assertEquals(66, $order->total());
    }

    protected function createOrdeerWithProducts(){

        $order = new Order();

        $product = new Product('Fallout 4',59);
        $product2 = new Product('Pillowcase',7);

        $order->add($product);
        $order->add($product2);

        return $order;
    }
}
