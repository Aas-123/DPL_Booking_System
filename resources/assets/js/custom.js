// strat of sendAjax Funtion//
function sendAjax(request ,callback=''){
    var url = request.url?request.url:'/';
    var method = request.method?request.method:'get';
    var data = request.data?request.data:{};
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url:url,
        method: method,
        data: data,

        success: function(response){
            
            if (typeof(callback) != 'String') {
                callback(response);
            }
        }

    });
}

// end of sendAjax function//

//start of showModal function//

function showModal(url)
{
    $('#Modal1').modal();
    sendAjax({
        url:url
    },function(data){
        $('#ModalBody').html(data);
    })
}

// end of showModal Function//

// start of Result Insert//
$(document).ready(function(){
    $(document).on('click','#InsertResult',function(e){
       e.preventDefault();
      var data = $('#ResultForm').serializeArray();
    sendAjax({
        url:'/result/insert',
        method:'post',
        data:data
      },function(data){
        $('#Modal1').modal('hide');
        $('.modal-backdrop').remove();
       loadTask();
      swal("Succesfully Added Comment", "Thank You!!", "success");
        
    })
});

});
// end of ResultInsert//

//strat of NewsFeed Instered//
$(document).ready(function(){
    $(document).on('click','#InsertNews',function(e){
       e.preventDefault();
      var data = $('#NewsForm').serializeArray();
      
    sendAjax({
        url:'/news/insert',
        method:'post',
        data:data
      },function(data){
        
      //   $('#Modal1').modal('hide');
      //  loadTask();
      // swal("Succesfully Added Comment", "Thank You!!", "success");
        
    })
});

});

// update of Points//
$(document).ready(function(){
    $(document).on('click','#UpdateData',function(e){
       e.preventDefault();
       var id= $(this).attr('data-id');
       var data = $('#EditForm').serializeArray();
    sendAjax({
        url:'/point/update/'+id,
        method:'post',
        data:data
      },function(data){
        $('#Modal1').modal('hide');
        $('.modal-backdrop').remove();
      swal("Succesfully Updated Comment", "Thank You!!", "success");
        location.reload();
        
    })
});

});



//end of NewsFeed Instered//

//start of Result delete function//
function datadel(url)
{

    sendAjax({
        url:url,
    },function(data){
        
        loadTask();
    })

}

//strat of edit form //
function editform(url)
{
    sendAjax({
        url:url
    },function(data){
        console.log('form opened');
    })
}
//end of edit form//

//end of delete function//

//start of ResultTask load//
  function loadTask()
  {
  	sendAjax({
  		url:'/result/all'
       },function(data){
         $('#ResultTask').empty();
         $.each(data,function(index,value){
         	var detail = '<tr>'+
         	'<td class="text-center">'+value.id+'</td>'+
         	'<td>'+value.team1+'</td>'+
         	'<td>'+value.team2+'</td>'+
         	'<td>'+value.result_detail+'</td>'+
         	'<td>'+
                    
             '<button class="btn btn-sm btn-danger" onclick=datadel("/result/delete/'+value.id+'")>Delete</button>'+
                '</td>'+
                '</tr>';
                $('#ResultTask').append(detail);
         });
      });
  }

//end of Result Task load//




  //start of news feed load//
  function NewsFeedload()
  {
    sendAjax({
        url:'/news/all'
       },function(data){
         $('#loadNews').empty();
         $.each(data,function(index,value){
            var detail = '<tr>'+
            '<td class="text-center">'+value.id+'</td>'+
            '<td>'+value.feed_title+'</td>'+
            '<td>'+value.news_feed+'</td>'+
            '<td>'+value.feed_image+'</td>'+
            '<td>'+
            '<button class="btn btn-sm btn-default" data-toggle="modal" data-target="#exampleModal" onclick=editform("/feed/edit/'+value.id+'")>View</button>'+   
             '<button class="btn btn-sm btn-danger">Delete</button>'+
                '</td>'+
                '</tr>';
                $('#loadNews').append(detail);
         });
      });
  }
  //end of news feed load//

  

    $(document).ready(function(){
      
    $('.message').animate({left:'450px'});


	$('.menu').on('click',function(){
		$('ul').toggleClass('active');
	});



});


    function list()
 {
  var ul = document.createElement("ul");
    document.body.appendChild(ul);

    for (var i =181; i < 211; i++)
     {
    var li = document.createElement("li");  
    li.innerHTML = i;
    ul.appendChild(li);
      }



 }

    $(document).ready(function(){
      
      $('.booking').on('click',function(){
        $(this).css("background-color", "darkgreen").toggleClass('active');
        $num = $(this).text();

        $('.booking').dblclick('click',function(){
           $(this).css("background-color", "white");
      });
   });

   

});

    

