<html>
    <head></head>
    <body>
        <form>
            <input type="text" id="name" placeholder="Name"><br>
            <input type="text" id="email" placeholder="Email"><br>
            <input type="text" id="uname" placeholder="Username"><br>
            <input type="button" id="reg" onlclick="dummy()" onmouseover="mouseOver()" onmouseout="mouseOut()" name="register" value="Register"><br>
            <input type="button" id="wgsingup" onclick="gform()" value="Signin with Google">
        </form>
        <p id="output"></p>

        <div style="display:none" id="gform">
            <input type="text" id="gmail" placeholder="Gmail"><br>
            <input type="text" id="pass" placeholder="Password"><br>
            <input type="button" id="gsingup" value="Signin">
        </div>

        <script>
            function dummy(){
                document.getElementById("output").innerHTML="Button Pressed!";
            }
            function mouseOver(){
                document.getElementById("output").innerHTML="Mouse Over!";
            }
            function mouseOut(){
                document.getElementById("output").innerHTML="Mouse Out!";
            }
            function gform(){
                document.getElementById("gform").style.display="block";
            }
        </script>
    </body>
</html>