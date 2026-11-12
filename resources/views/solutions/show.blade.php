<x-app-layout :title="$page->title" :description="$description">
    <article class="bg-gray-950 pb-20 pt-32">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <a
                href="{{ route('solutions.index') }}"
                class="inline-flex items-center gap-2 text-sm font-semibold text-gray-400 transition hover:text-brand-red"
            >
                <span aria-hidden="true">&larr;</span> Kembali ke Solusi IFG
            </a>

            <header class="mt-8 border-b border-gray-800 pb-8">
                <p class="mb-4 text-sm font-bold uppercase tracking-[0.2em] text-brand-red">Solusi IFG</p>
                <h1 class="font-heading text-3xl font-extrabold text-white sm:text-5xl">{{ $page->title }}</h1>
            </header>

            <div class="cms-content mt-10 text-gray-300">
                {!! $page->content !!}
            </div>
        </div>
    </article>

    <style>
        .cms-content h1,
        .cms-content h2,
        .cms-content h3 {
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            margin: 2rem 0 1rem;
        }

        .cms-content h1 { font-size: 2rem; }
        .cms-content h2 { font-size: 1.5rem; }
        .cms-content h3 { font-size: 1.25rem; }
        .cms-content p { line-height: 1.8; margin: 1rem 0; }
        .cms-content ul,
        .cms-content ol { line-height: 1.8; margin: 1rem 0; padding-left: 1.5rem; }
        .cms-content ul { list-style: disc; }
        .cms-content ol { list-style: decimal; }
        .cms-content a { color: #E52320; text-decoration: underline; }
    </style>
</x-app-layout>
