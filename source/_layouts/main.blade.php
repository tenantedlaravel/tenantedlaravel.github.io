<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="/assets/images/favicon.ico">
    <link rel="icon" type="image/png" sizes="48x48" href="/assets/images/icon-alt-48.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/icon-alt-32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/icon-alt-16.png" />

    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description ?? '' }}">
    <title>{{ $page->title ?? '' }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>
<body class="font-sans antialiased text-gray-200 min-h-full flex flex-col [overflow-anchor:none]">

    {{--@include('_partials.ui.main-nav')--}}

@yield('body')
</body>
</html>
