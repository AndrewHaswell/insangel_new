$(function () {
  $('.sub').each(
    function () {
      var main_class = $(this).attr('id').split('_').pop();
      var main_height = $('#navigation_' + main_class).find('a:first').height();
      var main_width = $('#navigation_' + main_class).find('a:first').width();
      var offset = $('#navigation_' + main_class).find('a:first').offset();
      console.log(offset);
    }
  );

  $(".navigation_link").bind("mouseover", function () {
    $('.sub').hide();
  });

  $(".navigation_category").bind("mouseover", function () {
    $('.sub').hide();
    var sub_class = $(this).attr('id').split('_').pop();
    $('.sub_' + sub_class).show();
  });
});