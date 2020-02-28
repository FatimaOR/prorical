<?php
class Pagina {
    public static function headerTemplate($title) {
        print('
        <!doctype html>
        <html lang="es">
        <head>
            <!-- Conjunto de caracteres -->

            <meta charset="utf-8">

            <!-- Indica al navegador que la página web está optimizada para dispositivos móviles -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!-- Título del documento -->
            <title>'.$title.'</title>
            <!-- Importación de archivos tipo CSS -->

            <link rel="stylesheet" href="../../resources/css/materialize.min.css" type="text/css">
            <link rel="stylesheet" href="../../resources/css/material-icons.css" type="text/css">
            <link rel="stylesheet" href="../../resources/css/style.css" type="text/css">

            <!-- Llamada a un archivo tipo icono -->
            <link rel="shortcut icon" href="../img/logo.png" type="image/png">
            
        </head>
        <body>
            <header>
            <nav>
            <div class="nav-wrapper">
            <a href="index.php" class="brand-logo"><img src="../../resources/img/logo.png" height="65"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

            <ul class="right hide-on-med-and-down">

                <li><a href="sass.html"><i class="material-icons">search</i></a></li>
                <li><a href="sass.html"><span class="new badge">4</span></a></li>
                <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
              </ul>
            </div>
          </nav>
                <nav class="black">
                    <div class="nav-wrapper">
                        <ul class="left hide-on-med-and-down">
                            <li><a href="login.php">Iniciar Sesión</a></li>
                            <li><a href="RopaEImplementos.php">Registrarse</a></li>
                            <li><a href="collapsible.php">Ropa e Implementos</a></li>
                            <li><a href="QuienesSomos.php">¿Quiénes somos?</a></li>
                            <li><a href="MiPerfil.php">Mi Perfil</a></li>
                        </ul>
                    </div>
                </nav>
                
                <ul class="sidenav" id="mobile-demo">
                <li><a href="sass.html"><i class="material-icons">search</i></a></li>
                <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
                <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
                <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </header>
    
            <main>
                <h2>'.$title.'</h2>
        ');   
    }

    public function footerTemplate() {
        print('
            </main>
                <footer class="page-footer black">
                <div class="container">
                    <div class="row">
                        <div class="col l6 s12">
                            <h5 class="white-text">Footer Content</h5>
                            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                        </div>
                        <div class="col l4 offset-l2 s12">
                            <h5 class="white-text">Links</h5>
                            <ul>
                                <li><a class="grey-text text-lighten-3" href="https://www.ricaldone.edu.sv/">Página ITR oficial</a></li>
                                <li><a class="grey-text text-lighten-3" href="#!">Términos y condiciones</a></li>
                                <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/ProRicalL/">Página Oficial ProRical 3</a></li>
                                <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        © 2014 Copyright Text
                        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                    </div>
                </div>
            </footer>
            <script src="../../resources/js/jquery-3.4.1.min.js" type="text/javascript"></script>
            <script src="../../resources/js/materialize.min.js" type="text/javascript"></script>
            <script src="../../resources/js/initialization.js" type="text/javascript"></script>
        </body>
        </html>
        ');
    }
}
?>