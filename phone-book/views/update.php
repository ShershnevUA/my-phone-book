<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Phone Book </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/style.css"
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/main">My Phone book</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/main">Список номеров</a></li>
                <li class="active"><a href="/add">Добавить номер<span class="sr-only">(current)</span></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="number_form" method="post">
                <div class="form-group">
                    <label for="exampleInputNumber">Номер</label>
                    <input type="phone" class="form-control" id="exampleInputNumber" name="form_number"
                           value="<?= $numbersItem['number'] ?>">
                </div>
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" class="form-control" id="name" name="form_name" placeholder="Имя"
                           value="<?= $numbersItem['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    <input class="form-control" id="description" name="form_description" placeholder="Описание"
                           value="<?= $numbersItem['description'] ?>">
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary" name="update">ОБНОВИТЬ НОМЕР</button>
                </div>
            </form>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="footer_text">Created by Alexander</br>
                    MVC+PDO+AJAX+BOOTSTRAP</p>
            </div>
        </div>
    </div>
</footer>
<script src="/public/js/jquery-3.1.1.js"></script>
<script src="/public/js/jquery.validate.min.js"></script>
<script src="/public/js/app.js"></script>
</body>
</html>