jQuery(window).load(function () {

})

jQuery(document).ready(function () {
//script to page help centers
  jQuery('.tab-content:first').show(0)
  jQuery('.tab:first>span').addClass('selected')

  jQuery('.tab>span').click(function () {
    jQuery('.tab>span').removeClass('selected')
    jQuery(this).addClass('selected')
    jQuery('.tab-content').hide(0)
    jQuery(this).next('.tab-content').show(0)

    jQuery('body,html').animate({
      scrollTop: (200)
    }, 1000)
    return false
  })


  // script to page zadaty pytannya
  jQuery('ul.cat-list li').click(function(){
    var tab_id = jQuery(this).attr('data-tab');

    jQuery('ul.cat-list li').removeClass('current');
    jQuery('.tabs-content').removeClass('current');

    jQuery(this).addClass('current');
    jQuery("#"+tab_id).addClass('current');
  })

})


