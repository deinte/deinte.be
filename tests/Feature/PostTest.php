<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_post_slug_is_set_when_created()
    {
        $post = Post::factory()->published()->create();

        $this->assertModelExists($post);

        $this->assertNotNull($post->slug);
    }

    public function test_post_mins_read_is_set_when_created()
    {
        $post = Post::factory()->published()->create();

        $this->assertModelExists($post);

        $this->assertNotNull($post->mins_read);
    }

    public function test_post_mins_read_is_correctly_set()
    {
        $post = Post::factory()->published()->create([
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin tincidunt orci, id tristique sem consectetur a. Nam dignissim aliquet urna, vel dignissim sem rhoncus vel. Maecenas sed aliquet ex, eu euismod libero. Aenean convallis viverra mollis. Vivamus mattis lacus et hendrerit efficitur. Praesent laoreet leo id magna pellentesque, a sollicitudin risus ullamcorper. Cras aliquet vitae velit quis porttitor. Integer dignissim non erat eget pretium. Duis ultrices, enim sit amet eleifend efficitur, eros ligula bibendum nisl, non ultricies enim libero eget dui. Vivamus ac faucibus arcu. Suspendisse rhoncus quam eu orci fermentum, interdum tristique tellus placerat. Nullam volutpat sapien id metus congue aliquet vel eget neque. Pellentesque tempus ac metus a facilisis. Nam tincidunt tincidunt libero, non vestibulum est pellentesque finibus. Duis sed sem ipsum. Pellentesque sodales dui eu urna scelerisque, sed aliquam ante imperdiet. Morbi at varius augue, id consequat arcu. Sed venenatis, elit sed lobortis cursus, erat enim bibendum lacus, in cursus dolor elit quis libero. Quisque congue rutrum porta. Vestibulum sit amet mauris nec erat egestas bibendum. Nam nisi justo, tempor ac lacus non, scelerisque luctus nisl. Sed faucibus fermentum neque, ac ultricies odio faucibus eu. Nulla malesuada, nunc et varius tempor, erat felis auctor lorem, quis porta erat justo ut nibh. Aenean tincidunt, odio id venenatis iaculis, risus massa condimentum enim, at commodo justo dui ac velit. Suspendisse malesuada elit non nunc pellentesque, vitae lacinia nisi imperdiet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis justo dui, eleifend a ante quis, finibus cursus turpis. Aliquam dignissim scelerisque maximus. Suspendisse placerat, odio nec vestibulum feugiat, ante est tempor dolor, et placerat nisi est sed lorem. Cras dictum neque semper sagittis accumsan. Morbi tincidunt vulputate leo, vitae hendrerit mauris egestas vel. Suspendisse congue imperdiet nibh in maximus. Fusce semper magna vitae elit euismod, sit amet ullamcorper nunc molestie. Quisque elementum finibus est, vitae dapibus neque. Morbi volutpat, orci vel tincidunt tincidunt, diam dolor consectetur nibh, in molestie felis diam id lacus. In a neque condimentum, aliquet odio nec, facilisis leo. Nulla lobortis quam orci, vel iaculis eros pellentesque ut. Duis consequat nisl diam, ac sollicitudin ex hendrerit ac. Quisque tristique iaculis dolor, et gravida arcu vehicula et. Duis nec odio et arcu laoreet ultricies vitae hendrerit purus. Suspendisse suscipit, magna vitae feugiat sollicitudin, sem nibh dapibus tortor, sed eleifend sapien nibh ac ligula. Donec hendrerit semper felis, at fringilla elit semper eget.'
        ]);

        $this->assertModelExists($post);

        $this->assertEquals(2, $post->mins_read);

        $post = Post::factory()->published()->create([
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin tincidunt orci'
        ]);

        $this->assertNotEquals(2, $post->mins_read);
        $this->assertEquals(1, $post->mins_read);
    }

    public function test_post_is_readable()
    {
        $post = Post::factory()->published()->create();

        $response = $this->get('/posts/' . $post->slug);

        $response->assertStatus(200);

        $response->assertSee($post->title);
    }

    public function test_unpublished_post_is_not_readable()
    {
        $post = Post::factory()->unpublished()->create();

        $response = $this->get('/posts/' . $post->slug);

        $response->assertStatus(404);
    }
}
