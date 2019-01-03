<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\PermissionHelpers;
use common\models\RecordHelpers;
use frontend\models\Profile;

/**
 * UpgradeController
 *
 */
class UpgradeController extends \yii\web\Controller {
	
	/**
	 * {@inheritDoc}
	 * @see \yii\base\Component::behaviors()
	 */
	public function behaviors() {
		return [
			'access' => [
				'class' => \yii\filters\AccessControl::className(),
				'only' => ['index'],
				'rules' => [
					[
						'actions' => ['index'],
						'allow' => true,
						'roles' => ['@'],
						'matchCallback' => function ( $rule, $action ) {
							return PermissionHelpers::requireStatus( 'Active' );
						}
					],
				],
			],
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'delete' => ['post'],
				],
			],
		];
	}
	
	
	/**
	 * @return string
	 */
	public function actionIndex() {
		//$name = Yii::$app->user->identity->username;
		
		$name = Profile::find()
			->where( [
				'user_id' => Yii::$app->user->identity->id
			] )
			->one();
		
		return $this->render( 'index', ['name' => $name] );
		
		
	}
	
}
