<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function home()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        $page = Page::published()->where('slug', 'home')->first();

        return view('home', [
            'settings' => $settings,
            'page' => $page,
        ]);
    }

    public function about()
    {
        $page = Page::published()->where('slug', 'about')->first();
        $settings = Setting::pluck('value', 'key')->toArray();

        return view('about', [
            'page' => $page,
            'settings' => $settings,
        ]);
    }

    public function services()
    {
        $page = Page::published()->where('slug', 'services')->first();
        $settings = Setting::pluck('value', 'key')->toArray();

        return view('services', [
            'page' => $page,
            'settings' => $settings,
        ]);
    }

    public function portfolio()
    {
        $page = Page::published()->where('slug', 'portfolio')->first();
        $settings = Setting::pluck('value', 'key')->toArray();

        return view('portfolio', [
            'page' => $page,
            'settings' => $settings,
        ]);
    }

    public function solutions()
    {
        $pages = Page::published()->orderByDesc('created_at')->get();

        return view('solutions.index', [
            'pages' => $pages,
        ]);
    }

    public function showSolution(string $slug)
    {
        $page = Page::published()->where('slug', $slug)->firstOrFail();

        return view('solutions.show', [
            'page' => $page,
            'description' => Str::limit(strip_tags($page->content ?? ''), 160),
        ]);
    }

    public function contact()
    {
        $page = Page::published()->where('slug', 'contact')->first();
        $settings = Setting::pluck('value', 'key')->toArray();

        return view('contact', [
            'page' => $page,
            'settings' => $settings,
        ]);
    }

    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        return redirect()
            ->route('contact')
            ->with('success', 'Pesan Anda telah terkirim. Kami akan segera menghubungi Anda.');
    }
}