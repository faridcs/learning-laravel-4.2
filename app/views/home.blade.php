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
                <h1><span class="grey">WELCOME TO</span> OUR HOME</h1>
                <p>
                    Wanna learn Laravel? You've found a great way to start with.
                </p>
            </div>

            <div class="jumbotron text-center">
                <div class="row">
                    <div class="showcase-box col-md-4">
                        <div class="showcase-item">
                            <img src="{{ asset('public/assets/img/icon1.png') }}" />
                            <p>
                                The most comprehensive book of Laravel
                            </p>
                        </div>
                    </div>
                    <div class="showcase-box col-md-4">
                        <div class="showcase-item">
                            <img src="{{ asset('public/assets/img/icon2.png') }}" />
                            <p>
                                Building many web applications while learning
                            </p>
                        </div>
                    </div>
                    <div class="showcase-box col-md-4">
                        <div class="showcase-item">
                            <img src="{{ asset('public/assets/img/icon3.png') }}" />
                            <p>
                                It's not just a book, it's a great community
                            </p>
                        </div>
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