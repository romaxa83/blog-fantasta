<?php
/**
 * Created by PhpStorm.
 * User: Ромаха
 * Date: 30.08.2017
 * Time: 20:50
 */
$this->title = $article->title;
$this->registerMetaTag([
        'name' => 'description',
        'content' => $article->description
]);
?>

<div id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <!--Article blocck-->
                        <div class="article art-block">

                            <div class="art-breadcrumb">
                                <ol class="center breadcrumb">
                                    <li><a href="<?= Yii::$app->urlManager->createUrl('site/index');?>">Главная</a></li>
                                    <li><a href="<?= Yii::$app->urlManager->createUrl(['site/category','id' => $article->category->id]);?>"><?= $article->category->title;?></a></li>
                                    <li class="active"><?= $article->title;?></li>
                                </ol>
                            </div>
                            <div class="art-bl-img">
                                <a href="#"><img src="<?= $article->getImage();?>" alt="img1" class="img-responsive" /></a>
                                <span class="title-on-img animated bounceInLeft">description</span>

                            </div>
                            <div class="art-bl-content">
                                <span class="cat-link"><a href="#" class="underline">Творчество <?= $article->category->title;?></a></span>
                                <h3 class="art-title center"><a href="#"><?= $article->title;?></a></h3>
                                <div class="art-text">
                                    <?= $article->content;?>
                                </div>

                                <div class="art-info clearfix">
                                    <span class="art-pubdate" data-toggle="tooltip" data-placement="top" title="Дата публикации">
                                        <i class="fa fa-calendar-o" aria-hidden="true"></i> <?= $article->date;?></span>
                                    <span class="art-views" data-toggle="tooltip" data-placement="top" title="Просмотров">
                                        <i class="fa fa-eye" aria-hidden="true"></i> <?= $article->viewed;?></span>
                                </div>


                                <div class="article-tags top-border clearfix">
                                    <h4 class="art-sm-tit">Метки</h4>
                                    <div class="tags">
                                    <?php foreach ($tags as $tag):?>
                                       <a href="#"><span class="label label-default"><?= $tag->tag_id?></span></a>
                                        <?php endforeach;?>

                                    </div>
                                </div>

                                <div class="article-social top-border">
                                    <h4 class="art-sm-tit">Поделиться статьей</h4>
                                    <button><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></button>
                                    <button><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></button>
                                </div>

                                <div class="article-similar top-border">
                                    <h4 class="art-sm-tit">Похожие статьи</h4>

                                    <div class="carousel slide media-carousel" id="media">
                                        <div class="carousel-inner">
                                            <div class="item  active">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <a class="" href="#"><img alt="img1" src="../public/img/img_1.jpg"></a>
                                                        <div class="carousel-caption">
                                                            <h3><a href="#">Название стсатьи</a></h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a class="" href="#"><img alt="img2" src="../public/img/img_2.jpg"></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a class="" href="#"><img alt="img3" src="../public/img/img_3.jpg"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <a class="" href="#"><img alt="img1" src="../public/img/img_4.jpg"></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a class="" href="#"><img alt="img2" src="../public/img/img_5.jpg"></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a class="" href="#"><img alt="img3" src="../public/img/img_2.jpg"></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <a data-slide="prev" href="#media" class="left carousel-control"> <i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                                        <a data-slide="next" href="#media" class="right carousel-control"> <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

                                    </div>
                                </div>

                                <div class="article-comment top-border clearfix">
                                    <h4 class="art-sm-tit">Комментарии(0)</h4>
                                    <a class="add-com-link underline" href="#">Добавить комментарий</a>
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-responsive" src="../public/img/avatar.jpg" alt=avatar1>
                                        </a>
                                        <div class="media-body">
                                            <div class="comment-head media-heading">
                                                <i class="fa fa-user" aria-hidden="true"></i><span class="u-name"> User name</span>
                                                <span class="slash"> / </span>
                                                <i class="fa fa-calendar-o" aria-hidden="true"></i><span class="com-pubdate"> 15:39 12-2-2017</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Cumque eveniet possimus qui sint? A aspernatur at dolorum
                                                eaque enim est fuga illo inventore iure iusto non nulla
                                                obcaecati omnis pariatur quae quos repellat repellendus
                                                sapiente sequi soluta tempore totam, veritatis!</p>
                                            <div class="comment-footer media-heating">
                                                <i class="fa fa-thumbs-o-up like" aria-hidden="true"></i><span> 22</span>
                                                <a href="#">Ответить</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media media-answer">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-responsive" src="../public/img/avatar.jpg" alt=avatar1>
                                        </a>
                                        <div class="media-body">
                                            <div class="comment-head media-heading">
                                                <i class="fa fa-user" aria-hidden="true"></i><span class="u-name"> User name</span>
                                                <span class="slash"> / </span>
                                                <i class="fa fa-calendar-o" aria-hidden="true"></i><span class="com-pubdate"> 15:39 12-2-2017</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Cumque eveniet possimus qui sint? A aspernatur at dolorum
                                                eaque enim est fuga illo inventore iure iusto non nulla
                                                obcaecati omnis pariatur quae quos repellat repellendus
                                                sapiente sequi soluta tempore totam, veritatis!</p>
                                            <div class="comment-footer media-heating">
                                                <i class="fa fa-thumbs-o-up like" aria-hidden="true"></i><span> 22</span>
                                                <a href="#">Ответить</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-responsive" src="../public/img/avatar.jpg" alt=avatar1>
                                        </a>
                                        <div class="media-body">
                                            <div class="comment-head media-heading">
                                                <i class="fa fa-user" aria-hidden="true"></i><span class="u-name"> User name</span>
                                                <span class="slash"> / </span>
                                                <i class="fa fa-calendar-o" aria-hidden="true"></i><span class="com-pubdate"> 15:39 12-2-2017</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Cumque eveniet possimus qui sint? A aspernatur at dolorum
                                                eaque enim est fuga illo inventore iure iusto non nulla
                                                obcaecati omnis pariatur quae quos repellat repellendus
                                                sapiente sequi soluta tempore totam, veritatis!</p>
                                            <div class="comment-footer media-heating">
                                                <i class="fa fa-thumbs-o-up like" aria-hidden="true"></i><span> 22</span>
                                                <a href="#">Ответить</a>
                                            </div>
                                        </div>
                                    </div>

                                </div><!--end article-comment-->


                            </div>
                            <div class="article-add-comment top-border">
                                <h4 class="art-sm-tit">Добавить комментарий</h4>
                                <p>Добавиь комментарий могут только <a href="#">авторизованные</a> пользователи</p>
                                <form role="form" method="" action="" class="clearfix">
                                    <textarea class="form-control" rows="5"></textarea>
                                    <button type="submit" class="btn btn-default">Отправить</button>
                                    <button type="reset" class="btn btn-default">Очистить</button>
                                </form>
                            </div>
                            <!--End article block-->


                        </div>
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
