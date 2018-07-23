<!DOCTYPE html>
<html lang="en">

@include('admin.include admin.head')

<body>
	@include('admin.include admin.top-nav')

	<div class="main-container" id="main-container">

    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>

       @include('admin.include admin.sidebar')

        @yield('main-view')
        
            <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="ModalBody">
        
    </div>
  </div>
</div>


    </div><!-- /.main-container-inner -->


    <script type="text/javascript">
    window.jQuery || document.write("<script src='{{asset('js/jquery-2.0.3.min.js')}}'>"+"<"+"/script>");
</script>


<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='{{asset('js/jquery.mobile.custom.min.js')}}'>"+"<"+"/script>");
</script>

 <script src="{{asset('js/admin.js')}}"></script>
 <script src="{{asset('js/all.js')}}"></script>


   @yield('scripts')

</body>
</html>