<!DOCTYPE html>

<head>
    <?php
    require_once "functions/functions.php";

    setViewPlusOne($_GET["id"]);

    $news = getNewsItems(1, $_GET["id"]);
    $sidebar_news = getNewsItems(7, false);
    $comments = getComments($_GET["id"]);
    $count_comments = count($comments);
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
                                                <p id="number_of_likes"><?php echo ($news["number_of_likes"]) ?></p>
                                            </div>
                                            <div class="like-dislike-comment">
                                                <i class="far fa-thumbs-down"></i>
                                                <p id="number_of_dislikes"><?php echo ($news["number_of_dislikes"]) ?></p>
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
                    <div class="comments-hide-show-block-row">
                        <div class="comments-hide-show-block-el1">
                            <i class="far fa-comment"></i>
                            <p><?php echo ($news["number_of_comments"]) ?></p>
                        </div>
                        <div class="comments-hide-show-block-el2">
                            КОМЕНТАРІ
                        </div>
                    </div>
                </div>

                <div class="create-comment-block">
                    <div class="comment-user-ava">
                        <img class="img_small" src="images/user-male.png">
                    </div>
                    <div class="inputs-block">
                        <input id="username" placeholder="Введіть нікнейм">
                        <textarea id="user_comment" placeholder="Введіть коментар" cols="40" rows="5"></textarea>
                        <button id="create_comment" class="button7">Відправити</button>
                    </div>
                </div>

                <div class="comments-block">


                    <?php
                    for ($i = 0; $i < count($comments); $i++) :
                    ?>
                        <div class="comment">
                            <div class="comment-user-ava">
                                <img class="img_small" src="images/user-male.png">
                            </div>
                            <div class="comment-text">
                                <div class="comment-row1">
                                    <strong class="comment-row1-username">
                                        <?php echo ($comments[$i]["username"]) ?>
                                    </strong>
                                    <p>
                                        <?php echo ($comments[$i]["comment_date"]) ?>
                                    </p>
                                </div>
                                <div></div>
                                <div class="comment-row2">
                                    <p><?php echo ($comments[$i]["comment_text"]) ?></p>
                                </div>
                            </div>

                        </div>
                    <?php endfor; ?>


                </div>
            </div>



            <div class="sidebar-block">
                <h2>Читайте також:</h2>


                <?php
                for ($i = 0; $i < count($sidebar_news); $i++) :
                ?>
                <div class="sidebar-block-el">
                    <div><hr></div>
                    <h3><?php echo ($sidebar_news[$i]["title"]) ?></h3>
                    <div class="sidebar-block-el-param ">
                        <div class="like-dislike-comment">
                            <i class="far fa-eye"></i>
                            <p><?php echo ($sidebar_news[$i]["number_of_views"]) ?></p>
                        </div>
                        <div class="like-dislike-comment">
                            <i class="hover-test far fa-thumbs-up"></i>
                            <p id="number_of_likes"><?php echo ($sidebar_news[$i]["number_of_likes"]) ?></p>
                        </div>
                        <div class="like-dislike-comment">
                            <i class="far fa-thumbs-down"></i>
                            <p id="number_of_dislikes"><?php echo ($sidebar_news[$i]["number_of_dislikes"]) ?></p>
                        </div>
                        <div class="like-dislike-comment">
                            <i class="far fa-comment"></i>
                            <p><?php echo ($sidebar_news[$i]["number_of_comments"]) ?></p>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>

            </div>
        </div>

    </div>












    <?php
    require_once "blocks/footer.php";
    ?>

</body>

</html>