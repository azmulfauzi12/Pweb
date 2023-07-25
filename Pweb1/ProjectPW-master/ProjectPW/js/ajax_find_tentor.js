$(document).ready(function() {
  $("#cari").keyup(function() {
    var strcari = $("#cari").val(); 
    if (strcari != "")
    {
      $.ajax({
        type:"post",
        url:"php/cari_tentor.php",
        data:"nama="+ strcari,
        success: function(data){
          $("#main-content").html(data);
        }
      });
    }
  });
});