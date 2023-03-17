<?php

namespace App\Http\Controllers;

use App\Managers\CategoriesManager;
use App\Managers\RentalsManager;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct(protected RentalsManager $manager, protected CategoriesManager $catManager)
    {
    }
    public function show(null|Category $category, Request $request) {

        $category=$this->catManager->getCategoryById($category->id?:$request->category_id);
        $rentals=$this->manager->getRentalsByCategoryWithImages($category);
        return view('public.category', compact('category', 'rentals'));
    }

    public function index()
    {
        return view('public.categories');
    }
}
