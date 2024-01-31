@extends('layouts.main')
@section('content')

    <div class="w-screen flex items-center justify-center">
        <!-- Table for large screen -->
        <div class="overflow-auto hidden md:block">
            <div class="flex justify-between text-2xl p-4 m-4 border-b-4">
                <h1 class="text-gray-800">{{ __('My Posts') }}</h1>

                <div>
                    {{ $posts->links() }}
                </div>

                <a href="{{ route('post.create') }}" class="underline">
                    Create Post
                </a>
            </div>

            <table class="table-auto m-10">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Body</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)

                    <tr class="mb-4">
                        <td class="p-4">{{ $post->created_at }}</td>
                        <td class="p-4">
                            <a href="{{ route('post.show', $post->id) }}"
                            class="underline text-blue-500 hover:text-blue-300">{{ $post->title }}
                            </a>
                        </td>
                        <td class="p-4">{{ $post->body }}</td>
                    </tr>

                    @empty
                        <tr class="mb-4">
                            <p>No posts yet.</p>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{-- Greed for small screen --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:hidden">
            <h1 class="text-2xl p-4 border-b-4">{{ __('My Posts') }}</h1>
            <a href="{{ route('post.create') }}" class="underline ml-4">
                    Create Post
                </a>
            @forelse ($posts as $post)
            <div class="bg-white space-y-3 p-4 rounded-lg shadow-orange-300">
                <div class="flex items-center space-x-2 text-sm">
                    <div class="text-gray-500">{{ $post->created_at }}</div>
                    <div>
                        <a href="{{ route('post.show', $post->id) }}"
                            class="underline text-blue-500 hover:text-blue-300">
                            {{ $post->title }}
                        </a>
                    </div>
                </div>
                <div class="text-sm">
                    {{ $post->body }}
                </div>
            </div>
            @empty
            <div class="bg-white space-y-3 p-4 rounded-lg shadow-orange-300">
                <div class="flex items-center space-x-2 text-sm">No posts yet.</div>
            </div>
        @endforelse
        </div>
    </div>

@endsection
