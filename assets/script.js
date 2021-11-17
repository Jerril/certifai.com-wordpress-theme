jQuery(document).ready(function ($) {
    $('.teachwithcertifai').submit(function () {
      fbq('trackCustom', 'teachwithcertifai', {scenario:'submit_form'});
    });
    
  });

  (function () {
    var startingTime = new Date().getTime();
    // Load the script
    var script = document.createElement('SCRIPT');
    script.src =
      'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js';
    script.type = 'text/javascript';
    document.getElementsByTagName('head')[0].appendChild(script);
  
    // Poll for jQuery to come into existance
    var checkReady = function (callback) {
      if (window.jQuery) {
        callback(jQuery);
      } else {
        window.setTimeout(function () {
          checkReady(callback);
        }, 20);
      }
    };
  
    // Start polling...
    checkReady(function ($) {
      $(function () {
        var endingTime = new Date().getTime();
        var tookTime = endingTime - startingTime;
        console.log('jQuery is loaded, after ' + tookTime + ' milliseconds!');
      });
    });
  
  $('ul.nav-tabs a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  });
  })();
  