<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class ProductController extends Controller
{

    public function getProductsByCategory($slug, Request $request)
    {
        $category = Category::where('slug', $slug)->first();

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $products = $category->products()
            ->with(['reviews']) // Eager load reviews for ratings
            ->when($request->sort, function ($query, $sort) {
                switch ($sort) {
                    case 'best_sell':
                        $query->withCount('reviews')->orderBy('reviews_count', 'desc');
                        break;

                    case 'top_rated':
                        $query->withAvg('reviews', 'rating')->orderBy('reviews_avg_rating', 'desc');
                        break;

                    case 'price_high_to_low':
                        $query->orderBy('price', 'desc');
                        break;

                    case 'price_low_to_high':
                        $query->orderBy('price', 'asc');
                        break;
                }
            })
            ->paginate(10);

        return response()->json($products);
    }

    
    
}
