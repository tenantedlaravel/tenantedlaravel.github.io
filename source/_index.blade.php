@extends('_layouts.main')

@section('body')
    <header class="relative isolate px-6 pt-14 lg:px-8">
        <div class="mx-auto max-w-2xl py-8 sm:py-16 lg:py-24">
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-6xl">
                    Seamless, flexible multitenancy for Laravel
                </h1>
                <p class="mt-6 text-xl leading-8 text-gray-300">
                    A multitenancy package for Laravel, built to seamlessly integrate with Laravel, without compromising
                    on flexibility or introducing restrictions and limitations.
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#"
                       class="rounded-md bg-indigo-600 px-12 py-2.5 text-lg font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Get started
                    </a>
                    <a href="#" class="text-lg font-semibold leading-6 text-gray-100 px-12">
                        Learn more <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
@endsection
