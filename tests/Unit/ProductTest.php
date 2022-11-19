<?php

namespace Tests\Unit;

use App\Models\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    protected $product;

    public function __construct()
    {
        $this->product = new Product('Fallout 4',59);
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function a_product_has_a_name()
    {
        $this->assertEquals('Fallout 4', $this->product->name());
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function a_product_has_a_cost()
    {
        $this->assertEquals('59',  $this->product->cost());
    }
}
