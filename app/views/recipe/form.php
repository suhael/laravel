<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
</head>
<body>

<div data-ng-app="" data-ng-controller="formController" data-ng-init="message='welcome'">

    {{message}}

    <form novalidate>
        First Name:<br>
        <input type="text" data-ng-model="recipe.title"><br>
        <br><br>
        <button data-ng-click="submit()">submit</button>
        <button data-ng-click="reset()">RESET</button>
    </form>
    <p>form = {{recipe}}</p>
    <p>ingerdients = {{ingredients}}</p>

    <label ng-repeat="fruitName in fruits">
        <input
            type="checkbox"
            name="selectedFruits[]"
            value="{{fruitName}}"
            ng-checked="selection.indexOf(fruitName) > -1"
            ng-click="toggleSelection(fruitName)"
            > {{fruitName}}
    </label>

    <%foreach ($mealtimes as $mealtime)%>
    <p>This is user <% $mealtime->id %></p>
    <%endforeach%>


</div>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
<script>
    function formController ($scope, $http) {
        $scope.master = {};
        $scope.recipe = {};
        $scope.ingredients = [];
        $scope.fruits = ['apple', 'orange', 'pear', 'naartjie'];
        $scope.reset = function() {
            $scope.recipe = angular.copy($scope.master);
        };
        $scope.submit = function (){
            $http({
                method  : 'POST',
                url     : 'http://localhost/cookbook/public/recipe',
                data    : $scope.recipe,  // pass in data as strings
                headers : { 'Content-Type': 'application/json' }  // set the headers so angular passing info as form data (not request payload)
            })
            .success(function(data) {
                $scope.message = "recpie submitted";
            });
        };

        $scope.toggleSelection = function toggleSelection(fruitName) {
            var idx = $scope.ingredients.indexOf(fruitName);

            // is currently selected
            if (idx > -1) {
                $scope.ingredients.splice(idx, 1);
            }

            // is newly selected
            else {
                $scope.ingredients.push(fruitName);
            }
            $scope.recipe.ingredients = $scope.ingredients;
        };


        $scope.reset();
    }
</script>
</body>
</html>