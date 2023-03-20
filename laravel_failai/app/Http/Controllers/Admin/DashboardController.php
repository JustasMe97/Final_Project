<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Managers\CategoriesManager;
use App\Managers\QuestionsManager;
use App\Managers\ReservationsManager;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(protected ReservationsManager $resManager, protected QuestionsManager $questionManager)
    {
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = $this->resManager->getLatestReservations();
        $questions = $this->questionManager->getLatestQuestions();
        return view('dashboard', compact('reservations', 'questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
    }
}
