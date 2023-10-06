<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function list()
    {
        // Ici la methode load('category') permet de charger les attrivbuts de l'element de la table category qui est lié a ma task
        $tasks = Task::all(); //->load('category');
        return $tasks;
    }

    public function show($id)
    {
        $task = Task::find($id);

        return $task;
    }

    public function create(Request $request)
    {
        $task = new Task();

        $task->title = $request->title;
        if ($task->save()) {
            return response()->json($task, 201);
        } else {
            return response()->json(null, 500);
        }
    }

    public function update(Request $request, $id)
    {
        // Ci dessous je recupere l'element de ma table tasks qui a pour id l'id donnée en parametre
        $task = Task::find($id);

        $task->title = $request->title;

        if ($task->save()) {
            return response()->json($task, 200);
        } else {
            return response()->json(null, 500);
        }
    }

    public function delete($id)
    {
        $task = Task::find($id);
      
        if ($task->delete()) {
            return response()->json(true, 204);
        } else {
            return response()->json(false, 500);
        }
    }
}