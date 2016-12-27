<?php

namespace app\controllers;

use Yii;
use app\models\Ocenki;
use app\models\OcenkiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OcenkiController implements the CRUD actions for Ocenki model.
 */
class OcenkiController extends Controller
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
     * Lists all Ocenki models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OcenkiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ocenki model.
     * @param string $uchkurs
     * @param integer $stud
     * @return mixed
     */
    public function actionView($uchkurs, $stud)
    {
        return $this->render('view', [
            'model' => $this->findModel($uchkurs, $stud),
        ]);
    }

    /**
     * Creates a new Ocenki model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Ocenki();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'uchkurs' => $model->uchkurs, 'stud' => $model->stud]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Ocenki model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $uchkurs
     * @param integer $stud
     * @return mixed
     */
    public function actionUpdate($uchkurs, $stud)
    {
        $model = $this->findModel($uchkurs, $stud);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'uchkurs' => $model->uchkurs, 'stud' => $model->stud]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Ocenki model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $uchkurs
     * @param integer $stud
     * @return mixed
     */
    public function actionDelete($uchkurs, $stud)
    {
        $this->findModel($uchkurs, $stud)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Ocenki model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $uchkurs
     * @param integer $stud
     * @return Ocenki the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($uchkurs, $stud)
    {
        if (($model = Ocenki::findOne(['uchkurs' => $uchkurs, 'stud' => $stud])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
