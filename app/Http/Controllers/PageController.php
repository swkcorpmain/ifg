<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $company = [
            'name' => config('app.name', 'IFG Corp'),
            'tagline' => 'Solusi Digital Terpercaya untuk Bisnis Anda',
            'description' => 'Kami adalah perusahaan teknologi yang berkomitmen menyediakan solusi digital inovatif untuk membantu bisnis Anda tumbuh di era digital.',
            'address' => 'Jl. Contoh No. 123, Kota Jakarta, Indonesia',
            'phone' => '+62 21 1234 5678',
            'email' => 'info@ifgcorp.com',
            'website' => 'www.ifgcorp.com',
        ];

        $services = [
            ['title' => 'Web Development', 'icon' => 'globe', 'description' => 'Pembuatan website modern, responsif, dan optimalkan untuk SEO.'],
            ['title' => 'Mobile App Development', 'icon' => 'smartphone', 'description' => 'Aplikasi mobile untuk iOS dan Android yang user-friendly.'],
            ['title' => 'UI/UX Design', 'icon' => 'palette', 'description' => 'Desain antarmuka yang menarik dan pengalaman pengguna yang optimal.'],
            ['title' => 'Digital Marketing', 'icon' => 'megaphone', 'description' => 'Strategi pemasaran digital untuk meningkatkan visibilitas bisnis.'],
        ];

        $stats = [
            ['label' => 'Tahun Pengalaman', 'value' => '5+'],
            ['label' => 'Proyek Selesai', 'value' => '150+'],
            ['label' => 'Klien Puas', 'value' => '100+'],
            ['label' => 'Tim Ahli', 'value' => '25+'],
        ];

        return view('home', compact('company', 'services', 'stats'));
    }

    public function about()
    {
        $company = [
            'name' => config('app.name', 'IFG Corp'),
            'tagline' => 'Solusi Digital Terpercaya untuk Bisnis Anda',
            'description' => 'IFG Corp didirikan dengan visi untuk menjadi perusahaan teknologi terdepan yang menyediakan solusi digital inovatif.',
            'address' => 'Jl. Contoh No. 123, Kota Jakarta, Indonesia',
            'phone' => '+62 21 1234 5678',
            'email' => 'info@ifgcorp.com',
            'website' => 'www.ifgcorp.com',
        ];

        $visions = [
            'title' => 'Visi',
            'content' => 'Menjadi perusahaan teknologi terdepan di Indonesia yang memberikan solusi digital terbaik.',
        ];

        $missions = [
            'title' => 'Misi',
            'items' => [
                'Memberikan solusi digital yang inovatif dan berkualitas tinggi.',
                'Membangun hubungan jangka panjang dengan klien berdasarkan kepercayaan.',
                'Menyediakan layanan support yang responsif dan profesional.',
                'Terus berkembang mengikuti perkembangan teknologi terkini.',
            ],
        ];

        $team = [
            ['name' => 'Ahmad Rizki', 'position' => 'CEO & Founder', 'bio' => 'Pengalaman 10 tahun dalam industri teknologi.'],
            ['name' => 'Siti Nurhaliza', 'position' => 'CTO', 'bio' => 'Ahli arsitektur sistem dan pengembang full-stack.'],
            ['name' => 'Budi Santoso', 'position' => 'Head of Design', 'bio' => 'Desainer UI/UX dengan portofolio beragam.'],
        ];

        return view('about', compact('company', 'visions', 'missions', 'team'));
    }

    public function services()
    {
        $company = ['name' => config('app.name', 'IFG Corp')];

        $services = [
            ['title' => 'Web Development', 'icon' => 'code', 'description' => 'Website perusahaan, e-commerce, dan portal web dengan Laravel, React, dan Vue.js.', 'features' => ['Responsive Design', 'SEO Optimized', 'Fast Loading', 'Secure']],
            ['title' => 'Mobile App Development', 'icon' => 'phone', 'description' => 'Aplikasi mobile native dan cross-platform untuk iOS dan Android.', 'features' => ['iOS & Android', 'Offline Mode', 'Push Notification', 'API Integration']],
            ['title' => 'UI/UX Design', 'icon' => 'layout', 'description' => 'Desain antarmuka pengguna yang intuitive dan pengalaman pengguna yang menyenangkan.', 'features' => ['Wireframing', 'Prototyping', 'User Testing', 'Design System']],
            ['title' => 'Digital Marketing', 'icon' => 'chart', 'description' => 'Strategi pemasaran digital untuk meningkatkan brand awareness dan konversi.', 'features' => ['SEO', 'Social Media', 'Content Marketing', 'Google Ads']],
            ['title' => 'IT Consulting', 'icon' => 'headset', 'description' => 'Konsultasi TI untuk optimasi infrastruktur dan strategi digital bisnis.', 'features' => ['System Audit', 'Cloud Migration', 'Security Assessment', 'IT Strategy']],
            ['title' => 'Maintenance & Support', 'icon' => 'shield', 'description' => 'Pemeliharaan dan dukungan teknis untuk menjaga sistem berjalan optimal.', 'features' => ['24/7 Support', 'Regular Updates', 'Bug Fixing', 'Performance Monitoring']],
        ];

        return view('services', compact('company', 'services'));
    }

    public function portfolio()
    {
        $company = ['name' => config('app.name', 'IFG Corp')];

        $projects = [
            ['title' => 'E-Commerce Platform', 'category' => 'Web Development', 'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f7a07d?w=800&q=80', 'description' => 'Platform e-commerce lengkap dengan fitur pembayaran dan manajemen inventori.'],
            ['title' => 'Corporate Website', 'category' => 'Web Development', 'image' => 'https://images.unsplash.com/photo-1460925895917-afbe65ae8364?w=800&q=80', 'description' => 'Website company profile modern dan responsif untuk perusahaan multinational.'],
            ['title' => 'Mobile Banking App', 'category' => 'Mobile App', 'image' => 'https://images.unsplash.com/photo-1556068123-b99674e0a9bb?w=800&q=80', 'description' => 'Aplikasi perbankan mobile dengan fitur transfer dan pembayaran.'],
            ['title' => 'Healthcare System', 'category' => 'Web Development', 'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&q=80', 'description' => 'Sistem manajemen kesehatan untuk rumah sakit dengan jadwal dokter.'],
            ['title' => 'Education Portal', 'category' => 'Web Development', 'image' => 'https://images.unsplash.com/photo-1544717297-fa65247778dc?w=800&q=80', 'description' => 'Portal pembelajaran online dengan fitur kelas virtual dan sertifikat.'],
            ['title' => 'Logistics App', 'category' => 'Mobile App', 'image' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=800&q=80', 'description' => 'Aplikasi logistik dengan tracking real-time dan manajemen armada.'],
        ];

        return view('portfolio', compact('company', 'projects'));
    }

    public function contact()
    {
        $company = [
            'name' => config('app.name', 'IFG Corp'),
            'address' => 'Jl. Contoh No. 123, Kota Jakarta, Indonesia',
            'phone' => '+62 21 1234 5678',
            'email' => 'info@ifgcorp.com',
            'website' => 'www.ifgcorp.com',
        ];

        return view('contact', compact('company'));
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        return redirect()->route('contact')->with('success', 'Pesan Anda telah terkirim. Kami akan segera menanggapi.');
    }
}