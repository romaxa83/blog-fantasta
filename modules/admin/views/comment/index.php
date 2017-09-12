<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if (!empty($comments)):?>

        <table class="table">
            <thead>
            <tr>
                <td>#</td>
                <td>author</td>
                <td>text</td>
                <td>action</td>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($comments as $comment):?>
                <tr>
                    <td><?= $comments->id?></td>
                    <td><?= $comments->author?></td>
                    <td><?= $comments->text?></td>
                    <td>
                        <a class="btn btn-danger" href="<?php Yii::$app->urlManager->createUrl(['comments/delete','id' => $comment->id]);?>">Удалить</a>
                    </td>
                </tr>
            <?php endforeach;?>

            </tbody>
        </table>

    <?php endif;?>
</div>
