{"changed":false,"filter":false,"title":"index.php","tooltip":"/nibis/index.php","value":"<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n  <meta charset=\"utf-8\">\n  <title>IBIS Internship System</title>\n  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">\n  <meta content=\"\" name=\"keywords\">\n  <meta content=\"\" name=\"description\">\n\n  <!-- Favicons -->\n  <link href=\"img/favicon.png\" rel=\"icon\">\n  <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">\n\n  <!-- Google Fonts -->\n  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700\" rel=\"stylesheet\">\n\n  <!-- Bootstrap CSS File -->\n  <link href=\"lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">\n\n  <!-- Libraries CSS Files -->\n  <link href=\"lib/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">\n  <link href=\"lib/animate/animate.min.css\" rel=\"stylesheet\">\n\n  <!-- Main Stylesheet File -->\n  <link href=\"css/style.css\" rel=\"stylesheet\">\n\n</head>\n\n<body>\n\n  <!--==========================\n  Header\n  ============================-->\n  <header id=\"header\">\n    <div class=\"container\">\n\n      <div id=\"logo\" class=\"pull-left\">\n        <a href=\"#hero\"><img src=\"img/logo.png\" alt=\"\" title=\"\" /></img></a>\n        <!-- Uncomment below if you prefer to use a text logo -->\n        <!--<h1><a href=\"#hero\">Regna</a></h1>-->\n      </div>\n\n      <nav id=\"nav-menu-container\">\n        <ul class=\"nav-menu\">\n          <li class=\"menu-active\"><a href=\"#hero\">Home</a></li>\n          <!--li><a href=\"#about\">About Us</a></li-->\n          <li><a href=\"#services\">Login</a></li>\n      \n        \n          <li><a href=\"#contact\">Contact Us</a></li>\n        </ul>\n      </nav><!-- #nav-menu-container -->\n    </div>\n  </header><!-- #header -->\n\n  <!--==========================\n    Hero Section\n  ============================-->\n  <section id=\"hero\">\n    <div class=\"hero-container\">\n      <h1>Welcome to IBIS</h1>\n      <h2>Where all your internship needs are met</h2>\n      <a href=\"#services\" class=\"btn-get-started\">Get Started</a>\n    </div>\n  </section><!-- #hero -->\n\n  <main id=\"main\">\n\n\n\n    <!--==========================\n      Services Section\n    ============================-->\n    <section id=\"services\">\n      <div class=\"container wow fadeIn\">\n        <div class=\"section-header\">\n          <h3 class=\"section-title\">Login as</h3>\n          <p class=\"section-description\">------</p>\n        </div>\n        <div class=\"row\">\n          <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.2s\">\n            <div class=\"box\">\n              <div class=\"icon\"><a href=\"admin/login.php\"><i class=\"fa fa-desktop\"></i></a></div>\n              <h4 class=\"title\"><a href=\"admin/login.php\">Admin</a></h4>\n              <p class=\"description\">Adminstrator can login in here</p>\n            </div>\n          </div>\n          <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.4s\">\n            <div class=\"box\">\n              <div class=\"icon\"><a href=\"admin/login.php\"><i class=\"fa fa-bar-chart\"></i></a></div>\n              <h4 class=\"title\"><a href=\"admin/login.php\">Student</a></h4>\n              <p class=\"description\">Login to for your internship needs</p>\n            </div>\n          </div>\n          <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.6s\">\n            <div class=\"box\">\n              <div class=\"icon\"><a href=\"admin/login.php\"><i class=\"fa fa-paper-plane\"></i></a></div>\n              <h4 class=\"title\"><a href=\"admin/login.php\">Faculty</a></h4>\n              <p class=\"description\">Evaluate students and internships</p>\n            </div>\n          </div>\n\n        </div>\n\n      </div>\n    </section><!-- #services -->\n\n\n    <!--==========================\n      Contact Section\n    ============================-->\n    <!--section id=\"contact\">\n      <div class=\"container wow fadeInUp\">\n        <div class=\"section-header\">\n          <h3 class=\"section-title\">Contact</h3>\n          <p class=\"section-description\">------------------------------------</p>\n        </div>\n      </div>\n\n\n      <div class=\"container wow fadeInUp\">\n        <div class=\"row justify-content-center\">\n\n          <div class=\"con\">\n            <div class=\"form\">\n              <div id=\"sendmessage\">Your message has been sent. Thank you!</div>\n              <div id=\"errormessage\"></div>\n              <form action=\"\" method=\"post\" role=\"form\" class=\"contactForm\">\n                <div class=\"form-group\">\n                  <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" />\n                  <div class=\"validation\"></div>\n                </div>\n                <div class=\"form-group\">\n                  <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" data-rule=\"email\" data-msg=\"Please enter a valid email\" />\n                  <div class=\"validation\"></div>\n                </div>\n                <div class=\"form-group\">\n                  <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\" />\n                  <div class=\"validation\"></div>\n                </div>\n                <div class=\"form-group\">\n                  <textarea class=\"form-control\" name=\"message\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Message\"></textarea>\n                  <div class=\"validation\"></div>\n                </div>\n                <div class=\"text-center\"><button type=\"submit\">Send Message</button></div>\n              </form>\n            </div>\n          </div>\n\n        </div>\n\n      </div>\n    </section--><!-- #contact -->\n\n  </main>\n\n  <!--==========================\n    Footer\n  ============================-->\n  <footer id=\"footer\">\n \n\n    <div class=\"container\">\n      <div class=\"copyright\">\n        &copy; Copyright <strong>IBIS</strong>. All Rights Reserved\n      </div>\n      <!--div class=\"credits\">\n        <!--\n          All the links in the footer should remain intact.\n          You can delete the links only if you purchased the pro version.\n          Licensing information: https://bootstrapmade.com/license/\n          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna\n        -->\n      <!--/div-->\n    </div>\n  </footer><!-- #footer -->\n\n  <a href=\"#\" class=\"back-to-top\"><i class=\"fa fa-chevron-up\"></i></a>\n\n  <!-- JavaScript Libraries -->\n  <script src=\"lib/jquery/jquery.min.js\"></script>\n  <script src=\"lib/jquery/jquery-migrate.min.js\"></script>\n  <script src=\"lib/bootstrap/js/bootstrap.bundle.min.js\"></script>\n  <script src=\"lib/easing/easing.min.js\"></script>\n  <script src=\"lib/wow/wow.min.js\"></script>\n  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY\"></script>\n\n  <script src=\"lib/waypoints/waypoints.min.js\"></script>\n  <script src=\"lib/counterup/counterup.min.js\"></script>\n  <script src=\"lib/superfish/hoverIntent.js\"></script>\n  <script src=\"lib/superfish/superfish.min.js\"></script>\n\n  <!-- Contact Form JavaScript File -->\n  <script src=\"contactform/contactform.js\"></script>\n\n  <!-- Template Main Javascript File -->\n  <script src=\"js/main.js\"></script>\n\n</body>\n</html>\n","undoManager":{"mark":-1,"position":-1,"stack":[]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":0,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1512134987989}