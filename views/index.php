<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Phone Book </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/style.css">
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
                <li class="active"><a href="/main">Список номеров<span class="sr-only">(current)</span></a></li>
                <li><a href="/add">Добавить номер</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>№</td>
                    <td>Имя</td>
                    <td>Номер</td>
                    <td>Описание</td>
                    <td>Действия</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($numbers as $number): ?>
                    <tr>
                        <td><?= $number['id'] ?></td>
                        <td><?= $number['name'] ?></td>
                        <td><?= $number['number'] ?></td>
                        <td><?= $number['description'] ?></td>
                        <td>
                            <a class="btn btn-warning" href="/update/<?= $number['id'] ?>">ИЗМЕНИТЬ</a>
                            <a class="delete-number btn btn-danger" data-id="<?= $number['id'] ?>">УДАЛИТЬ</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-12 text-center">
            <a href="/add" type="button" class="btn btn-lg btn-primary">НОВАЯ ЗАПИСЬ</a>
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