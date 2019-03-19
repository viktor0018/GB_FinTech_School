<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    //
    public function index()
    {
        $topics = Topic::with('chapter');
        return  $topics;
    }



}
