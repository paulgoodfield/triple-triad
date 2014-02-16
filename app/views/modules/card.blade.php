<div ng-model="card" class="card--mine" data-drag="true" data-jqyoui-options="{revert: 'invalid', snap: '.grid__item', snapMode: 'inner', snapTolerance: 75}" jqyoui-draggable="{animate:true}">
	<div class="card__name">{{ $card->name }}</div>
	<div class="card__up">{{ $card->u }}</div>
	<div class="card__right">{{ $card->r }}</div>
	<div class="card__down">{{ $card->d }}</div>
	<div class="card__left">{{ $card->l }}</div>
</div>