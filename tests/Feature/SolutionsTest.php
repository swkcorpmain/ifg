<?php

namespace Tests\Feature;

use App\Models\Page;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SolutionsTest extends TestCase
{
    use RefreshDatabase;

    public function test_solutions_index_lists_published_pages_only(): void
    {
        Page::create([
            'title' => 'Lapangan Padel',
            'slug' => 'lapangan-padel',
            'content' => '<p>Pembangunan lapangan padel.</p>',
            'is_published' => true,
        ]);

        Page::create([
            'title' => 'Gedung Bertingkat Draft',
            'slug' => 'gedung-bertingkat-draft',
            'content' => '<p>Konten draft.</p>',
            'is_published' => false,
        ]);

        $this->get(route('solutions.index'))
            ->assertOk()
            ->assertSee('Lapangan Padel')
            ->assertDontSee('Gedung Bertingkat Draft');
    }

    public function test_published_solution_detail_is_available_and_draft_is_not(): void
    {
        Page::create([
            'title' => 'Gedung Bertingkat',
            'slug' => 'gedung-bertingkat',
            'content' => '<p>Konten gedung bertingkat.</p>',
            'is_published' => true,
        ]);

        Page::create([
            'title' => 'Draft',
            'slug' => 'draft',
            'content' => '<p>Konten draft.</p>',
            'is_published' => false,
        ]);

        $this->get(route('solutions.show', ['slug' => 'gedung-bertingkat']))
            ->assertOk()
            ->assertSee('Gedung Bertingkat')
            ->assertSee('Konten gedung bertingkat.');

        $this->get(route('solutions.show', ['slug' => 'draft']))
            ->assertNotFound();
    }
}
