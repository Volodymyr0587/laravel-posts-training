@extends('layouts.main')
@section('content')

<h1 class="text-2xl p-4 m-4 border-b-4">{{ __("Create Post") }}</h1>

<!-- component -->
<div class="max-w-2xl bg-white py-10 px-5 m-auto w-full mt-10">

    <div class="text-3xl mb-6 text-center ">
      Save your thoughts
    </div>

    <form class="grid grid-cols-2 gap-4 max-w-xl m-auto"
    action="{{ route('post.store') }}" method="POST">
    @csrf

      <div class="col-span-2 lg:col-span-1">
        <input type="text" name="title" id="title"
        class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full"
        placeholder="{{ __("Title") }}"/>
      </div>

      <div class="col-span-2">
        <textarea cols="30" rows="8" name="body" id="body"
        class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="{{ __("Type text here...") }}"></textarea>
      </div>

      <div class="col-span-2 text-right">
        <button type="submit" class="py-3 px-6 bg-green-500 text-white font-bold w-full sm:w-32">
          Save
        </button>
      </div>

    </form>
  </div>

@endsection
