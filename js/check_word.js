/**
 * Created by Vladimir Priymak on 03.02.2016.
 */
$(document).ready(function(){
    var id_word;
    var id_check;
    var show_words = $('#info_show_words').text();
    var answers = $('#info_answers').text();
    var url = 'http://localhost/';
    var length_test = 5;
    var words_id_test = getCookie('words_id_test');
    console.log(words_id_test);

    $(':radio').prop('checked', false);//reset selection radio box

    $(':radio').change(function() {
        //change number answers in table statistic test
        ++answers;
        document.getElementById('info_answers').innerHTML = answers;

        //compare words
        id_word = $(this).attr('id_word');
        id_check = $('#word_check').attr('id_check');
        if(id_word == id_check) {
            alert('Молодец Правильно!');
            //save id words which of the user watch
            if(words_id_test) document.cookie = "words_id_test=" + words_id_test + ',' + id_word;
            else document.cookie = "words_id_test=" + id_word;
            //if is 5 words pass page report
            if(answers == length_test) location.href = url + 'engl/report_test.php' + '?show=' + show_words + '&answers=' + answers;//end test pass on page report
            else  location.href = url + 'engl' + '?show=' + show_words + '&answers=' + answers;
        }
        else alert('Попробуй еще');
    })
});

// возвращает cookie с именем name, если есть, если нет, то undefined
function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}


