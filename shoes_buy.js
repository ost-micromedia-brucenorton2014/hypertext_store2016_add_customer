//hypertext/shop/
$( document ).ready(function() {
  $( "#buyShoes" ).on( "submit", function( event ) {
    event.preventDefault();
    console.log("you clicked Pay Now");

    //create a name, variable array with the form data
    var formData = $('#buyShoes').serializeArray();

    $.post("shoes_insert.php", formData, function(data) {
      $("#messageArea").html(data);
      
    });
  });

});