<?php

// use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
	<h1>User Serach Result</h1>
	<ul>
		<?php foreach ($users as $user): ?>
			<li>
				<?= $user->name ?>:
				<?= $user->phone  ?>
			</li>
		<?php endforeach; ?>
	</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>