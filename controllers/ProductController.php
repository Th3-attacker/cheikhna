<?php

class ProductController
{
    public function showAllProducts()
    {
        $products = Product::getAll();
        return $products;
    }
}
