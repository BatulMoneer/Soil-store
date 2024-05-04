<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width",initial-scale=1.0>
        <title>Cookies alart popup</title>
        <link rel="stylesheet" href="styleElaf.css">
        <link rel="stylesheet" href="homeStyle.css">
    </head>
    <body style="background-color: white;">
    <header>
    <div class="container">
      <h1>Soil Store</h1>
    </div>
  </header>
  <script>
    showModal();
  </script>
</body>
        
        <div id="modalbox" style="background-color: white;">
            <img src="cookies1.jpg" whidth="120" height="120" class="Cookies">
            <p>We use Cookies to optimize user experience and content.</p>
            <button type="button" onclick="document.location='Home.php'">Accept</button>
        </div>
        <script>
            let modalBox=document.getElementById("modalbox");
            function showModal(){
                setTimeout(()=>{
                    modalBox.style.display="block"
                },1000)
            }
            function closeModel(){
                modalBox.style.display="none"

            }
        </script>


    </body>
    <footer>
    <p>&copy;2023 soil store. All rights reserved.</p>
  </footer>
</html>