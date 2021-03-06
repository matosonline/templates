<?php
    //Modal from bootstrap
    require_once(__ROOT__.'/views/components/modal.php');
?>
    
    <div class="container-fluid">
    	<div class="footer-bottom">
    		Powered by TEAM HOLYCRAP | 2017
    	</div>
    </div>
    	
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/assets/js/script.js"></script>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
    
    <?php
        if( isset($_GET["page"]) && in_array($_GET["page"],$views) ){
            echo '<script type="text/javascript" src="/assets/js/'.$_GET["page"].'.js"></script>';
        }
    ?>
  </body>
</html>