  <!--Conditional to include markup or logic only on a specific page-->
  <?php if(is_page('About me')){ ?>
    <h3>Ups, i think this is the about me page</h3>
  <?php }?>

  <nav>

  </nav>


<nav id="navbar" class="navbar navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li role="presentation"><a class="page-scroll" href="#top">Top</a></li>
              <li role="presentation"><a class="page-scroll" href="#bio">Bio</a></li>
              <li role="presentation"><a class="page-scroll" href="#gallery">Galleri</a></li>
              <li role="presentation"><a class="page-scroll" href="#cv">CV</a></li>
              <li role="presentation"><a class="page-scroll" href="#contact">Kontakt</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
