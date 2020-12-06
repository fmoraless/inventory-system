<header class="main-header">
    <!-- ===============================================
    =                   LOGO                   =
    =============================================== -->
    <a href="inicio" class="logo">

<!--        logo mini-->
        <span class="logo-mini">
            <img src="vistas/img/plantilla/icono-blanco.png" class="img-responsive"
             style="padding: 10px">
        </span>
<!--        logo normal-->
        <span class="logo-lg">
            <img src="vistas/img/plantilla/logo-blanco-lineal.png" class="img-responsive"
                 style="padding: 10px 0px">
        </span>

    </a>

    <!-- ===============================================
        =             BARRA NAVEGACION                   =
        =============================================== -->
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle nav</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php
                                if ($_SESSION["foto"] != "")
                                {
                                    echo '<img src="'.$_SESSION["foto"].'" class="user-image">';
                                }else{
                                    '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';
                                }
                                
                            ?>

                            <span class="hidden-xs"><?php echo $_SESSION["nombre"] ?></span>
                        </a>
                        <!-- Dropdown-toggle -->
                        <ul class="dropdown-menu">
                            <li class="user-body">
                                <a href="salir" class="btn btn-default btn-flat">Salir</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>


        </nav>


</header>