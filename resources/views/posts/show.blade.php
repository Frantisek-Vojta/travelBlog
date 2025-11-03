@extends('layouts.app')

@section('title', $post->title . ' - TravelBlog')

@section('content')
    <div class="max-w-4xl mx-auto px-4 py-8">

        <article class="bg-white rounded-lg shadow-md overflow-hidden">

            <div class="w-full h-64 bg-gray-200 overflow-hidden">
                <img src="{{ $post->featured_image }}" alt="{{ $post->title }}"
                     class="w-full h-full object-cover">
            </div>

            <div class="p-8">

                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 gap-2">
                    <div class="flex items-center space-x-4">
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">
                        {{ $post->category->name }}
                    </span>
                        <span class="text-gray-500 text-sm">
                        {{ $post->published_at->format('d.m.Y H:i') }}
                    </span>
                    </div>
                    <span class="text-gray-500 text-sm">
                    Autor: {{ $post->user->name }}
                </span>
                </div>


                <h1 class="text-3xl font-bold text-gray-900 mb-4 leading-tight">{{ $post->title }}</h1>


                <p class="text-xl text-gray-600 mb-6 leading-relaxed">{{ $post->excerpt }}</p>

                @if($post->tags->count() > 0)
                    <div class="mb-8 flex flex-wrap gap-2">
                        @foreach($post->tags as $tag)
                            <span class="inline-block bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm">
                            {{ $tag->name }}
                        </span>
                        @endforeach
                    </div>
                @endif


                <div class="text-gray-700 leading-relaxed space-y-4 text-lg">
                    @foreach(explode("\n", $post->content) as $paragraph)
                        @if(trim($paragraph))
                            <p class="mb-4">{{ $paragraph }}</p>
                        @endif
                    @endforeach
                </div>
            </div>
        </article>


        <section class="mt-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Komentáře ({{ $post->comments->count() }})</h2>


            @auth
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h3 class="text-lg font-semibold mb-4">Napište komentář</h3>
                    <form action="{{ route('comments.store', $post) }}" method="POST">
                        @csrf
                        <textarea name="content" rows="4"
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 text-lg"
                                  placeholder="Co si myslíte o tomto článku?..."></textarea>
                        @error('content')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                        <button type="submit"
                                class="mt-4 bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 font-semibold transition-colors">
                            Odeslat komentář
                        </button>
                    </form>
                </div>
            @else
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6 mb-6 text-center">
                    <p class="text-yellow-800 text-lg">
                        Pro přidání komentáře se musíte
                        <a href="{{ route('login') }}" class="text-green-600 hover:text-green-800 font-semibold underline">
                            přihlásit
                        </a>
                    </p>
                </div>
            @endauth


            <div class="space-y-4">
                @forelse($post->comments as $comment)
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <span class="font-semibold text-gray-900 text-lg">{{ $comment->user->name }}</span>
                                <span class="text-gray-500 text-sm ml-2">
                                {{ $comment->created_at->format('d.m.Y H:i') }}
                            </span>
                            </div>
                            @if(auth()->check() && (auth()->id() === $comment->user_id || auth()->user()->isAdmin()))
                                <form action="{{ route('comments.destroy', $comment) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Opravdu chcete smazat tento komentář?')"
                                            class="text-red-600 hover:text-red-800 text-sm bg-red-50 px-2 py-1 rounded">
                                        Smazat
                                    </button>
                                </form>
                            @endif
                        </div>
                        <p class="text-gray-700 text-lg leading-relaxed">{{ $comment->content }}</p>
                    </div>
                @empty
                    <div class="text-center py-12 text-gray-500 bg-white rounded-lg shadow-md">
                        <p class="text-xl">Zatím zde nejsou žádné komentáře.</p>
                        <p class="text-lg mt-2">Buďte první, kdo napíše komentář!</p>
                    </div>
                @endforelse
            </div>
        </section>
    </div>
@endsection
