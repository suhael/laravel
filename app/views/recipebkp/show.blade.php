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
    {{ $recipe->title }}
    @foreach ($recipe->ingredients as $ingredient)
    {{ $ingredient->title }}
    @endforeach
</div>
</body>
</html>