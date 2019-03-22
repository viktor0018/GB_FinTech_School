<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function index()
    {
        $data = Question::with('chapters','topics','answers')->paginate(10);
        //return response()->json($data, 200);
        return  json_encode($data);
    }
}
