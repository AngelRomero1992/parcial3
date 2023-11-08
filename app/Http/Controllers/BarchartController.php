<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class BarchartController extends Controller
{
    public function barchart(Request $request)
    {
        $categoryIds = $request->input('selected_categories', []);

        $categoryCounts = [];

        foreach ($categoryIds as $categoryId) {
            $category = Category::find($categoryId);
            if ($category) {
                $categoryCounts[$category->name] = $category->products()->count();
            }
        }

        return view('products.barchart', compact('categoryCounts'));
    }
}
