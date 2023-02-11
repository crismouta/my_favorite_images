<?php

namespace Tests\Feature\ImagesManager;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\MyImage;

class ImagesManagerTest extends TestCase
{
  use RefreshDatabase;
  /**
   * A basic feature test example.
   *
   * @return void
   */
  public function test_an_image_can_be_created_by_an_user()
  {
    $this->withoutExceptionHandling();

    $user = User::factory()->create();
    $this->actingAs($user);

    $response = $this->post(route('store'), [
      'title' => 'Test image title',
      'description' => 'Test image description',
      'image' => 'Test image'
    ]);

    $response->assertRedirect(route('home'));
    $this->assertCount(1, MyImage::all());

    $image = MyImage::first();

    $this->assertEquals($image->title, 'Test image title');
    $this->assertEquals($image->description, 'Test image description');
    $this->assertEquals($image->image, 'Test image');

  }

  public function test_a_image_can_be_updated_by_an_user()
  {
    $this->withoutExceptionHandling();

    $user = User::factory()->create();
    $this->actingAs($user);

    $response = $this->post(route('store'), [
      'title' => 'Test image title',
      'description' => 'Test image description',
      'image' => 'Test image'
    ]);

    $this->assertCount(1, MyImage::all());

    $image = MyImage::first();

    $response = $this->put(route('update', $image->id), [
          'title' => 'Update Title',
    ]);
        
    $this->assertEquals(MyImage::first()->title, 'Update Title');
  }
}