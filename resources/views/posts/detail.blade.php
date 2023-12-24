@extends('layouts.main')
@section('content')

<div class="w-screen flex items-center justify-center">
    <!--  for large screen -->
    <div class="overflow-auto hidden md:block">
        <div class="flex justify-between text-2xl p-4 m-4 border-b-4">
            <h1 class="text-gray-800">{{ __('Post Detail') }}</h1>
            <a href="{{ route('post.edit', $post->id) }}" class="underline">
                Edit Post
            </a>

        </div>
        <div class="m-4">
            <h2 class="ml-8 mb-10">
                {{ $post->title }}
            </h2>
            <div class="ml-8">
                {{ $post->body }}
            </div>
            <p class="flex justify-between mt-4 ml-8 mr-8">
                <a class="underline text-blue-500 hover:text-blue-300" href="{{ route('index') }}">Back to main page</a>
                <form action="{{ route('post.destroy', $post->id) }}" method="POST"
                    onsubmit="return confirm('{{ __('Are you sure you want to delete the post?') }}');"
                    class="ml-8">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="underline text-red-800 hover:text-blue-300">Delete</button>
                </form>

            </p>
        </div>
    </div>

    {{-- Greed for small screen --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:hidden">
        <h1 class="text-2xl p-4 border border-b-4">{{ __('Post Detail') }}</h1>

        <div class="bg-white space-y-3 p-4 rounded-lg shadow-orange-300">
            <div class="flex items-center space-x-2 text-sm">
                <div class="text-gray-500">{{ $post->created_at }}</div>
                <div>{{ $post->title }}</div>
            </div>
            <div class="text-sm">
                {{ $post->body }}
            </div>
            <div class="text-sm mt-4">
                <a class="underline text-blue-500 hover:text-blue-300" href="{{ route('index') }}">Back to main page</a>
                <a class="underline text-red-800 hover:text-blue-300" href="{{ route('post.destroy', $post->id) }}">Delete</a>
            </div>
        </div>
    </div>
</div>

@endsection
