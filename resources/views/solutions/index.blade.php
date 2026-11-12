<x-app-layout
    title="Solusi IFG"
    description="Jelajahi solusi dan layanan pembangunan dari IFG."
>
    <section class="bg-industrial-pattern pt-32 pb-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <p class="mb-4 text-sm font-bold uppercase tracking-[0.2em] text-brand-red">Solusi IFG</p>
            <h1 class="max-w-3xl font-heading text-4xl font-extrabold text-white sm:text-5xl">
                Solusi Pembangunan untuk Kebutuhan Anda
            </h1>
            <p class="mt-6 max-w-2xl text-lg leading-relaxed text-gray-300">
                Temukan berbagai solusi dan layanan IFG. Pilih topik untuk membaca informasi selengkapnya.
            </p>
        </div>
    </section>

    <section class="bg-gray-900 py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            @if ($pages->isEmpty())
                <div class="rounded-2xl border border-gray-800 bg-gray-950 p-10 text-center">
                    <h2 class="font-heading text-2xl font-bold text-white">Konten belum tersedia</h2>
                    <p class="mt-3 text-gray-400">Konten yang sudah diterbitkan akan tampil di sini.</p>
                </div>
            @else
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($pages as $page)
                        <article class="flex flex-col rounded-2xl border border-gray-800 bg-gray-950 p-7 transition hover:-translate-y-1 hover:border-brand-red">
                            <p class="text-xs font-bold uppercase tracking-widest text-brand-red">Solusi IFG</p>
                            <h2 class="mt-4 font-heading text-xl font-bold text-white">{{ $page->title }}</h2>
                            <p class="mt-3 flex-1 leading-relaxed text-gray-400">
                                {{ \Illuminate\Support\Str::limit(strip_tags($page->content ?? ''), 180) }}
                            </p>
                            <a
                                href="{{ route('solutions.show', ['slug' => $page->slug]) }}"
                                class="mt-6 inline-flex items-center gap-2 font-semibold text-white hover:text-brand-red"
                            >
                                Baca selengkapnya <span aria-hidden="true">&rarr;</span>
                            </a>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</x-app-layout>
