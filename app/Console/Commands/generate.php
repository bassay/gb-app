<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class generate extends Command {

  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'generate';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Generate content for site';

  /**
   * Execute the console command.
   */
  public function handle(): void {
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

    Post::create([
      'title' => $faker->realText(100, 3),
      'text' => $faker->realTextBetween(200, 400),
      'author' => $faker->userName(),
    ]);
    Post::create([
      'title' => $faker->realText(100, 3),
      'text' => $faker->realTextBetween(200, 400),
      'author' => $faker->userName(),
    ]);
    Post::create([
      'title' => $faker->realText(100, 3),
      'text' => $faker->realTextBetween(200, 400),
      'author' => $faker->userName(),
    ]);
    Post::create([
      'title' => $faker->realText(100, 3),
      'text' => $faker->realTextBetween(200, 400),
      'author' => $faker->userName(),
    ]);
    Post::create([
      'title' => $faker->realText(100, 3),
      'text' => $faker->realTextBetween(200, 400),
      'author' => $faker->userName(),
    ]);

//    dd($data);

  }


  }


