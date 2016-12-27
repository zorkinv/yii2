<?php

namespace app\controllers;

use Yii;
use app\models\Disc;
use app\models\DiscSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DiscController implements the CRUD actions for Disc model.
 */
class DiscController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Disc models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DiscSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Disc model.
     * @param string $uchplan
     * @param string $name
     * @return mixed
     */
    public function actionView($uchplan, $name)
    {
        return $this->render('view', [
            'model' => $this->findModel($uchplan, $name),
        ]);
    }

    /**
     * Creates a new Disc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Disc();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'uchplan' => $model->uchplan, 'name' => $model->name]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Disc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $uchplan
     * @param string $name
     * @return mixed
     */
    public function actionUpdate($uchplan, $name)
    {
        $model = $this->findModel($uchplan, $name);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'uchplan' => $model->uchplan, 'name' => $model->name]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Disc model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $uchplan
     * @param string $name
     * @return mixed
     */
    public function actionDelete($uchplan, $name)
    {
        $this->findModel($uchplan, $name)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Disc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $uchplan
     * @param string $name
     * @return Disc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($uchplan, $name)
    {
        if (($model = Disc::findOne(['uchplan' => $uchplan, 'name' => $name])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
