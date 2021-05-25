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
    $('.search_button').click(function() {
        searchNews();
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

function searchNews() {
    var news = document.querySelectorAll(".item");

    var search_query = $('#search_input').val().toUpperCase();
    var count = 0;

    for (var i = 0; i < news.length; i++) {
        if (!news[i].getAttribute('data-title').toUpperCase().includes(search_query)) {
            news[i].classList.add("hide");

        } else {
            count++;
        }
    }

    var word;
    if (count == 1) {
        word = "запис";
    } else if (count >= 2 && count <= 5) {
        word = "записи";
    } else {
        word = "записів";
    }

    if (count == 0) {
        document.querySelector('.fotter').classList.add("position-absolute");
    }

    document.getElementById('result_news').innerHTML = "Результати пошуку (" + count + " " + word + ")";
}

function hideSearchBlock() {
    document.querySelector('.search-form').classList.add("hide");
}

function backToTop() {
    var button = $('.back-to-top');

    $(window).on('scroll', () => {
        if ($(this).scrollTop() >= 50) {
            button.fadeIn();
        } else {
            button.fadeOut();
        }
    });

    button.on('click', (e) => {
        e.preventDefault();
        $('html').animate({ scrollTop: 0 }, 1000)
    });
}

backToTop();