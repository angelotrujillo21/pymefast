<!-- Navigation-->
<style type="text/css">
    .nav-item{
        border-bottom: 8px solid transparent;
    }
    .nav-item:hover{
        border-bottom: 8px solid white;
    }
    
    .menu {
        width: 100%;
        float: left;
      }

      .menu ul li {
        float: right;
        list-style-type: none;
        text-align: left;
      }

      .menu ul li a {
        padding: 10px;
      }

    
</style>


<nav class="navbar navbar-expand-lg bg-banca text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top" >
            <img src="<?= src('multi/logo_bbva.svg') ?>" width="180px">
        </a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" style="margin-left: 5rem;">
            <ul class="navbar-nav">
<!--            <ul class="navbar-nav ml-auto">-->
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio" style=";">Personas</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about" style=";">Empresas</a></li> 
            </ul>
            <div class="menu">
                <ul>
                    <li><a href="" style="; background-color: #02a5a5; color:white; text-transform: capitalize  !important;">BBVA Credi Net</a></li>
                    <li><a href="" style="; color:#efb728; margin-right: 1rem; text-transform: capitalize  !important;"><i class="fa fa-user-plus"></i> Hazte cliente</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- Masthead-->