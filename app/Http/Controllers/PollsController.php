<?php

namespace App\Http\Controllers;

use App\Poll;
use Illuminate\Http\Request;

class PollsController extends Controller
{
    public function index()
    {
        return response()->json(Poll::get(), 200);
    }
    public function show($id)
    {
        return response()->json(Poll::find($id), 200);
    }
}
