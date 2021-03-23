<footer class="bg-dark" id="kontakt">
   <div class="container pt-5 pb-5 text-white">
       <h1 class="text-white">Kontakt ::</h1>
       <h6><span data-feather="mail"></span> <a href="mailto: radek.slachta@matric.cz" class="text-white"> radek.slachta@matric.cz</a></h6>
       <h6><span data-feather="phone-call"></span> +420 608 00 1536</h6>
       <div class="mt-3">
           <span><a class="btn btn-primary" href="https://www.linkedin.com/in/radekslachta/" role="button" target="_blank"><span data-feather="linkedin"></span></a></span>
           <span><a class="btn btn-primary" href="https://twitter.com/radoss" role="button" target="_blank"> <span data-feather="twitter"></span></a></span>
       </div>
   </div>
</footer>


<!-- end of main conteiner> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src= "<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
    

<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar-right", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#navbar a").on('click', function(event) {
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
    }  // End if
  });
});
</script>

    <?php wp_footer(); ?>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

  </body>
</html>