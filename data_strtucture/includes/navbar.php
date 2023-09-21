

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="icon" href="images/JETTA-logo.png" type="image/gif" sizes="16x16">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<SCRIPT>

/* Visit our site at http://www.elahmad.com/ for more code
 This notice must stay intact for use */

 <!--  Activate Cloaking Device



 var onHours = " ";

 var onMinutes = " ";


 var onSeconds = " ";



 var offHours = 0;

 var offMinutes = 0;

 var offSeconds = 0;



 var logSeconds = 0;

 var logMinutes = 0;

 var logHours = 0;



 var OnTimeValue = " ";

 var OffTimeValue = " ";

 var PageTimeValue = " ";



 // Back to previous page.

 function WinOpen() 

    {

    getLogoffTime();

    window.location="js-timet.htm"

    window.location="js-timet.htm"   // double call for Mac users??

    }



 // Loads HTML page to full window for View Source.

 function WinOpen1() 

    {

    alert('View/Document Source from menu bar..., then close new window to return to this page. The animation of the radio buttons on the JavaScript index will be dead upon return. Reload the JavaScript page to get them going again. ');

    window.open("js-timer.htm","DisplayWindow","menubar=yes,scrollbars=yes");

    }



 // Captures logon time.

 function getLogonTime()

    {

    var now = new Date();

    // Used to display logon time.

    var ampm = (now.getHours() >= 12) ? " مساءً" : " صباحاً"

    var Hours = now.getHours();

          Hours = ((Hours > 12) ? Hours - 12 : Hours);

    var Minutes = ((now.getMinutes() < 10) ? ":0" : ":") + now.getMinutes();


    var Seconds = ((now.getSeconds() < 10) ? ":0" : ":") + now.getSeconds();

    // String to display log-on time.


    OnTimeValue =(" "


        + Hours


        + Minutes


        + Seconds


        + " "

        + ampm);



    // Capture logon time for use in timer().

    onHours = now.getHours();

    onMinutes = now.getMinutes();

    onSeconds = now.getSeconds();  

    }



 function getLogoffTime()

    {

    var now = new Date();

    // Used to display logoff time.

    var ampm = (now.getHours() >= 12) ? " مساءً" : " صباحاً"

    var Hours = now.getHours();

          Hours = ((Hours > 12) ? Hours - 12 : Hours);


    var Minutes = ((now.getMinutes() < 10) ? ":0" : ":") + now.getMinutes();


    var Seconds = ((now.getSeconds() < 10) ? ":0" : ":") + now.getSeconds();

    // String to display log-off time.


    OffTimeValue =(" "


        + Hours


        + Minutes


        + Seconds


        + " "

        + ampm);



    // Capture logoff time for use in timer().

    offHours = now.getHours();

    offMinutes = now.getMinutes();

    offSeconds = now.getSeconds(); 



    timer(); 

    }



 // Compute difference between logoff time and logon time. 

 function timer()

    { 

    if (offSeconds >= onSeconds)

       { logSeconds = offSeconds - onSeconds; }

    else

       {

       offMinutes -= 1;

       logSeconds = (offSeconds + 60) - onSeconds;      

       }

    if (offMinutes >= onMinutes)

       { logMinutes = offMinutes - onMinutes; }

    else

       {

       offHours -= 1;

       logMinutes = (offMinutes + 60) - onMinutes;

       }

    logHours = offHours - onHours;



    // Used to display time on page.

    logHours =  ((logHours < 10) ? "0" : ":") + logHours;

    logMinutes = ((logMinutes < 10) ? ":0" : ":") + logMinutes;


    logSeconds = ((logSeconds < 10) ? ":0" : ":") +logSeconds;

    // String to display time on page.

    PageTimeValue =(" "


        + logHours


        + logMinutes


        + logSeconds);



    displayTimes();

    }



 function displayTimes()

    {

    alert("\n,وقت دخول الصفحة    : " +OnTimeValue+"\n\nالوقت الآن  : "+OffTimeValue+"\n\nالوقت الذي قضيته بالصفحة هو : " + PageTimeValue);

    }



 // Deactivate Cloaking -->

 </SCRIPT>
   
<style>
body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

/* Style the navbar */
#navbar {
  overflow: hidden;
  background-color: red;
  width:100%;
}

/* Navbar links */
#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}
#navbar a:hover{
  background-color:white;
  color:black;
}

/* Page content */
.content {
  padding: 16px;
}

/* The sticky class is added to the navbar with JS when it reaches its scroll position */
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 60px;
}

 </style>
</head>

<BODY onLoad="getLogonTime()">
<div class="header" style="  padding-bottom: 70px;">
  <img src="images/JETTA-logo.png" class="logo_left" alt="log/image">

  <div class="icon_right">
  Dalton House, 60 Windsor Avenue, London, SW19 2RR. 

  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
</svg>
<br>
info@jettalube.com
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
</svg>
</div>
<div class="icon_2_right">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg>
</div>
<INPUT class="btn-time-top" TYPE=button value=" time spent on the page" onClick=getLogoffTime()></FORM>



<div id="navbar">
  <a href="index.php">Home</a>
  <a href="news.php">News</a>
  <a href="products.php">products</a>
  <a href="login.php">login</a>
  <a href="contact.php">Contact</a>
  <a href="about.php">about</a>
  <a href="OILS.php">oils</a>
  <a href="logout.php">logout</a>


</div>

<div id="content" class="site-content" >

  <img class="page-header dtable" style="width:100%;" src="images/header.jpg">
</div>
<FORM class="search"  target="_blank" method="GET" action="http://www.google.com/search">
<input  style="
background-color:#02032ecc;color:white;border-radius:20px ;position:relative;border:none;bottom:100px;outline:none;
 " TYPE=text name=q size=22 maxlength=255 value="" placeholder="search">
<input type=hidden name=ie value=windows-1256>
<input type=hidden name=oe value=windows-1256>
<input  style=" background-color:#02032ecc;color:white;border:none;outline:none;border-radius:20px ;position:relative;bottom:100px;" type=submit name=btnG VALUE="Search">
</FORM> 
<script>
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</BODY>
</html>
