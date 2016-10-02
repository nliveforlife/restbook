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

        <p class="lead">My Contacts</p>

        <ul>
		<?
	/*
		//	$myBBdata = array();
			//$myBBdata = $message;
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

			//	print_r('<li>' . $name . ' : '); print_r($phone . '</li>');
				// print_r($data); print_r('<br>');
			}
		// print_r(gettype($message));
		// print_r('Result: ',$result);
	*/
		?>
		<?=
		Html::encode('wefwefwefwe')
		// Html::encode($message)
		//
		//  ?>


        </ul>



    </div>

    <div class="body-content">

		<div class="row">
			<div class="col-md-4 col-sm-12">
				<h2>Contacts:</h2>
				<ul>
				<?

				//	$myBBdata = array();
				//$myBBdata = $message;
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

					//	print_r('<li>' . $name . ' : '); print_r($phone . '</li>');
					// print_r($data); print_r('<br>');
				}
				// print_r(gettype($message));
				// print_r('Result: ',$result);

				?>
				</ul>

			</div>
		</div>
        <!--
        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>
            -->
    </div>
</div>
