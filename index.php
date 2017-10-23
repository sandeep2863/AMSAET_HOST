<?php
session_start();
include("header.php");
require("master.php");
$newToken=generateFormToken('form2');
$url="enquiry.php";
?>
<link rel="stylesheet" type="text/css" href="css/enquiry.css">
<br>
<div class="row" style="margin:0;">
                <div class="col-sm-7" style="margin:0;">

                            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="http://www.poornima.edu.in/wp-content/themes/twentysixteen/images/slider/AMSAET_2017_banner.jpg" />
                                    </div>

                                </div>

                            </div>
                        </div>
                <div class="col-sm-5" style="margin:0;" >
                  <div class="panel panel-primary">
                  <div class="panel-heading text-center" style="margin:0;font-size:2em;background:#01458E;">ENQUIRY</div>
                  <div class="panel-body text-center" style="padding:0;">
                    <form action="<?php echo htmlspecialchars($url); ?>" name='form2' method="POST">
                      <input type="hidden" name="token" value="<?php echo $newToken; ?>">
                  		<input type="text" name="userid" placeholder="Name*" name="name" required>
                  		<input type="email" name="email" name="email" placeholder="Email Address*" required>
                  		<textarea type="message" name="message" name="msg" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Message*';}" placeholder="Your Message*" required></textarea>
                  		<input type="submit" class="sign-in" name="enquire" value="Submit">

              </form>
              <p>
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
      			echo "OOPS! Something Bad Happened!";
      			writelog('Index Error_msg');
      		}
      		mysqli_close($con);
				}
        else
        {
				?></p>
        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Welcome Note</h4>
                    </div>
                    <div class="modal-body">
                    <div class="row" style="margin:0 !important;">
                            <div class="col-md-10" style="margin:0 !important;">
                                <p style="text-align:left;"><i>&quotIn today’s environment, hoarding knowledge ultimately erodes your power. If you know something very important, the way to get power is by actually sharing it.&quot</i><b style="float:right">-Joseph L. Badaracco</b></p><br>
                                <p class="justify">One of the mediums of amassing our knowledge is the scholarly sharing of ideas by the intellectuals. Hence, I take the privilege of welcoming and informing you about the initiation of three day <b>International Conference on &quotAdvances in Mathematical Sciences &amp Applications in Engineering and Technology&quot (AMSAET 2017) during January 27-29, 2017 at Poornima University, Jaipur</b>. The conference has been nurtured with a vision to undertake discussions and paper presentations on Mathematical Modelling in Engineering &amp Applied Sciences by national and international experts out of which some have given their consent.<br>On behalf of the Poornima family, I firmly believe that this will be one of its kind opportunity for sharing ideas of brilliance and delving more penetratingly deep into the magical aspects of very common &#39<i>Mathematics</i>&#39.<br>I welcome you all and also invite you to be a part of this panorama to be held in this historical and technologically advancing city of Jaipur. I am sure that this would be a momentous occasion and I once again would like to welcome all the worthy stalwarts and researchers to the common dais of knowledge &amp sharing.<br>
                                <br>Your presence shall be cherished. In the end I would like to quote the following:
                                <p style="text-align:left;"><i>&quot
                                A man can only attain knowledge<br>
                                with the help of those who possess it.<br>
                                This must be understood from the very beginning.<br>
                                One must learn from him who knows.&quot</i><b style="float:right">-George Ivanovich Gurdjieff</b>
                                </p>
                            </div>
                            <div class="col-md-2" style="margin:0 !important;">
                                <img src="http://poornima.edu.in/wp-content/uploads/2012/08/Dr_kks_Bhatia.jpg"><br><br>
                                <p style="text-align:left;line-height:1.33;" class=""><b>Dr. K. K. S. Bhatia</b><br>
                                President<br>
                                Poornima University, Jaipur
                            </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
                  </div>

              </div>


  </div>


						</div>
<hr>
    <div class="row" style="color:#800000;">
        <div id="column" class="col-sm-4">
            <h3>Welcome to Jaipur!</h3>
            <p class="justify">The famous city of Jaipur (India) is the capital of Rajasthan State and known as the "Pink City" with beautiful palaces, havelis and forts. Jaipur was built in the year 1727 and is located at a distance of 260 km from New Delhi. It forms a part of the Golden Triangle tourist circuit along with Agra (240 km).It is well connected by air, rail and road.</p>
            <button class="btn btn-sm btn-primary" data-toggle="modal" href="#jaipur">Learn More</button>
            <div class="modal fade" id="jaipur" tabindex="-1" data-target="#jaipur">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Welcome to Jaipur</h4>
                        </div>
                        <div class="modal-body">
                            <p class="justify">The famous city of Jaipur (India) is the capital of Rajasthan State and known as the "Pink City" with beautiful palaces, havelis and forts. Jaipur was built in the year 1727 and is located at a distance of 260 km from New Delhi. It forms a part of the Golden Triangle tourist circuit along with Agra (240 km). It is well connected by air, rail and road. Jaipur is predominantly known for its musicians, artisans, craftsmen and fairs and festivals. It has attractive monuments where one can breathe the fragrance of history. Comfortable and luxurious hotels, once the pride of kings, parks, gardens, and excursions of nearby places of interest, make Jaipur a tourist's paradise. The winter months of Jaipur from November to February are mild and pleasant, with average temperatures ranging from 10–15 °C (50–59 °F) and with little or no humidity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="column" class="col-sm-4">
            <h3>Preamble</h3>
            <p class="justify">Mathematics is often described as the "Queen of the Sciences" and is certainly the basis for the drastic technological advances in recent years. It is also an art, with beautiful structures, theorems, and concepts. Mathematics can mark its omnipresence as the predecessor of scientific planning and development.</p>
           <button class="btn btn-sm btn-primary" data-toggle="modal" href="#modal7">Learn More</button>
            <div class="modal fade" id="modal7" tabindex="-1" data-target="#modal6" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Preamble</h4>
                        </div>
                        <div class="modal-body">
                           <p class="justify">Mathematics is often described as the "Queen of the Sciences" and is certainly the basis for the drastic technological advances in recent years. It is also an art, with beautiful structures, theorems, and concepts. The Department of Mathematics, Poornima University thus taking an initiative again intends to host this international conference to showcase the diversity and impact of mathematical sciences and its applications in engineering & technology. This Global project is in continuation with the National conference held on the same topic previously, where successful discussions raised the need for organizing it on broader platform. Mathematics can mark its omnipresence as the predecessor of scientific planning and development and thus with enormous scope in the states declared as ‘Special category’ and Rajasthan comprising of abundant arid lands is one of such state. These lands have been the site of notable advances in the social and economic development of the human race despite the rigor of the climate. The mystique associated with such regions fosters research that would allow the wise utilization of arid lands, regions that are vast and largely unoccupied, where extensive mineral deposits, picturesque landscapes, unpolluted air, a unique plant and animal life, abundant solar energy, and endless open spaces still exist. One of the objectives of organizing this international conference is to focus further attention and need for research to many of the serious problems through its modelling that dwellers in the arid regions are facing. This modeling will assist the policy makers in making developmental decisions. This is a great opportunity for people from business, industry, policy makers, government, academia and funding bodies to present and discuss the most recent innovations, trends, and concerns as well as practical challenges encountered and solutions adopted in the fields of Mathematical Sciences, Engineering and Applications. One of the objectives of organizing this international conference is to focus further attention and need for research to many of the serious problems through its modelling that dwellers in the arid regions are facing. This International conference will be jointly organized in association with thGwalior Academy of Mathematical Sciences.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="column" class="col-sm-4">
            <h3>Conference Topics</h3>
            <p style="text-align:left;">
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspMathematical Modelling in Physical and Biological &nbsp&nbsp&nbsp&nbsp&nbsp&nbspSciences<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspFinancial Mathematics<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspModelling in Arid and Semi -Arid Lands, Sand &nbsp&nbsp&nbsp&nbsp&nbsp&nbspDunes, Soil Erosion, Migrations<br>
                 <span class="glyphicon glyphicon-chevron-right"></span>&nbspIndustrial Mathematics<br>
                 &nbsp&nbsp&nbsp<a href="symposium.php" style="color:blue;"><u>Categorial Classifications of Topics (<i>Track-wise</i>)</u></a>.
                </p>
				<button class="btn btn-sm btn-primary" data-toggle="modal" href="#topics">Learn More</button>
            <div class="modal fade" id="topics" tabindex="-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Conference Topics</h4>
                        </div>
                        <div class="modal-body">
                            <p style="text-align:left;">
                            <span class="glyphicon glyphicon-chevron-right"></span> Mathematical Modelling in Physical and Biological Sciences<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Financial mathematics<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Modelling in Arid and Semi -arid Lands, Sand Dunes, Soil Erosion, &nbsp&nbsp&nbsp&nbsp&nbsp&nbspmigrations<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Industrial Mathematics<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Mathematical Ecology, Agriculture, Life sciences, Environmental & &nbsp&nbsp&nbsp&nbsp&nbsp&nbspAtmospheric sciences<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Statistics, Operations Research, Environmental Statistics<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Fluid Mechanics<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Numerical Analysis<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Discrete Mathematics & Graph Theory<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Information Theory and Coding<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Bioinformatics<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Machine learning, Data Mining, Neural Networks and Artificial Intelligence<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Dynamical Systems<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Physiological Heat Transfer<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Fractional Calculus<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Differential Equations and Special Functions<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Fuzzy Mathematics<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Fourier Series & Wavelet Transform<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Analysis and Applications<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Algebra and Applications<br>
                            <span class="glyphicon glyphicon-chevron-right"></span> Mathematical Education<br>
                             <a href="symposium.php" style="color:blue;"><u>Other Relevant Topics of Mathematics (<i>Track-wise</i>)</u></p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div id="banner">
            <h1>AMSAET 2017 Registration Available!</h1>
            <br>
            <center>
            <div id="reg_button" style="margin-top:-2px;">
                <button type="submit" onclick="window.location='register.php';" class="btn btn-block btn-warning btn-lg" style="font-size:35%;color:black;">REGISTER NOW</button>
            </div></center>
        </div>
    </div>

        <div id="sponsors">
        <hr>
        <h1>Technical Sponsors</h1>
        <p style="font-size:22px;">Thanks to our partners for their generous technical support for AMSAET 2017!</p>
        <div class="row" style="margin-top:-2%;">
            <div class="col-sm-3" id="column" >
                <a href="http://raops.org.in/" target="_blank"><img src="img/raops.png"></a>
            </div><br>
            <div class="col-sm-3" id="column" style="margin-top:-1%;">
                <a href="http://isleind.org/" target="_blank"><img src="img/isle.png"></a>
            </div><br>
            <div class="col-sm-3" id="column" style="margin-top:-2%;">
            <a href="http://www.fsai.in/" target="_blank"><img src="img/fsai.png"></a>
            </div><br>
            <div class="col-sm-3" id="column" style="margin-top:-3%;">
                <a href="http://www.isteonline.in/" target="_blank"><img src="img/iste.bmp" width="101px" height="97px"></a>
            </div>
        </div>
        <hr>
    </div>

    <div id="about" style="color:black;">

        <h1>About AMSAET</h1>
        <h3>Advances in Mathematical Sciences and Applications in Engineering & Technology</h3>
        <p class="justify">National Conference On Advances in Mathematical Sciences And Applications in Engineering And Technology organized by Department of Mathematics, Poornima University which will be held from Jan 27, 2017 to Jan 29, 2017. Mathematical sciences is a group of areas of study that includes, in addition to mathematics, those academic disciplines that are primarily mathematical in nature but may not be universally considered as proper subfields of mathematics. Statistics, physics, computer science, computational science, population genetics, operations research cryptology, econometrics, theoretical physics, and actuarial sciences are other fields that may be considered as part of mathematical sciences. This conference will provide researchers from different parts of India,working in various mathematical disciplines, a platform, to discuss latest developments and share their research results in contemporary areas of mathematics research and applications. This conference also intends to forge new cross-disciplinary interactions among participants and farther existing partnerships among the national mathematics community and engineers. The conference will provide a unique opportunity for in-depth technical discussions and exchange of ideas in mathematical sciences, as well as explore the potential of their applications in sciences, engineering and technology.</p>
    </div>
<?php include("footer.php"); ?>
