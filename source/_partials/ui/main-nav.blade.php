<header class="relative z-50 w-full flex-none text-md font-semibold leading-6 text-slate-200">

    <nav class="mx-auto max-w-container px-4 sm:px-6 lg:px-8 bg-gray-900">

        <div class="relative flex items-center py-[2.125rem] " style="min-height:132px">

            @if ($logo ?? true)

                <a href="/" class="mr-auto flex-none text-slate-100">
                    <img src="/assets/images/logo-alt-64.png">
                </a>

            @endif

            {{--<div class="hidden lg:flex lg:items-center {{ ($logo ?? true) ? '' : 'ml-auto'  }}">

                <a href="/features" class="hover:text-white">Features</a>

                <a href="/docs" class="ml-8 hover:text-white">Documentation</a>

                <a href="/faq" class="ml-8 hover:text-white">FAQ</a>

            </div>--}}

        </div>

    </nav>

</header>