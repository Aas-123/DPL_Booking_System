<style>
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');


#footer {
    background: olivedrab !important;
}
#footer ul li
{
  margin-top: 10px;

}


#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
  padding: 3px 0;
  background-color: transparent;
}
#footer ul.social li a i {
    margin-right: 5px;
  font-size:25px;
  -webkit-transition: .5s all ease;
  -moz-transition: .5s all ease;
  transition: .5s all ease;
}
#footer ul.social li:hover a i {
  font-size:30px;
  margin-top:-10px;

}
#footer ul.social li a,
#footer ul.quick-links li a{
  color:#ffffff;


}
#footer ul.social li a:hover{
  color:#eeeeee;
}
#footer ul.quick-links li{
  padding: 3px 0;
  -webkit-transition: .5s all ease;
  -moz-transition: .5s all ease;
  transition: .5s all ease;
}
#footer ul.quick-links li:hover{
  padding: 3px 0;
  margin-left:5px;
  font-weight:700;
  background-color: transparent;
}
#footer ul.quick-links li a i{
  margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
  #footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}

</style>
<!-- Footer -->
  <section id="footer">
    <div class="container">
     <div class="col-xs-12 col-sm-4 col-md-4" style="margin-top: 20px;">
         <img src={{asset("images/logo.png")}} class="logo">
         <p style="color:white;">Kotheshwor,Kathmandu <br>
          phone:9845637363,98463736353<br>
        Tel:01-95747484</p>
          
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
        <h1 class="text-center" style="color:white;">Links</h1>
          <ul class="list-unstyled quick-links text-center">
            <li><a href="{{'/'}}"><i class="fa fa-angle-double-right"></i>Home</a></li>
            <br>
            <li><a href="{{'/result'}}"><i class="fa fa-angle-double-right"></i>Result</a></li>
            <br>
            <li><a href="{{'/fixture'}}"><i class="fa fa-angle-double-right"></i>Fixture</a></li>
            <br>
            <li><a href="{{'/highlight'}}"><i class="fa fa-angle-double-right"></i>Highligt</a></li>
              <br>
            <li><a href="{{'/contact'}}"><i class="fa fa-angle-double-right"></i>Contact</a></li>
          </ul>
        </div>
    
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5" >
          <ul class=" list-inline social text-center">
            <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href=""><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
        </hr>
      </div>  
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white" >
        
          <p class="h6">&copy DPL Booking.<a class="text-green ml-2" href="#" target="_blank">Leauge</a></p>
        </div>
        </hr>
      </div>  
    </div>
  </section>
  <!-- ./Footer -->