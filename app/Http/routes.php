<?php

use Illuminate\Http\Request;
use App\Task;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $tasks = Task::orderBy('created_at', 'asc')->get();

    return view('tasks.task', [
        'tasks' => $tasks
    ]);
});


Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->dname = $request->dname;
    $task->save();

    return redirect('/');
});


Route::delete('/task/{task}', function (Task $task) {
    $task->delete();

    return redirect('/');
});

Route::get('/task/{task}', function (Task $task) {

    return view('partials.search',[
        'task' => $task]);
});