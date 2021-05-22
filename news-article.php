<!DOCTYPE html>

<head>
    <?php
    require_once "functions/functions.php";
    $news = getNewsItems(1, $_GET["id"]);
    $title = $news["title"];
    require_once "blocks/head.php";
    ?>

</head>

<body>



    <div class="wrapper">
        <div class="news-article-block" data-id="<?php echo ($news["id"]) ?>">
            <div class="article-block-wrapper">
                <div class="article-block">
                    <div class="article-header">

                        <div class="article-img">
                            <img class="img_small" src="images/img_small/<?php echo ($news["id"]) ?>.png">
                        </div>
                        <div class="article-info">
                            <h2><?php echo ($news["title"]) ?></h2>
                            <div class="article-parameters">
                                <div class="article-parameters-row1">
                                    <p>Категорія: <?php echo ($news["category"]) ?></p>
                                </div>
                                <div class="article-parameters-row2">
                                    <div class="article-parameters-row2-block">
                                        <div class="article-parameters-row2-block-element">
                                            <div class="like-dislike-comment">
                                                <i class="far fa-eye"></i>
                                                <p><?php echo ($news["number_of_views"]) ?></p>
                                            </div>
                                            <div class="like-dislike-comment">
                                                <i class="hover-test far fa-thumbs-up"></i>
                                                <p><?php echo ($news["number_of_likes"]) ?></p>
                                            </div>
                                            <div class="like-dislike-comment">
                                                <i class="far fa-thumbs-down"></i>
                                                <p><?php echo ($news["number_of_dislikes"]) ?></p>
                                            </div>
                                            <div class="like-dislike-comment">
                                                <i class="far fa-comment"></i>
                                                <p><?php echo ($news["number_of_comments"]) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article-parameters-row2-block-element">
                                        <p><?php echo ($news["author"]) ?></p>
                                        <p><?php echo ($news["date"]) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php echo ($news["long_text"]) ?>
                </div>

                <div class="like-dislike-block">
                    <div class="like-dislike-block-row">
                        <h3>Вам сподобалась ця стаття?</h3>
                        <div class="like-dislike-button-block">
                            <div class="floating-button-green" id="like">
                                <i class="hover-test far fa-thumbs-up"></i> Так
                            </div>
                            <div class="floating-button-red" id="dislike">
                                <i class="far fa-thumbs-down"></i> Ні
                            </div>
                        </div>
                    </div>
                </div>


                <div class="comments-hide-show-block">
                    <div class="comments-hide-show-block-el1">
                        <i class="far fa-comment"></i>
                        <p><?php echo ($news["number_of_comments"]) ?></p>
                    </div>
                    <div class="comments-hide-show-block-el2">
                        КОМЕНТАРІ
                    </div>
                </div>
                <div class="comments-block">



                    <div class="comment">
                        <div class="comment-user-ava">
                            <img class="img_small" src="images/user-male.png">
                        </div>
                        <div class="comment-text">
                            <div class="comment-row1">
                                <p>
                                    Юзернейм
                                </p>
                                <p>
                                    дата
                                </p>
                            </div>
                            <div></div>
                            <div class="comment-row2">
                                <p>Сюди вставляй комєнт</p>
                            </div>
                        </div>

                    </div>


                </div>
            </div>



            <div class="sidebar-block">
                news-sidebar-block
            </div>
        </div>

    </div>












    <?php
    require_once "blocks/footer.php";
    ?>

</body>

</html>