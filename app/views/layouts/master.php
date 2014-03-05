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

		<div class="card-holder{{holder1class}}">
			<span>{{winner1}}</span>
			<?php
			$i = 1;
			foreach( $p1_cards as $c ) {
			?>
			<div class="card--p{{card<?php echo $i; ?>.owner}}" data-drag="{{drag1}}" jqyoui-draggable="{animate:true, onStart:'startCallback(card<?php echo $i; ?>)', onStop:'stopCallback', onDrag:'dragCallback'}" data-jqyoui-options="{snap:'.grid__item', snapMode:'inner', snapTolerance:75, revert:'invalid', cursor:'move'}">
				<div class="card__face--1">
					<img src="<?php echo asset('images/cards/'.Str::slug( $c->name ).'.png'); ?>" />
				</div>
				<div class="card__face--2">
					<img src="<?php echo asset('images/cards/'.Str::slug( $c->name ).'.png'); ?>" />
				</div>
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

		<div class="card-holder{{holder2class}}">
			<span>{{winner2}}</span>
			<?php
			$i = 6;
			foreach( $p2_cards as $c ) {
			?>
			<div class="card--p{{card<?php echo $i; ?>.owner}}" data-drag="{{drag2}}" jqyoui-draggable="{animate:true, onStart:'startCallback(card<?php echo $i; ?>)', onStop:'stopCallback', onDrag:'dragCallback'}" data-jqyoui-options="{snap:'.grid__item', snapMode:'inner', snapTolerance:75, revert:'invalid', cursor:'move'}">
				<div class="card__face--1">
					<img src="<?php echo asset('images/cards/'.Str::slug( $c->name ).'.png'); ?>" />
				</div>
				<div class="card__face--2">
					<img src="<?php echo asset('images/cards/'.Str::slug( $c->name ).'.png'); ?>" />
				</div>
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
		$scope.turn = Math.floor((Math.random()*2)+1);

		$scope.drag1 		= true;
		$scope.drag2 		= false;
		$scope.holder1class	= '--active';
		$scope.holder2class	= '';

		if ( $scope.turn == 2 ) {
			$scope.drag1 = false;
			$scope.drag2 = true;
			$scope.holder1class	= '';
			$scope.holder2class	= '--active';
		}

		$scope.num_turns 	= 0;
		$scope.num_cards1	= 5;
		$scope.num_cards2	= 5;

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
			'pos':false,
			'drag':$scope.drag1
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
			'pos':false,
			'drag':$scope.drag2
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

		var num_won;

		function checkgriditem(g,c,f) {

			if (f == 'u') {
				gface = g.card.up;
				cface = c.down;
			}
			if (f == 'r') {
				gface = g.card.right;
				cface = c.left;
			}
			if (f == 'd') {
				gface = g.card.down;
				cface = c.up;
			}
			if (f == 'l') {
				gface = g.card.left;
				cface = c.right;
			}

			if ( g.card != false && g.card.owner != c.owner && gface < cface )
			{
				g.card.owner = c.owner;
				num_won++;
			}

			console.log(num_won);
		}

		$scope.dropCallback = function (event, ui, griditem) {
			card 		= $scope.currCard;
			card.pos 	= griditem.num;

			console.log( card.name + ' was dropped onto grid ' + card.pos );

			griditem.drop 	= false;
			griditem.card	= card;

			num_won = 0;

			if ( card.pos == 1 )
			{
				checkgriditem($scope.griditem2, card, 'l');
				checkgriditem($scope.griditem4, card, 'u');
			}
			if ( card.pos == 2 )
			{
				checkgriditem($scope.griditem1, card, 'r');
				checkgriditem($scope.griditem3, card, 'l');
				checkgriditem($scope.griditem5, card, 'u');
			}
			if ( card.pos == 3 )
			{
				checkgriditem($scope.griditem2, card, 'r');
				checkgriditem($scope.griditem6, card, 'u');
			}
			if ( card.pos == 4 )
			{
				checkgriditem($scope.griditem1, card, 'd');
				checkgriditem($scope.griditem5, card, 'l');
				checkgriditem($scope.griditem7, card, 'u');
			}
			if ( card.pos == 5 )
			{
				checkgriditem($scope.griditem2, card, 'd');
				checkgriditem($scope.griditem4, card, 'r');
				checkgriditem($scope.griditem6, card, 'l');
				checkgriditem($scope.griditem8, card, 'u');
			}
			if ( card.pos == 6 )
			{
				checkgriditem($scope.griditem3, card, 'd');
				checkgriditem($scope.griditem5, card, 'r');
				checkgriditem($scope.griditem9, card, 'u');
			}
			if ( card.pos == 7 )
			{
				checkgriditem($scope.griditem4, card, 'd');
				checkgriditem($scope.griditem8, card, 'l');
			}
			if ( card.pos == 8 )
			{
				checkgriditem($scope.griditem7, card, 'r');
				checkgriditem($scope.griditem5, card, 'd');
				checkgriditem($scope.griditem9, card, 'l');
			}
			if ( card.pos == 9 )
			{
				checkgriditem($scope.griditem6, card, 'd');
				checkgriditem($scope.griditem8, card, 'r');
			}

			if (num_won > 0) {
				if (card.owner == 1) {
					$scope.num_cards1 += num_won ;
				}
				else
				{
					$scope.num_cards2 += num_won;
				}
			}

			$scope.num_turns++;

			if ( $scope.num_turns == 9 )
			{
				if ($scope.num_cards1 > $scope.num_cards2) {
					msg = 'Player 1 Wins!';
				}
				else if ($scope.num_cards2 > $scope.num_cards1) {
					msg = 'Player 2 Wins!';
				}
				else {
					msg = 'Draw!';
				}

				alert(msg);
			}

			if ( $scope.num_turns < 9 )
			{
				if ( $scope.turn == 1 )
				{
					$scope.drag1 		= false;
					$scope.drag2 		= true;
					$scope.turn 		= 2;
					$scope.holder1class	= '';
					$scope.holder2class	= '--active';
				}
				else
				{
					$scope.drag1 		= true;
					$scope.drag2 		= false;
					$scope.turn 		= 1;
					$scope.holder1class	= '--active';
					$scope.holder2class	= '';
				}
			}
		};
	});
	</script>
</body>
</html>