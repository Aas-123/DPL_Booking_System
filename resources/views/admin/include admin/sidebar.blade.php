
<div class="sidebar" id="sidebar">
    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="icon-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="icon-pencil"></i>
            </button>

            <button class="btn btn-warning">
                <i class="icon-group"></i>
            </button>

            <button class="btn btn-danger">
                <i class="icon-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- #sidebar-shortcuts -->

    <ul class="nav nav-list">
               <li {!! request()->is('/home')?'class="active"':'' !!}>
                  <a href="{{'/home'}}">
                <i class="icon-dashboard"></i>
                <span class="menu-text"> Dashboard</span>
                  </a>
               </li>

               <li {!! request()->is('adminwork.result')?'class="active"':'' !!}>
            <a href="{{route('adminwork.result')}}">
                <i class="icon-archive""></i>
                <span class="menu-text"> Result </span>
            </a>
        </li>

          <li>
            <a href="{{route('adminwork.points')}}">
                <i class="icon-briefcase"></i>

                <span class="menu-text">Points Table </span>
            </a>
        </li>

         <li>
            <a href="{{route('adminwork.news')}}">
                <i class="icon-file"></i>
                <span class="menu-text"> News Feed</span>
            </a>
        </li>

        <li>
            <a href="{{route('adminwork.highlight')}}">
                <i class="icon-film"></i>
                <span class="menu-text"> Highlight</span>
            </a>
        </li>

         <li>
            <a href="{{route('adminwork.admin')}}">
                <i class="icon-adn"></i>
                <span class="menu-text"> Admin</span>
            </a>
        </li>

        <li>
         <a href="{{route('admin.bookstatus')}}">
                <i class="icon-bold"></i>
                <span class="menu-text">Booking status</span>
            </a>
         </li>
   </ul>

    <div class="sidebar-collapse" id="sidebar-collapse">
        <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
    </div>

    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
    </script>

</div>