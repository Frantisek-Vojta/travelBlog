<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function dashboard(): View
    {
        $stats = [
            'posts_count' => Post::count(),
            'published_posts_count' => Post::published()->count(),
            'categories_count' => Category::count(),
            'users_count' => User::count(),
        ];

        $recent_posts = Post::with(['category', 'user'])
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact('stats', 'recent_posts'));
    }

    public function index(): View
    {
        $posts = Post::with(['category', 'user'])
            ->latest()
            ->paginate(10);

        return view('admin.posts.index', compact('posts'));
    }
}
