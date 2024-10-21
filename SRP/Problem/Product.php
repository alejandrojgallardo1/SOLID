<?php
class Product {
    private $id;
    private $name;
    private $price;
    private $stock;

    public function calculateTotalPrice(array $products) {
        $total = 0;
        foreach ($products as $productItem) {
            $total += $productItem->getPrice();
        }
        return $total;
    }

    public function saveSale(SellRepository $sellRepository) {
        $sellRepository->saveSale($this);
    }
}
