  
  var app = angular.module('myApp', ['ngMap']);
  app.controller('CircleSimpleCtrl', function() {

    var vm = this;


/*
1- Le reseau Large-Bande
    - Grand'Anse, Moron, Coord(18.556261,-74.257117)
    - Sud, Torbeck, Coord(18.163028,-73.810337) 
    - Ouest, Pointe A raquettes, Coord(18.782754,-73.060602)
    - Ouest, Laval, Coord(18.442378,-72.410743)
    - Sud-Est, Grand Gosier, Coord(18.178140,-71.912168) 
    - Artibonite, La Chapelle, Coord(18.911060,-72.307917)
    - Nord-Ouest, Morne Basse, Coord(19.702569,-73.380959)
    - Nord, Saint Joseph, Coord(19.727593,-72.117796)
*/
    vm.broadband = {
      GrandAnseMoron: {rayon: 8000000, position: [18.556261,-74.257117]},
      SudTorbeck: {rayon:8000000, position: [18.163028,-73.810337]},
      OuestPointeaRaquette: {rayon:8000000, position: [18.782754,-73.060602]},
      OuestLaval: {rayon:8000000, position: [18.442378,-72.410743]},
      SudEstGrandGosier: {rayon:8000000, position: [18.178140,-71.912168]},
      ArtiboniteLaChapelle: {rayon:8000000, position: [18.911060,-72.307917]},
      NordOuestMorneBasse: {rayon:8000000, position: [19.702569,-73.380959]},
      NordSaintJoseph: {rayon: 8000000, position: [19.727593,-72.117796]}
    }

/*
2- Le reseau accelerometrique
    - Grand'Anse, Moron, Coord(18.556261,-74.257117)
    - Ouest, Carrefour, Coord(18.532069,-72.406918)
    - Ouest, Ganthier, Coord(18.531359,-72.066920)
    - Ouest, CiteSoleil, Coord(18.532071,-72.337402)
    - Nord-Ouest, Port-De-Paix, Coord(19.935581,-72.830384)
    - Nord, Cap-Haitien, Coord(19.757846,-72.203008)
*/
    vm.accelero = {
      GrandAnseMoron: {rayon: 8000000, position: [18.556261,-74.257117]},
      OuestCarrefour: {rayon:8000000, position: [18.532069,-72.406918]},
      OuestGanthier: {rayon:8000000, position: [18.531359,-72.066920]},
      OuestCiteSoleil: {rayon:8000000, position: [18.532071,-72.337402]},
      NordOuestPortDePaix: {rayon:8000000, position: [19.935581,-72.830384]},
      NordCapHaitien: {rayon:8000000, position: [19.757846,-72.203008]}
    }

/*
3- Le reseau virtuel
    - Haiti, Port-au-Prince, BME, Coord(18.554932, -72.307735)
    - Jamaique, Saint-Thomas, Coord(geo:17.914021,-76.289732)
    - Cuba, Maisi, Coord(20.246418,-74.149906)
    - Rep. Dom, San Juan de la Maguana, Coord(18.804623,-71.227004)
*/
    vm.virtual = {
      HaitiPortAuPrinceBME: {rayon: 8000000, position: [18.554932, -72.307735]},
      JamaiqueSaintThomas: {rayon:8000000, position: [17.914021,-76.289732]},
      CubaMaisi: {rayon:8000000, position: [20.246418,-74.149906]},
      RepDomSanJuan: {rayon:8000000, position: [18.804623,-71.227004]}
      }

    vm.MenuState = false;
    vm.changeMenu = function(){
      vm.MenuState = !vm.MenuState;
    }

    vm.getRadius = function(num) {
      return Math.sqrt(num)*5;
    }

    vm.NetworkState = "";
    vm.changeNetworkState = function(val){
      vm.NetworkState = val;
    }

  });



  (function($) {

  $.fn.menumaker = function(options) {
      
      var cssmenu = $(this), settings = $.extend({
        title: "Menu",
        format: "dropdown",
        sticky: false
      }, options);

      return this.each(function() {
        cssmenu.prepend('<div id="menu-button">' + settings.title + '</div>');
        $(this).find("#menu-button").on('click', function(){
          $(this).toggleClass('menu-opened');
          var mainmenu = $(this).next('ul');
          if (mainmenu.hasClass('open')) { 
            mainmenu.hide().removeClass('open');
          }
          else {
            mainmenu.show().addClass('open');
            if (settings.format === "dropdown") {
              mainmenu.find('ul').show();
            }
          }
        });

        cssmenu.find('li ul').parent().addClass('has-sub');

        multiTg = function() {
          cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
          cssmenu.find('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open').hide();
            }
            else {
              $(this).siblings('ul').addClass('open').show();
            }
          });
        };

        if (settings.format === 'multitoggle') multiTg();
        else cssmenu.addClass('dropdown');

        if (settings.sticky === true) cssmenu.css('position', 'fixed');

        resizeFix = function() {
          if ($( window ).width() > 768) {
            cssmenu.find('ul').show();
          }

          if ($(window).width() <= 768) {
            cssmenu.find('ul').hide().removeClass('open');
          }
        };
        resizeFix();
        return $(window).on('resize', resizeFix);

      });
  };
})(jQuery);

(function($){
$(document).ready(function(){

$(document).ready(function() {
  $("#cssmenu").menumaker({
    title: "Menu",
    format: "multitoggle"
  });

  $("#cssmenu").prepend("<div id='menu-line'></div>");

var foundActive = false, activeElement, linePosition = 0, menuLine = $("#cssmenu #menu-line"), lineWidth, defaultPosition, defaultWidth;

$("#cssmenu > ul > li").each(function() {
  if ($(this).hasClass('active')) {
    activeElement = $(this);
    foundActive = true;
  }
});

if (foundActive === false) {
  activeElement = $("#cssmenu > ul > li").first();
}

defaultWidth = lineWidth = activeElement.width();

defaultPosition = linePosition = activeElement.position().left;

menuLine.css("width", lineWidth);
menuLine.css("left", linePosition);

$("#cssmenu > ul > li").hover(function() {
  activeElement = $(this);
  lineWidth = activeElement.width();
  linePosition = activeElement.position().left;
  menuLine.css("width", lineWidth);
  menuLine.css("left", linePosition);
}, 
function() {
  menuLine.css("left", defaultPosition);
  menuLine.css("width", defaultWidth);
});

});


});
})(jQuery);