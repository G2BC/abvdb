function testAnim(x,y) {
	var $j = jQuery.noConflict();
	$j('#animacao1').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     $j(this).removeClass();
	});
	$j('#animacao2').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     $j(this).removeClass();
	});
	$j('#animacao3').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     $j(this).removeClass();
	});
	$j('#animacao4').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     $j(this).removeClass();
	});
	$j('#titulo_pg').removeClass().addClass(y + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
	     $j(this).removeClass();
	});
             
             
}

 new WOW().init();