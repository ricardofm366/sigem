

$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
})


$.mainContent = $('#ui-view');

//Main navigation
$.navigation = $('nav > ul.nav');

$.panelIconOpened = 'icon-arrow-up';
$.panelIconClosed = 'icon-arrow-down';

  //Default colours
$.brandPrimary =  '#20a8d8';
$.brandSuccess =  '#4dbd74';
$.brandInfo =     '#63c2de';
$.brandWarning =  '#f8cb00';
$.brandDanger =   '#f86c6b';

$.grayDark =      '#2a2c36';
$.gray =          '#55595c';
$.grayLight =     '#818a91';
$.grayLighter =   '#d1d4d7';
$.grayLightest =  '#f8f9fa';

'use strict';


$(document).on('click', '.nav a[href!="#"]', function(e) {    
  var target = $(e.currentTarget);
  changeCss(target.attr('href'));
});

function changeCss(url) {
  $('nav .nav li .nav-link').removeClass('active');
  $('nav .nav li.nav-dropdown').removeClass('open');
  $('nav .nav li:has(a[href="' + url.split('?')[0] + '"])').addClass('open');
  $('nav .nav a[href="' + url.split('?')[0] + '"]').addClass('active');

}

$(document).ready(function($){
    
      
      // Dropdown Menu
      $.navigation.on('click', 'a', function(e){

        if ($(this).hasClass('nav-dropdown-toggle')) {
          $(this).parent().toggleClass('open');
          resizeBroadcast();
        }
      });

      function resizeBroadcast() {

        var timesRun = 0;
        var interval = setInterval(function(){
          timesRun += 1;
          if(timesRun === 5){
            clearInterval(interval);
          }
          //window.dispatchEvent(new Event('resize'));
          window.dispatchEvent(createNewEvent('resize'));
        }, 62.5);
      }

      function createNewEvent(eventName) {
          if (typeof (Event) === 'function') {
              return new Event(eventName);
          } else {
              var event = document.createEvent('Event');
              event.initEvent(eventName, true, true);
              return event;
          }
      }

    
      /* ---------- Main Menu Open/Close, Min/Full ---------- */
      $('.sidebar-toggler').click(function(){
        $('body').toggleClass('sidebar-hidden');
        resizeBroadcast();
      });
    
      $('.sidebar-minimizer').click(function(){
        $('body').toggleClass('sidebar-minimized');
        resizeBroadcast();
      });
    
      $('.brand-minimizer').click(function(){
        $('body').toggleClass('brand-minimized');
      });
    
      $('.aside-menu-toggler').click(function(){
        $('body').toggleClass('aside-menu-hidden');
        resizeBroadcast();
      });
    
      $('.mobile-sidebar-toggler').click(function(){
        $('body').toggleClass('sidebar-mobile-show');
        resizeBroadcast();
      });

      
      $('.sidebar-close').click(function(){
        $('body').toggleClass('sidebar-opened').parent().toggleClass('sidebar-opened');
      });

      
      /* ---------- Disable moving to top ---------- */
      $('a[href="#"][data-top!=true]').click(function(e){
        e.preventDefault();
      });

    });

