<?php

namespace app\controllers;

use Yii;
use app\models\Nap;
use app\models\NapSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NapController implements the CRUD actions for Nap model.
 */
class NapController extends Controller
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
     * Lists all Nap models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NapSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Nap model.
     * @param string $kod
     * @param string $name
     * @return mixed
     */
    public function actionView($kod, $name)
    {
        return $this->render('view', [
            'model' => $this->findModel($kod, $name),
        ]);
    }

    /**
     * Creates a new Nap model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Nap();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kod' => $model->kod, 'name' => $model->name]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Nap model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kod
     * @param string $name
     * @return mixed
     */
    public function actionUpdate($kod, $name)
    {
        $model = $this->findModel($kod, $name);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kod' => $model->kod, 'name' => $model->name]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Nap model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kod
     * @param string $name
     * @return mixed
     */
    public function actionDelete($kod, $name)
    {
        $this->findModel($kod, $name)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Nap model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kod
     * @param string $name
     * @return Nap the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kod, $name)
    {
        if (($model = Nap::findOne(['kod' => $kod, 'name' => $name])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
