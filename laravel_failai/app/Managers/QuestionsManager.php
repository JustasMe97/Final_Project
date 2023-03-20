<?php

namespace App\Managers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\FuelTypeRequest;
use App\Http\Requests\GearboxRequest;
use App\Http\Requests\QuestionRequest;
use App\Models\Category;
use App\Models\FuelType;
use App\Models\Gearbox;
use App\Models\Image;
use App\Models\Question;
use App\Models\Rental;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Collection;
use mysql_xdevapi\CollectionRemove;

class QuestionsManager
{

    public function getLatestQuestions(): Collection
    {
        $questions= Question::latest()->take(5)->get();
        return $questions;
    }
    public function destroy(Question $question)
    {
        $question->delete();
    }

    public function createQuestion(QuestionRequest $request)
    {
        $question = Question::create($request->all());

        return $question;
    }
}
