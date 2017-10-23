<?php
session_start();
require("header.php");
require("master.php");
$newToken=generateFormToken('form1');
$_SESSION['_token']=$newToken;
?>
<!--link rel="stylesheet" href="css/intlTelInput.css" /-->
	<div class="container">
	<h1 class="text-center">REGISTRATION FORM</h1>

<span><p>
	<?php
	if(isset($_GET['e']))
	{
		require("connection.php");
		$cd=stripcleantohtml($_GET['e']);
		$query="SELECT * FROM error_report where code='".$cd."'";
		$data=mysqli_query($con,$query);
		if(mysqli_num_rows($data)==1)
		{
			$r=mysqli_fetch_array($data);
			echo $r[1];
		}
		else {
			echo "Oops! Something Wrong Happened!";
			writelog('Error_msg');
		}
		mysqli_close($con);
	}
	$url="reg.php";
	?>
</p></span>
		<div class="row">
			<div class="col-sm-6" style="margin:0;">
				<form name="form1" action='<?php echo htmlspecialchars($url); ?>' id="form" method='POST'>
					<input type="hidden" name="token" value="<?php echo $newToken; ?>">
  <div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="Name (in block letters)" required>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="designation" placeholder="Designation" required>
  </div>
	 <div class="form-group">
    <input type="text" class="form-control" name="organization" placeholder="Organization name" required>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="address" placeholder="Address" required>
  </div>
  	 <div class="form-group">
    <input type="text" class="form-control" name="phoneNumber" placeholder="Contact Number (with country code)" required>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" name="email" placeholder="Email" required >
  </div>


<div class="radio">
                           <h4>I wish to (Please tick where applicable) </h4>
							<label class="radio-inline"><input type="radio" name="optcheckbox" id="paper" value="Present a Paper"><h5 style="margin:0;">Present a paper</h5></label>
							 <label class="radio-inline"><input type="radio" name="optcheckbox" id="participate" value="Participate"><h5 style="margin:0;">Participate<h5></label>

</div>

<div class="form-group demo" style="display:none;">
    <input type="text" class="form-control" name="title" placeholder="Title of the paper">
  </div>
  <div class="form-group demo" style="display:none;">
  <input type="text" id='textbox1' class="form-control" name="author" placeholder="Author's name">
</div>
<span class="form-group demo" style="display:none;">
	<span id="TextBoxesGroup">
		<span id="TextBoxDiv1">
		</span>
	</span>

<input type='button' value='Add author' id='addButton' class="btn btn-sm btn-primary" style="margin-left:2%;">
<input type='button' value='Remove author' id='removeButton' class="btn btn-sm btn-primary" >
</span>


<div class="radio">
	<h4>Mode of Payment</h4>
	<label class="radio-inline"><input type="radio" name="modeofpayment" id="dd" value="dd"><h5 style="margin:0;">Demand Draft</h5></label>
	<label class="radio-inline"><input type="radio" name="modeofpayment" id="neft" value="neft"><h5 style="margin:0;">NEFT</h5></label>
	<label class="radio-inline"><input type="radio" name="modeofpayment" id="cash" value="cash"><h5 style="margin:0;">Cash (On-spot Payment)</h5></label>
</div>

<div class="form-group demo1" style="display:none;">
<div>
<h6>Details of the DD* / Internet Banking </h6>
</div>
<div class="form-group">
<div class="row" style="margin-left:-14px !important;">
	<div class="col-sm-6" style="margin:0;">

			<input type="text" class="form-control" name="no" placeholder="No.">

	</div>
	<div class="col-sm-6" style="margin:0;">

			<input onfocus="(this.type='date')" onblur="(this.type='text')" type="text" class="form-control" name="date" placeholder="Dated">

	</div>

<br>
</div>
</div>

<div class="form-group">
<input type="text" class="form-control" name="bank" placeholder="Bank & Branch">
</div>

<div class="form-group">
  <div class="input-group" style="margin:0px;">
      <div class="input-group-addon">Rs.</div>
      <input type="number" class="form-control" name="amount" placeholder="Amount">
      <div class="input-group-addon">.00</div>
    </div>

</div>
</div>

<div class="form-group">
<h5 style="font-size:1.4em;">*Demand Draft drawn in favor of  <b>Poornima University </b>, payable at Jaipur. <br># Mentioned in <a href="register.php#fees" style="color:black;">Registration Fees</a></h5>
</div>
<div class="g-recaptcha" style="margin:0;" data-sitekey="6Lc5PCkTAAAAAC9maup-DxMUm1CQfhBLOfTc01H-"></div>
 <div class="form-group">
<button type="submit" name="register" class="btn btn-info btn-block" >Submit</button>
   </div>


</form>
	</div>

			<div class="col-sm-6" style="margin:0;">

  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
	<div class="item">
		<div class="panel">
                            <div class="panel-heading text-center" style="margin:0;background:#01458E; font-family: 'Bree Serif', serif;
    font-size: 25px;color:white;">Register Now !!!</div>
                            <div class="panel-body text-center">

                                <p class="text-primary" style="color:black;">International Conference on Advances in Mathematical Sciences and Applications in Engineering & Technology (AMSAET 2017) January 27-29, 2017</p>
                            </div>

         </div>
		 </div>
      <div class="item active">
        <div class="panel">
                            <div class="panel-heading text-center" style="margin:0;background:#01458E;font-family: 'Bree Serif', serif;
    font-size: 25px;color:white">Submission of Paper</div>
                            <div class="panel-body text-center">

                                <p class="text-primary justify" style="color:black;">
								Interested participants are invited to submit abstracts (not exceeding 250 words) on A-4 size paper in double spacing by November 09, 2016. The authors of accepted abstracts shall be intimated of acceptance by November 16, 2016 and full length papers must be submitted by December 24, 2016 at <a href="amsaet2017@poornima.edu.in" style="color:red;">amsaet2017@poornima.edu.in</a>. The papers must contain work that has not been published previously and is not being submitted simultaneously at any other place. Also they should be written in concise and consistent form to faciliate the understanding of the subject. All papers submitted to the conference will be reviewed by the experts in relevant areas. Certificates will be provided to all registered presenters and participants
								</p>
                            </div>

                        </div>
      </div>

      <div class="item">
	      <div class="panel">
                            <div class="panel-heading text-center" style="margin:0;background:#01458E; font-family: 'Bree Serif', serif;
    font-size: 25px;color:white;">Proceedings of the Conference</div>
                            <div class="panel-body text-center">

                                <p class="text-primary justify" style="color:black;">
								Papers filtered through the peer review process and presented at the conference will be sent to the Gwalior Academy of Mathematical Sciences & International Bulletin of Mathematical Research for publication as per condition laid down by the journal. Such full length papers will be published in the conference proceedings and therefore, need to be submitted as per the instruction given on websites <a href="http://www.gamsgwalior.in" style="color:red;">www.gamsgwalior.in</a> and <a href="http://journalibmr.org/" style="color:Red;">http://journalibmr.org/</a>. Selected papers will be published with due publication charges from the authors in addition to the registration fee. 	</p>
                            </div>

                        </div>

      </div>

    </div>

  </div>
</div>
</div>
</div>
<!--script src="js/intlTelInput.min.js"></script>
<script>
	$(document).ready(function() {
		FormValidation.Validator.intPhoneNumber={
			html5Attributes: {
				message: 'message',
				autoplaceholder: 'autoPlaceholder',
				preferredcountries: 'preferredCountries';
				utilsscript: 'utilsScript'
			},

			init: function(validator,$field,options){
				var autoPlaceholder= options.autoPlaceholder===true || options.autoPlaceholder==='true',
				preferredCountries = options.preferredCountries || 'us';
				if('string'=== typeof preferredCountries){
					preferredCountries=preferredCountries.split(',');
				}

				$field.intlTelInput({
					utilsScript: options.utilsScript || '',
					autoPlaceholder: autoPlaceholder,
					preferredCountries: preferredCountries
				});

				var $form = validator.getForm(),
				fieldName=$field.attr('data-fv-field');
				$form.on('click.country.intphonenumber', '.country-list', function(){
					$form.formValidation('revalidateField', fieldName);
				});
			},

			destroy: function(validator, $field, options) {
				$field.intlTelInput('destroy');
				validator.getForm().off('click.country.intphonenumber');
			},

			validate: function(validator,$field,options) {
				return $field.val()==='' || $field.intlTelInput('isValidNumber');
			}
		};

		$('#form').formValidation({
			framework: 'bootstrap',
			icon: {
				valid: 'glyphicon glyphicons-ok',
				invalid: 'glyphicon glyphicons-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				phoneNumber: {
					validators: {
						intPhoneNumber: {
							utilsScript: 'js/utils.js',
							autoPlaceholder: true,
							preferredCountries: 'fr,us,gb',
							message: 'The phone number is not valid'
						}
					}
				}
			}
		});
	});
</script-->

 <?php include("footer.php"); ?>
