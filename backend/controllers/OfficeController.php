<?php

namespace backend\controllers;

use Yii;
use common\models\Office;

class OfficeController extends \yii\web\Controller
{

    public function actionIndex()
    {
        $officeList = Office::find()->all();
        return $this->render('index', ['officeList' => $officeList]);
    }

    public function actionCreate()
    {
        $model = new Office();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Офис добавлен');
            return $this->redirect(['office/index']);
        }
        return $this->render('create', ['model' => $model]);
    }

    public function actionUpdate($id)
    {
        $model = Office::findOne($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Офис успешно обновлен');
            return $this->redirect(['office/index']);
        }
        return $this->render('update', ['model' => $model]);
    }

    public function actionView($id)
    {
        $model = Office::findOne($id);
        return $this->render('view', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        $model = Office::findOne($id);
        $model->delete();
        Yii::$app->session->setFlash('success', 'Офис успешно удален');
        return $this->redirect(['office/index']);
    }

}
