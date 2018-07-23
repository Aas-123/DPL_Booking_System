<!DOCTYPE html>
<html>
<head>
<title>DPL Booking report</title>
 <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}">
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
</head>
<body>

<style>

body/*-- body- */
{
	background-color:white;
	margin-top:30px;

}

body p
{
	text-align:center;
}

 
body p a 
{
color:red;	
}

body p a:hover
{
	color:#395472;
}

.wrapper /*--outer layer--*/
{
	margin: auto;
	width:600px;
	height:1168px;
	/*background-color:#395472; */
	position: relative;
	background: linear-gradient(to bottom,#8CC3D7,#000);
}



.slogan
{
	width:598px;
	height:40px;
	background-color: white;
	margin-top:-5px;
	border:1px solid  #000000 ;
}

.slogan h2
{
	font-family:'Lobster', cursive;
	color:#000;
	font-size:15px;
	text-align: center;
	margin-top: 8px;
}

.tourdetail
{
	width:600px;
	height:200px;
	/*background-color:#395472;*/
	margin-top: 3px;
	margin-left: 2px;

	

}

.days
{
	width:250px;
	height:162px;
	float:left;
	margin-left: 30px;
	margin-top: 20px;
	border:1px solid black;
}

.days h2
{
	font-family: Arial;
	color:white;
	font-size:16px;
	text-align: center;

}

.days h3
{
	font-family: 'Courgette', cursive;
	color:#DBB82D;
	font-size:19px;
	text-align: center;
	margin-top:-16px;
}

.days h4
{
	font-family: Arial;
	color:white;
	text-align: center;
	margin-top:-21px;
}



.paragraph
{
	width:598px;
	height:100px;
	background-color:#D0E2F9;
	margin-top: 7px;
	border:1px solid  #000000 ;

}

.paragraph p 
{
		font-family: 'Courgette', cursive;
		font-size:13px;
		color: #000000;
		text-align: center;

}

.transport
{
	width:500px;
	height:50px;
	background-color:#9F5D70;
	float: left;
	margin-left: 50px;
	margin-top: 20px;
	border:1px solid  white;

}

 .transport p
{
	font-family: 'Courgette', cursive;
	font-size:13px;
	text-align: center;
	color: white;
	margin-top:2px;
}

#details
{
	font-family: 'Courgette', cursive;
	color:#DBB82D;
	font-size:16px;
	text-align: center;
	margin-top: 60px;
}

.tripdetail
{
	width:600px;
	height: 350px;
	

}

.kathmandu
{
	width:600px;
	height:150px;
	
}

.kathmandu h1
{
	font-family: 'Courgette', cursive;
	font-size:21px;
	text-align:center;
	color:#8CC3D7;
	margin-top: -156px;
	margin-left: 300px;
}

.kathmandu p
{
	font-family: 'Courgette', cursive;
	font-size:15px;
	text-align:center;
	color:#DA9A5D;
	margin-left: 280px;
	margin-top: -10px;

}

.kathmandu img
{
	margin-left: 20px;
}

.kathmandu button
{

	width:120px;
	height:35px;
	margin-top:-8px;
	margin-left: 408px;
	background-color:#DA9A5D;
	border: none;
	font-family:Pacifico;
	font-size:12px;
	color:white;
}

.kathmandu button:hover
{
	opacity: 0.4;
	cursor: pointer;
}

.chennai
{
	width:600px;
	height:160px;
	
	margin-top: 40px;
}

.chennai h1
{
	font-family: 'Courgette', cursive;
	font-size:21px;
	text-align:center;
	color:#8CC3D7;
	margin-top: -164px;
	margin-left: 300px;
}

.chennai p
{

	font-family: 'Courgette', cursive;
	font-size:15px;
	text-align:center;
	color:#DA9A5D;
	margin-left: 280px;
	margin-top: -10px;
}

.chennai img
{
	margin-left: 20px;
}


.chennai button
{

	width:120px;
	height:35px;
	margin-top:-8px;
	margin-left: 408px;
	background-color:#DA9A5D;
	border: none;
	font-family:Pacifico;
	font-size:12px;
	color:white;
}

.chennai button:hover
{
	opacity: 0.4;
	cursor: pointer;
}


footer
{
	background-color: #2f2727;
	width:600px;
	height:72px;
	margin-top:75px;
}

.transport p a
{
	color:white;
}

.transport p a:hover
{
	color:#DA9A5D;
	cursor: pointer;
}
	
</style>
 
			<div class="wrapper"><!--start of wrapper-->
			<img src="{{asset('images/final.jpg')}}" width="600px" height="200px">


					<div class="slogan"><!--start of solgan-->

                              <h2> "Let Make Easy to Book the Ticket in the Stadium"</h2>



								</div><!--end of slogan-->

				<div class="tourdetail"><!--start of tour details-->
                        
                           <div class="days"><!--days & amount-->
                              
                             <h2> Your Token Number
                             	<br>
                             	
                             	     
                             <h3> Nepal & India</h3>
                             <h4>For</h4>
                             <h3>Upcoming Match</h3>
                                

                           </div><!--end of days & amount-->

                          <div class="days"><!--special features-->

                          	   <h2> Your SeatNumber
                             	<br>
                             	
                             <h3> Nepal & India</h3>
                             <h4>For</h4>
                             <h3>Upcoming Match</h3>



		                           </div><!--end of special fetaures-->

                    

								</div><!--end of tour details-->

					<div class="paragraph"><!--start of paragraph-->
									<p>Thank you for having trust and booking your seat online.<br>
									The Above given the Token number is required while paying the money to the counter whithout that you wont get the seat that have you choosen. The seat that you have selected will last till 10 minutes before the game. we Also provide the discount cuopen to you the more you book the ticket in the games the more discount will be provided to you.</p>


								</div><!--end of paragraph-->

			<div class="transport"><!--transportation-->
		<p>Let's Vote for the people who deserve to get the vote<br>
          *Its us who choose the deserve our vote so let's vote
         </p>
                  </div><!--end of transportation-->

                  <br>
                      <p id="details"> Below are the website where online voting is done.
                  </p>

            <div class="tripdetail"><!--short note on places-->

            	<div class="kathmandu"><!--details of kathmandu-->

         <img src="{{asset('images/voting.jpg')}}" width="290px" height="150px">
         <h1>Kathmandu</h1>
         <p> Capital City Of Nepal.<br>
         	Where the offline voting will be done<br>
         	You can go and put your vote.<br>
         </p>
             <button>Show More Details</button>

              </div><!--end of details of kathmandu-->

          <div class="chennai"><!--details of chennai-->
         <img src="{{asset('images/chennai.jpg')}}" width="290px" height="160px">
           <h1>Online Voting</h1>
           <p>We can also vote online<br>
         	We just have to Register Yourself.<br>
         	to cast the vote<br>Click on below button to Register.<br>
         </p>
         <button>Show More Details</button>

                          </div><!--end of details of chennai-->
                           </div><!--end of short note on places-->


                           <div class="transport"><!--message-->

                            <p>To get the news and to watch highlights visit of cricket<br>
                            	                 our website too<br>
                            <a href="https://www.worldtravelguide.net/guides/asia/nepal">Click Here</a></p>


                           </div><!--end of message-->

                           <footer><!--start of footer-->
 
                           </footer><!--end of footer-->


                            	</div>	<!--end of wrapper-->

	                                		</body><!--end of body-->

			                                       </html><!--end of html--> --+