@extends('layouts.guest')

@section('title', 'Ghost Printer')

@section('header')
    {{-- <header>
        <div class="container flex items-center justify-between mx-auto px-4 lg:px-8 py-6">
            <a href="/" class="logo-link flex items-center gap-2 outline-none transition-all">
                <img src="{{  Vite::asset('resources/images/logo-00.png') }}" alt="Ghost Printer Logo" class="w-14 h-14 md:w-16 md:h-16" width="60" height="60">
                <span class="logo-title text-3xl md:text-4xl font-autorich-sans">Ghost Printer</span>
            </a>

            <nav class="flex items-center gap-2">
                <button class="flex items-center gap-1 rounded-md shadow-sm text-white dark:text-pumpkin-900 dark:focus:text-white bg-pumpkin-800 dark:bg-pumpkin-300 dark:focus:bg-pumpkin-700 hover:bg-pumpkin-700 dark:hover:bg-pumpkin-200 focus:outline-none focus:ring-2 dark:focus:ring-0 focus:ring-offset-2 dark:focus:ring-offset-0 focus:ring-pumpkin-800 border-2 border-transparent dark:focus:border-pumpkin-100 px-2 py-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                    </svg>                  
                    <span>Print</span>
                </button>

                <button class="h-12 w-12 bg-pumpkin-100 ring-2 ring-pumpkin-200 rounded-full">
                    <span class="sr-only">{$page.data.user?.first_name} {$page.data.user?.last_name}</span>
                </button>
            </nav>
        </div>
    </header> --}}
@endsection

@section('content')
    <main class="container min-h-screen flex flex-col items-center justify-center mx-auto px-4 lg:px-8 py-6">
        <div class="w-fit space-y-10">
            <a href="/" class="logo-link flex items-center gap-2 outline-none transition-all">
                <img src="{{  asset('images/logo-00.png') }}" alt="Ghost Printer Logo" class="w-16 h-16 md:w-20 md:h-20" width="80" height="80">
                <span class="logo-title text-5xl md:text-6xl font-autorich-sans">Ghost Printer</span>
            </a>

            <span class="block text-2xl text-center tracking-wider">Printing Soon...</span>

            <div class="w-full flex items-center justify-between pt-20">
                <div class="flex flex-col">
                    <a href="/terms-and-conditions" class="w-fit dark:text-pumpkin-300 border-b-2 border-transparent hover:border-gray-900 focus:border-gray-900 focus:outline-none dark:hover:border-pumpkin-300 dark:focus:border-pumpkin-300">
                        Terms and Conditions
                    </a>
                    <a href="/legal" class="w-fit dark:text-pumpkin-300 border-b-2 border-transparent hover:border-gray-900 focus:border-gray-900 focus:outline-none dark:hover:border-pumpkin-300 dark:focus:border-pumpkin-300">
                        Policy
                    </a>
                </div>
                <div>
                    <span class="dark:text-pumpkin-300 text-xs">Ghost Printer &copy; 2023</span>
                </div>
            </div>
        </div>
    </main>
@endsection