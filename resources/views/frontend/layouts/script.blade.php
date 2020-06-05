<script src="{{asset('public/profun_theme/js/jquery-3.2.1.slim.min.js')}}" ></script>
<script src="{{asset('public/profun_theme/js/popper.min.js')}}"></script>
<script src="{{asset('public/profun_theme/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/profun_theme/js/owl.carousel.js')}}"></script>
<script src="{{asset('public/profun_theme/js/custom.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $.ajax({
              type : 'get',
              url : '{{route('manageAds')}}',
              data: {}, 
              success: function(response){ 
              if(response){
              }
              console.log(response);
          },
          error: function(jqXHR, textStatus, errorThrown) { 
              console.log(JSON.stringify(jqXHR));
              console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
          }              
        });  
	});
   </script>