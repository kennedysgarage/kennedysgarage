//= require vendor/ss-standard
//= require vendor/ss-social
//= require vendor/fitvids
//= require vendor/mixitup

$(document).ready(function(){

    // Basic FitVids Test
    $(".container").fitVids();

});


window.onload = function() {

  // MixitUp by KunkaLabs
  var containerEl = document.querySelector('.cards');
  var mixer = mixitup(containerEl, {
    "animation": {
        "duration": 250,
        "nudge": true,
        "reverseOut": false,
        "effects": "fade translateY(20%)"
    }
  });

  mixpanel.track("Pageview");

};
