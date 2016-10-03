<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'action' => '/api/users',
    'method' => 'delete',
    'options' => ['class' => 'form-horizontal'],
])
?>
<div class="col-md-4">
    <p>Имя: <input type="text" class="form-control" name="name" /></p>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Удалить контакт', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end() ?>

</div>