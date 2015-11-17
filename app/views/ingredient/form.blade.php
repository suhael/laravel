<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:700);

        body {
            margin:0;
            font-family:'Lato', sans-serif;
            text-align:center;
            color: #999;
        }

    </style>
</head>
<body>
<div class="welcome">
    <h1>create ingredient.</h1>
    {{ Form::model($ingredient, array('route' => 'ingredient.store')) }}
    {{ Form::label('title', 'title') }}
    {{ Form::text('title') }}
    {{ Form::submit('submit') }}
    {{ Form::close() }}
</div>
</body>
</html>
