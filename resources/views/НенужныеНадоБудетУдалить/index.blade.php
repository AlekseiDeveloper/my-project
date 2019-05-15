<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test-task</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome/css/font-awesome.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.datetimepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css')}}">

</head>

<body>

<header>
    <div class="wrap-menu-outside">
        <div class="container">
            <div class="main-menu-top">
                <div class="row">
                    <div class="col-xl-18">
                        <div class="main-menu-top__left">
                            <ul>
                                <li><a href="#">Главная</a></li>
                                <li><a href="#">Наши цены</a></li>
                                <li><a href="#">Видео курсы</a></li>
                                <li><a href="#">О нас</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="main-menu-top__right">
                            <ul>
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                    @else
                                        <a href="{{ route('login') }}">Login</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}">Register</a>
                                        @endif
                                    @endauth
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-xl-24">
                <div class="title-widget">
                    <h1>Добавление новой статьи</h1>
                </div>
            </div>
            <div class="col-xl-18">
                <div class="wrap-create-form">
                    <div class="row">
                        <div class="col-xl-24">
                            <div class="wrap-form-create">
                                <div class="form-create">
                                    <form action="" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-xl-24">
                                                <input class="title" type="text" name="title" placeholder="Введите тему статьи">
                                            </div>
                                            <div class="col-xl-24">
                                                <input class="date"  type="text" name="date" id="filter-date"/>
                                                <label for="filter-date"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                                            </div>
                                            <div class="col-xl-24">
                                                <div class="input-group mb-3">
                                                    <select class="custom-select" id="inputGroupSelect02" name="selected">
                                                        <option selected>Choose.</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-24">
                                                <textarea name="text" placeholder="Введите текст"></textarea>
                                            </div>
                                            <div class="col-xl-24">
                                                <button class="btn-add" type="submit">Добавить статью</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="right-bar">
                    <div class="title-bar">
                        <h3>Теги</h3>
                    </div>
                    <div class="tags">
                        <a href="#" class="tag-big">Laravel</a>
                        <a href="#" class="tag-small">php</a>
                        <a href="#" class="tag-extra-small">ооп</a>
                        <a href="#" class="tag-small">Managment</a>
                        <a href="#" class="tag-extra-small">favorites</a>
                        <a href="#" class="tag-extra-small">ооп</a>
                        <a href="#" class="tag-big">Verse</a>
                        <a href="#" class="tag-big">Better</a>
                        <a href="#" class="tag-extra-small">Worse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-24">
                <div class="copy">
                    <p>&copy; 2019 this is a project</p>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src=" {{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery.datetimepicker.js')}}"></script>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script>

    jQuery(document).ready(function () {
        'use strict';

        jQuery('#filter-date').datetimepicker();
    });
</script>
</body>
</html>