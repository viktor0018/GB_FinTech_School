<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function index()
    {
        $data = Question::with('chapters','topics','answers')->get();;
        return response()->json($data, 200);
    }
}
