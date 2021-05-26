<!DOCTYPE html>
<html lang="en">

<head>
    <?php


    $title = "Новини";
    require_once "blocks/head.php";

    $news = getNewsItems(20, false);
    ?>

</head>

<body>
    <?php require_once "blocks/header.php" ?>


    <div class="main-wrapper">
        <div class="wrapper">
            <h1 id="result_news">Новини:</h1>
        </div>
        <div class="wrapper">

            <div class="block-news">

                <?php
                for ($i = 0; $i < count($news); $i++) :
                ?>
                    <div class="item" data-title="<?php echo ($news[$i]["title"]) ?>" data-author="<?php echo ($news[$i]["author"]) ?>" data-short_text="<?php echo ($news[$i]["short_text"]) ?>" data-category="<?php echo ($news[$i]["category"]) ?>">
                        <a href="news-article.php?id=<?php echo ($news[$i]["id"]) ?>">
                            <div class="top-news-title">
                                <p>Автор: <?php echo ($news[$i]["author"]) ?></p>
                                <p><?php echo ($news[$i]["date"]) ?></p>
                            </div>

                            <h2 class="link-color"><?php echo ($news[$i]["title"]) ?></h2>


                            <div class="item-text-img">
                                <div class="text-block">
                                    <p><?php echo ($news[$i]["short_text"]) ?>...</p>
                                </div>
                                <div class="image-block">
                                    <img class="img_small" src="images/img_small/<?php echo ($news[$i]["id"]) ?>.png">
                                </div>
                            </div>
                            <div class="bottom-news-title">
                                <div class="like-dislike-comment-block">
                                    <div class="like-dislike-comment">
                                        <i class="far fa-eye"></i>
                                        <p><?php echo ($news[$i]["number_of_views"]) ?></p>
                                    </div>
                                    <div class="like-dislike-comment">
                                        <i class="hover-test far fa-thumbs-up"></i>
                                        <p><?php echo ($news[$i]["number_of_likes"]) ?></p>
                                    </div>
                                    <div class="like-dislike-comment">
                                        <i class="far fa-thumbs-down"></i>
                                        <p><?php echo ($news[$i]["number_of_dislikes"]) ?></p>
                                    </div>
                                    <div class="like-dislike-comment">
                                        <i class="far fa-comment"></i>
                                        <p><?php echo ($news[$i]["number_of_comments"]) ?></p>
                                    </div>
                                </div>
                                <div class="category-block">
                                    <p>#<?php echo ($news[$i]["category"]) ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endfor; ?>


            </div>
        </div>
    </div>

    <a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
    <?php
    require_once "blocks/footer.php";
    ?>

</body>

</html>