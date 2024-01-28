<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function linearSearch(ProductRequest $request): JsonResponse
    {
        $data = $request->validated();
        $price = $data['price'];
        $response = ['algorithm' => 'linear'];
        return response()->json(
            array_merge($response, Product::getProductByPriceLinear($price))
        );
    }
}
