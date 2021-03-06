<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = Yii::t('backend', 'Редактирование {modelClass}: ', ['modelClass' => 'Office']) . ' ' . $model->officename;
$this->params['breadcrumbs'][] = ['label' => 'Офисы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->officename, 'url' => ['view', 'id' => $model->officename]];
$this->params['breadcrumbs'][] = ['label'=>'Редактировать'];

?>
<section class="content">
    <div class="container-fluid">
        <div class="box">
            <div class="box-body">
                <div class="user-create">
                    <div class="user-form">
                        <div class="card">
                            <div class="card-body">
                                <?php $form = ActiveForm::begin(); ?>
                                <?php echo $form->field($model, 'officename')->label('Название офиса'); ?>
                                <?php echo $form->field($model, 'phone')->label('Номер телефона'); ?>
                                <?php echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']); ?>
                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


