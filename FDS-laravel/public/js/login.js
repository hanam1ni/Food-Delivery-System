$('.form').find('input, textarea').on('keydown blur', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keydown') {
      label.addClass('active highlight');
    } 
    if (e.type === 'blur') {
      if($this.val() === ""){
        label.removeClass('active highlight');
      }
    }
});
