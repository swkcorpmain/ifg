<x-app-layout title="Kontak" description="Hubungi IFG Corp untuk Konsultasi Bisnis Digital">
    @if(session('success'))
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Berhasil!</strong> {{ session('success') }}
        </div>
    </div>
    @endif
    <section class="py-16 sm:py-24 bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-6">Hubungi Kami</h1>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">Apakah Anda memiliki proyek atau butuh konsultasi? Kami siap membantu Anda.</p>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">📍</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Alamat</h4>
                                <p class="text-gray-600 text-sm">{{ $company['address'] }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">📞</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Telepon</h4>
                                <p class="text-gray-600 text-sm">{{ $company['phone'] }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">✉️</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Email</h4>
                                <p class="text-gray-600 text-sm">{{ $company['email'] }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">🌐</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Website</h4>
                                <p class="text-gray-600 text-sm">{{ $company['website'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl border border-gray-200">
                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all" placeholder="Masukkan nama Anda">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all" placeholder="Masukkan email Anda">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Subjek</label>
                            <input type="text" name="subject" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all" placeholder="Subjek pesan">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                            <textarea name="message" rows="5" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all" placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>
                        <button type="submit" class="w-full px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-200">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>