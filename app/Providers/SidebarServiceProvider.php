<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class SidebarServiceProvider extends ServiceProvider {

  /**
   * Register services.
   */
  public function register(): void {
    //
    View::composer('layout.nav-category', function ($view) {
      $view->with('categories', Category::all());
    });
  }

  /**
   * Bootstrap services.
   */
  public function boot(): void {
    //
  }

}
