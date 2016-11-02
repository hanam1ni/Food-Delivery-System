function starIn(){
	TweenMax.to($(this).find('img'), 0.2, {scale: (1.3)});
}

function starLeave(){
	TweenMax.to($(this).find('img'), 0.2, {scale: (1.0)});
}

$(".item").hover(starIn,starLeave);
