<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <form action="{{ route('invite') }}" method="post">
            {{ csrf_field() }}
            <input type="email" name="email" />
            <button type="submit">Send invite</button>
        </form>
    </div>
</body>
</html>
