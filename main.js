$(document).ready(function() {
    $('#like').click(function() {
        setVote('like');
    });

    $('#dislike').click(function() {
        setVote('dislike');
    });
    $('#create_comment').click(function() {
        newComment();
    });
});

function setVote(type) {
    var id_news = $('.news-article-block').attr('data-id');


    $.ajax({

        type: "POST",

        url: "functions/like_dislike.php",

        data: {
            'id_news': id_news,
            'type': type
        },

        dataType: "json"

    });

    if (type == 'like') {
        document.querySelector("#number_of_likes").innerHTML = +document.querySelector("#number_of_likes").innerHTML + 1;
    } else {
        document.querySelector("#number_of_dislikes").innerHTML = +document.querySelector("#number_of_dislikes").innerHTML + 1;
    }

    document.querySelector('.like-dislike-button-block').classList.add("hide");

    document.querySelector('.like-dislike-block-row>h3').innerHTML = "Дякую за Вашу оцінку!";


}


function newComment() {
    var id_news = $('.news-article-block').attr('data-id');

    var username = $('#username').val();
    var user_comment = $('#user_comment').val();

    console.log(username);
    console.log(user_comment);

    var date = new Date();
    var comment_date = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate();


    if (username != "" && user_comment != "") {
        $.ajax({

            type: "POST",

            url: "functions/comments.php",

            data: {
                'id_news': id_news,
                'username': username,
                'comment_text': user_comment,
                'comment_date': comment_date
            },

            dataType: "json"

        });
        location.reload();
    } else {
        alert("Будь ласка, введіть усі необхідні дані!");
    }

}