<x-app-layout title="Portfolio" description="Portfolio Proyek IFG Corp - Web Development, Mobile App, dan Lebih Lagi">
    <section class="py-16 sm:py-24 bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-6">Portfolio Kami</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">Beberapa proyek yang telah kami selesaikan untuk klien kami.</p>
        </div>
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
                    <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="p-6">
                        <span class="text-xs font-medium text-blue-600 uppercase tracking-wide">{{ $project['category'] }}</span>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $project['title'] }}</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">{{ $project['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
    </section>