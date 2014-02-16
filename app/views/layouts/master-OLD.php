<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Triple Triad</title>
	<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
	<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.min.js"></script>
	<script type='text/javascript' src="http://codef0rmer.github.io/angular-dragdrop/angular-dragdrop.min.js"></script>
	<style type='text/css'>
	div {
	width: 100px;
	height: 100px;
	}
	.drag {
	background-color: red;
	}
	.drag2 {
	background-color: green;
	}
	.drop {
	background-color: blue;
	}
	</style>
</head>
<body>
	<div ng-app="app" ng-controller="x">

		<div class="drag" data-drag="true" jqyoui-draggable="{animate:true, onStart:'startCallback', onStop:'stopCallback', onDrag:'dragCallback'}" data-jqyoui-options="{snap:'.drop', snapMode:'inner', snapTolerance:50, revert:'invalid', cursor:'move'}"></div>

		<div class="drag2" data-drag="true" jqyoui-draggable="{animate:true, onStart:'startCallback', onStop:'stopCallback', onDrag:'dragCallback'}" data-jqyoui-options="{snap:'.drop', snapMode:'inner', snapTolerance:50, revert:'invalid', cursor:'move'}"></div>

		<div class="drop" ng-model="item2" data-drop="{{item2.drop}}" jqyoui-droppable="{onDrop:'dropCallback(item2)'}"></div>

	</div>
	<script type='text/javascript'>
	var app = angular.module('app', ['ngDragDrop']);

	app.controller('x', function ($scope)
	{
		$scope.item2 = {'drop':true};

		$scope.startCallback = function (event, ui) {
		    console.log('You started draggin');
		};

		$scope.stopCallback = function (event, ui) {
		    console.log('Why did you stop draggin me?');
		};

		$scope.dragCallback = function (event, ui) {
		    console.log('hey, look I`m flying');
		};

		$scope.dropCallback = function (event, ui, item2) {
		    item2.drop = false;
		};
	});
	</script>
</body>
</html>