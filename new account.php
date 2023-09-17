<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CENTRALIZATION COMPUTER REGISTRATION</title>
    <link rel="stylesheet" href="singizwa.css">
</head>
<body>
    <table border="0" width: 100%;>
        <tr> <div >
            <ul class="menu"> 
                <li class="zaza"><a class="style" href="landingpage.html"><b>Home</b> </a></li>  
               <li class="zaza"><a class="style" href="ABOUT US.html"><b>About us</b> </a></li>  
           <li class="zaza"><a class="style" href="login.html"> <b>Login</b></a></li> 
           <li class="zaza"><a class="style" href="contact.html"> <b>Contact us</b></a></li> 
          <li class="zaza"><a class="style" href="new account.html"><b>Register</b></a></li>   
            </ul>
            </div> 
           
        </tr>
        <tr class="logo">
            <td colspan="4"><h1>
                <marquee behavior="margin left:" direction="">WELCOME TO CENTRALIZATION COMPUTER TRACKING SYSTEM</marquee> 
                </h1></td>
        </tr>
        <form action ="signupp.php" method="POST">
        <table border="0" class="wt">
            
            <tr><td>
                <select name="" id="maincategories">
                <option value="">Guest</option>
                <option value="student">student</option>
                <option value="security officer">security officer</option>
            </select></td></tr>
            <tr>
                <td>Enter your first name:</td>
                <td>
                    <input type="text" name="fname" placeholder="Ex: singizwa" id="firname">
                    <span id="messageFName" class = "error"><b></b></span>
                </td>
            </tr>
            <tr>
                <td>Enter your last name:</td>
                <td>
                    <input type="text" name="lname" placeholder="Ex: Serge" id="lastname">
                    <span id="messageLName" class = "error"><b></b></span>
                </td>
            </tr>
            
            <tr id="studentdiv" style="display: none;">
                <td>Enter your regnumber:</td>
                <td>
                    <input type="number" placeholder="Ex: 222002045" id="regnumber">
                    <span id="messageRegNumber" class = "error"><b></b></span>
                </td>
            </tr>
            <tr>
                <td>Enter your national ID:</td>
                <td>
                    <input type="number" name="nationalid" placeholder="Ex: 121212212121222" id="national ID">
                    <span id="messageRegNumber" class = "error"><b></b></span>
                </td>
            </tr>
            <tr>
                <td>Enter your telephone number:</td>
                <td>
                    <input type="number" name="telnumber" placeholder="Ex: 07888212312" id="telphone nbr">
                    <span id="messageRegNumber" class = "error"><b></b></span>
                </td>
            </tr>
           
            <tr id="studentdiva" style="display: none;">
                <td>Enter your serial number:</td>
                <td> 
                    <input type="text" placeholder="Ex: Mxl..." id="serialnumber">
                    <span id="messageSerialNumber" class = "error"><b></b></span>
                </td>
            </tr>
            <tr id="studentdivb" style="display: none;" >
                <td>Choose year of study:</td>
                <td>
                    
                        <label for="yearStudy">Year of study:</label><br>
                        level 1 <input type="radio" name="yearStudy" id="yearStudy" value="1"><br>
                        level 2 <input type="radio" name="yearStudy" id="yearStudy" value="2"><br>
                        level 3 <input type="radio" name="yearStudy" id="yearStudy" value="3"><br>
                        level 4 <input type="radio" name="yearStudy" id="yearStudy" value="4"><br>
                    
                    <span id="messageYearStudy" class = "error"><b></b></span>
                </td>
            </tr>
    
<tr><td>Enter your Email:</td><td><input type="email" name="email" placeholder="email" ></td></tr>
<td><input type="password" name="Password" placeholder="password" id="password" onblur="validatePassword()"></td>
<tr><td colspan="2" class="awa">
    <button  name="submit" type="submit" onclick="validateForm()">Register now</button>
    <!-- <button type="button" onclick="reset()">Clear warnings</button>
    <button type="button" onclick="clearFields()">Clean</button> -->
</td></tr>
</table></form>


<td colspan="4">
    <div class="footer">  
     <div class="footer2">
    <div class="footercontent"> 
     <h2> PARTERNS:</h2>
  <ul>  <li>NYARUGUNGE CAMPUS <br></li>  
  <li>S&S INVESTMENT GROUP<br></li> 
 <li>SECURITY COMPANY <br></li>  </ul>
 
</div>
<div class="footerconter1">
<h2>TERMS&CONDITIONS</h2>
 
 <ol><li> you must be student in university of Rwanda </li>
<li> remember to register your computer for first time </li>
<li> verify your account if there is no change </li></ol><br>

</div> 
</div>
<div class="footercontent3">
 <p> for more information don't hesitate to contact us : <br>
     <p class="tt"> Email:</p>singizwaserge@gmail.com <br>
    <p class="tt">Contact:</p> 0790061738/0727204587 <br></p>
</div>
     <div class="copyright">
     <center><b>I agreed all conditions to use this system</b></center>
 

 

 <b> <center>&copy;Copyrights 2023 all right reseverd</center></b></div></div>
</td>
 

 

</table>
<script>
    //cleaning the fields
    function clearFields() {
    document.getElementById("firname").value = "";
    document.getElementById("lastname").value = "";
    document.getElementById("regnumber").value = "";
    document.getElementById("serialnumber").value = "";

    // Clear the selected year of study radio button
    let yearStudyRadios = document.querySelectorAll('input[name="yearStudy"]');
    yearStudyRadios.forEach(radio => {
        radio.checked = false;
    });
     // Clear error messages
    document.getElementById("messageFName").textContent = "";
    document.getElementById("messageLName").textContent = "";
    document.getElementById("messageRegNumber").textContent = "";
    document.getElementById("messageSerialNumber").textContent = "";
    document.getElementById("messageYearStudy").textContent = "";
}
         function reset(){
             // Get values from form fields
            let fname = document.getElementById("firname").value;
            let lname = document.getElementById("lastname").value;
            let regNumber = document.getElementById("regnumber").value;
            let serialNumber = document.getElementById("serialnumber").value;
            let yearStudy = document.querySelector('input[name="yearStudy"]:checked');

             // Clear previous error messages
            document.getElementById("messageFName").textContent = "";
            document.getElementById("messageLName").textContent = "";
            document.getElementById("messageRegNumber").textContent = "";
            document.getElementById("messageSerialNumber").textContent = "";
            document.getElementById("messageYearStudy").textContent = "";

         }
         function validateForm() {
            // Get values from form fields
            let fname = document.getElementById("firname").value;
            let lname = document.getElementById("lastname").value;
            let regNumber = document.getElementById("regnumber").value;
            let serialNumber = document.getElementById("serialnumber").value;
            let yearStudy = document.querySelector('input[name="yearStudy"]:checked');
            let password = document.getElementById("password").value;


            // Clear previous error messages
            document.getElementById("messageFName").textContent = "";
            document.getElementById("messageLName").textContent = "";
            document.getElementById("messageRegNumber").textContent = "";
            document.getElementById("messageSerialNumber").textContent = "";
            document.getElementById("messageYearStudy").textContent = "";

            // Perform validation and show error messages
            if (fname === "" || fname.length <= 4) {
                document.getElementById("messageFName").textContent = "Please enter your first name.";
            }
            if (lname === "" || lname.length <= 3) {
                document.getElementById("messageLName").textContent = "Please enter your last name.";
            }
            if (regNumber === "" || regNumber.length <= 6) {
                document.getElementById("messageRegNumber").textContent = "Please enter your registration number.";
            }
            if (serialNumber === "" || serialNumber.length < 10) {
                document.getElementById("messageSerialNumber").textContent = "Please enter your serial number.";
            }
            if (!yearStudy) {
                document.getElementById("messageYearStudy").textContent = "Please choose your year of study.";
            }
            if (password === "" || password.length < 8) {
                document.getElementById("messagePassword").textContent = "Please enter a password of at least 8 characters.";
            }
        
         function validatePassword() {
            let password = document.getElementById("password").value;

            // Password should have at least 8 characters and contain a mix of letters and numbers
             if (password.length < 8 || !/\d/.test(password) || !/[a-zA-Z]/.test(password)) {
                document.getElementById("messagePassword").textContent = "Password must be at least 8 characters long and contain a mix of letters and numbers.";
            }
             else {
                document.getElementById("messagePassword").textContent = "";
        }
    }
            
        }
        
</script>
<script src="script.js"></script>
</body>
</html>

password validation is what remains