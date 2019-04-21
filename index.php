<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EventsBoy - Help to those Who Need</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>
            <header>
                    <h2>EventsBoy</h2>

                    <div class="hamberger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <nav>
                        <a href="#">About</a>
                        <a href="#">Work</a>
                        <a href="#">Services</a>
                        <a href="#">Help</a>

                        <?php
                         if(isset($_SESSION['email'])) {
                             echo "klsjdfvkjldf";
                         } else {
                             echo '<a href="login.php" class="bt logsign">Log In</a>
                             <a href="signup.php" class="logsign">Sign Up</a>';
                         }
                        ?>

                       
                    </nav>
                    
                    <div class="icon">
                        <i class="fa fa-headphones" aria-hidden="true"></i><br>
                        <i class="fa fa-twitter" aria-hidden="true"></i><br>
                        <i class="fa fa-bolt" aria-hidden="true"></i><br>
                    </div>
                    
                    <div class="arrow">
                        <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                    </div> 
                </header>
        <div class="slider" id="slider">
		    <div>
			    <img src="img/slider1.jpg">
		    </div>
		    <div>
			    <img src="img/slider2.jpg">
		    </div>
		    <div>
		    	<img src="img/slider3.jpg">
            </div>
		    <div>
		    	<img src="img/slider4.jpg">
		    </div>
		

		    <button class="prev">
		    	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>
		    </button>
		    <button class="next">
		    	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>
		    </button>

		    <!-- Slider Background-->
		    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPAAAABfCAYAAADWH0qpAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAABBdEVYdERlc2NyaXB0aW9uADRrIHdhbGxwYXBlciBMb3ZlbHkgNGsgbWluaW1hbGlzdCB3YWxscGFwZXIgNjcgaW1hZ2VznMvVCQAAABl0RVh0Q29weXJpZ2h0ADRyZWNlbnRjYXJzLmNvbdzHkxgAAABBdEVYdENvbW1lbnQAQ1JFQVRPUjogZ2QtanBlZyB2MS4wICh1c2luZyBJSkcgSlBFRyB2ODApLCBxdWFsaXR5ID0gOTAKfVTa3QAAATFJREFUeF7t08EJwDAAAzGn++/c5tElDiQwnuDOtvcOCHr+B4IEDGEChjABQ5iAIUzAECZgCBMwhAkYwgQMYQKGMAFDmIAhTMAQJmAIEzCECRjCBAxhAoYwAUOYgCFMwBAmYAgTMIQJGMIEDGEChjABQ5iAIUzAECZgCBMwhAkYwgQMYQKGMAFDmIAhTMAQJmAIEzCECRjCBAxhAoYwAUOYgCFMwBAmYAgTMIQJGMIEDGEChjABQ5iAIUzAECZgCBMwhAkYwgQMYQKGMAFDmIAhTMAQJmAIEzCECRjCBAxhAoYwAUOYgCFMwBAmYAgTMIQJGMIEDGEChjABQ5iAIUzAECZgCBMwhAkYwgQMYQKGMAFDmIAhTMAQJmAIEzCECRjCBAxhAoYwAUOYgCFMwJC1fQ6sAb3QNcqwAAAAAElFTkSuQmCC">
		    <!-- Swicthes -->
		    <span>
			<!--<i class="active"></i>
			<i></i>
			<i></i>-->
		    </span>
	    </div>

    <script src="res/script.main.js"></script>
    </body>
</html>