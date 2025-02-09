---
title: Events - PHPBali
description: Events in PHPBali community.
---

@extends('_layouts.main')

@section('body')
<div class="my-16">
    <h1 class="text-center text-3xl mt-4 font-bold">Events</h1>
    <hr class="my-8 border-b-2 border-gray-300 w-1/2 m-auto">
    <div class="flex flex-col m-auto justify-center items-center md:w-3/4">
        @foreach($events as $event)
        <div class="bg-white shadow rounded-lg overflow-hidden border p-4 m-4 w-full">
            <div class="m-4">
                <p class="block mt-1 text-lg leading-tight font-semibold text-gray-900 underline">
                    <a href="{{ $event->getUrl() }}">{{ $event->title }}</a>
                </p>
                <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">
                    <time>{{ $event->datetime }}</time>
                </div>
                <address class="mt-2 text-gray-600">
                    <strong>{{ $event->location['name'] }}</strong>
                    <p>{{ $event->location['address'] }}</p>
                </address>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection