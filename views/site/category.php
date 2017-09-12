<?php
/**
 * Created by PhpStorm.
 * User: Ромаха
 * Date: 06.09.2017
 * Time: 17:13
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;


$this->title = $cat->title;
?>

<div id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="art-breadcrumb articles">

                                <ol class="center breadcrumb">
                                    <li><a href="<?= Yii::$app->urlManager->createUrl('site/index');?>">Главная</a></li>
                                    <li class="active"><?= $cat->title;?></li>
                                </ol>

                            </div>
                        </div>



                        <?php foreach ($articles as $article):?>
                        <!--Article blocck-->
                        <div class="art-block">
                            <div class="art-bl-img">
                                <a href="<?= Yii::$app->urlManager->createUrl(['site/article','id' => $article->id]);?>"><img src="<?= $article->getImage();?>" alt="img1" class="img-responsive" /></a>
                                <span class="title-on-img animated bounceInLeft">description</span>

                            </div>
                            <div class="art-bl-content">
                                <span class="cat-link"><a href="#" class="underline">Творчество <?= $article->category->title;?></a></span>
                                <h3 class="art-title center"><a href="<?= Yii::$app->urlManager->createUrl(['site/article','id' => $article->id]);?>"><?= $article->title;?></a></h3>
                                <div class="art-text">
                                    <?= mb_substr($article->content,0,200).' ...';?>
                                </div>
                                <div class="art-info clearfix">
                                    <span class="art-pubdate" data-toggle="tooltip" data-placement="top" title="Дата публикации">
                                        <i class="fa fa-calendar-o" aria-hidden="true"></i> <?= $article->getDate();?></span>
                                    <span class="art-views" data-toggle="tooltip" data-placement="top" title="Просмотров">
                                        <i class="fa fa-eye" aria-hidden="true"></i> <?= $article->viewed;?></span>

                                </div>
                            </div>
                        </div>
                        <!--End article block-->
                        <?php endforeach;?>



                        <!--Pagination-->
                        <div class="pagination-block text-center">
                            <?php

                            echo LinkPager::widget([
                                'pagination' => $pagination,
                            ]);
                            ?>
                        </div>

                        <!--End pagination-->




                    </div><!--End .col-lg-8-->
                    <!--Aside-->
                    <?= $this->render('/partials/aside',[
                        'popular' => $popular,
                        'categories' => $categories
                    ]);?>
                </div>
            </div>
        </div>
    </div>
    <!--Scroll button-->
    <a class="btn scroll-up"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
</div>









