var sections = {
  form            : $('#form'),
  form_container  : $('.form-container'),
  login           : $('#login-form'),
  sign_up         : $('#sign-up-form'),
},
buttons = {
  login   : $('#login'),
  sign_up : $('#sign-up'),
};

jQuery(function($) {

  //show sign up form initially
  getForm(sections.sign_up, sections.login);

  //show login form
  buttons.login.on('click', function(){
    buttons.sign_up.removeClass('active');
    $(this).addClass('active');
    getForm(sections.login, sections.sign_up);
  });

  //show sign up form
  buttons.sign_up.on('click', function(){
    buttons.login.removeClass('active');
    $(this).addClass('active');
    getForm(sections.sign_up, sections.login);
  });


  // animate label for each input
  sections.form.find('input, textarea').on('keyup blur focus', function (e) {
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

function getForm(show, hide) {
  sections.form_container.empty().append(show);
  hide.removeClass('show');
  show.addClass('show');
}
