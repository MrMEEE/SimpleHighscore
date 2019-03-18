$(document).ready(function()
 {

  $( "#logtime" ).css("background-color", "#333");
  $( "#list" ).css("background-color", "#2a2e86");
  $( "#login" ).hide( "slow", function() {
  $( "#highscorelist" ).show( "slow", function() {
  $.ajax({
      type: "POST",
      url: 'ajax.php', 
      success: function(data) {
     		$('#highscoretable').html($(data));
     		$('#notification-bar').text('The page has been successfully loaded');
 	 },
 	 error: function() {
    	 	$('#notification-bar').text('An error occurred');
	 }
         
        });
      });
    });

   $('ul li#list').click(function(e) 
    { 

    $( "#logtime" ).css("background-color", "#333");
    $( "#list" ).css("background-color", "#2a2e86"); 
    $( "#login" ).hide( "slow", function() {
      $( "#highscorelist" ).show( "slow", function() {
	$.ajax({
      type: "POST",
      url: 'ajax.php',
      success: function(data) {
                $('#highscoretable').html($(data));
                $('#notification-bar').text('The page has been successfully loaded');
         },
         error: function() {
                $('#notification-bar').text('An error occurred');
         }

    });	        
      });
    });
   });

   $('ul li#logtime').click(function(e)
    {
     $( "#list" ).css("background-color", "#333");
    $( "#logtime" ).css("background-color", "#2a2e86");
     $( "#highscorelist" ).hide( "slow", function() {
       $( "#login" ).show( "slow", function() {

      });
    });

   });

   $('#submit').click(function(e){
	e.preventDefault();

	if($('#eula1').prop('checked') == false){
		alert("Accepter venligst at vi kontakter dig hvis du vinder :)");

        }else if(($('#name').val() == "" )){
		alert("Udfyld venligst Navn");
	}else if(($('#email').val() == "" )){
		alert("Udfyld venligst Email");
	}else if(($('#company').val() == "")){
		alert("Udfyld venligst Firma");
	}else if(($('#lap').val() == "")){
		alert("Udfyld venligst Lap-tid");

        }else{

	$.ajax({
    	type: "POST",
    	dataType: "json",
    	url:  "ajax.php",
	data: { action: "logtime", name: $('#name').val(), email: $('#email').val(), company: $('#company').val(), lap: $('#lap').val(), eula1: $('#eula1').prop('checked'), eula2: $('#eula2').prop('checked') }

        });

	 $( "#logtime" ).css("background-color", "#333");
         $( "#list" ).css("background-color", "#2a2e86");
         $( "#login" ).hide( "slow", function() {
          $( "#highscorelist" ).show( "slow", function() {
		$.ajax({
      type: "POST",
      url: 'ajax.php',
      success: function(data) {
                $('#highscoretable').html($(data));
                $('#notification-bar').text('The page has been successfully loaded');
         },
         error: function() {
                $('#notification-bar').text('An error occurred');
         }

    });
          });
         });

	$('#name').val("");
	$('#email').val("");
	$('#company').val("");
	$('#lap').val("");
	$('#eula1').prop('checked',false);
	$('#eula2').prop('checked',false);
	}

	
   });

});
