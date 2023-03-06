<?php

namespace App\Managers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoriesManager
{
    public function getCategories(): Collection
    {
        $rentals = Category::query()->with(['parent'])->get();


        return $rentals;
    }

    public function createCategory(CategoryRequest $request): Category
    {
        $category = Category::create($request->all());

        return $category;
    }

    public function updateCategory(CategoryRequest $request, Category $category): Category
    {
        $category->update($request->all());
        return $category;
    }

    public function deleteCategory(Category $category)
    {
        $category->delete();
    }
}
