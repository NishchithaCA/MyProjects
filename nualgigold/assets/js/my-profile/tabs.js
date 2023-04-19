$(document).ready(function(){ 
    $('.tab-a-pro').click(function(){  
      $(".tab-profile").removeClass('tab-active-profile');
      $(".tab-profile[data-id='"+$(this).attr('data-id')+"']").addClass("tab-active-profile");
      $(".tab-a-pro").removeClass('active-a-profile');
      $(this).parent().find(".tab-a-pro").addClass('active-a-profile');
     });
});