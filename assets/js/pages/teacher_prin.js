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
    case "1":
      return "January";
      break;
    case "2":
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
  

  return date;
}

$(document).ready(function(){
  var deleteNoticeId;
  var datax = {
    receiver : "Teacher",
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




});
