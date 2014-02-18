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

			<?php
			$i = 1;
			foreach( $p1_cards as $c ) {
			?>
			<div class="card--p{{card<?php echo $i; ?>.owner}}" data-drag="true" jqyoui-draggable="{animate:true, onStart:'startCallback(card<?php echo $i; ?>)', onStop:'stopCallback', onDrag:'dragCallback'}" data-jqyoui-options="{snap:'.grid__item', snapMode:'inner', snapTolerance:75, revert:'invalid', cursor:'move'}">
				<div class="card__name">{{card<?php echo $i; ?>.name}}</div>
				<div class="card__up">{{card<?php echo $i; ?>.up}}</div>
				<div class="card__right">{{card<?php echo $i; ?>.right}}</div>
				<div class="card__down">{{card<?php echo $i; ?>.down}}</div>
				<div class="card__left">{{card<?php echo $i; ?>.left}}</div>
			</div>
			<?php
				$i++;
			}
			?>

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

		<div class="card-holder">

			<?php
			$i = 6;
			foreach( $p2_cards as $c ) {
			?>
			<div class="card--p{{card<?php echo $i; ?>.owner}}" data-drag="true" jqyoui-draggable="{animate:true, onStart:'startCallback(card<?php echo $i; ?>)', onStop:'stopCallback', onDrag:'dragCallback'}" data-jqyoui-options="{snap:'.grid__item', snapMode:'inner', snapTolerance:75, revert:'invalid', cursor:'move'}">
				<div class="card__name">{{card<?php echo $i; ?>.name}}</div>
				<div class="card__up">{{card<?php echo $i; ?>.up}}</div>
				<div class="card__right">{{card<?php echo $i; ?>.right}}</div>
				<div class="card__down">{{card<?php echo $i; ?>.down}}</div>
				<div class="card__left">{{card<?php echo $i; ?>.left}}</div>
			</div>
			<?php
				$i++;
			}
			?>

		</div>

	</div>
	<script type='text/javascript'>
	var app = angular.module('app', ['ngDragDrop']);

	app.controller('x', function ($scope)
	{
		<?php
		$i = 1;
		foreach( $p1_cards as $c ) {
		?>
		$scope.card<?php echo $i; ?> = {
			'name':'<?php echo $c->name; ?>',
			'up':<?php echo $c->u; ?>,
			'right':<?php echo $c->r; ?>,
			'down':<?php echo $c->d; ?>,
			'left':<?php echo $c->l; ?>,
			'owner':1,
			'pos': false
		};
		<?php
			$i++;
		}
		?>
		<?php
		$i = 6;
		foreach( $p2_cards as $c ) {
		?>
		$scope.card<?php echo $i; ?> = {
			'name':'<?php echo $c->name; ?>',
			'up':<?php echo $c->u; ?>,
			'right':<?php echo $c->r; ?>,
			'down':<?php echo $c->d; ?>,
			'left':<?php echo $c->l; ?>,
			'owner':2,
			'pos': false
		};
		<?php
			$i++;
		}
		?>

		$scope.griditem1 = {
			'num':1,
			'drop':true,
			'card':false
		};
		$scope.griditem2 = {
			'num':2,
			'drop':true,
			'card':false
		};
		$scope.griditem3 = {
			'num':3,
			'drop':true,
			'card':false
		};
		$scope.griditem4 = {
			'num':4,
			'drop':true,
			'card':false
		};
		$scope.griditem5 = {
			'num':5,
			'drop':true,
			'card':false
		};
		$scope.griditem6 = {
			'num':6,
			'drop':true,
			'card':false
		};
		$scope.griditem7 = {
			'num':7,
			'drop':true,
			'card':false
		};
		$scope.griditem8 = {
			'num':8,
			'drop':true,
			'card':false
		};
		$scope.griditem9 = {
			'num':9,
			'drop':true,
			'card':false
		};

		$scope.startCallback = function (event, ui, card) {
		    //console.log('You started draggin '+ card.up);
		    $scope.currCard = card;
		};

		$scope.stopCallback = function (event, ui) {
		    //console.log('Why did you stop draggin me?');
		};

		$scope.dragCallback = function (event, ui) {
		    //console.log('hey, look I`m flying');
		};

		$scope.dropCallback = function (event, ui, griditem) {
			card 		= $scope.currCard;
			card.pos 	= griditem.num;

			console.log( card.name + ' was dropped onto grid ' + card.pos );

			griditem.drop 	= false;
			griditem.card	= card;

			if ( card.pos == 1 )
			{
				if ( $scope.griditem2.card != false && $scope.griditem2.card.left < card.right )
				{
					$scope.griditem2.card.owner = card.owner;
				}
				if ( $scope.griditem4.card != false && $scope.griditem4.card.up < card.down )
				{
					$scope.griditem4.card.owner = card.owner;
				}
			}
			if ( card.pos == 2 )
			{
				if ( $scope.griditem1.card != false && $scope.griditem1.card.right < card.left )
				{
					$scope.griditem1.card.owner = card.owner;
				}
				if ( $scope.griditem3.card != false && $scope.griditem3.card.left < card.right )
				{
					$scope.griditem3.card.owner = card.owner;
				}
				if ( $scope.griditem5.card != false && $scope.griditem5.card.up < card.down )
				{
					$scope.griditem5.card.owner = card.owner;
				}
			}
			if ( card.pos == 3 )
			{
				if ( $scope.griditem2.card != false && $scope.griditem2.card.right < card.left )
				{
					$scope.griditem2.card.owner = card.owner;
				}
				if ( $scope.griditem6.card != false && $scope.griditem6.card.up < card.down )
				{
					$scope.griditem6.card.owner = card.owner;
				}
			}
			if ( card.pos == 4 )
			{
				if ( $scope.griditem1.card != false && $scope.griditem1.card.down < card.up )
				{
					$scope.griditem1.card.owner = card.owner;
				}
				if ( $scope.griditem5.card != false && $scope.griditem5.card.left < card.right )
				{
					$scope.griditem5.card.owner = card.owner;
				}
				if ( $scope.griditem7.card != false && $scope.griditem7.card.up < card.down )
				{
					$scope.griditem7.card.owner = card.owner;
				}
			}
			if ( card.pos == 5 )
			{
				if ( $scope.griditem2.card != false && $scope.griditem2.card.down < card.up )
				{
					$scope.griditem2.card.owner = card.owner;
				}
				if ( $scope.griditem4.card != false && $scope.griditem4.card.right < card.left )
				{
					$scope.griditem4.card.owner = card.owner;
				}
				if ( $scope.griditem6.card != false && $scope.griditem6.card.left < card.right )
				{
					$scope.griditem6.card.owner = card.owner;
				}
				if ( $scope.griditem8.card != false && $scope.griditem8.card.up < card.down )
				{
					$scope.griditem8.card.owner = card.owner;
				}
			}
			if ( card.pos == 6 )
			{
				if ( $scope.griditem3.card != false && $scope.griditem3.card.down < card.up )
				{
					$scope.griditem3.card.owner = card.owner;
				}
				if ( $scope.griditem5.card != false && $scope.griditem5.card.right < card.left )
				{
					$scope.griditem5.card.owner = card.owner;
				}
				if ( $scope.griditem9.card != false && $scope.griditem9.card.up < card.down )
				{
					$scope.griditem9.card.owner = card.owner;
				}
			}
			if ( card.pos == 7 )
			{
				if ( $scope.griditem4.card != false && $scope.griditem4.card.down < card.up )
				{
					$scope.griditem4.card.owner = card.owner;
				}
				if ( $scope.griditem8.card != false && $scope.griditem8.card.left < card.right )
				{
					$scope.griditem8.card.owner = card.owner;
				}
			}
			if ( card.pos == 8 )
			{
				if ( $scope.griditem7.card != false && $scope.griditem7.card.right < card.left )
				{
					$scope.griditem7.card.owner = card.owner;
				}
				if ( $scope.griditem5.card != false && $scope.griditem5.card.down < card.up )
				{
					$scope.griditem5.card.owner = card.owner;
				}
				if ( $scope.griditem9.card != false && $scope.griditem9.card.left < card.right )
				{
					$scope.griditem9.card.owner = card.owner;
				}
			}
			if ( card.pos == 9 )
			{
				if ( $scope.griditem6.card != false && $scope.griditem6.card.down < card.up )
				{
					$scope.griditem6.card.owner = card.owner;
				}
				if ( $scope.griditem8.card != false && $scope.griditem8.card.right < card.left )
				{
					$scope.griditem8.card.owner = card.owner;
				}
			}
		};
	});
	</script>
</body>
</html>