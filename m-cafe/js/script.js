//画面遷移用
$(window).on('load',function() {
    $("#splash-logo").delay(1200).fadeOut('slow');
    $("#splash").delay(1500).fadeOut('slow',function() {
        $('body').addClass('appear');
    });
    
});




//アコースティックをクリックしたとき
$('.title').on('click',function() {
    var findEml = $(this).next(".box");
    $(findEml).slideToggle();
    if($(this).hasClass('close')) {
        $this.removeClass('close');
    } else {
        $(this).addClass('close');
    }
});

$(window).on('load',function(){
$('.accordion-area li:first-of-type section').addClass("open");
    $(".open").each(function(index,element){
        var Title=$(elememt).children('.title');
        $(Title).addClass('close');
        var Box = $(element).children('.box');
        $(Box).slideDown(500);
    });
});

/*top-pageボタン*/
function PageTopAnime() {
    let scroll = $(window).scrollTop();
    if (scroll >= 300) {
        $('#page-top').removeClass('DownMove');
        $('#page-top').addClass('UpMove');
    } else {
        if($("#page-top").hasClass('UpMove')) {
            $('#page-top').removeClass('UpMove');
            $('#page-top').addClass('DownMove');
        }
    }
}


$(window).scroll(function() {
    PageTopAnime();
});

$(window).on('load',function() {
    PageTopAnime();
});

$('#page-top').click(function() {
    $('body,html').animate({
        scrollTop:0
    },1500)
    return false;
});


//ナビゲーションボタンが押されたとき//
$('#openbtn').click(function() {
    $(this).toggleClass('active');
    $('#gnav').toggleClass('gnavActive');
    $('#circle-bg').toggleClass('circleActive');
});

$('#gnav li a').click(function() {
    $('#openbtn').removeClass('active');
    $('#gnav').removeClass('gnavActive');
    $('#circle-bg').removeClass('circleActive');
});