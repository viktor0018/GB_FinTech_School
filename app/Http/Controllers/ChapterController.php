<?php

namespace App\Http\Controllers;

use App\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    //
    public function index()
    {
        $data = Chapter::with('topics');
        return response()->json($data, 200);
    }
}
