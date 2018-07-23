
@extends('main.master')
@extends('include.header')


@section('title')
Contact
@endsection
<link rel="icon" type="image/png" href="{{asset('images/icon.png')}}">

@section('content')
<img src="{{asset('images/image2.jpg')}}" style="width: 100%;overflow: hidden; position: fixed;z-index: -1;">

  <!-- start of section -->
 <section class="details">
  <!-- start of container-fluid -->
   <div class="container-fluid">
    <!-- start of row -->
     <div class="row">
      <!-- start and end of column -->
      <div class="col-lg-2"></div>
      <!-- start of column -->
      <div class="col-lg-3 well" style="height:85vh; margin-top: 93px; width: auto;">
        <h1 style="margin-top: 20px;">Contact Form</h1>
        <!-- start of form -->
        <form id="form1">
        <label for="Name" class="form-group">Name:</label>
            <input type="text" name="Name" id="name" placeholder="Enter your name"
            class="form-control">

      <label for="Email" class="form-group">Email:</label>
            <input type="Email" name="Email" id="email" placeholder="Enter your Email"
            class="form-control">


     <label for="Ph" class="form-group">Phone:</label>
            <input type="text" name="Ph" id="ph" placeholder="Enter your Number"
            class="form-control">


     <label for="Feed" class="form-group">FeedBack:</label>
            <input type="textarea" name="Feed" id="feed"
            class="form-control" style="height: 20vh;">

            <input type="button" class=" form-group btn btn-primary pull-right name="SUbmit" id="submit" value="Submit" >

              <input type="button" class=" form-group btn btn-danger cancel" name="Clear" id="clear" value="Clear" style="float: right; margin-right: 10px;">
                  </form><!--end of form-->
              </div><!--end of column-->
              <!-- start of column -->
              <div class="col-lg-6 well" style="height: 85vh; margin-top: 93px;">
                <h1 style="margin-top: 20px;">Find Us</h1>
                <div class="map">
             <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed" style="width: 100%;height: 65vh;"></iframe>
              </div>
              
                   </div><!--end of column-->
        
      
     </div><!--end of row-->
    </div><!--end of container-fluid-->
  </section><!--end of section-->

@endsection




