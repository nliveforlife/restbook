<?php

namespace app\controllers;

use Yii;

use yii\filters\ContentNegotiator;
use yii\web\Controller;
use yii\web\Response;


class TestController extends  Controller
{
	public $modelClass = 'app\models\Users';

	public function behaviors()
	{
		$behaviors = parent::behaviors();
		$behaviors['contentNegotiator'] = [
			'class' => ContentNegotiator::className(),
			'formats' => [
				'application/json' => Response::FORMAT_JSON
			]
		];

		return $behaviors;
	}

	public $X = 6;
	public $A = [6,6,1,8,2,3,6];

	public function actionIndex()
	{

 		return	$this->solution($this->X, $this->A);
	}

	/*  given an integer X and a non-empty zero-indexed array A consisting of N integers,
			returns the value of index K satisfying the conditions.
			If there is no such index, the function should return −1.

	 * * Найти индекс К - с которого  будет начинаться второй массив */
	public function solution($X, $A)
	{
		for ($i = 1; $i < count($A); $i++ ) {
			$one = array_slice($A, 0, $i);
			$second = array_slice($A, $i, (count($A) -$i) );

			$x_in_one = $this->findx($one, $X);
			$not_x_in_second = $this->notx($second, $X);

			if (count($x_in_one) == count($not_x_in_second)) {

				return $i;
			}
		}

		return -1;
	}

	public function findx($arr, $X) {
		foreach ($arr as $key => $value) {
			if ($value != $X) {
				unset($arr[$key]);
			}
		}

		return $arr;
	}

	public function notx($arr, $X) {
		foreach ($arr as $key => $value) {
			if ($value == $X) {
				unset($arr[$key]);
			}
		}
		return $arr;
	}

}
/*
 *  TODO:
 *
An integer X and a non-empty zero-indexed array A consisting of N integers are given. We are interested in which elements of A are equal to X and which are different from X. The goal is to split array A into two parts, such that the number of elements equal to X in the first part is the same as the number of elements different from X in the other part.
More formally, we are looking for an index K such that:
0 ≤ K < N, and
the number of elements equal to X in A[0..K−1] is the same as the number of elements different from X in A[K..N−1]. (For K = 0, A[0..K−1] does not contain any elements.)
For example, given integer X = 6 and array A such that:
A[0] = 6
A[1] = 6
A[2] = 1
A[3] = 8
A[4] = 2
A[5] = 3
A[6] = 6
K equals 4, because:
two of the elements of A[0..3] are equal to X, namely A[0] = A[1] = X, and
two of the elements of A[4..6] are different from X, namely A[4] and A[5].
Write a function:
function solution($X, $A);
that, given an integer X and a non-empty zero-indexed array A consisting of N integers, returns the value of index K satisfying the above conditions. If more than one index K satisfies the above conditions, your function may return any of them. If there is no such index, the function should return −1. For example, given integer X and array A as above, the function should return 4, as explained above. Assume that:
N is an integer within the range [1..100,000];
X is an integer within the range [0..100,000];
each element of array A is an integer within the range [0..100,000].
Complexity (not required):
expected worst-case time complexity is O(N);
expected worst-case space complexity is O(1), beyond input storage (not counting the storage required for input arguments).
Elements of input arrays can be modified.*/


