<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }} - {{ config('app.name') }}</title>
    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .glass-effect { background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); }
        .mobile-menu-item { @apply block px-6 py-4 text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-all duration-200 border-b border-gray-100 text-lg; }
        .mobile-menu-item.active { @apply bg-blue-50 text-blue-600 border-l-4 border-blue-600; }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900">
    <nav class="glass-effect sticky top-0 z-50 w-full border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0 flex items-center gap-2">
                    <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold">IFG</div>
                    <span class="font-bold text-xl text-gray-900 tracking-tight">{{ config('app.name') }}</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="mobile-menu-item text-gray-600 hover:text-blue-600 font-medium {{ request()->routeIs('home') ? 'text-blue-600' : '' }}">Beranda</a>
                    <a href="{{ route('about') }}" class="mobile-menu-item text-gray-600 hover:text-blue-600 font-medium {{ request()->routeIs('about') ? 'text-blue-600' : '' }}">Tentang Kami</a>
                    <a href="{{ route('services') }}" class="mobile-menu-item text-gray-600 hover:text-blue-600 font-medium {{ request()->routeIs('services') ? 'text-blue-600' : '' }}">Layanan</a>
                    <a href="{{ route('portfolio') }}" class="mobile-menu-item text-gray-600 hover:text-blue-600 font-medium {{ request()->routeIs('portfolio') ? 'text-blue-600' : '' }}">Portfolio</a>
                    <a href="{{ route('contact') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-md font-medium transition-colors duration-200">Kontak</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" /></svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ route('home') }}" class="mobile-menu-item {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
                <a href="{{ route('about') }}" class="mobile-menu-item {{ request()->routeIs('about') ? 'active' : '' }}">Tentang Kami</a>
                <a href="{{ route('services') }}" class="mobile-menu-item {{ request()->routeIs('services') ? 'active' : '' }}">Layanan</a>
                <a href="{{ route('portfolio') }}" class="mobile-menu-item {{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a>
                <a href="{{ route('contact') }}" class="block px-6 py-4 mt-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-center font-medium transition-colors duration-200">Kontak Kami</a>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer class="bg-gray-900 text-white mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-6 h-6 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold">IFG</div>
                        <span class="font-bold text-lg text-white">{{ config('app.name') }}</span>
                    </div>
                    <p class="text-gray-400 text-sm max-w-xs leading-relaxed">
                        Solusi digital terpercaya untuk mengembangkan bisnis Anda di era digital.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Layanan</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="{{ route('services') }}" class="hover:text-blue-400 transition-colors">Web Development</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-blue-400 transition-colors">Mobile App</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-blue-400 transition-colors">UI/UX Design</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-blue-400 transition-colors">Digital Marketing</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Perusahaan</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="{{ route('about') }}" class="hover:text-blue-400 transition-colors">Tentang Kami</a></li>
                        <li><a href="{{ route('portfolio') }}" class="hover:text-blue-400 transition-colors">Portfolio</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Karir</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Berita</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg> Jl. Contoh No. 123, Jakarta</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 011 1.138l5.26 2.63a1 1 0 001 1.138l5.26-2.63a1 1 0 011-1.138H19a2 2 0 012 2v1a2 2 0 01-2 2H5a2 2 0 01-2-2V5z" /></svg> +62 21 1234 5678</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22-2L11 8a2 2 0 012-2h2a2 2 0 012 2v3.14a2 2 0 104 0V8a2 2 0 012-2h2a2 2 0 012 2v10a2 2 0 01-2 2H3a2 2 0 01-2-2V8z" /></svg> info@ifgcorp.com</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <p class="text-gray-400 text-sm">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205-.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-1.332-2.201-1.552-2.5-.242-2.5-.242 1.463.278 2.65 1.658 2.65 1.658 2.15 2.379 4.88 1.681 5.995 1.275-1.036 2.895-.772 3.606-1.385l-.887-.564C7.59 15.333 6.228 15.1 6.228 15.1c-.912-.635-1.503-1.602-1.503-1.602-.155-.327.058-.758.268-1.01 0-.147-.372-.493-.701-.493-1.175 0-2.126.958-2.126.958.683.172 1.293.87 1.293.87-.29-.774 1.02-1.483 1.874-1.31-1.216-.85-2.079-1.62-2.079-1.62-1.43-.484-2.757-.297-2.757-.297-.134-.843.348-1.396 1.18-1.565-.457-.413-.795-.976-.795-1.998 0-.667.353-1.217.87-1.624-.023-.08-.077-.226-.176-.571C2.317 5.378 5.686 2.7 12 2.7c6.314 0 9.686 2.678 10.045 6.096-.1.346-.153.491-.176.571.517.407.87.957.87 1.624 0 1.022-.338 1.585-.795 1.998-.832.169-1.314.722-1.18 1.565 0 0-2.038-.187-2.757.297 0 0-2.838 2.15-3.224 2.793.586.168 1.092.765 1.18 1.524 0 .326-.025.643-.176.778-.173.206-.278.443-.278.763 0 .538.242 1.018.776 1.47-.465-.074-.94-.147-1.418-.216-.747.295-1.497.547-2.243.775-.12-.683-.2-1.387-.2-2.075 0-3.667 2.443-6.667 5.468-6.667 1.325 0 2.673.477 3.83 1.275.393.519.617 1.175.617 1.864 0 1.41-.417 2.27-1.343 2.974-1.333-1.027-2.49-1.813-3.46-1.813-1.251 0-2.049.816-2.049 1.742 0 .345.184.675.284 1.013-.359-1.06-.774-2.126-.774-3.383 0-1.987.614-3.659 1.92-4.905z"/></svg></a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231 5.45-6.231zm-1.161 17.52h1.833V7.848h-1.833z"/></svg></a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.267 3.627c-.33-.566-.954-.832-1.606-.725-.478.077-.868.424-1.057.834-.399.862-1.163 1.543-2.058 1.772-.121.031-.243.029-.364.029a1.56 1.56 0 01-1.549-1.318c-.212-1.08-.893-2.01-1.853-2.476-.621-.299-1.282-.434-1.946-.349-1.153.147-2.145.755-2.785 1.57-.226.287-.479.558-.742.8-.868.799-1.361 1.81-1.391 2.918-.014.523.11 1.048.382 1.535-.345-.021-.69-.025-1.037-.048a5.67 5.67 0 00-3.27 1.112 5.67 5.67 0 00-1.999 4.346c.043.241.097.487.18.724-.014-.002-.027-.021-.042-.024-.637.187-1.085.79-1.085 1.484 0 .852.453 1.616 1.146 2.047-.415-.109-.822-.23-1.236-.39-.225-.13-.44-.29-.65-.452-.094-.073-.2-.124-.302-.184-.442-.266-.86-.572-1.257-.92-.079.166-.132.35-.164.544-.076.471-.02.955.208 1.402a1.61 1.61 0 01-.445.799c-.316.102-.653.11-.983.016-.794-.226-1.53-.866-1.878-1.711.025.254.103.498.213.724a2.61 2.61 0 001.373 1.775c.343.065.692.072 1.033.027 1.55-.163 2.838-1.375 2.838-2.723 0-.509-.092-.991-.24-1.44.595.344 1.272.557 1.998.557.218 0 .43-.024.644-.068a2.29 2.29 0 011.662-.628c.184.198.402.352.651.445a7.4 7.4 0 01-2.225.68c-.602 0-1.203-.11-1.786-.323-.17-.062-.34-.144-.508-.228a12 12 0 00-.497-.347c-.289-.225-.552-.49-.789-.792-.063-.08-.106-.176-.154-.263-.08-.145-.13-.303-.178-.467-.048-.164-.072-.337-.072-.513 0-.241.036-.479.109-.711a8.4 8.4 0 00-.199-2.016c0-2.291.902-4.332 2.395-5.812a8.4 8.4 0 01-.283-2.074c0-.198.04-.392.114-.577a1.48 1.48 0 011.105-1.067c.371-.06.747-.046 1.114.024a2.15 2.15 0 011.431.889c.02.033.034.071.054.105a9 9 0 013.123-.764c.296-.022.593-.024.889-.012.784.03 1.51.269 2.087.687a5.9 5.9 0 011.725 1.744c.085.164.154.34.207.518a7 7 0 01.482 1.522c.058.242.095.489.095.741 0 1.334-.52 2.518-1.367 3.331z"/></svg></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>