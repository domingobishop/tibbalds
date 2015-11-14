<nav class="navbar navbar-default">
    <div class="container">
      
        <!-- Mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
              
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php wp_nav_menu( array( 'menu' => 'primary', 'items_wrap' => '<ul class="nav navbar-nav navbar-left" role="menu">%3$s</ul>', 'container' => false ) ); ?>
              </div>
              <!-- /.navbar-collapse --> 
            
        
        <!-- Collect the nav links, forms, and other content for toggling 
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left" role="menu">
          		<li class="menu-item nav_menu_link_drop nav" rel="1"><a href="<?php bloginfo('siteurl');?>/services/" class="nav_menu_link">Services</a></li>
          		<li class="menu-item nav_menu_link_drop nav" rel="2"><a href="<?php bloginfo('siteurl');?>/contact/" class="nav_menu_link">Contact</a></li>
          		<li class="menu-item nav_menu_link_drop nav" rel="3"><a href="<?php bloginfo('siteurl');?>/project-management/" class="nav_menu_link">Project Management</a></li>
          		<li class="menu-item nav_menu_link_drop nav" rel="4"><a href="<?php bloginfo('siteurl');?>/using-our-team/" class="nav_menu_link">Using Our Team</a></li>
          		<li class="menu-item nav_menu_link_drop nav" rel="5"><a href="<?php bloginfo('siteurl');?>/recent-projects/" class="nav_menu_link">Recent Projects</a></li>
          		<li class="menu-item nav_menu_link_drop nav" rel="6"><a href="<?php bloginfo('siteurl');?>/news/" class="nav_menu_link">News</a></li>
    			</ul>        
    		</div> -->
        <!-- /.navbar-collapse --> 
      
    </div>
</nav>