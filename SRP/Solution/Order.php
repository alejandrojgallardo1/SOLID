<?php
class Order {
    private $products;

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function calculateTotalPrice () {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;

    }
}