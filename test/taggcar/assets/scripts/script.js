$(document).ready(function(){
		/*$('.mainMenu li a').click(function() {

	    $('.mainMenu li a.active').removeClass('active');
	    $(this).addClass('active');
	});

	$(window).scroll(function() {
	    if ($(window).scrollTop() > 10) {
	        $('#navBar').addClass('floatingNav');
	    } else {
	        $('#navBar').removeClass('floatingNav');
	    }
	});*/

	$(window).on('scroll', function() { 
        if ($(window).scrollTop() > $( 
          '#home').offset().top + $('#home'). 
            outerHeight() - window.innerHeight) { 
            
            $('.mainMenu li a.home').removeClass('active');
            $('.mainMenu li a.about').addClass('active');
        } 
        else if ($(window).scrollTop() <= $( 
          '#home').offset().top + $('#home'). 
            outerHeight() - window.innerHeight) { 
            
            $('.mainMenu li a.home').addClass('active');
            $('.mainMenu li a.about').removeClass('active');
        } 
    }); 

    // Attach a submit handler to the form
    $( "#sendmail" ).submit(function( event ) {
     
      // Stop form from submitting normally
      event.preventDefault();
     
      // Get some values from elements on the page:
      var $form = $( this ),
        email = $form.find( "input[name='email']" ).val(),
        url = $form.attr( "action" );
     
      // Send the data using post
      var posting = $.post( url, { email: email } );
     
      // Put the results in a div
      posting.done(function( data ) {
        var result = JSON.parse(data)
        $( "#modaltitle" ).empty().append(result.type);
        $( "#modalbody" ).empty().append( result.text );
        $("#resultModal").modal();
      });
    });
        $( "#sendmail2" ).submit(function( event ) {
     
      // Stop form from submitting normally
      event.preventDefault();
     
      // Get some values from elements on the page:
      var $form = $( this ),
        email = $form.find( "input[name='email']" ).val(),
        url = $form.attr( "action" );
     
      // Send the data using post
      var posting = $.post( url, { email: email } );
     
      // Put the results in a div
      posting.done(function( data ) {
        var result = JSON.parse(data)
        $( "#modaltitle" ).empty().append(result.type);
        $( "#modalbody" ).empty().append( result.text );
        $("#resultModal").modal();
      });
    });
});
