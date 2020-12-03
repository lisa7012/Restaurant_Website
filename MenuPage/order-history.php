<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Menu Order - Bistro Otto </title>
    <link rel = "stylesheet" type = "text/css" href = "../CommonStyling/BistroOttoCommon.css"/>
    <link rel = "stylesheet" type = "text/css" href = "../MenuPage/menu.css"/>
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
    
    </head>
    
    <body>


    <!--------Navigation Bar------->
    <nav>
        <div class="topnav" id="myTopnav">

            <div class="topnav-centered">
                <a href="../HomePage/Homepage.html" class="active" id="Logo"><img src="../CommonStyling/BistroOtto.png"
                        alt="logo" id="BOLogo"></a>
            </div>

            <a href="../MenuPage/menu.html">Menu</a>
            <a href="../DeliveryPage/delivery.html">Take-Out</a>
            <a href="../ReservationsPage/reservation.html">Reservations</a>

            <div class="topnav-right">
                <a href="../ContactPage/Contact.html">Contact</a>
                <a href="../AboutPage/about.html">About</a>
                <a href="../PressPage/PressPage.html">Press</a>
                <a href="../ReviewsPage/review.html">Reviews</a>
            </div>

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </nav>

    <div class = "icon-bar">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
</div>

    <div>

        <div class="background">
            <div class="pageTitle">
                <header class="pageHeader"> Order History </header>
            </div>
            
            
           <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
        
    {
    
        $array = $_POST["menu_item"];
    
    }
            
        ?>    
            
            
        </div>
        
        </div>
        
        
        <!----Footer of the page---->
    <footer class="footer">
        <table class="footertable">
            <tr>
                <td>
                    <h2> Address </h2>
                    <p class="footerp"> 143 Mont-Royal Est </p>
                    <p class="footerp"> Montreal, QC, Canada H2T 1N9 </p>
                </td>
            </tr>
            <tr>
                <td>
                    <h2> Phone Number </h2>
                    <p><i class="fa fa-phone" id="phone"></i> (438) 383-4700 </p>
                </td>
            </tr>
            <tr>
                <td>
                    <h2> Follow Us </h2>
                    <a href="#" class="fa fa-facebook" id="facebook"></a>
                    <a href="#" class="fa fa-twitter" id="twitter"></a>
                    <a href="#" class="fa fa-instagram" id="instagram">
                </td>
            </tr>
        </table>
        <table class="footertable2">
            <tr>
                <td rowspan="2">
                    <h2> Opening Hours </h2>
                    <p><strong>Mon:</strong> CLOSED</p>
                    <p><strong>Tues:</strong> 12:00 PM - 2:00 PM/ 5:00 PM - 8:00 PM</p>
                    <p><strong>Wed:</strong> 12:00 PM - 2:00 PM/ 5:00 PM - 8:00 PM</p>
                    <p><strong>Thurs:</strong> 12:00 PM - 2:00 PM/ 5:00 PM - 8:00 PM</p>
                    <p><strong>Fri:</strong> 12:00 PM - 2:00 PM/ 5:00 PM - 8:00 PM</p>
                    <p><strong>Sat:</strong> 12:00 PM - 2:00 PM/ 5:00 PM - 8:00 PM</p>
                    <p><strong>Sun:</strong> 12:00 PM - 2:00 PM/ 5:00 PM - 8:00 PM</p>
                </td>
            </tr>
        </table>

        <p class="copy"><br>Copyright &copy; 2018-2020</p>
    </footer>


</body>

</html>