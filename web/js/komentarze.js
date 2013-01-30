
//var path2 = "http://localhost/INFORMACJE/web/app_dev.php/ajax";

var path2 = $('#link2').attr("href"); 


$('.minus').click(function(){ $(this).css('cursor', 'wait');

var ocena = 'minus'; var $this = $(this);
var id = $(this).prev().text();
        $.ajax({ url: path2, type: "POST",  cache: false, async: true, data: { id:id, ocena:ocena },
                success: function(dane) { 
				$this.prev().prev().text(dane); 
				$this.css('cursor', 'default');
				}}); 
//alert(path);
});

$('.plus').click(function(){ $(this).css('cursor', 'wait');

var ocena = 'plus'; var $this = $(this);
var id = $(this).prev().prev().text();
        $.ajax({ url:  path2 , type: "POST",  cache: false, async: true, data: { id:id, ocena:ocena },
                success: function(dane) { 
				$this.next().text(dane); 
				$this.css('cursor', 'default');
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

// KOMENTARZ 2

$('.minus2').click(function(){ $(this).css('cursor', 'wait');
var ocena2 = 'minus'; var $this = $(this);
var id = $(this).prev().text(); 
        $.ajax({ url: path2, type: "POST",  cache: false, async: true, data: { id:id, ocena2:ocena2 },
                success: function(dane) { 
				$this.prev().prev().text(dane); 
				$this.css('cursor', 'default');
				}}); 

});

$('.plus2').click(function(){ $(this).css('cursor', 'wait');

var ocena2 = 'plus'; var $this = $(this);
var id = $(this).prev().prev().text();
        $.ajax({ url:  path2 , type: "POST",  cache: false, async: true, data: { id:id, ocena2:ocena2 },
                success: function(dane) { 
				$this.next().text(dane); 
				$this.css('cursor', 'default');
				  }  }); 

});
