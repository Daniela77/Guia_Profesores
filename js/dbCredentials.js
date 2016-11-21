$("document").ready(function(){

  $(document).on("submit", "#newCredentials", function(){
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      method: "POST",
      url: "index.php",
      data: formData,
      contentType: false,
      cache: false,
      processData:false,
      success: function(){
        location.reload();
      }
    });
  });

});
