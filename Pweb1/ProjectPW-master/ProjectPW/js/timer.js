function counter(time, url){
	var interval = setInterval(function(){
        var menit, detik;
        menit = parseInt(time/60, 10);
        detik = time%60;
		$('#menit').text(menit);
        $('#detik').text(detik);
		time = time - 1;
 		createCookie('time', time, 1);
		if(time == 0){
			clearInterval(interval);
			createCookie('time', "", 1);
			window.location = url;
		}
	}, 1000);
}

$(document).ready(function(){
	var time = getCookie('time');
	if(time===""){
		time=100;
	}
	counter(time, 'http://localhost/ProjectPW/hasil.php');
});


var createCookie = function(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/ProjectPW";
}

function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
}