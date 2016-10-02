<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
	'action' => '/users',
	'method' => 'get',
//	'id' => 'add-user',
	'options' => ['class' => 'form-horizontal'],
])
?>
<div class="col-md-4">
<p>Имя: <input type="text" class="form-control" name="name" /></p>
<p>Телефон: <input type="text"  class="form-control" name="phone" /></p>

	<div class="form-group">
		<div class="col-lg-offset-1 col-lg-11">
			<?= Html::submitButton('Добавить контакт', ['class' => 'btn btn-primary']) ?>
		</div>
	</div>
<?php ActiveForm::end() ?>

</div>

<!--
----------------------------------

<form action="action.php" method="post">
	<p>Ваше имя: <input type="text" name="name" /></p>
	<p>Ваш возраст: <input type="text" name="age" /></p>
	<p><input type="submit" /></p>
</form>

-->