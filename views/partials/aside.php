<?php
/**
 * Created by PhpStorm.
 * User: Ромаха
 * Date: 08.09.2017
 * Time: 11:42
 */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\base\Model;
?>
<div class="col-md-4">


    <!--Category panel-->
    <div class="cat-block list-group">
        <h4 class="cat-title center">Категории</h4>

        <?php foreach ($categories as $category):?>

            <a href="<?= Yii::$app->urlManager->createUrl(['/site/category','id' => $category->id]);?>" class="list-group-item">Творчество <?=$category->title;?><span class="badge">
                                    <?= $category->getArticlesCount();?>
                                </span></a>

        <?php endforeach;?>

    </div>
    <!--End category panel-->

    <div class="aside-arts">
        <h4 class="aside-arts-title center">Популярные статьи</h4>
        <!--Aside article block-->
        <?php foreach ($popular as $article):?>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6">
                    <div class="aside-art clearfix">
                        <div class="aside-art-img">
                            <a href="<?= Yii::$app->urlManager->createUrl(['site/article','id' => $article->id]);?>"><img src="<?= $article->getImage();?>" class="img-responsive" alt="img1"><span class="title-on-img">Читать статью</span></a>
                        </div>
                        <div class="aside-art-info">
                            <span class="cat-link"><a href="<?= Yii::$app->urlManager->createUrl(['site/category','id' => $article->category->id]);?>" class="underline">Творчество <?= $article->category->title;?></a></span>
                            <h4 class="aside-art-title center"><?= $article->title;?></h4>
                            <span class="art-pubdate" data-toggle="tooltip" data-placement="left" title="Дата публикации">
                                                <i class="fa fa-calendar-o" aria-hidden="true"></i> <?= $article->date;?></span>
                            <span class="art-views" data-toggle="tooltip" data-placement="right" title="Просмотров">
                                                <i class="fa fa-eye" aria-hidden="true"></i> <?= $article->viewed;?></span>
                        </div>
                    </div>
                </div>

            </div>

        <?php endforeach;?>
        <!--End aside article block-->
    </div><!--End class-aside-arts-->
</div><!--End .col-lg-4-->
