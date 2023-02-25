<?php

namespace Tests\Feature;

use App\Models\Post;
use Tests\TestCase;

class PostMarkdownTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_markdown_renders_bold()
    {
        $post = Post::factory()->published()->create([
            'text' => 'This is **bold** text.',
        ]);

        $this->assertStringContainsString('<strong>', $post->text_as_html);
    }

    public function test_markdown_renders_italic()
    {
        $post = Post::factory()->published()->create([
            'text' => 'This is *italic* text.',
        ]);

        $this->assertStringContainsString('<em>', $post->text_as_html);
    }

    public function test_markdown_renders_single_line_code()
    {
        $post = Post::factory()->published()->create([
            'text' => 'This is `code` text.',
        ]);

        $this->assertStringContainsString('<code>', $post->text_as_html);
    }

    public function test_markdown_renders_unordered_list_and_ordered_list()
    {
        $post = Post::factory()->published()->create([
            'text' => '* Item 1
* Item 2',
        ]);

        $this->assertStringContainsString('<ul>', $post->text_as_html);
        $this->assertStringContainsString('<li>Item 1</li>', $post->text_as_html);
        $this->assertStringContainsString('<li>Item 2</li>', $post->text_as_html);

        $this->get('/posts/'.$post->slug)
            ->assertStatus(200)
            ->assertSeeInOrder([
                '<ul>',
                '<li>Item 1</li>',
                '<li>Item 2</li>',
                '</ul>',
            ], false);
    }
}
