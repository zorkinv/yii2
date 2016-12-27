
<?php 

use yii\helpers\Html;
use yii\grid\GridView;

echo Html::a('<img class="left" width="30px" src="/images/pdf.png" /> Распечатать .PDF', ['/blog/mpdf-blog?id='.$model->id], [
                                'class'=>'btn btn-default',
                                'target'=>'_blank', 
                                'data-toggle'=>'tooltip', 
                                'title'=>'Will open the generated PDF file in a new window'
                            ]);?>