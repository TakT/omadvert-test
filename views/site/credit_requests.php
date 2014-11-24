<?php use yii\helpers\Html; ?>
<?php Yii::$app->formatter->locale = 'ru-RU'; ?>

<?php $this->title = 'Список заявок'; ?>
<?php $this->params['breadcrumbs'][] = $this->title; ?>
<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Имя</th>
			<th>Фамилия</th>
			<th>Девичья фамилия</th>
			<th>Телефон</th>
			<th>E-Mail</th>
			<th>Время звонка</th>
			<th>Тип кредита</th>
			<th>Срок</th>
			<th>Сумма</th>
			<th>Дата</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($requests as $request): ?>
			<tr>
				<td><?php echo Html::encode($request->id); ?></td>
				<td><?php echo Html::encode($request->firstName); ?></td>
				<td><?php echo Html::encode($request->inputSecondName); ?></td>
				<td><?php echo Html::encode($request->oldSecondName); ?></td>
				<td><?php echo Html::encode($request->phone); ?></td>
				<td><?php echo Html::encode($request->email); ?></td>
				<td><?php echo Html::encode($request->calltime); ?></td>
				<td><?php echo Html::encode($request->creditInfo); ?></td>
				<td><?php echo Html::encode($request->inputPeriod); ?></td>
				<td><?php echo Html::encode($request->amount); ?></td>
				<td><?php echo Yii::$app->formatter->asDate($request->date, 'long') . ' ' . Yii::$app->formatter->asDate($request->date, 'php:H:i'); ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>