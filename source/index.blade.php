@extends('_layouts.main')

@section('body')
<div class="m-auto md:w-3/4 my-16">
    <div class="text-center">
        <h1 class="text-3xl font-bold mb-4">PHPBali #5 Meetup</h1>
        <div class="my-4">
            <div class="upppercase tracking-wide text-sm text-indigo-600 font-bold">
                <time>12 Juli 2019 19:00 - 21:00 WITA</time>
                <address class="mt-2 text-gray-600 mx-4">
                    <strong>STMIK Primakara</strong>
                    <p>Ruang Audit, STMIK Primakara Technopreneurship Campus, Jalan Tukad Badung, Renon, Denpasar City, Bali, Indonesia</p>
                </address>
            </div>
        </div>
    </div>
    <p class="text-justify break-words mx-4">Pertemuan kali ini kita akan kedatangan tamu dari developer Australia yang akan berbagi tentang Symfony dan bagaimana cara dia menangani 1 miliar request setiap bulannya dengan Symfony. Pertemuan ini akan menggunakan bahasa Inggris dan bahasa Indonesia.</p>
</div>

<div class="my-8 md:w-3/4 m-auto">
    <h1 class="text-3xl mb-4 text-center">Topics</h1>
    <hr class="my-8 border-b-2 border-gray-300 w-1/2 m-auto">

    <div class="flex flex-col items-center">
        <div class="bg-white shadow rounded-lg overflow-hidden border p-4 m-4">
            <div class="m-4">
                <p class="uppercase tracking-wide text-sm text-indigo-600 font-bold">Rapid Development with Symfony</p>
                <p class="mt-2 text-black">An introduction to Symfony demonstrating how you can use this powerful framework to quickly and easily build PHP applications. Paul is the Head of Development Catch.com.au which uses PHP and Symfony to handle over 1 billion web requests every month.</p>
                <ul class="flex flex-wrap items-center mt-4">
                    <li class="flex items-center md:w-1/2">
                        <img data-src="" alt="Speaker's avatar" class="rounded-full md:w-16 max-w-xs my-4" width="50">
                        <div class="mt-0 mx-4">
                            <p>Paul Ferrett</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
@endsection