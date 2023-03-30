<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;

class CategoryController extends Controller {

  //
  public function index() {
    $categories = Category::all();

    return view('category.index', compact('categories'));
  }

  public function create() {
    return view('category.create');
  }

  public function store(StoreRequest $request) {
    $data = $request->validated();
    Category::create($data);
    return redirect()->route('category.index');
  }

  public function edit(Category $category) {
    return view('category.edit' , compact('category'));
  }

  public function update(UpdateRequest $request, Category $category) {
    $data = $request->validated();
    $category->update($data);
    return redirect()->route('category.index');
  }

  public function destroy() {
    return 'method';
  }

}
