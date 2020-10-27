
function buscar(){
    var word= $('#search_word').val();
    if( word != ''){
        $('#search_word').css("border", "1px solid #ccc");
        $('#error_empty').hide();
      $.ajax({
                type: 'POST', 
                url: 'Pages/result', 
                data: 'word='+word,
                beforeSend:function() {  
                 $('.loader').show();
				 $('#myTable').html('');
                },
                error: function(){
                  
                    
                },
                success: function(result) {
                 setTimeout(function(){
                 $('.loader').hide();
                 $('#myTable').html(result); 
                 }, 1000);   
                 
                }
	});
    }else{
		$('#search_word').css("border", "3px solid red");
        $('#error_empty').show();
		$('#myTable').html(''); 
    }
  }
  
  
  window.onload = function(e){ 
    $("#search_word").keydown(function(e){
        
    if(e.which === 13){
        buscar();
    }
    }); 
   }