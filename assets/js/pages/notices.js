function getDate() {
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth()+1;
  mm = getMonth(mm.toString());
  var yyyy = today.getFullYear();
  var date = dd + ' ' + mm + ',' + yyyy;


  return date;
}

function getMonth(month) {
  switch (month) {
    case "01":
      return "January";
      break;
    case "02":
      return "February";
      break;
    case "03":
      return "March";
      break;
    case "04":
      return "April";
      break;
    case "05":
      return "May";
      break;
    case "06":
      return "June";
      break;
    case "07":
      return "July";
      break;
    case "08":
      return "August";
      break;
    case "09":
      return "September";
      break;
    case "10":
      return "October";
      break;
    case "11":
      return "November";
      break;
    case "12":
      return "December";
      break;
    default:
      return "Error";

  }
  // TODO: add all 12 months in switch case

  return date;
}

$(document).ready(function(){
  var deleteNoticeId;
  var datax = {
    receiver : "All",
  };
  //load all notice page
  $.ajax({
    url: 'load_notice_admin.php',
    method: "post",
    //cache: false,
     data: datax,
    dataType: 'json',
    success: function(response) {
      // console.log(response);
      if (response === "Error") {
        alert("error");
      }
      else{
        console.log(response);
        var noticeDivBlock  = $("#BLOCK").html();
        var count = 0;

        response.forEach(function(element) {
          var noticeDiv  = noticeDivBlock;
          var date = response[count].dateTime.split(" ");
          var date = date[0].toString().split("-");
          console.log(date);
          var month = getMonth(date[1]);
          noticeDiv = noticeDiv.replace("USER", response[count].username);
          noticeDiv = noticeDiv.replace("DATE", date[2]+" "+month+","+date[0]);
          noticeDiv = noticeDiv.replace(/IDNUM/gi, response[count].id);
          noticeDiv = noticeDiv.replace("CONTENT", response[count].content);
          noticeDiv = noticeDiv.replace("WRITER", response[count].writer);
          $("#notice_content").append(noticeDiv);
          count++;
        });
      }


    },
    error: function(xhr, ajaxOptions, thrownError) {
      console.log("error"+xhr.responseText);
    }
  });

  //display modal
  $('#add_notice_button').click(function(){
     $('#add_notice').css("display","block");
  });

  //hide moodal
  $("#no").click(function(){
     $("#add_notice").css("display", "none");
  });

  //hide error messages
  $("input").click(function(){
     var inputId = $(this).attr('id');
     var updateId = "#"+inputId+"Error";
     $(updateId).fadeOut();
  });
  $("textarea").click(function(){
     var inputId = $(this).attr('id');
     var updateId = "#"+inputId+"Error";
     $(updateId).fadeOut();
  });
  $("select").change(function(){

     var inputId = $(this).attr('id');
     var updateId = "#"+inputId+"Error";
     $(updateId).fadeOut();
  });

   



  //enter data to database
  $("#yes").click(function(){
       var title = $("#title").val();
       var content = $("#content").val();
       var writer = $("#writer").val();
       var receiver = $('#receiver').find(":selected").text();
       var returnStatus = false;


      
       
       if( title.length === 0 ){
         $("#titleError").text("Enter title");
         returnStatus = true;

       } 

        if( content.length === 0 ){
         $("#contentError").text("Enter Content");
         returnStatus = true;

       }

       if( writer.length === 0 ){
         $("#writerError").text("Enter Writer");
         returnStatus = true;

       }

       if( receiver === "Select reciver" ){
         $("#receiverError").text("Enter Receiver");
         returnStatus = true;

       }

       if (returnStatus){
           return ;
       }

        var datax = {
            title :title,
            content : content,
            writer : writer,
            receiver : receiver

        };

        $.ajax({
          url: 'add_notice_toDatabase.php',
          method: "post",
          //cache: false,
          data: datax,
          dataType: 'json',
          success: function(response) {
            console.log(response);
            if (response === "Error") {
              alert("error");
            }
            else{

              var date = getDate();
              var noticeDiv  = $("#BLOCK").html();
              console.log(noticeDiv);
              noticeDiv = noticeDiv.replace("USER", "Admin");
              noticeDiv = noticeDiv.replace("DATE", date);
              noticeDiv = noticeDiv.replace(/IDNUM/gi, response);
              noticeDiv = noticeDiv.replace("CONTENT", content);
              noticeDiv = noticeDiv.replace("WRITER", writer);
              $("#new_notice_content").append(noticeDiv);
              console.log(noticeDiv);

              document.getElementById("add_notice_form").reset();
            }


          },
          error: function(xhr, ajaxOptions, thrownError) {
            console.log("error"+xhr.responseText);
          }
        });
        $("#add_notice").css("display", "none");
      });

      // display delete module
      $('body').on('click', 'a#notice_delete_click', function(num) {
          deleteNoticeId = $(this).children(".idContainer").text();
          $('#delete_notice').css("display","block");

      });

      //hide moodal
      $("#delete_notice_no").click(function(){
         $("#delete_notice").css("display", "none");
      });


      //enter data to database
      $("#delete_notice_yes").click(function(){

            var datax = {
                id : deleteNoticeId

            };
            console.log(datax);

            $.ajax({
              url: 'deleteNotice.php',
              method: "post",
              //cache: false,
              data: datax,
              dataType: 'json',
              success: function(response) {
                console.log(response);
                if (response === "Error") {
                  alert("error");
                }
                else if(response === "DONE!"){
                  console.log("delete");
                  $("#"+deleteNoticeId).css("display", "none");
                }


              },
              error: function(xhr, ajaxOptions, thrownError) {
                console.log("error"+xhr.responseText);
              }
            });
            $("#delete_notice").css("display", "none");
          });



});
