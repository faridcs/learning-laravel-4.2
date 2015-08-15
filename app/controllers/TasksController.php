<?php
/**
 * Created by PhpStorm.
 * User: Farid
 * Date: 8/15/2015
 * Time: 10:56 AM
 */

class TasksController extends BaseController {

    public function task() {
        $tasks = Task::all();
        return View::make('task', compact('tasks'));
    }

    public function create() {
        return View::make('create');
    }

    public function edit(Task $task) {
        return View::make('edit', compact('task'));
    }

    public function delete(Task $task) {
        return View::make('delete', compact('task'));
    }

    public function saveCreate() {
        $input = Input::all();

        $task = new Task;
        $task->title = $input['title'];
        $task->body = $input['body'];
        $task->save();

        return Redirect::action('TasksController@task');
    }

    public function doEdit() {
        $task = Task::findOrFail(Input::get('id'));
        $task->title = Input::get('title');
        $task->body = Input::get('body');
        $task->done = Input::get('done');
        $task->save();

        return Redirect::action('TasksController@task');
    }

    public function doDelete() {
        $task = Task::findOrFail(Input::get('id'));
        $task->delete();

        return Redirect::action('TasksController@task');
    }
}