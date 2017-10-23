<?php
//session_start();
require("header.php");
include("master.php");
$newToken=generateFormToken('form3');
?>
<style>
h1 {
  color:black;
}
</style>
<div class="container" id="block">
<h1>INTERNATIONAL CONFERENCE WITH SYMPOSIUM</h1>
<br>
<p style="font-size:23px;">The conference will cover a wide range of topics related to following Tracks but are not only limited to : </p>
<br><br>
<p style="font-size:17px;">Track 1 : <a href="#msciences" data-toggle="modal" data-target="#msciences">Mathematical Sciences </a>(amsaet2017ms@poornima.edu.in)<br><br>Track 2 : <a href="#esciences" data-toggle="modal">Engineering Sciences </a>(amsaet2017es@poornima.edu.in)<br><br>Track 3 : <a href="#asciences" data-toggle="modal">Allied Sciences including Environment </a>(amsaet2017as@poornima.edu.in)<br><br></p>


<!-- Modal -->
<div class="modal fade" id="msciences" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Mathematical Sciences</h4>
      </div>
      <div class="modal-body">
        <p style="text-align:left;">
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspAlgebra<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspDiscrete Mathematics and Graph theory<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspReal, Functional and Complex Analysis<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspFractals <br />
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspGeometry, Differential Geometry <br />

				 <span class="glyphicon glyphicon-chevron-right"></span>&nbspTopology <br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspFinite Mathematics<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspDifferential Equations<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspSpecial Functions<br />
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspNumerical Analysis<br />

				 			 <span class="glyphicon glyphicon-chevron-right"></span>&nbspNumber Theory<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspFluid Mechanics<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspRelativity and Cosmology<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspHistory of Mathematics<br />
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspStrategies in Mathematical Education<br />

				 			 <span class="glyphicon glyphicon-chevron-right"></span>&nbspEducational Statistics <br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspStatistics <br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspOperational Research<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspProbability <br />
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspFinancial Mathematics<br />


                </p>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="esciences" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Engineering Sciences</h4>
      </div>
      <div class="modal-body">
        <p style="text-align:left;">
					 <span class="glyphicon glyphicon-chevron-right"></span>&nbspModeling and Simulation of operations in arid/semi-arid lands<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspMineral detection, Mine detection<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspMachine Learning <br />
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspData Mining<br />

				 		 <span class="glyphicon glyphicon-chevron-right"></span>&nbspNeural Networks and Artificial Intelligence<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspLogic <br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspFuzzy mathematics<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspIndustrial Mathematics<br />
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspEnergy <br />


				 		 <span class="glyphicon glyphicon-chevron-right"></span>&nbspNumerical & Computational Techniques<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspFourier Series<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspWavelet Transform<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspOptimization Techniques<br />
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspGraph Theory and Networks <br />

				  <span class="glyphicon glyphicon-chevron-right"></span>&nbspInformation Theory and Coding<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspCryptography<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspComputational Fluid Dynamics<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbsp Dynamical systems<br />
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspApplied and Computational Statistics <br />
				  <span class="glyphicon glyphicon-chevron-right"></span>&nbspIndustrial Statistics <br />
			</p>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="asciences" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Allied Sciences including Environment</h4>
      </div>
      <div class="modal-body">
        <p style="text-align:left;">
		 <span class="glyphicon glyphicon-chevron-right"></span>&nbspMathematical Physics (Solid state Physics, Nuclear and Particle &nbsp&nbsp&nbsp&nbsp&nbsp&nbspPhysics,Astrophysics)<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspMathematical Biology (Ecology and Epidemiology, Bio-Heat and Mass &nbsp&nbsp&nbsp&nbsp&nbsp&nbspDiffusion, Population Dynamics)<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspInformatics and its application in Biology<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspPharmacology, Chemistry<br />
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspBusiness, Crime<br />
				  <span class="glyphicon glyphicon-chevron-right"></span>&nbspSecurity and Law<br />

			<span class="glyphicon glyphicon-chevron-right"></span>&nbspStatistical modeling<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspBio Statistics, Medical Statistics, Business Statistics, Environmental &nbsp&nbsp&nbsp&nbsp&nbsp&nbspstatistics<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspMathematics in Agriculture, Life Science<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspFood, Environmental & Atmospheric sciences <br />
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspMathematical modeling in Ecology, Sand Dunes Migration, Air Pollution<br />
				  <span class="glyphicon glyphicon-chevron-right"></span>&nbspModeling in arid and semi-arid regions<br />


			<span class="glyphicon glyphicon-chevron-right"></span>&nbspSoil erosion<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspFloods & fire risks<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspModeling of Financial derivatives<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspFinancial Science, Econometrics<br />

			</p>
      </div>
    </div>

  </div>
</div>
<hr>
<section id="paper">
<h1>SUBMISSION OF PAPERS</h1>
<p class="justify">Interested participants are invited to submit abstracts (not exceeding 250 words) on A-4 size paper in double spacing by November 30, 2016. The authors of accepted abstracts shall be intimated of acceptance by December 05, 2016 and full length papers must be submitted by December 24, 2016 at <strong>amsaet2017@poornima.edu.in</strong>. The papers must contain work that has not been published previously and is not being submitted simultaneously at any other place. Also they should be written in concise and consistent form to faciliate the understanding of the subject. All papers submitted to the conference will be reviewed by the experts in relevant areas. Certificates will be provided to all registered presenters and participants.</p>
<br><br>
<p style="color:black;"><u>Upload files related to your paper presentation here. Make sure your file has the format <b>.pdf</b> or it will not be uploaded! Be careful while uploading your paper as every participant can submit his/her Abstract and Full Paper only once.</u></p>
<br>
<h3>If you are experiencing any trouble while uploading files, you can also mail them to amsaet@poornima.edu.in alongwith your <i>name, title and ID</i> !</h3>
<div class="row">
<div class="col-md-5">
  <?php $url="fupload.php"; ?>
<form method="POST" name="form3" action="<?php echo htmlspecialchars($url); ?>" enctype="multipart/form-data">
  <input type="hidden" name="token" value="<?php echo $newToken; ?>">
  <input type="text" name="name" class="form-control" placeholder="Name" required />
  <br>
  <input type="text" name="title" class="form-control" placeholder="Paper Title" required />
  <br>
  <input type="password" name="id" class="form-control" placeholder="Unique ID" required />
  <br>
  <input type="file" name="fileup" class="form-control" required />
  <br>
  <select class="form-control" name="category" required>
    <option selected disabled>Category</option>
    <option value="Abstract">Abstract</option>
    <option value="Full Paper">Full Paper</option>
  </select>
  <br>
  <button type="submit" name="upload" class="btn btn-block btn-warning">Submit</button>
</form>
</div>
<div class="col-sm-md-5">
<p style="font-size:20px;text-align:center;">
  <?php
  if(isset($_GET['m']))
  {
    require("connection.php");
    $cd=stripcleantohtml($_GET['m']);
    $query="SELECT * FROM error_report where code='".$cd."'";
    $data=mysqli_query($con,$query);
    if(mysqli_num_rows($data)==1)
    {
      $r=mysqli_fetch_array($data);
      echo $r[1];
    }
    else {
      echo "Hack-Attempt Detected!";
      writelog('Symposium GET Variable');
    }
    mysqli_close($con);
  }
  ?>
</p>
</div>
</div></section>
</div>
<?php include("footer.php"); ?>
