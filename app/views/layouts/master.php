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

			<div class="card--{{card1.owner}}" data-drag="true" jqyoui-draggable="{animate:true, onStart:'startCallback(card1)', onStop:'stopCallback', onDrag:'dragCallback'}" data-jqyoui-options="{snap:'.grid__item', snapMode:'inner', snapTolerance:75, revert:'invalid', cursor:'move'}">
				<div class="card__name">Card 1</div>
				<div class="card__up">{{card1.up}}</div>
				<div class="card__right">{{card1.right}}</div>
				<div class="card__down">{{card1.down}}</div>
				<div class="card__left">{{card1.left}}</div>
			</div>

			<div class="card--{{card2.owner}}" data-drag="true" jqyoui-draggable="{animate:true, onStart:'startCallback(card2)', onStop:'stopCallback', onDrag:'dragCallback'}" data-jqyoui-options="{snap:'.grid__item', snapMode:'inner', snapTolerance:75, revert:'invalid', cursor:'move'}">
				<div class="card__name">Card 2</div>
				<div class="card__up">{{card2.up}}</div>
				<div class="card__right">{{card2.right}}</div>
				<div class="card__down">{{card2.down}}</div>
				<div class="card__left">{{card2.left}}</div>
			</div>

		</div>

		<div class="grid">
			<div class="grid__item grid__item--1" ng-model="griditem1" data-drop="{{griditem1.drop}}" jqyoui-droppable="{onDrop:'dropCallback(griditem1)'}"></div>
			<div class="grid__item grid__item--2" ng-model="griditem2" data-drop="{{griditem2.drop}}" jqyoui-droppable="{onDrop:'dropCallback(griditem2)'}"></div>
			<div class="grid__item grid__item--3" ng-model="griditem3" data-drop="{{griditem3.drop}}" jqyoui-droppable="{onDrop:'dropCallback(griditem3)'}"></div>

			<div class="grid__item grid__item--4" ng-model="griditem4" data-drop="{{griditem4.drop}}" jqyoui-droppable="{onDrop:'dropCallback(griditem4)'}"></div>
			<div class="grid__item grid__item--5" ng-model="griditem5" data-drop="{{griditem5.drop}}" jqyoui-droppable="{onDrop:'dropCallback(griditem5)'}"></div>
			<div class="grid__item grid__item--6" ng-model="griditem6" data-drop="{{griditem6.drop}}" jqyoui-droppable="{onDrop:'dropCallback(griditem6)'}"></div>

			<div class="grid__item grid__item--7" ng-model="griditem7" data-drop="{{griditem7.drop}}" jqyoui-droppable="{onDrop:'dropCallback(griditem7)'}"></div>
			<div class="grid__item grid__item--8" ng-model="griditem8" data-drop="{{griditem8.drop}}" jqyoui-droppable="{onDrop:'dropCallback(griditem8)'}"></div>
			<div class="grid__item grid__item--9" ng-model="griditem9" data-drop="{{griditem9.drop}}" jqyoui-droppable="{onDrop:'dropCallback(griditem9)'}"></div>
		</div>

	</div>
	<script type='text/javascript'>
	var app = angular.module('app', ['ngDragDrop']);

	app.controller('x', function ($scope)
	{
		$scope.card1 = {
			'up':1,
			'right':2,
			'down':3,
			'left':4,
			'owner':'mine'
		};
		$scope.card2 = {
			'up':4,
			'right':3,
			'down':2,
			'left':1,
			'owner':'mine'
		};

		$scope.griditem1 = {'num':1,'drop':true};
		$scope.griditem2 = {'num':2,'drop':true};
		$scope.griditem3 = {'num':3,'drop':true};
		$scope.griditem4 = {'num':4,'drop':true};
		$scope.griditem5 = {'num':5,'drop':true};
		$scope.griditem6 = {'num':6,'drop':true};
		$scope.griditem7 = {'num':7,'drop':true};
		$scope.griditem8 = {'num':8,'drop':true};
		$scope.griditem9 = {'num':9,'drop':true};

		$scope.startCallback = function (event, ui, card) {
		    console.log('You started draggin '+ card.up);
		    $scope.currUp = card.up;
		};

		$scope.stopCallback = function (event, ui) {
		    console.log('Why did you stop draggin me?');
		};

		$scope.dragCallback = function (event, ui) {
		    console.log('hey, look I`m flying');
		};

		$scope.dropCallback = function (event, ui, griditem) {
			//console.log($scope.currUp);
			console.log('Dropped onto grid '+griditem.num);
			griditem.drop = false;
		};
	});
	</script>
</body>
</html>