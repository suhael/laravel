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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

    <div data-ng-app="listRecipes" data-ng-controller="listRecipesController">
        <div class="container">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th>Recipe</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>Filter: <input type="text" data-ng-model="titleFilter"></td>
                </tr>
                <tr ng-repeat="recipe in recipes | filter:titleFilter | orderBy:'title'">
                    <td>{{ recipe.id }}</td>
                    <td>{{ recipe.title }}</td>
                    <td>
                        <button class="btn" data-ng-click="deleteRecipe(recipe.id)">
                            <span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>

    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
    <script>
        var app = angular.module("listRecipes", []);
        app.controller("listRecipesController", function($scope, $http) {

            $scope.recipes = {};
            $scope.getAllRecipes = function(){
                $http.get("http://localhost/cookbook/public/resource/recipe")
                    .success(function(response) {$scope.recipes = response;});
            }
            $scope.deleteRecipe = function(id){
                $http({
                    method  : 'DELETE',
                    url     : 'http://localhost/cookbook/public/resource/recipe/'+id
                });
                $scope.getAllRecipes();
            }
            $scope.getAllRecipes();

        });
    </script>

</body>
</html>