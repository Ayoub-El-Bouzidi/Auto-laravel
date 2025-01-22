<?php

namespace App\Repositories;

interface ProductRepositoryInterface{
    public function getAllProduct();
    public function createProduct(array $data);
    public function deleteProduct($id);
} 



?>