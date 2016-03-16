$(document).ready(function() { 

	"use strict";
	
	
	 //PRELOADER

	 $("#preloader").hide();

	 $(window).load(function() {    
	 	$("#status").fadeOut();
        //$("#preloader").delay(1000).fadeOut("slow");
    });
	 $("#customizer .options").click(function() {
	 	$("#customizer").toggleClass('active');
	 });

	 $("#customizer #colors a").click(function() {
	 	var colorClass = $(this).attr('id');
	 	if (colorClass == 'yellow') {
	 		$('.css-color').attr('href', '#');
	 	}
	 	$('.css-color').attr('href', 'css/colors/' + colorClass + '.css');

	 });

	//TEXT ANIMATION 
	$('.tlt').textillate({
	  // the default selector to use when detecting multiple texts to animate
	  selector: '.texts',

	  // enable looping
	  loop: true,

	  // sets the minimum display time for each text before it is replaced
	  minDisplayTime: 2000,

	  // sets the initial delay before starting the animation
	  // (note that depending on the in effect you may need to manually apply 
	  // visibility: hidden to the element before running this plugin)
	  initialDelay: 0,

	  // set whether or not to automatically start animating
	  autoStart: true,

	  in: {
		// set the effect name
		effect: 'fadeIn',

		// set the delay factor applied to each consecutive character
		delayScale: 1,

		// set the delay between each character
		delay: 50,

		// set to true to animate all the characters at the same time
		sync: true,

		// randomize the character sequence 
		// (note that shuffle doesn't make sense with sync = true)
		shuffle: false,

		// reverse the character sequence 
		// (note that reverse doesn't make sense with sync = true)
		reverse: false,

		// callback that executes once the animation has finished
		callback: function () {}
	},
	
	  // out animation settings.
	  out: {
	  	effect: 'fadeOut',
	  	delayScale: 1,
	  	delay: 50,
	  	sync: true,
	  	shuffle: false,
	  	reverse: false,
	  	callback: function () {}
	  },

	  // callback that executes once textillate has finished 
	  callback: function () {},

	  // set the type of token to animate (available types: 'char' and 'word')
	  type: 'char'
	});

	// subscribe
	$("#mc-form").on("submit", function (e) {
		e.preventDefault();
		console.log(form.serialize());
	});
	
});


/*	//CONTACT FORM
	$('#contact-form').validate({
		rules: {
			name: {
				required: true,
				minlength: 2
			},
			email: {
				required: true,
				email: true
			},

			phone: {
				required: true,
				minlength: 2
			},

			message: {
				required: true,
				minlength: 10
			}
		},

		messages: {
			name: "<i class='fa fa-exclamation-triangle'></i>Please specify your name.",
			email: {
				required: "<i class='fa fa-exclamation-triangle'></i>Precisamos do seu e-mail para entrar em contato.",
				email: "<i class='fa fa-exclamation-triangle'></i>Por favor, insira um email válido."
			},
			phone:"<i class='fa fa-exclamation-triangle'></i>Por favor, insira um email válido.",
			message: "<i class='fa fa-exclamation-triangle'></i>Insira um e-mail."
		},

		submitHandler: function(form) {
			console.log(form);
		}
	});	*/