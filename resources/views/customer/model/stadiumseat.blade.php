<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width:100%;">
  <div class="modal-dialog" role="document" style="width: 100%;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Seat Select</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -2%;">
          <span aria-hidden="true" style="margin-top:-30px;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <style type="text/css" media="screen">
p 
{
    
    font-size: 20px;
    font-family: 'Muli', sans-serif;
}

.box1
{
   width:100%;
   height:113vh;
   
}

.red-tickets
{
    width: 100%;
    height: 27vh;
    background:rgba(237, 58, 66,0.9);
    font-family: 'Muli', sans-serif;
    color: white;

}

.red-btn
{
    float: right;
    margin-right: 10px;
    color: darkred !important;
}

.green-tickets
{
    width: 100%;
    height: 27vh;
    margin-top: 10px;
    background:linear-gradient(to right,#32CD32,#7CFC00);
    font-family: 'Muli', sans-serif;
    color: white;

}

.green-btn
{
    float: right;
    margin-right: 10px;
    color: darkgreen !important;

}

.blue-tickets
{
    width: 100%;
    height: 27vh;
    margin-top: 10px;
    background:rgba(32,178,170,0.5);
    font-family: 'Muli', sans-serif;
    color: white;



}

.blue-btn
{
    float: right;
    margin-right: 10px;
    color: darkblue !important;
}

.yellow-tickets
{
    width: 100%;
    height: 27vh;
    margin-top: 10px;
    background:rgba(255,255,0,0.8);
    font-family: 'Muli', sans-serif;
    color: white;

}

.ticket-number
{
    display: inline;
    list-style: none;
    text-align: center;
    cursor: pointer;

}

.ticket-number li
{
    width: 30px;
    height: 30px;
    border: 1px solid red;
    float: left;
    margin-left: 22px;
    margin-top: 8px;
    
}

.ticket-number li:hover
{
    background-color: yellow;
}

.ticket-number
{
    float:left;
    margin-left: 10px;


}


    
</style>

  <div class="container-fliud" style="overflow:hidden;">
    <div class="row">
      <div class="col-lg-4">
        <div class="box1">
          <p class="text-center" style="font-size: 30px;">Book your Ticket</p>

          <h2>Categories of ticket</h2>

          <div class="red-tickets">
          <p>The Seat that are shown in the color red in the demo of the stadium with the price which is middle seat of match.To book that click below:</p>
          <button class="btn btn-default red-btn" data-toggle="modal" data-target="#myModal">Click ME</button>
          </div>

          <div class="green-tickets">
             <p>The Seat that are shown in the color parrot green & lime green in the demo of the stadium with the price which is middle seat of match.To book that click below:</p>
          <button class="btn btn-default green-btn" data-toggle="modal" data-target="#myModal">Click ME</button>
          </div>

          <div class="blue-tickets">
            <p>The Seat that are shown in the color blue in the demo of the stadium with the price which is middle seat of match.To book that click below:</p>
          <button class="btn btn-default blue-btn" data-toggle="modal" data-target="#myModal">Click ME</button>
          </div>

          <div class="yellow-tickets">
            <p>The Seat that are shown in the color yellow in the demo of the stadium with the price which is middle seat of match.To book that click below:</p>
          <button class="btn btn-default blue-btn" data-toggle="modal" data-target="#myModal">Click ME</button>
          </div>
        </div>
      </div><!--end of col-4-->
      <div class="col-lg-8">
        <img src="{{asset('images/gro.jpg')}}" style="/* width: 100%; */ height: 55%;/* margin-top: 13%; */position: fixed;margin-top: 12%;">
      </div>
    </div>
  </div>
  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Seat Select</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -3%;">
          <span aria-hidden="true" style="margin-top:-30px;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="tickets" style="width: 100%;height: 100vh;">
          <ul class="ticket-number">
            <p class="text-danger">East side</p>

            <li class="booking" data-price="2000">21</li>
            <li class="booking" data-price="2000">22</li>
            <li class="booking" data-price="2000">23</li>
            <li class="booking" data-price="2000">24</li>
            <li class="booking" data-price="2000">25</li>
            <li class="booking" data-price="2000">26</li>
            <li class="booking" data-price="2000">27</li>
            <li class="booking" data-price="2000">28</li>  
            <li class="booking" data-price="2000">29</li> 
            <li class="booking" data-price="2000">30</li>
          </ul>

          <ul class="ticket-number">
            <p class="text-danger">West side</p>
            <li class="booking" data-price="2000">31</li>
            <li class="booking" data-price="2000">32</li>
            <li class="booking" data-price="2000">33</li>
            <li class="booking" data-price="2000">34</li>
            <li class="booking" data-price="2000">35</li>
            <li class="booking" data-price="2000">36</li>
            <li class="booking" data-price="2000">37</li>
            <li class="booking" data-price="2000">38</li>
            <li class="booking" data-price="2000">39</li> 
            <li class="booking" data-price="2000">40</li>
          </ul>
              <!-- green -->
          <ul class="ticket-number">
            <p class="text-success">East side</p>
            <li class="booking" data-price="1000">1</li>
            <li class="booking" data-price="1000">2</li>
            <li class="booking" data-price="1000">3</li>
            <li class="booking" data-price="1000">4</li>
            <li class="booking" data-price="1000">5</li>
            <li class="booking" data-price="1000">6</li>
            <li class="booking" data-price="1000">7</li>
            <li class="booking" data-price="1000">8</li>
            <li class="booking" data-price="1000">9</li> 
            <li class="booking" data-price="1000">10</li>
          </ul>

          <ul class="ticket-number">
            <p class="text-success">West side</p>
            <li class="booking" data-price="1000">11</li>
            <li class="booking" data-price="1000">12</li>
            <li class="booking" data-price="1000">13</li>
            <li class="booking" data-price="1000">14</li>
            <li class="booking" data-price="1000">15</li>
            <li class="booking" data-price="1000">16</li>
            <li class="booking" data-price="1000">17</li>
            <li class="booking" data-price="1000">18</li>
            <li class="booking" data-price="1000">19</li> 
            <li class="booking" data-price="1000">20</li> 
          </ul>
          
               <!-- blue-->

                 <ul class="ticket-number">
            <p class="text-primary">East side</p>
            <li class="booking" data-price="1000">61</li>
            <li class="booking" data-price="1000">62</li>
            <li class="booking" data-price="1000">63</li>
            <li class="booking" data-price="1000">64</li>
            <li class="booking" data-price="1000">65</li>
            <li class="booking" data-price="1000">66</li>
            <li class="booking" data-price="1000">67</li>
            <li class="booking" data-price="1000">68</li>
            <li class="booking" data-price="1000">69</li> 
            <li class="booking" data-price="1000">70</li>
          </ul>

          <ul class="ticket-number">
            <p class="text-primary">West side</p>
            <li class="booking" data-price="1000">71</li>
            <li class="booking" data-price="1000">72</li>
            <li class="booking" data-price="1000">73</li>
            <li class="booking" data-price="1000">74</li>
            <li class="booking" data-price="1000">75</li>
            <li class="booking" data-price="1000">76</li>
            <li class="booking" data-price="1000">77</li>
            <li class="booking" data-price="1000">78</li>
            <li class="booking" data-price="1000">79</li> 
            <li class="booking" data-price="1000">80</li>
          </ul>

                    <!-- yellow -->
           <ul class="ticket-number">
            <p class="text-warning">East side</p>
            <li class="booking" data-price="700">41</li>
            <li class="booking" data-price="700">42</li>
            <li class="booking" data-price="700">43</li>
            <li class="booking" data-price="700">44</li>
            <li class="booking" data-price="700">45</li>
            <li class="booking" data-price="700">46</li>
            <li class="booking" data-price="700">47</li>
            <li class="booking" data-price="700">48</li>
            <li class="booking" data-price="700">49</li> 
            <li class="booking" data-price="700">50</li>
          </ul>

          <ul class="ticket-number">
            <p class="text-warning">West side</p>
            <li class="booking" data-price="700">51</li>
            <li class="booking" data-price="700">52</li>
            <li class="booking" data-price="700">53</li>
            <li class="booking" data-price="700">54</li>
            <li class="booking" data-price="700">55</li>
            <li class="booking" data-price="700">56</li>
            <li class="booking" data-price="700">57</li>
            <li class="booking" data-price="700">58</li>
            <li class="booking" data-price="700">59</li> 
            <li class="booking" data-price="700">60</li>
          </ul>







        </div>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default Book" data-modal-id="myModal">Book</button>
      </div>
    </div>

  </div>
</div>



@section('scripts')
    <script>
        
        $(document).off('click', '.Book').on('click','.Book', function(e) {
          e.preventDefault();
          let modal = $('#'+$(this).data('modal-id'));
          let count = modal.find('ul li.active').length;
          let data = '';
          let price = 0;
          $.each(modal.find('ul li.active'), function() {
            data += $(this).text()+',';
            price += $(this).data('price');
           
          });
            swal("Succesfully Added The Seat", "Thank You!!", "success");
            $('#myModal').modal('hide');
            $('.modal-backdrop').remove();


      
          let form = $('#form1');
            parseInt(form.find('[name="feed_title"]').val(data));
            parseInt(form.find('[name="total_seat"]').val(count));
            parseInt(form.find('[name="amt"]').val(price));



      

          
        });

        function closeModal(event, btn) {
          event.preventDefault();
          let modal = btn.data('target');
          $('#'+modal).hide();
          $('.modal-backdrop').remove();
        }
        

    </script>
@endsection
      </div>
    </div>
  </div>
</div>