var page_fade = 500;

$(document).ready(function () {
                                                               // page fade out
    $("a").not("[target='_blank'], [href^='#']").click(function (e) {
        href = $(this).attr("href");
        $("body").fadeOut(page_fade);
        setTimeout(function () {
            window.location.href = href;
        }, page_fade);
        e.preventDefault();
    });

    var logo_rotating=false;
    $("header .brand").mouseenter(function () {
        if(logo_rotating===false){
            logo_rotating=true;
            $(this).addClass("hovered");
            setTimeout(function () {
                $("header .brand").removeClass("hovered");
                logo_rotating=false;
            }, 900);
        }
    });

    $(".menu-toggle").click(function () {
        if($(this).hasClass("opened")){
            $(".main-menu").removeClass("opened");
        }
        else{
            $(".main-menu").addClass("opened");
        }
    });

    $("a.box[href^='#']").click(function (e) {
        $("html, body").animate({scrollTop: $(""+$(this).attr("href")+"").offset().top}, 500);
        e.preventDefault();
    });




    // lightbox
    var photos = [];
    var photos_index = 0;
    $("img.preview").click(function () {
        photos = [];
        current = $(this);
        $("img.preview").each(function () {
            photos.push($(this).attr("src"));
            if($(this).is(current)){
                photos_index = $(this).index("img.preview");
            }
        });
        $(".lightbox img").attr("src", $(this).attr("src"));

        lightbox_controls();

        $(".lightbox").addClass("shown");
    });
    $(".lightbox .next").click(function () {
        lightbox_next();
    });
    $(".lightbox .prev").click(function () {
        lightbox_prev();
    });
    $(".lightbox").click(function (e) {
        if($(e.target).hasClass("lightbox") || $(e.target).hasClass("close")){
            $(".lightbox").removeClass("shown");
        }
    });
    function lightbox_controls() {
        if (photos_index == 0) {
            $(".lightbox .prev").hide();
        } else {
            $(".lightbox .prev").show();
        }
        if (parseInt(photos_index) == parseInt(photos.length) - 1) {
            $(".lightbox .next").hide();
        } else {
            $(".lightbox .next").show();
        }
    }
    function lightbox_next(){
        if($(".lightbox .next").css("display")!="none"){
            photos_index++;
            lightbox_controls();
            $(".lightbox img").attr("src", photos[photos_index]);
        }
    }
    function lightbox_prev(){
        if($(".lightbox .prev").css("display")!="none"){
            photos_index--;
            lightbox_controls();
            $(".lightbox img").attr("src", photos[photos_index]);
        }
    }




    // HP ROTATING ROUND
    if($("main.hp").length){
        var hp_round_current_rotation = 0;
        var hp_round_last_pos = 2;
        var hp_round_labels = ["price", "market cup", "trons", "available supply", "total supply"];
        $(".round-container .rotating .label").click(function () {
            hp_round($(this));

            if(hp_round_last_pos == parseInt(pos)-1 || hp_round_last_pos == parseInt(pos)+11){
                hp_round_next();
            }else if(hp_round_last_pos == parseInt(pos)+1 || hp_round_last_pos == parseInt(pos)-11){
                hp_round_prev();
            }

            hp_round_last_pos = pos;
        });

        function hp_round(el) {
            $(".round-container .rotating .label").removeClass("active");
            el.addClass("active");

            pos = el.attr("data-pos");
            val = el.attr("data-val");

            $(".round-container .value").removeClass("active");
            $(".round-container .value[data-val="+val+"]").addClass("active");
        }
        function hp_round_next(){
            hp_round_current_rotation-=30;
            $(".round-container .rotating").css("transform", "rotate("+(hp_round_current_rotation)+"deg)");

            next_pos = parseInt(pos) + 2;
            if(next_pos>12) next_pos -= 12;

            next_val = parseInt(val) + 2;
            if(next_val > 4) next_val -= 5;

            $(".round-container .rotating .label[data-pos="+next_pos+"]").attr("data-val", next_val);
            $(".round-container .rotating .label[data-pos="+next_pos+"]").html(hp_round_labels[next_val]);
        }
        function hp_round_prev(){
            hp_round_current_rotation+=30;
            $(".round-container .rotating").css("transform", "rotate("+(hp_round_current_rotation)+"deg)");

            prev_pos = parseInt(pos) - 2;
            if(prev_pos<1) prev_pos += 12;

            prev_val = parseInt(val) - 2;
            if(prev_val < 0) prev_val += 5;

            $(".round-container .rotating .label[data-pos="+prev_pos+"]").attr("data-val", prev_val);
            $(".round-container .rotating .label[data-pos="+prev_pos+"]").html(hp_round_labels[prev_val]);
        }
        function hp_round_next_full() {
            pos = parseInt(parseInt(hp_round_last_pos)+1);
            if(pos>12) pos-=12;
            hp_round($(".round-container .rotating .label[data-pos="+ pos +"]"));
            hp_round_next();
            hp_round_last_pos = pos;
        }
        function hp_round_prev_full() {
            pos = parseInt(parseInt(hp_round_last_pos)-1);
            if(pos<1) pos+=12;
            hp_round($(".round-container .rotating .label[data-pos="+ pos +"]"));
            hp_round_prev();
            hp_round_last_pos = pos;
        }
        setInterval(function () {
            hp_round_next_full();
        }, 5000);

        $(window).bind('mousewheel', function(event) {
            if (event.originalEvent.wheelDelta >= 0) {
                hp_round_prev_full();
            }
            else {
                hp_round_next_full();
            }
        });
    }




    // KEYS CONTROLLING

    $(document).keydown(function (e) {
        if($(".lightbox").length && $(".lightbox").hasClass("shown")){
            if(e.keyCode=="39"){
                lightbox_next();
            }else if(e.keyCode=="37"){
                lightbox_prev();
            }else if(e.keyCode=="27"){
                $(".lightbox").removeClass("shown");
            }
        }
        if($("main.hp").length){
            if(e.keyCode=="39"){
                hp_round_next_full();
            }else if(e.keyCode=="37"){
                hp_round_prev_full();
            }
        }
    });

    // disable scrolling

    var current_scroll = 0
    $(document).scroll(function () {
        if($(".main-menu").hasClass("opened") || $(".lightbox").hasClass("shown")){
            $(document).scrollTop(current_scroll);
        }else{
            current_scroll = $(document).scrollTop();
        }
    });

});


// background glitch

var canvas = document.getElementById('background'),
    context = canvas.getContext('2d'),
    img = new Image(),
    w, h, offset, glitchInterval;

img.src = './media/graphic/background/'+($("#background").attr("data-img"));
img.onload = function() {
    init();
    window.onresize = init;
};

var init = function() {
    clearInterval(glitchInterval);
    if(window.innerWidth > window.innerHeight){
        canvas.width = w = $("main").innerWidth();
        canvas.height = h = (w / img.width * img.height);
    }else{
        canvas.height = h = window.innerHeight;
        canvas.width = w = (h / img.height * img.width);
    }
    offset = 0;
    glitchInterval = setInterval(function() {
        if(!$(".main-menu").hasClass("opened") && $("canvas#background").css("visibility")!="hidden") {
            if (Math.random() > .8) {
                $("canvas#background").show();
                for (i = Math.floor(Math.random()) * 5; i <= 15; i++) {
                    clear();
                    context.drawImage(img, 0, 0, w, h);
                    setTimeout(glitchImg, randInt(20, 400));
                }
            } else {
                $("canvas#background").hide();
            }
            clear();
        }
    }, 800);
};

var clear = function() {
    context.rect(0, 0, w, h);
    context.fillStyle = 'transparent';
    context.fill();
};

var glitchImg = function() {
    for (var i = 0; i < randInt(1, 10); i++) {
        if(Math.random() > .5){
            var x = Math.random() * w / ((Math.random()*(-10)) - 30);
        }else{
            var x = Math.random() * w / ((Math.random()*(10)) + 30);
        }
        var y = Math.random() * h;
        var spliceWidth = w - x;
        var spliceHeight = randInt(5, h / 6);
        context.drawImage(canvas, 0, y, spliceWidth, spliceHeight, x, y, spliceWidth, spliceHeight);
        context.drawImage(canvas, spliceWidth, y, x, spliceHeight, 0, y, x, spliceHeight);
    }
};

var randInt = function(a, b) {
    return ~~(Math.random() * (b - a) + a);
};