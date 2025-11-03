@extends('layouts.app')

@section('title', 'Cestovatelský Blog')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-8">

        <div class="mb-12 text-center">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">TravelBlog</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Objevte krásu přírody z domova.

            </p>
        </div>


        <div class="bg-white rounded-xl shadow-lg p-6 mb-8 max-w-2xl mx-auto">
            <form action="{{ route('home') }}" method="GET" class="flex gap-4">
                <input type="text" name="search" value="{{ request('search') }}"
                       placeholder="Hledat články..."
                       class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 text-lg">
                <button type="submit" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 font-semibold transition-colors">
                    Hledat
                </button>
            </form>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($posts as $post)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">

                    <div class="w-full h-48 bg-gray-200 overflow-hidden">
                        <img src="{{ $post->featured_image }}" alt="{{ $post->title }}"
                             class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>

                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">
                            {{ $post->category->name }}
                        </span>
                            <span class="text-gray-500 text-sm">
                            {{ $post->published_at->format('d.m.Y') }}
                        </span>
                        </div>

                        <h2 class="text-xl font-bold text-gray-900 mb-3 leading-tight">
                            <a href="{{ route('posts.show', $post) }}" class="hover:text-green-600 transition-colors">
                                {{ $post->title }}
                            </a>
                        </h2>

                        <p class="text-gray-600 mb-4 leading-relaxed">
                            {{ $post->excerpt }}
                        </p>

                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <span class="text-sm text-gray-500">
                            Autor: {{ $post->user->name }}
                        </span>
                            <a href="{{ route('posts.show', $post) }}"
                               class="text-green-600 hover:text-green-800 font-semibold text-lg transition-colors">
                                Číst více
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-16 bg-white rounded-xl shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-600 mb-2">Žádné články</h3>
                    <p class="text-gray-500 text-lg">Zatím zde nejsou žádné publikované články.</p>
                </div>
            @endforelse
        </div>


        @if($posts->hasPages())
            <div class="mt-12 flex justify-center">
                <div class="bg-white rounded-lg shadow-md p-4">
                    {{ $posts->links() }}
                </div>
            </div>
        @endif
    </div>
@endsection
