<!DOCTYPE html>
<html>
    <head>
        <title> Fortnite Looker </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://sdk.scoutsdk.com/1.0.0/js/Scout.js"></script>
        <script type="text/javascript" src="js/APIstuff.js"></script>
        
    </head>
    <body>
        
        <header>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a>
            </div>
            <form class="navigationBar">
                <div id = "logo">
                    <h3 style = "color:white;">Fort-ify</h3>
                </div>
                <button type = "button" id="ps4Tab" >PS4</button>
                <button type = "button" id="xbxTab" >XBX</button>
                <button type = "button" id="pcTab" >PC</button>
                <input type="text" placeholder="Enter your Epic Games username..." name="search" id = "searchQ">
                <button type="button" id ="searchButton"><i class="fa fa-search"></i></button>
                <nav>
                    <a href id = "rankingsTab"src = "index.php">Rankings</a>
                    <a href id = "newsTab" src = "index.php">News</a>
                    <a href id = "streamingTab" src = "index.php">Streaming</a>
                    <a href id = "faqTab" src = "index.php">FAQ</a>
                </nav>
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

            </form>
            
        </header>
        
    <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    		
    </body>
    
        
</html>