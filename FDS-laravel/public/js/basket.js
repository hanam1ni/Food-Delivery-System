basketAct = false;

function toggleBasket() {
	var target = $(this).siblings('.basket-container');

	// Activate Basket
	if(!basketAct){
		TweenMax.to(target, 2, {top: '10%', ease:Elastic.easeOut});
		$(this).css('background-color','#EB524A');
		basketAct = true;
	}
	// Deactivate Basket
	else{
		TweenMax.to(target, 0.5, {top: '100%', ease:Power1.easeOut});
		$(this).css('background-color','#9F9F9F');
		basketAct = false;
	}

}

$(".basket-btn").click(toggleBasket);