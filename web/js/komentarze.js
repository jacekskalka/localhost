//var path = document.URL + 'ajax'; 
//var path = path.replace('#','/');

//var path = "{{ path('informacje_main_main_default_ajax') }}";

var path = "http://localhost/INFORMACJE/web/app_dev.php/ajax"

$('.minus').click(function(){
var ocena = 'minus'; var $this = $(this);
var id = $(this).prev().text();
        $.ajax({ url: path, type: "POST",  cache: false, async: true, data: { id:id, ocena:ocena },
                success: function(dane) { 
				$this.prev().prev().text(dane); 

				}}); 
//alert(path);
});

$('.plus').click(function(){

var ocena = 'plus'; var $this = $(this);
var id = $(this).prev().prev().text();
        $.ajax({ url:  path , type: "POST",  cache: false, async: true, data: { id:id, ocena:ocena },
                success: function(dane) { 
				$this.next().text(dane); 
			
				  }  }); 

});

// drugi komentarz ( odpowiedz)

$('.odpowiedz').click(function(){
 $('.skomentuj2').show();
 var komentarz_id = $(this).next().text();
 $('#form2name_hidden').attr('value',komentarz_id);
 })



$('.zamknij').click(function(){

 $('.skomentuj2').hide();
});