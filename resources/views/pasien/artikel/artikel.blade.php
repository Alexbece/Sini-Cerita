<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artikel Edukasi - Sini Cerita</title>
    @include('layouts.partial.link')
</head>

<body class="blog_index">
    <div class="items-center justify-center w-full px-24 py-6 h-max">
        <div class="bg-biru-1 rounded-[20px]">
            <nav class="relative flex items-center justify-between w-full px-8 py-4">
                @include ('layouts.partial.navbar')
            </nav>
        </div>
    </div>

    <div class="items-center justify-center w-full px-24 py-6 h-max">
        <div class="grid mt-12 place-content-center">

            <section class="flex flex-col blog-header">
                <p>Last Update : {{ \Carbon\Carbon::parse($artikel->updated_at)->translatedFormat('l, d F Y') }}</p>
                <h1>{{ $artikel->title_artikel }}?</h1>

                <div class="blog-header-2">
                    <p>Kategori : {{ $artikel->category_artikel }}</p>
                    <p>Created at :{{ \Carbon\Carbon::parse($artikel->created_at)->translatedFormat('l, d F Y') }}</p>
                </div>
            </section>
            <section class="flex flex-col justify-start gap-4 mt-10 blog-content">
                {!! $artikel->content !!}
            </section>
        </div>
    </div>

    <div class="items-center justify-center w-full px-24 py-6 mt-6 h-max">
        <footer
            class="bg-biru-1 rounded-[30px] grid xl:grid-cols-2 gap-12 place-items-center h-max justify-center p-16 transition-all ease-out duration-300">
            @include ('layouts.partial.footer')
        </footer>
    </div>
</body>

</html>
