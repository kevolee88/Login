jQuery(function($) {

  //show sign up form initially
  getSignup('form-sign-up');

  //show login form
  $('#login').on('click', function(){
    $('#sign-up').removeClass('active');
    $(this).addClass('active');
    getLogin('form-login');
  });

  //show sign up form
  $('#sign-up').on('click', function(){
    $('#login').removeClass('active');
    $(this).addClass('active');
    getSignup('form-sign-up');
  })


  // animate label for each input
  $('form').find('input, textarea').on('keyup blur focus', function (e) {
    var $this = $(this),
        label = $this.prev('label');

  	  if (e.type === 'keyup') {
  			if ($this.val() === '') {
          console.log(label);
            label.removeClass('active highlight');
          } else {
            label.addClass('active highlight');
          }
      } else if (e.type === 'blur') {
      	if( $this.val() === '' ) {
      		label.removeClass('active highlight');
  			} else {
  		    label.removeClass('highlight');
  			}
      } else if (e.type === 'focus') {

        if( $this.val() === '' ) {
      		label.removeClass('highlight');
  			}
        else if( $this.val() !== '' ) {
  		    label.addClass('highlight');
  			}
      }

  });

});

function getLogin(id) {
   $.ajax({

     type: "GET",//post
     url: window.uri + 'login.php',
     data: "id="+id, // appears as $_GET['id'] @ ur backend side
     success: function(data) {
           // data is ur summary
          $('.form-container').html(data);
     }

   });
}

function getSignup(id) {
   $.ajax({

     type: "GET",//post
     url: window.uri + 'sign-up.php',
     data: "id="+id, // appears as $_GET['id'] @ ur backend side
     success: function(data) {
           // data is ur summary
          $('.form-container').html(data);
     }

   });
}
