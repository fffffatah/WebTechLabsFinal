<html>
    <head></head>
    <body>
        <form action="" method="post" onsubmit="reuturn doValidation()">
            <input type="text" id="name" placeholder="Name"><span id="err_name"></span><br>
            <input type="text" id="email" placeholder="Email"><span id="err_uname"></span><br>
            <input type="text" id="uname" placeholder="Username"><span id="err_email"></span><br>
            <input type="button" name="register" value="Register"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <script>
            function getElement(id){
                return document.getElementById(id);
            }
            function doValidation(){
                var hasError=false;
                var name=getElement("name");
                var uname=getElement("uname");
                var email=getElement("email");
                var err_name=getElement("err_name");
                var err_uname=getElement("err_uname");
                var err_email=getElement("err_email");
                if(name.value==""){
                    hasError=true;
                    err_name.innerHTML="Name Required";
                }
                if(uname.value==""){
                    hasError=true;
                    err_uname.innerHTML="User Name Required";
                }
                if(email.value==""){
                    hasError=true;
                    err_email.innerHTML="Email Required";
                }
                return !hasError;
            }
        </script>
    </body>
</html>