@extends('layout')
@section('content')

    <div class="container">
        <section class="section-padding">
            <div class="jumbotron text-center">

                <h1>About Me</h1>
                <p>Learning Laravel is a beginner to intermediate level book, designed for any PHP developer at all levels. The main goal of this book is to build a solid foundation for developers to build their next web applications with Laravel.</p>


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