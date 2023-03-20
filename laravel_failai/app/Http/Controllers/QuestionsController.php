<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Managers\ImagesManager;
use App\Managers\QuestionsManager;
use App\Models\Image;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function __construct(protected QuestionsManager $manager)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuestionRequest $request){
        $this->manager->createQuestion($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $this->manager->destroy($question);
        return redirect()->back();
    }
}
