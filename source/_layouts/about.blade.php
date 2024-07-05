@extends('_layouts.main')

@section('body')
<div class="about md:w-3/4 m-auto">
    <article class="mx-4 md:mx-16 lg:mx-32">
        <h1 class="text-center text-3xl mt-4 font-bold">About</h1>
        <hr class="my-8 border-b-2 border-gray-300 w-1/2 m-auto">
        @yield('aboutContent')
    </article>
</div>
@endsection