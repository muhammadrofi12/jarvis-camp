<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // mengambil semua data taks di model
        $tasks = Task::getAll();

        //mengirim data taks ke view
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    public function show($id)
    {
        $task = Task::getById($id);

        if (!$task) {
            return redirect()->route('task.index')->with('error', 'Tugas tidak ditemukan.');
        }

        return view('tasks.showTask', compact('task'));
    }
}
