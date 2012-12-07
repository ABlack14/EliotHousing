$(document).ready(function()
{
  
  // key pressed in search field, so filter table
  $('#checkbox').on('change', function() {

      // determine symbol we're searching for
      var query = $(this).val();

      // iterate over each row in the table
      $('#table-filter tbody tr').each(function(e) {

          // check if the entryway cell contains the query
          if (!query || $(this).children().first().text().toLowerCase().indexOf(query) > -1)
              $(this).show();

          // no match, so hide row
          else
              $(this).hide();
      });
  });
  
  // send request to filter.php
  $.ajax({
      url: 'filter.php',
      type: 'POST',
      data: {
          entryway: entryway
      },
      success: function(response) {
          $('#').text(response);
      }
    

})
