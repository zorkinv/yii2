<?php

namespace app\controllers;

use Yii;
use app\models\Stud;
use app\models\Ved;
use app\models\VedStr;
use app\models\VedSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VedController implements the CRUD actions for Ved model.
 */
class VedController extends Controller
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
     * Lists all Ved models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VedSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ved model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
	
	
	
	
public function actionMpdfBlog($id) {
        $this->layout = 'pdf';
        Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
        $headers = Yii::$app->response->headers;
        $headers->add('Content-Type', 'application/pdf');
        
        $model = $this->findModel($id);
        
        //$model = $this->findModel();
        $pdf = new Pdf([
            'mode' => Pdf::MODE_UTF8, // leaner size using standard fonts
            'content' => $this->render('viewpdf', ['model'=>$model]),
         ///   'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
         //   'cssInline' => '.img-circle {border-radius: 50%;}', 
            'options' => [
                'title' => $model->title,
                'subject' => 'PDF'
            ],
            'methods' => [
                //'SetHeader' => ['<img src="/images/inspire2_logo_20.png" class="img-circle"> Школа брейк данса INSPIRE||inspire2.ru'],
                'SetFooter' => ['|{PAGENO}|'],
            ]
        ]);
        return $pdf->render();
    }
	
	
	
	
	
    /**
     * Creates a new Ved model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Ved();
		/**
 * This is the model class for table "ved_str".
 *
 * @property integer $id
 * @property integer $ved
 * @property string $stud
 * @property integer $ocenka
 */
		

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
			
			$studenty = Stud::find()->filterWhere(['like', 'gruppa', $model->gruppa])->all();

			foreach ($studenty as $stud)
			{
				$modelstr=new VedStr();
				$modelstr->ved=$model->id;
				$modelstr->stud=$stud->id;
				$modelstr->ocenka=0;/**/
				$modelstr->save();
			}
       
			
	
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
			
		
			
			
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Ved model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Ved model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Ved model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Ved the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Ved::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
