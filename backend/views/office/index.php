<?php

use yii\helpers\Html;
use rmrevin\yii\fontawesome\FAS;
use yii\helpers\Url;
use common\widgets\Alert;

$this->title = 'Офисы';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php echo Alert::widget() ?>
<section class="content">
    <div class="container-fluid">
        <div class="box">
            <div class="box-body">
                <div class="card">
                    <div class="card-header">
                        <?php echo Html::a(FAS::icon('home') . ' ' . Yii::t('backend', 'Add New {modelClass}', [
                                'modelClass' => 'Office',
                            ]), ['create'], ['class' => 'btn btn-success']) ?>
                    </div>
                    <div class="card-body p-0">
                        <div id="w0" class="gridview table-responsive">
                            <table class="table text-nowrap table-striped table-bordered mb-0">
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Телефон</th>
                                    <th></th>
                                </tr>
                                <?php foreach ($officeList as $office): ?>
                                    <tr>
                                        <td><?php echo $office->id; ?></td>
                                        <td><?php echo $office->officename; ?></td>
                                        <td><?php echo $office->phone; ?></td>
                                        <td>
                                            <a class="btn btn-info btn-xs"
                                               href="<?php echo Url::to(['office/view', 'id' => $office->id]); ?>"
                                               title="Просмотр"
                                               aria-label="Просмотр" data-pjax="0">
                                                <i class="fa-fw fas fa-eye"></i></a>
                                            <a class="btn btn-warning btn-xs"
                                               href="<?php echo Url::to(['office/update', 'id' => $office->id]); ?>"
                                               title="Редактировать"
                                               aria-label="Редактировать" data-pjax="0">
                                                <i class="fa-fw fas fa-edit"></i></a>
                                            <a class="btn btn-danger btn-xs"
                                               href="<?php echo Url::to(['office/delete', 'id' => $office->id]); ?>"
                                               title="Удалить"
                                               aria-label="Удалить" data-pjax="0"
                                               data-confirm="Вы уверены, что хотите удалить этот элемент?"
                                               data-method="post">
                                                <i class="fa-fw fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
    </div>
</section>