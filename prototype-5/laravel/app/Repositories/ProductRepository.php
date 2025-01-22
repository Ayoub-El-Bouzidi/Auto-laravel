<?php
namespace App\Repositories;

use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function getAllProduct(){
        return Product::all();
    }
    public function createProduct(array $data){
        return Product::create($data);
    }
    public function deleteProduct($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return $product;
    }
}
?>