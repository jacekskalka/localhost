/*                                   CSS3 
	Autor : Jacek Skałka
	Do templatu należy wysłać wszystkie src obrazów. teplate musi wyglądać tak :
	ul - #small_list
	li - .li_{{ loop.index }} // od 1, ilość obrazów, każdy kolejnej klasy
	img = w każdym li
	#big = img z dużym obrazkiem
	#next,prev - nawigacja dla małej listy
	#next_big,prev_big - nawigacja dla dużej listy
	
*/

var current = '.' + $('#small_list li:visible:first').attr('class');  
$(current).css('border','1px solid blue');


var last_visible_right = '.' + $('#small_list li:visible:last').attr('class');        // USTAWIENIA GLOBALNE
var first_visible_left = '.' + $('#small_list li:visible:first').attr('class');
var first_hidden_right = '.' + $('#small_list li:visible:last').next().attr('class');
var last_hidden_left = '.' + $('#small_list li:visible:first').prev().attr('class');


//Naciśnięcie miniatury
$('#small_list div').click(function(){
	$('#small_list li').css('border','');
	$(this).parent().css('border','1px solid blue');
	var src = $(this).css('background-image');
	$('#big').css('background-image',src);
	current = '.' + $(this).parent().attr('class');
});

//PRZEWIJANIE MINIATUR
$('#next').click(function(){
var last_list_item = '.' + $('#small_list li:last').next().attr('class');
var first_hidden_right = '.' + $('#small_list li:visible:last').next().attr('class');

	if (first_hidden_right!=last_list_item){
	$(first_hidden_right).show();
	    
		var count = $('#small_list li').size();
		if (count > 5){
		var first_visible_left = '.' + $('#small_list li:visible:first').attr('class');
		$(first_visible_left).hide();
		}
	}
		current = '.' + $(current).next().attr('class');                              
	if (current!=".undefined"){	
		$('#small_list li').css('border','');
		$(current).css('border','1px solid blue');
		var src = $(current).children().css('background-image');
		$('#big').css('background-image',src);
	} 
	
});

$('#prev').click(function(){
var first_list_item = '.' + $('#small_list li:first').attr('class');
var last_hidden_left = '.' + $('#small_list li:visible:first').prev().attr('class');
var first_visible_right = '.' + $('#small_list li:visible:last').attr('class'); 
	if (last_hidden_left!=".undefined"){
	$(last_hidden_left).show();
	$(first_visible_right).hide();
	}
	current = '.' + $(current).prev().attr('class');                              
	if (current!=".undefined"){	
		$('#small_list li').css('border','');
		$(current).css('border','1px solid blue');
		var src = $(current).children().css('background-image');
		$('#big').css('background-image',src);
	};
});

// DUŻE OBRAZY ( KOD SKOPIOWANy Z MINIATUR)
 $('#next_big').click(function(){

var last_list_item = '.' + $('#small_list li:last').next().attr('class');
var first_hidden_right = '.' + $('#small_list li:visible:last').next().attr('class');

	if (first_hidden_right!=last_list_item){
	$(first_hidden_right).show();
		var count = $('#small_list li').size();
		if (count > 5){
		var first_visible_left = '.' + $('#small_list li:visible:first').attr('class');
		$(first_visible_left).hide();
		}
	}
	current = '.' + $(current).next().attr('class');                              
	if (current!=".undefined"){	
		$('#small_list li').css('border','');
		$(current).css('border','1px solid blue');
		var src = $(current).children().css('background-image');
		$('#big').css('background-image',src);
	};

 });
 
 
$('#prev_big').click(function(){
var first_list_item = '.' + $('#small_list li:first').attr('class');
var last_hidden_left = '.' + $('#small_list li:visible:first').prev().attr('class');
var first_visible_right = '.' + $('#small_list li:visible:last').attr('class'); 
	if (last_hidden_left!=".undefined"){
	$(last_hidden_left).show();
	$(first_visible_right).hide();
	}
	current = '.' + $(current).prev().attr('class');                              
	if (current!=".undefined"){	
		$('#small_list li').css('border','');
		$(current).css('border','3px solid blue');
		var src = $(current).children().css('background-image');
		$('#big').css('background-image',src);
	};
});
