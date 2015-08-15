@extends('layout')
@section('content')

    <div class="container">
        <section class="section-padding">
            <div class="jumbotron text-center">

                <h1>Contact Us.</h1>
                <p>Please contact us by sending a message using the form below:</p>
                {{ HTML::ul($errors->all(), array('class'=>'errors'))}}
                {{ Form::open(array('url' => 'contact','class' => 'form')) }}
                {{ Form::label('Subject') }}
                {{ Form::text('subject', null, ['class'=>'form-control']) }}
                <br />
                {{ Form::label('Message') }}
                {{ Form::textarea('message', null, ['class'=>'form-control']) }}
                <br />
                {{ Form::submit('Submit', ['class'=>'btn btn-primary']) }}
                {{ Form::close() }}

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