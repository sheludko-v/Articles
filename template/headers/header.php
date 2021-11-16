<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="/static/css/style.css">
    <link rel="shortcut icon" href="/static/images/favicon.ico" type="image/ico">
    <title>Stigmat ONLINE | Главная</title>
</head>

<body>

<div class="container-fluid">
    <div class="row no-gutter">
        <div class="col-12">
            <header class="pd-parallax"></header>
            <nav class="navbar navbar-expand-lg navbar-dark navbar_top" style="background-color: #1F100D;">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/">STIGMAT ONLINE</a>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">Личный кабинет</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Регистрация</a>
                        </li>

                    </ul>
                    <form class="ml-3 form-inline" name="search" method="post" action="./search.php">
                        <input class="form-control" type="search" name="query" placeholder="Поиск...">
                        <button class="noBtn" type="submit">Найти</button>
                    </form>

                </div>
            </nav>
        </div>
    </div>