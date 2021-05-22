$(document).ready(function() {
    $('#like').click(function() {
        setVote('like', $(this));
    });

    $('#dislike').click(function() {
        setVote('dislike', $(this));
    });

});

function setVote(type, element) {
    var id_news = 1;


    $.ajax({

        type: "POST",

        url: "functions/like_dislike.php",

        data: {
            'id_news': id_news,
            'type': type
        },

        dataType: "json",

    });
}


// type - тип голоса. Лайк или дизлайк
// element - кнопка, по которой кликнули
function setVote(type, element) {
    // получение данных из полей
    var id_news = 1;

    $.ajax({
        // метод отправки 
        type: "POST",
        // путь до скрипта-обработчика
        url: "functions/like_dislike.php",
        // какие данные будут переданы
        data: {
            'id_news': id_news,
            'type': type
        },
        // тип передачи данных
        dataType: "json",
        // действие, при ответе с сервера
        success: function(data) {
            // в случае, когда пришло success. Отработало без ошибок
            if (data.result == 'success') {
                // Выводим сообщение
                alert('Голос засчитан');
                // увеличим визуальный счетчик
                var count = parseInt(element.find('b').html());
                element.find('b').html(count + 1);
            } else {
                // вывод сообщения об ошибке
                alert(data.msg);
            }
        }
    });
}