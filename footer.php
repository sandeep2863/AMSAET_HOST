<style>
#footer div {
    margin:0 !important;
}
</style>
    <div id="footer">
        <div class="row">
            <div class="col-sm-3" style="padding:0px;">
                <div class="fb-page" data-href="https://www.facebook.com/poornimauniversity/" data-tabs="timeline" data-width="300" data-height="220" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/poornimauniversity/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/poornimauniversity/">Poornima University</a></blockquote></div>
            </div>
            <div class="col-sm-3"><center>
                <h4>Organised By<h4>
                <a href="http://www.poornima.edu.in/" target="_blank"><img src="img/PU.png" height="60%" width="54%"></a>
            </center></div>
            <div class="col-sm-3"><center>
                <h4>In Association With</h4>
                <a href="http://www.gamsgwalior.in/" target="_blank"><img src="http://4.bp.blogspot.com/-iO2Xtgc2B_U/UV6YcC0v7bI/AAAAAAAAFa4/dKJxV4xdfAM/s320/GAMS+LOGO+BHAGAT.png" height="60%" width="54%"></a>
            </center></div>
            <div class="col-sm-3">
                <iframe  frameborder="0" height="220px" width="300px" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=poornima%20University%2C%20Jaipur&key=AIzaSyC0dE3tx1LZ5bZfIrxjEMcwxcxwcBlnng4" allowfullscreen></iframe>
            </div>
        </div>
        <hr>
        <div class="fb-share-button" style="margin:0 !important;" data-href="http://amsaet.poornima.edu.in/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Famsaet.poornima.edu.in%2F&amp;src=sdkpreparse">Share</a></div>
        <p style="color:#FFE440;font-size:15px;float:right;">Copyright AMSAET 2017&nbsp&nbsp|&nbsp<a href="credits.php" style="color:#FFE440;font-size:15px;">Credits</a>&nbsp</p>
    </div>


        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script type="text/javascript" src="js/npm.js"></script>
		<script src="js/bootstrap.jquery.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/forms.js"></script>

  <!--script type="text/javascript">
      $(function() {
      $("#prod_nav ul").tabs("#panes > div", {effect: 'fade', fadeOutSpeed: 400});
  });
</script-->
      <script type="text/javascript">
	        $(document).ready(function(){
		    $("#myModal").modal('show');
	        });
        </script>

    <!--script type="text/javascript">
            $(document).ready(function(){
            $(".pane-list li").click(function(){
            window.location=$(this).find("a").attr("href");return false;
        });

    });
    </script-->
    <script type="text/javascript">

$(document).ready(function(){

    var counter = 2;

    $("#addButton").click(function () {

    if(counter>3){
            alert("Only 3 author name's allowed");
            return false;
    }

    var newTextBoxDiv = $(document.createElement('div'))
         .attr("id", 'TextBoxDiv' + counter);


		   newTextBoxDiv.after().html('<span class="form-group" style="">'+
       '<input class="form-control" type="text" placeholder="Enter another author" name="author' + counter + '" id="textbox' + counter + '" value="" >'+'</span>');

    newTextBoxDiv.appendTo("#TextBoxesGroup");


    counter++;
     });

     $("#removeButton").click(function () {
    if(counter==2){
          alert("No more textbox to remove");
          return false;
       }

    counter--;

        $("#TextBoxDiv" + counter).remove();

     })
  });
</script>

<script type="text/javascript">
    $(function () {
        $("input[name='optcheckbox']").click(function () {
            if ($("#paper").is(":checked")) {
                $(".demo").show();
            } else {
                $(".demo").hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("input[name='modeofpayment']").click(function () {
            if ($("#dd,#neft").is(":checked")) {
                $(".demo1").show();
            }
			else
			{
				$(".demo1").hide();
			}
        });
    });
</script>
<script type="text/javascript">
	$(".demo3").TimeCircles();
</script>


    </body>
</html>
