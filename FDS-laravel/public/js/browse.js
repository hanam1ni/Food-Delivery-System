function starIn(){
	TweenMax.to($(this).find('img'), 0.2, {scale: (1.3)});
}

function starLeave(){
	TweenMax.to($(this).find('img'), 0.2, {scale: (1.0)});
}

$(".item").hover(starIn,starLeave);

var foodFocus = false;

function zoomIn() {
    TweenMax.to($(this).find('img'), 0.2, {
        scale: (1.3)
    });
}

function zoomLeave() {
    TweenMax.to($(this).find('img'), 0.2, {
        scale: (1.0)
    });
}

function blurIn() {
    tlBlur = new TimelineMax();
    tlBlur.to($(this).find('.img-contain-blur'), 0.3, {
        opacity: (0.9)
    }, 0).to($(this).find('.glyphicon.glyphicon-shopping-cart'), 0.3, {
        left: '20%'
    }, 0).to($(this).find('.glyphicon.glyphicon-plus-sign'), 0.3, {
        left: '60%'
    }, 0);
}

function blurLeave() {
    tlBlur = new TimelineMax();
    tlBlur.to($(this).find('.img-contain-blur'), 0.4, {
        opacity: (0)
    }, 0).to($(this).find('.glyphicon.glyphicon-shopping-cart'), 0.4, {
        left: '-20%'
    }, 0).to($(this).find('.glyphicon.glyphicon-plus-sign'), 0.4, {
        left: '120%'
    }, 0);
}

function orderIn() {
    TweenMax.to($(this).parent().siblings('.img-contain-order'), 0.2, {
        opacity: (0.9)
    });
    tlOrder = new TimelineMax({
        repeat: -1
    });
    tlOrder.to($(this), 0.3, {
        rotation: 10
    }, 0).to($(this), 0.3, {
        rotation: -10
    });
}

function orderLeave() {
    TweenMax.to($(this).parent().siblings('.img-contain-order'), 0.2, {
        opacity: (0)
    });
    tlOrder.kill();
    TweenMax.to($(this), 0.2, {
        rotation: 0
    }, 0);
}

function extraIn() {
    TweenMax.to($(this).parent().siblings('.img-contain-extra'), 0.2, {
        opacity: (0.9)
    });
    tlExtra = new TimelineMax({
        repeat: -1
    });
    tlExtra.to($(this), 0.4, {
        rotation: 90
    }).to($(this), 0.8, {
        rotation: -90
    });
}

function extraLeave() {
    TweenMax.to($(this).parent().siblings('.img-contain-extra'), 0.2, {
        opacity: (0)
    });
    tlExtra.pause(0, true);
}
$(".glyphicon.glyphicon-shopping-cart").hover(orderIn, orderLeave);
$(".glyphicon.glyphicon-plus-sign").hover(extraIn, extraLeave);
$(".item-food").hover(blurIn, blurLeave);
$(".item").hover(zoomIn, zoomLeave);

