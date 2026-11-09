<x-app-layout title="Beranda" description="Solusi digital terpercaya untuk bisnis Anda">

    <!-- Hero Section -->
    <section class="py-16 sm:py-24 lg:py-32 bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-block px-4 py-1.5 mb-6 bg-blue-100 text-blue-700 text-sm font-medium rounded-full uppercase tracking-wider">
                IFG Corp
            </div>
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-bold text-gray-900 mb-6 leading-tight">
                Solusi Digital <br><span class="text-blue-600">Terpercaya</span> untuk Bisnis Anda
            </h1>
            <p class="text-lg sm:text-xl text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
                Kami membantu bisnis Anda tumbuh di era digital dengan layanan pengembangan website, aplikasi mobile, desain UI/UX, dan strategi pemasaran digital yang inovatif.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('services') }}" class="px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg text-lg transition-colors duration-200 shadow-lg shadow-blue-200">
                    Lihat Layanan
                </a>
                <a href="{{ route('contact') }}" class="px-8 py-4 border-2 border-blue-600 hover:bg-blue-600 hover:text-white text-blue-600 font-medium rounded-lg text-lg transition-colors duration-200">
                    Kontak Kami
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-gray-50 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                @foreach($stats as $stat)
                <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition-shadow duration-200">
                    <div class="text-3xl font-bold text-blue-600 mb-2">{{ $stat['value'] }}</div>
                    <div class="text-sm text-gray-600 font-medium uppercase tracking-wide">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Layanan Unggulan Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Kami menyediakan berbagai layanan digital untuk membantu bisnis Anda sukses di era modern.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($services as $service)
                <div class="bg-gray-50 p-8 rounded-xl border border-gray-200 hover:border-blue-300 hover:bg-blue-50 transition-all duration-300">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-6 font-bold text-xl">
                        {{ $service['icon'] }}
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $service['title'] }}</h3>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">{{ $service['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</x-app-layout>