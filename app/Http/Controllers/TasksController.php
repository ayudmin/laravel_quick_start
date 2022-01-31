<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TasksController extends Controller
{
    public function store(Request $request)
    {
        $task = new Task;
    }
}
