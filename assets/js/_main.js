// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var ExampleSite = {
  // All pages
  common: {
    init: function() {
      // JS here
    },
    finalize: function() { }
  },
  // Home page
  home: {
    init: function() {
      // JS here
    }
  },
  // About page
  about: {
    init: function() {
      // JS here
    }
  },
  // How it Works page
  howitworks: {
    init: function() {
      if($('div#feature-menu-anchor').length){
 
		 $('li.cm').on('click', function(){
			 $('li.cm').removeClass('active');
			 $('div.slide').fadeOut().removeClass('active');
			 $(this).addClass('active');
			 
			 var slideName = $(this).data('slide'),
			 	 nextSlide = "div#" + slideName;
			 
			 $(nextSlide).fadeIn().addClass('active');	 
			 
			 }); 
		}
    }
  }
};

var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = ExampleSite;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {

    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });

    UTIL.fire('common', 'finalize');
  }
};

$(document).ready(UTIL.loadEvents);
