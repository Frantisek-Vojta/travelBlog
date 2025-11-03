@extends('layouts.app')

@section('title', 'Přihlášení - LaraBlog')

@section('content')
    <div class="max-w-md mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h1 class="text-2xl font-bold text-gray-900 mb-6 text-center">Přihlášení</h1>

            <form action="{{ route('login') }}" method="POST">
                @csrf


                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">
                        Email
                    </label>
                    <input type="email" name="email" id="email"
                           value="{{ old('email') }}"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="vas@email.com"
                           required>
                    @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">
                        Heslo
                    </label>
                    <input type="password" name="password" id="password"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="••••••••"
                           required>
                </div>

                <button type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 font-semibold">
                    Přihlásit se
                </button>
            </form>


            <div class="mt-6 p-4 bg-gray-100 rounded-lg">
                <h3 class="font-semibold text-gray-900 mb-2">Demo přihlašovací údaje:</h3>
                <p class="text-sm text-gray-600">
                    <strong>Email:</strong> admin@blog.com<br>
                    <strong>Heslo:</strong> password
                </p>
            </div>
        </div>
    </div>
@endsection
