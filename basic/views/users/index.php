<?php
/**
 * Created by PhpStorm.
 * User: ilu
 * Date: 27.09.2016
 * Time: 13:00
 */

// use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
	<h1>Users list</h1>
	<ul>
		<?php foreach ($users as $user): ?>
			<li>
				<?= $user->name ?>:
				<?= $user->phone  ?>
			</li>
		<?php endforeach; ?>
	</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>