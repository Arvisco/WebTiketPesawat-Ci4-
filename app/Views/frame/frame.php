<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Vanilla Bootstrap v4.2.1 Theme</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href=" <?= base_url('/styler/Indexstyler/bootstrap.min.css')?> ">
  
        <link rel="stylesheet" href="<?= base_url('/styler/Indexstyler/fontAwesome.css')?>">
        <link rel="stylesheet" href="<?= base_url('/styler/Indexstyler/hero-slider.css')?>">
        <link rel="stylesheet" href="<?= base_url('/styler/Indexstyler/templatemo-main.css')?>">
        <link rel="stylesheet" href="<?=base_url('/styler/Indexstyler/owl-carousel.css')?>">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="<?= base_url('/styler/Indexstyler/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')?>"></script>
    </head>
<body>

<?$this->renderSection('isiframe');?>


<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="primary-button">
                        <a href="#home">Back To Top</a>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                    <p>Copyright &copy; Nama Kamu
            
            		- Design by: <em>Dirs</em></p>
                </div>
            </div>
        </div>
    </footer>
   


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?= base_url('/styler/indexstyler/js/vendor/jquery-1.11.2.min.js')?>"><\/script>')</script>
    <script src="<?= base_url('/styler/indexstyler/js/vendor/bootstrap.min.js')?>"></script>
    <script src="<?= base_url('/styler/indexstyler/js/plugins.js')?>"></script>
    <script src="<?= base_url('/styler/indexstyler/js/main.js')?>"></script>
    <script>
        function openCity(cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
               x[i].style.display = "none";  
            }
            document.getElementById(cityName).style.display = "block";  
        }
    </script>

    <script>
        $(document).ready(function(){
          // Add smooth scrolling to all links
          $(".fixed-side-navbar a, .primary-button a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;

              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){
           
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
        });
    </script>

</body>
</html>