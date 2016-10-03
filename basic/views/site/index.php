<?php

use yii\helpers\Html;
use yii\helpers\BaseJson;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
/* @var $this yii\web\View */

$this->title = 'Phone Book';
?>
<div class="site-index">

    <div class="jumbotron">
    </div>

    <div class="body-content">

		<div class="row">
			<div class="col-md-4 col-sm-12">
				<h2>Contacts:</h2>
				<ul>
				<?
				foreach ($message as $data) {
					foreach ($data as $key => $value) {
						print_r('<li>' . $data['name'] . ' : ' . $data['phone'] . '</li>');
						if ($key == 'name') {
							$name = $value;
						} elseif ($key == 'phone') {
							$phone = $value;
						} else
							break;
					}
				}
				?>
				</ul>

			</div>
		</div>
    </div>
</div>
