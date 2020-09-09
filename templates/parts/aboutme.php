<?php
session_start();
include "head.php";
?>	
    <div class="impressionen full-screen-portfolio" id="portfolio">
            
    </div>
    
<?php
include "footer.php";

?>	
<script>
  var ud_bilder = 6;
  var insta_token = '1144005918.d4b75b3.0f1b3d826cee4aac9f09eb9b04990985';
  $.ajax({
    url: "https://api.instagram.com/v1/users/self/media/recent/",
    type: "GET",
    data: {
      access_token: insta_token,
      count: ud_bilder
    },
    success: function(data) {
      console.log(data);
      for (i in data.data) {
        var url = data.data[i].images.low_resolution.url;
        $(".impressionen").append('<img src="' + url + '">');
      }
    }
  })
	
</script>
