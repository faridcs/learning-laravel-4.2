@extends('layout')
@section('content')

    <section class="header section-padding">
        <div class="background">&nbsp;</div>
        <div class="container">
            <div class="header-text">
                <h1>Learning Laravel: The Easiest Way</h1>
                <p>
                    Fastest way to learn developing web applications
                    <br /> using Laravel 4 framework!
                </p>
            </div>
        </div>
    </section>

    <div class="container">
        <section class="section-padding">
            <div class="jumbotron text-center">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>
                            <span class="grey">Our</span> To-do List
                        </h1>
                    </div>

                    @if ($tasks->isEmpty())
                        <p> Currently, there is no task!</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Finish</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tasks as $task)
                                    <tr>
                                        <td>{{ $task->id }} </td>
                                        <td>{{ $task->title }}</td>
                                        <td>{{ $task->body}}</td>
                                        <td>
                                            <a href="{{ action('TasksController@edit', $task->id) }}" class="btn btn-info">Edit</a>
                                            <a href="{{ action('TasksController@delete', $task->id) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif

                    <div class="panel-footer clearfix">
                        <a href="{{ action('TasksController@create') }}" class="btn btn-primary btn-lg">Create</a>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <div class="bottom-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-2 navbar-brand">
                    <a href="/">Learning Laravel</a>
                </div>

                <div class="col-md-10">
                    <ul class="bottom-links">
                        <li><a href="./">Home</a></li>
                        <li><a href="./about">About</a></li>
                        <li><a href="./contact">Contact</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>


@stop