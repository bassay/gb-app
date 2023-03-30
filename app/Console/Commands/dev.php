<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Console\Command;

class dev extends Command {

  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'dev';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Generate DEV content for site';

  /**
   * Execute the console command.
   */
  public function handle(): void {

    //    dd($data);
    //    $this->prepareData();


    $post = Post::first();
    $category = Category::find(3);

    //    dd($post->category->toArray());
        dd($category->posts->toArray());


  }

  public function prepareData() {
    $faker = fake('ru_ru');
    //    $data = [];
    //
    //    for ($i = 0; $i < 5; $i++) {
    //      $gData = [
    ////        'name' => $faker->firstNameMale(),
    ////        'surname' => $faker->lastName(),
    ////        'email' => $faker->freeEmail(),
    ////        'age' => $faker->randomNumber(2),
    //          'title' =>  $faker->realText(100, 3),
    //          'text' =>  $faker->realTextBetween(200, 400),
    //          'author' =>  $faker->name() ,
    //      ];
    //      $data[$i] = $gData;
    //    }

    $category1 = Category::create([
      'title' => $faker->jobTitle,
    ]);
    $category2 = Category::create([
      'title' => $faker->jobTitle,
    ]);

    Post::create([
      'title' => $faker->realText(100, 3),
      'text' => $faker->realTextBetween(200, 400),
      'author' => $faker->userName(),
      'category_id' => $category1->id,
    ]);
    Post::create([
      'title' => $faker->realText(100, 3),
      'text' => $faker->realTextBetween(200, 400),
      'author' => $faker->userName(),
      'category_id' => $category1->id,
    ]);
    Post::create([
      'title' => $faker->realText(100, 3),
      'text' => $faker->realTextBetween(200, 400),
      'author' => $faker->userName(),

      'category_id' => $category2->id,
    ]);
    Post::create([
      'title' => $faker->realText(100, 3),
      'text' => $faker->realTextBetween(200, 400),
      'author' => $faker->userName(),
      'category_id' => $category2->id,
    ]);
    Post::create([
      'title' => $faker->realText(100, 3),
      'text' => $faker->realTextBetween(200, 400),
      'author' => $faker->userName(),
      'category_id' => $category2->id,
    ]);

    dump('Prepare Good');

  }


}


