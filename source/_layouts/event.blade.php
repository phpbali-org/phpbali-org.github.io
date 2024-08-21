@extends('_layouts.main')

@section('body')
<div class="m-auto md:w-3/4 my-16">
    <div class="text-center">
        <h1 class="text-3xl font-bold mb-4" id="eventTitle">
            {{ $page->title }}
        </h1>

        <div class="my-4">
            <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">
                <time>{{ $page->datetime }}</time>
            </div>
            <address class="mt-2 text-gray-600 mx-4">
                <strong>{{ $page->location['name'] }}</strong> . {{ $page->location['address'] }}
            </address>
        </div>
    </div>

    <p class="text-justify break-words mx-4" id="eventDesc">{{ $page->desc }}</p>

    <div class="my-8 md:w-3/4 m-auto">
        <h1 class="text-3xl mb-4 text-center">Topics</h1>
        <hr class="my-8 border-b-2 border-gray-300 w-1/2 m-auto">

        <div class="flex flex-col items-center">
            @foreach ($page->topics as $topic)
            <div class="bg-white shadow rounded-lg overflow-hidden border p-4 m-4">
                <div class="m-4">
                    <p class="uppercase tracking-wide text-sm text-indigo-600 font-bold">{{ $topic['name'] }}</p>
                    <p class="mt-2 text-black">{{ $topic['desc'] }}</p>
                    <ul class="flex flex-wrap items-center mt-4">
                        @foreach($topic['speakers'] as $speaker)
                        <li class="flex items-center md:w-1/2">
                            <img src="{{ $speaker['avatar'] }}" alt="Speaker's avatar" class="rounded-full md:w-16 max-w-xs my-4" width="50">
                            <div class="mt-0 mx-4">
                                <p>{{ $speaker['name'] }}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection