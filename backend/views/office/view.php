<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


$this->title = $model->officename;
$this->params['breadcrumbs'][] = ['label' => 'Офисы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">
    <div class="card">
        <div class="card-header">
            <?php echo Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?php echo Html::a('Удалить', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Вы уверены, что хотите удалить эту запись?',
                    'method' => 'post',
                ],
            ]) ?>
        </div>
        <div class="card-body p-0">
            <?php echo DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'officename',
                    'phone',
                ],
            ]) ?>
        </div>
    </div>
</div>
