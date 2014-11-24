<?php use yii\helpers\Html; ?>

<?php $this->title = 'Заявка на получение кредита была успешно отправлена!'; ?>
<?php $this->params['breadcrumbs'][] = $this->title; ?>
<p class="lead"><?php echo $this->title; ?> <br />Мы свяжемся с Вами в ближайшее время!</p>
<h3>Отправленные данные</h3>
<ul>
    <li><label>Name</label>: <?php echo Html::encode($model->firstName); ?></li>
    <li>
    	<label>inputSecondName</label>: 
    	<?php echo Html::encode($model->inputSecondName); ?>
	    <?php if($model->isOldSecondName): ?>
		 (<?php echo Html::encode($model->oldSecondName); ?>)
	    <?php endif; ?>
    </li>
    <li><label>Email</label>: <?php echo Html::encode($model->email); ?></li>
    <li><label>phone</label>: <?php echo Html::encode($model->phone); ?></li>
    <!-- <li><label>Дата рождения</label>: <?php echo Html::encode($model->birthdayDay); ?>.<?php echo Html::encode($model->birthdayMounth); ?>.<?php echo Html::encode($model->birthdayYear); ?></li> -->
    <li><label>Время звонка</label>: <?php echo Html::encode($model->calltime); ?></li>
    <li><label>Сумма</label>: <?php echo Html::encode($model->amount); ?></li>
    <li><label>Срок</label>: <?php echo Html::encode($model->inputPeriod); ?></li>
    <li><label>Тип кредита</label>: <?php echo Html::encode($model->creditInfo); ?></li>
</ul>