<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function getProductByPriceLinear(float $price): array
    {
        $count = 0;
        $prices = self::query()->pluck('price')->toArray();
        for ($i = 0; $i < count($prices); $i++) {
            $count++;
            if ($prices[$i] === $price) {
                return [
                    'count' => $count,
                    'product' => self::query()->where('price', $price)->first()
                ];
            }
        }
        return ['count' => $count, 'product' => null];
    }
}
