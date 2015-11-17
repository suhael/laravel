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
            @foreach ($recipes as $recipe)
            <tr>
                <td><a href="{{ URL::to('recipe/'.$recipe->id) }}">{{ $recipe->title }}</a></td>
                <td><a href="{{ URL::to('recipe/'.$recipe->id.'/edit') }}">edit</a></td>
                <td>
                    {{ Form::model($recipe, array('route' => array('recipe.destroy', $recipe->id), 'method' => 'DELETE')) }}
                    {{ Form::submit('Delete') }}
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div ng-app="">
    <p>Name: <input type="text" ng-model="name"></p>
    <p ng-bind="name"></p>
</div>

<div ng-app="" ng-controller="customersController">

    <ul>
        <li ng-repeat="x in names">
            {{ x.Name + ', ' + x.Country }}
        </li>
    </ul>

</div>

<script>
    function customersController($scope,$http) {
        $http.get("http://http://localhost/cookbook/public/recipe")
            .success(function(response) {$scope.names = response;});
    }
</script>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</body>
</html>