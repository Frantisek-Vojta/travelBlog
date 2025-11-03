<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function show(Category $category): View
    {
        $posts = $category->posts()
            ->published()
            ->with(['user', 'category'])
            ->latest('published_at')
            ->paginate(6);

        return view('categories.show', compact('category', 'posts'));
    }
}
