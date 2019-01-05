

$(document).ready(function(){
  var datax = {
    receiver : "All",
  };
  //load all notice page
  $.ajax({
    url: 'pastpapers_display.php',
    method: "post",
    //cache: false,
     data: datax,
    dataType: 'json',
    success: function(response) {
      if (response === "Error") {
        alert("error");
      }
      else{
        var picBlock  = $("#pastPapersDisplay").html();
        var count = 0;

        response.forEach(function(element) {
          var picDiv  = picBlock;
          
          
          picDiv = picDiv.replace(/BLOCKIMG/gi,"uploads/"+response[count].file_name);
          
          $("#pastPapers").append(picDiv);
          count++;
        });
      }


    },
    error: function(xhr, ajaxOptions, thrownError) {
      console.log("error"+xhr.responseText);
    }
  });

  


});
