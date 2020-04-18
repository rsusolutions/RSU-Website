setInterval(function time() {
    var d = new Date();
    var hours = 18 - d.getHours();
    var min = 60 - d.getMinutes();
    if ((min + "").length == 1) {
        min = "0" + min;
    }
    var sec = 60 - d.getSeconds();
    if ((sec + "").length == 1) {
        sec = "0" + sec;
    }
    if(hours<0||min<0||sec<0){
        jQuery("#the-final-countdown").text("Time Up");
    }
    else{

        jQuery("#the-final-countdown").text("Time Left "+hours + ":" + min + ":" + sec);
    }
}, 1000);


