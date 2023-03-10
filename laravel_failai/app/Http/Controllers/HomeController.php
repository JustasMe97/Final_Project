<?php

namespace App\Http\Controllers;

use App\Managers\CategoriesManager;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(protected CategoriesManager $manager){
    }
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request)
    {
        $categories=$this->manager->getCategories();
        return view('home', compact('categories'));
    }
}
