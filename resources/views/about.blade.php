<x-app-layout title="Tentang Kami" description="Tentang IFG Corp - Perusahaan Solusi Digital Terpercaya">
    <section class="py-16 sm:py-24 bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-6">Tentang Kami</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">{{ $company['description'] }}</p>
        </div>
    </section>
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="w-full h-64 bg-blue-100 rounded-2xl overflow-hidden flex items-center justify-center text-6xl font-bold text-blue-600 mb-8">{{ strtoupper(substr($company['name'], 0, 2)) }}</div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Mengapa Memilih {{ $company['name'] }}?</h2>
                    <ul class="space-y-6">
                        <li class="flex items-start gap-4"><div class="w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center flex-shrink-0 mt-1">✓</div><div><h4 class="font-bold text-gray-900">Tim Ahli</h4><p class="text-gray-600 text-sm">Pengalaman bertahun-tahun dalam industri teknologi dan pengembangan bisnis digital.</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center flex-shrink-0 mt-1">✓</div><div><h4 class="font-bold text-gray-900">Solusi Inovatif</h4><p class="text-gray-600 text-sm">Selalu mengikuti perkembangan teknologi terkini untuk memberikan solusi terbaik.</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center flex-shrink-0 mt-1">✓</div><div><h4 class="font-bold text-gray-900">Support Responsif</h4><p class="text-gray-600 text-sm">Tim support yang siap membantu Anda kapan saja dengan responsif dan profesional.</p></div></li>
                    </ul>
                </div>
                <div class="hidden md:block">
                    <div class="bg-white p-8 rounded-xl border border-gray-200 shadow-lg">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Informasi Perusahaan</h3>
                        <table class="w-full text-left">
                            <tr class="border-b border-gray-100 py-3"><td class="text-gray-600 text-sm font-medium">Nama Perusahaan</td><td class="text-gray-900 font-medium">{{ $company['name'] }}</td></tr>
                            <tr class="border-b border-gray-100 py-3"><td class="text-gray-600 text-sm font-medium">Alamat</td><td class="text-gray-900 font-medium">{{ $company['address'] }}</td></tr>
                            <tr class="border-b border-gray-100 py-3"><td class="text-gray-600 text-sm font-medium">Telepon</td><td class="text-gray-900 font-medium">{{ $company['phone'] }}</td></tr>
                            <tr class="border-b border-gray-100 py-3"><td class="text-gray-600 text-sm font-medium">Email</td><td class="text-gray-900 font-medium">{{ $company['email'] }}</td></tr>
                            <tr class="py-3"><td class="text-gray-600 text-sm font-medium">Website</td><td class="text-gray-900 font-medium">{{ $company['website'] }}</td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <section class="py-20 bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="p-8 bg-blue-50 rounded-2xl border border-blue-200">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-blue-600 text-white rounded-lg flex items-center justify-center">🎯</div>
                        <h2 class="text-2xl font-bold text-gray-900">{{ $visions['title'] }}</h2>
                    </div>
                    <p class="text-gray-700 leading-relaxed">{{ $visions['content'] }}</p>
                </div>
                <div class="p-8 bg-green-50 rounded-2xl border border-green-200">
                    <div class="flex items-center gap-3 mb-6">
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Tim Ahli Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Berberapa orang di balik keberhasilan kami.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($team as $member)
                <div class="bg-white p-8 rounded-xl border border-gray-200 text-center hover:shadow-lg transition-shadow duration-300">
                    <div class="w-20 h-20 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-6 font-bold text-xl text-gray-600">{{ strtoupper(substr($member['name'], 0, 1)) }}</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $member['name'] }}</h3>
                    <p class="text-blue-600 font-medium text-sm mb-4">{{ $member['position'] }}</p>
                    <p class="text-gray-600 text-sm leading-relaxed">{{ $member['bio'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
                        <div class="w-10 h-10 bg-green-600 text-white rounded-lg flex items-center justify-center">📋</div>
                        <h2 class="text-2xl font-bold text-gray-900">{{ $missions['title'] }}</h2>
                    </div>
                    <ul class="space-y-4">
                        @foreach($missions['items'] as $item)
                        <li class="flex items-start gap-3"><div class="w-6 h-6 bg-green-600 text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1 text-xs">✓</div><span class="text-gray-700 text-sm">{{ $item }}</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    </section>