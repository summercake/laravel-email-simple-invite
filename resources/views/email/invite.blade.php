<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <p>Hi</p>
        <p>Someone has invited to access their accout</p>
        <a href="{{route('accept', $invite->token)}}">Click me to activate</a>
    </div>
</body>
</html>
