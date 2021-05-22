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


    <section>
        <div class="wrapper">
            <h1>Новини:</h1>
        </div>
        <div class="wrapper">





            <div class="block-news">

                <?php
                for ($i = 0; $i < count($news); $i++) :
                ?>
                    <div class="item" data-sort-date="08.05.2021" data-sort-like="2" data-sort-dislike="" data-sort-date="">
                        <a href="news-article.php?id=<?php echo ($news[$i]["id"]) ?>">
                            <div class="top-news-title">
                                <p>Автор: <?php echo ($news[$i]["author"]) ?></p>
                                <p><?php echo ($news[$i]["date"]) ?></p>
                            </div>
                           
                                <h2><?php echo ($news[$i]["title"]) ?></h2>
                          

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
                                <div>
                                    <p>Категорія: <?php echo ($news[$i]["category"]) ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endfor; ?>








            </div>
        </div>
    </section>





    <script src="main.js"></script>
</body>

</html>