<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::model('task','Task');

Route::get('/', function() {
	return View::make('home');
});

Route::get('/task','TasksController@task');
Route::get('/create','TasksController@create');
Route::get('/edit/{task}','TasksController@edit');
Route::get('/delete/{task}','TasksController@delete');
/*Route::get('/', function() {

	$task = new Task;
	$task->title = 'Eating breakfast';
	$task->body = 'Remember to buy bread, egg and milk.';
	$task->save();

	$task = Task::find(1);
	$task->title = 'Eating different breakfast';
	$task->body = 'Remember to buy beefsteak';
	$task->save();

	return View::make('home');
});*/

Route::get('/about', function() {
	return View::make('about');
});

Route::get('/contact', function() {
	return View::make('contact');
});

Route::post('contact', function() {
	$data = Input::all();
	$rules = array('subject' => 'required', 'message' => 'required');

	$validator = Validator::make($data, $rules);

	if($validator->fails()) {
		return Redirect::to('contact')->withErrors($validator)->withInput();
	}

	$emailcontent = array ('subject' => $data['subject'], 'emailmessage' => $data['message']);

	Mail::send('emails.contactemail', $emailcontent, function($message)
	{
		$message->to('farid.vosoughi.65@gmail.com','Learning Laravel Support')->subject('Contact via Our Contact Form');
	});

	return 'Your message has been sent';
});

/*Route::get('/', function()
{
	Schema::create('tasks', function($table) {
		$table->increments('id');
		$table->string('title');
		$table->text('body');
		$table->integer('user_id');
		$table->boolean('done');
		$table->timestamps();

	});
});*/


Route::post('/create', 'TasksController@saveCreate');
Route::post('/edit', 'TasksController@doEdit');
Route::post('/delete', 'TasksController@doDelete');