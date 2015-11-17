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
            color: #999;
        }

    </style>
</head>
<body>
<div>
    <h1>List recipes.</h1>
    <table>
        <tbody>
            @foreach ($tags as $tag)
            <tr>
                <td><a href="{{ URL::to('tag/'.$tag->id) }}">{{ $tag->title }}</a></td>
                <td><a href="{{ URL::to('tag/'.$tag->id.'/edit') }}">edit</a></td>
                <td>
                    {{ Form::model($tag, array('route' => array('tag.destroy', $tag->id), 'method' => 'DELETE')) }}
                    {{ Form::submit('Delete') }}
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>