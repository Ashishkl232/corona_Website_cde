<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'link/links.php';?>
	<?php include 'css/style.php';?>
</head>
<body onload="fetch()">
   <nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand nav-style2 pl-5" href="#">Corona Report</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacorona.php">IndiaCoronaUpdate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact Us</a>
      </li>
      
    </ul>   
  </div>
</nav>
<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			 <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
			 	<img src="images/img1.png">
			 </div>
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's Stay Safe & Fight Together Against Cor<span class="corona-rot"><img src="images/img2.png"></span>na Virus</h1>
			</div>
		</div>
	</div>
</div>

<!---**********corona latest updates--->

  <section class="corona_update container-fluid">
  	  <div class="mb-3">
  	  	  <h3 class="text-uppercase text-center">covid-19 updates of the World</h3>
  	  </div>

  	
  	 <div class="table-responsive">
  	 	<table class=" table table-bordered table-striped text-center" id="tbval">
  	 		<tr>
  	 			<th>Country</th>
  	 			<th>TotalConfirmed</th>
  	 			<th>TotalRecovered</th>
  	 			<th>TotalDeath</th>
  	 			<th>TotalDeath</th>
  	 			<th>NewRecovered</th>
  	 			<th>NewDeaths</th>
  	 		</tr>
  	 		
  	 	</table>
  	 	
  	 </div>
  </section>

  <!--////////////////////****************about************///////////////////-->

  <div class="container-fluid sub_section pt-5 pb-5" id= "aboutid">
  	   <div class="section_header text-center mb-5 mt-4">
  	   	  <h1> About COVID-19</h1>
  	   </div>
  	   <div class="row pt-5">
  	   	  <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
  	   	  	<img src="images/img3.png" class="img-fluid">
  	   	  </div>
  	   	  <div class="col-lg-6 col-md-6 col-12">
  	   	  	<h2>What is COVID-19 (Corona-Virus) </h2>

  	   	  	<p>COVID-19 is the infectious disease cause by the most recently
  	   	  	discovered coronavirus. This new virus and disease were unkown before the outbreak began in wuhan, China, in 
  	   	     December 2019. </p>

  	   	  	<p>Coronaviruses are a large family of viruses which amy cause illness in animals or humans. In humans, several coronaviruses are known to cause respiratory infactions ranging from the common cold to more sever diseases such as middle East Respiratory syndrome (MERS) and Severe Acute Respiratory syndrome (SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19.  </p>
   	   	  </div>
  	   </div>
  </div>
<!--////////////****************Coronavirus symptoms************//////////////-->
  <div class="container-fluid pt-5 pb-5" id="sympid" >
  	   <div class="section_header text-center mb-5 mt-4">
  	   	  <h1> Coronavirus symptoms</h1>
  	   </div>
  	    <div class="container">
  	    	<div class="row">
  	    		<div class="col-lg-4 col-md-4 col-12 mt-5">
  	    			<figure class="text-center">
  	    			<img src="images/sad.png" class="img-fluid " width="220" height="220">
  	    			</figure>
  	    		</div>
  	    		<div class="col-lg-4 col-md-4 col-12 mt-5">
  	    			<figure class="text-center">
  	    			<img src="images/sad.png" class="img-fluid " width="220" height="220">
  	    			</figure>
  	    		</div>
  	    		<div class="col-lg-4 col-md-4 col-12 mt-5">
  	    			<figure class="text-center">
  	    			<img src="images/sad.png" class="img-fluid " width="220" height="220">
  	    			</figure>
  	    		</div>
  	    		<div class="col-lg-4 col-md-4 col-12 mt-5">
  	    			<figure class="text-center">
  	    			<img src="images/sad.png" class="img-fluid " width="220" height="220">
  	    			</figure>
  	    		</div>
  	    		<div class="col-lg-4 col-md-4 col-12 mt-5">
  	    			<figure class="text-center">
  	    			<img src="images/sad.png" class="img-fluid " width="220" height="220">
  	    			</figure>
  	    		</div>
  	    		<div class="col-lg-4 col-md-4 col-12 mt-5">
  	    			<figure class="text-center">
  	    			<img src="images/sad.png" class="img-fluid " width="220" height="220">
  	    			</figure>
  	    		</div>
  	    		
  	    	</div>
  	    	
  	    </div>
  	   </div>
  	   <!--****************6 Steps Prevention Against Coronavirus************-->
  	   <div class="container-fluid sub_section pt-5 pb-5" id="preventid">
  	   <div class="section_header text-center mb-5 mt-4">
  	   	  <h1> 6 Steps Prevention Against Coronavirus</h1>
  	   </div>
            <div class="container">
            	<div class="row">
            		<div class="col-lg-4 col-md-4 col-12 mt-5">
            			<div class="row">
            				<div class="col-lg-4 col-md-4 col-12">
            					<figure>
  	    			      <img src="images/handwash.png" class="img-fluid " width="90" height="90">
  	    			     
  	    			      </figure>
            				</div>
            				<div class="col-lg-8 col-md-8 col-12">
            					<p>Wash your hands with soap and water, vigorously rubbing 
together front and back for 20 seconds. Or use alcohol based hand sanitizers, rubbing hands until they are dry. </p>
            				</div>
            			</div>
            		</div>
            			<div class="col-lg-4 col-md-4 col-12 mt-5">
            			<div class="row">
            				<div class="col-lg-4 col-md-4 col-12">
            					<figure>
  	    			      <img src="images/clean.png" class="img-fluid " width="90" height="90">
  	    			     
  	    			      </figure>
            				</div>
            				<div class="col-lg-8 col-md-8 col-12">
            					<p>Use disinfectants to clean commonly touched items such 
as doorknobs, faucet handles, copy machines, coffee 
pot handles, desktops, handrails, microwave buttons, 
keyboards, and elevator buttons. Germs travel fast with 
multiple hands touching shared surfaces. </p>
            				</div>
            			</div>
            		</div>
            			<div class="col-lg-4 col-md-4 col-12 mt-5">
            			<div class="row">
            				<div class="col-lg-4 col-md-4 col-12">
            					<figure>
  	    			      <img src="images/mask.png" class="img-fluid " width="90" height="90">
  	    			     
  	    			      </figure>
            				</div>
            				<div class="col-lg-8 col-md-8 col-12">
            					<p>Cough or sneeze into a tissue and then throw it away; use 
your arm or sleeve to cover if you do not have a tissue.  </p>
            				</div>
            			</div>
            		</div>
            			<div class="col-lg-4 col-md-4 col-12 mt-5">
            			<div class="row">
            				<div class="col-lg-4 col-md-4 col-12">
            					<figure>
  	    			      <img src="images/avoid.jpg" class="img-fluid " width="90" height="90">
  	    			     
  	    			      </figure>
            				</div>
            				<div class="col-lg-8 col-md-8 col-12">
            					<p>Germs need an entry point, and the average adult touches 
his or her face once every three or four minutes. Keep 
hand sanitizer at your desk to use after meetings or before 
grabbing one of those doughnuts from the breakroom </p>
            				</div>
            			</div>
            		</div>
            			<div class="col-lg-4 col-md-4 col-12 mt-5">
            			<div class="row">
            				<div class="col-lg-4 col-md-4 col-12">
            					<figure >
  	    			      <img src="images/distance.jpg" class="img-fluid " width="90" height="90">
  	    			     
  	    			      </figure>
            				</div>
            				<div class="col-lg-8 col-md-8 col-12">
            					<p>Practice Soical Distancing of at least 6 feet between yourself and other people outside your home.</p>
            				</div>
            			</div>
            		</div>
            			<div class="col-lg-4 col-md-4 col-12 mt-5">
            			<div class="row">
            				<div class="col-lg-4 col-md-4 col-12">
            					<figure >
  	    			      <img src="images/stayhome.jpg" class="img-fluid " width="90" height="90">
  	    			     
  	    			      </figure>
            				</div>
            				<div class="col-lg-8 col-md-8 col-12">
            					<p>When you are sick or have flu symptoms, stay home, get plenty 
                            of rest and check with a health care provider as needed. </p>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
  	   </div>
  	   <!--**************** Contact Us ************-->
  	   <div class="container-fluid  pt-5 pb-5" id="contactid">
  	   <div class="section_header text-center mb-5 ">
  	   	  <h1> Contact Us ASAP</h1>
  	   </div>
  	   <div class="container">
  	   	<div class="row">
  	   		<div class="col-lg-8 offset-lg-2 col-12">
  	   			<form method="post">



      <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
  </div>

   <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
  </div>
  
    <div class="form-group">
    <label>Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>

       <div class="form-group">
    	<label>Select Symptoms</label><br>

    	<div class=" custom-control custom-checkbox custom-control-inline text-capitalize">
    		<input type="checkbox"class="custom-control-input "id="customcheckbox1"name="coronasym[]" value="cold">
    		<label class="custom-control-label"for="customcheckbox1">Cold</label>

    	</div>
    	<div class=" custom-control custom-checkbox custom-control-inline text-capitalize">
    		<input type="checkbox" class="custom-control-input" id="customcheckbox2"name="coronasym[]" value="fever">
    		<label class="custom-control-label"for="customcheckbox2">fever</label>

    	</div>
    	<div class=" custom-control custom-checkbox custom-control-inline text-capitalize">
    		<input type="checkbox" class="custom-control-input" id="customcheckbox3"name="coronasym[]" value="breath">
    		<label class="custom-control-label"for="customcheckbox3">Difficulty in breath</label>

    	</div>
    	<div class=" custom-control custom-checkbox custom-control-inline text-capitalize">
    		<input type="checkbox" class="custom-control-input" id="customcheckbox4"name="coronasym[]" value="weak">
    		<label class="custom-control-label"for="customcheckbox4">Feeling Weak</label>

    	</div>
    	
    </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" name="msg"id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" name="submit"class="btn btn-primary">Submit</button>
</form>
  	   		</div>
  	   	</div>
  	   </div>
 <!--------top cursor ----->
 <div class="container scrolltop float-right pr-5">
 	 <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
 </div>

  	   <!--------footer---------->

  	   <footer class="mt-5" width="100%">
  	   	   <div class="footer_style text-black text-center container-fluid">
  	   	   	 <p>copyright by Ashish Shukla</p>
  	   	   </div>
  	   </footer>
      <script type="text/javascript">

      	$('.count').counterUp({

      		delay:10,
      		time: 3000
      	})
      	mybutton = document.getElementById("myBtn");

      	window.onscroll = function() {scrollFunction()};
      	function scrollFunction(){
      		if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
      			mybutton.style.display ="block";
      		}else{
      			mybutton.style.display ="none";
      		}
      	}

      	function topFunction(){
      		document.body.scrollTop = 0;
      		document.documentElement.scrollTop = 0;
      	}

       function fetch(){
       	$.get("https://api.covid19api.com/summary",

              function (data){
              	//console.log(data['Countries'].length);

              	var tbval = document.getElementById('tbval');

              	for(var i=1; i<(data['Countries'].length); i++){
              		var x = tbval.insertRow();

                    x.insertCell(0);
                    tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                    tbval.rows[i].cells[0].style.background ='#7a4a91';
                    tbval.rows[i].cells[0].style.color ='#fff';

                    x.insertCell(1);
                    tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                    tbval.rows[i].cells[1].style.background ='#4bb7d8';

                     x.insertCell(2);
                    tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                    tbval.rows[i].cells[2].style.background ='#4bb7d8';

                    x.insertCell(3);
                    tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                    tbval.rows[i].cells[3].style.background ='#f36e23';

                    x.insertCell(4);
                    tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                    tbval.rows[i].cells[4].style.background ='#4bb7d8';

                    x.insertCell(5);
                    tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                    tbval.rows[i].cells[5].style.background ='#9cc850';

                     x.insertCell(6);
                    tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                    tbval.rows[i].cells[6].style.background ='#f36e23';
              	}

              }

       		);
       }




      </script>

   
</body>
</html>


<!-------  php code start -------->
<?php
 
 include 'dbcon.php';

 if (isset($_POST['submit'])) {
 	$username = $_POST['username'];
 	$email = $_POST['email'];
 	$mobile = $_POST['mobile'];
 	$symp = $_POST['coronasym'];
 	$msg = $_POST['msg'];

 	$chk = "";

 	foreach ($symp as $chk1) {
 		$chk .= $chk1.",";
 	}
    
    $insertquery = "insert into coronacase(username, email, mobile, symp, message) values('$username', '$email', '$mobile', '$chk', '$msg')";

    $query = mysqli_query($con, $insertquery);

    if ($query) {
  	?>
  	  <script >
  	  	alert("inserted successful");
  	  </script>
  	<?php
  }

  else{
  ?>
  	  <script >
  	  	alert("faild");
  	  </script>
  	<?php
  }

 }
?>