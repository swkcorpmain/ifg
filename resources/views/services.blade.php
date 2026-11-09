<x-app-layout title="Layanan" description="Layanan Digital IFG Corp - Web Development, Mobile App, UI/UX Design, dan Digital Marketing">
    <section class="py-16 sm:py-24 bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-6">Layanan Kami</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">Kami menyediakan berbagai layanan digital untuk membantu bisnis Anda sukses di era modern.</p>
        </div>
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($services as $service)
                <div class="bg-white p-8 rounded-xl border border-gray-200 hover:shadow-lg transition-shadow duration-300">
                    <div class="w-14 h-14 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mb-6 font-bold text-2xl">{{ $service['icon'] }}</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $service['title'] }}</h3>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">{{ $service['description'] }}</p>
                    <ul class="space-y-2 text-xs text-gray-500 mb-6">
                        @foreach($service['features'] as $feature)
                        <li class="flex items-start gap-2"><span class="text-blue-600">●</span> {{ $feature }}</li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
    </section>