/**
 * Created by Vladimir Priymak on 09.02.2016.
 */

$(function(){
    $('#logout').click(function(){
        document.cookie = "user=''; expires=Thu, 01 Jan 1970 00:00:01 GMT";
        location.reload();
    })
});
