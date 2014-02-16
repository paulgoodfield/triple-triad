<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Triple Triad</title>
	<link rel="stylesheet" href="<?php echo asset('styles/base.css'); ?>">
	<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
	<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.min.js"></script>
	<script type='text/javascript' src="http://codef0rmer.github.io/angular-dragdrop/angular-dragdrop.min.js"></script>
</head>
<body>
	<div ng-app="app" ng-controller="x">

		<div class="card-holder">

			<div class="card--mine" data-drag="true" jqyoui-draggable="{animate:true, onStart:'startCallback', onStop:'stopCallback', onDrag:'dragCallback'}" data-jqyoui-options="{snap:'.grid__item', snapMode:'inner', snapTolerance:75, revert:'invalid', cursor:'move'}">
				<div class="card__name">Card 1</div>
				<div class="card__up">1</div>
				<div class="card__right">2</div>
				<div class="card__down">3</div>
				<div class="card__left">4</div>
			</div>

			<div class="card--mine" data-drag="true" jqyoui-draggable="{animate:true, onStart:'startCallback', onStop:'stopCallback', onDrag:'dragCallback'}" data-jqyoui-options="{snap:'.grid__item', snapMode:'inner', snapTolerance:75, revert:'invalid', cursor:'move'}">
				<div class="card__name">Card 2</div>
				<div class="card__up">4</div>
				<div class="card__right">3</div>
				<div class="card__down">2</div>
				<div class="card__left">1</div>
			</div>

		</div>

		<div class="grid">
			<div class="grid__item" ng-model="griditem" data-drop="{{griditem.drop}}" jqyoui-droppable="{onDrop:'dropCallback(griditem)'}"></div>
		</div>

	</div>
	<script type='text/javascript'>
	var app = angular.module('app', ['ngDragDrop']);

	app.controller('x', function ($scope)
	{
		$scope.griditem = {'drop':true};

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