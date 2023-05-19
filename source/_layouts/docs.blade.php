@extends('_layouts.main')

@section('body')
    <main class="flex min-h-full w-full h-screen">
        <aside class="px-8 flex w-96 flex-col space-y-8 bg-gray-900 pt-8">

            <nav class="w-full space-y-2 flex flex-col text-gray-300">
                <h6 class="text-lg font-bold mb-2 text-white">Prologue</h6>
                <a href="#" class="hover:text-gray-100">Introduction</a>
                <a href="#" class="hover:text-gray-100">Release Notes</a>
            </nav>

            <nav class="w-full space-y-2 flex flex-col text-gray-300">
                <h6 class="text-lg font-bold mb-2 text-white">Getting Started</h6>
                <a href="#" class="hover:text-gray-100">Installation</a>
                <a href="#" class="hover:text-gray-100">Configuration</a>
            </nav>

            <nav class="w-full space-y-2 flex flex-col text-gray-300">
                <h6 class="text-lg font-bold mb-2 text-white">Tenant Providers</h6>
                <a href="/docs/tenant-providers/what-are-tenant-providers" class="hover:text-gray-100">What are tenant providers?</a>
                <a href="#" class="hover:text-gray-100">Eloquent tenant provider</a>
                <a href="#" class="hover:text-gray-100">Database tenant provider</a>
                <a href="#" class="hover:text-gray-100">Array tenant provider</a>
                <a href="#" class="hover:text-gray-100">Custom tenant provider</a>
            </nav>

            <nav class="w-full space-y-2 flex flex-col text-gray-300">
                <h6 class="text-lg font-bold mb-2 text-white">Tenant Resolvers</h6>
                <a href="#" class="hover:text-gray-100">What are tenant resolvers?</a>
                <a href="#" class="hover:text-gray-100">Domain tenant resolver</a>
                <a href="#" class="hover:text-gray-100">Subdomain tenant resolver</a>
                <a href="#" class="hover:text-gray-100">Path tenant resolver</a>
                <a href="#" class="hover:text-gray-100">Session tenant resolver</a>
                <a href="#" class="hover:text-gray-100">Auth tenant resolver</a>
            </nav>
        </aside>

        <section class="w-full h-screen p-8 flex flex-col space-y-4">
            @yield('content')
        </section>
    </main>
@endsection
