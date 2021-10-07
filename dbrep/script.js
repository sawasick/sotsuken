$(function() {
  $('.sr-boxes').before(`<input type="button" value="入れ替え" id="js-changeValue"></input>`)


  $('#js-changeValue').on('click', function(){
    const num = $('.sr-boxes div').length;
    for (let i = 0; i < num; i++) {
      const $search = $('#search-'+i).val();
      const $replace = $('#replace-'+i).val();
      $('#search-'+i).val($replace);
      $('#replace-'+i).val($search);
    }
  });
});