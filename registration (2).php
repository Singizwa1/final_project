<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="singizwa.css">
</head>
<body>
    <table border="0" width: 100%; >
    
           
     
        </tr>
        <form action="registration.php" method="POST">
        <h1>Register your computer</h1>
        <table border="0" class="wt">
            <tr>
                <td>Enter your first name:</td>
                <td>
                    <input type="text" name="fname" placeholder=" singizwa" id="firname">
                    <span id="messageFName" class = "error"><b></b></span>
                </td>
            </tr>
            <tr>
                <td>Enter your last name:</td>
                <td>
                    <input type="text" name="lname" placeholder=" Serge" id="lastname">
                    <span id="messageLName" class = "error"><b></b></span>
                </td>
            </tr>
            <tr>
                <td>Enter your regnumber:</td>
                <td>
                    <input type="number" name="regnumber" placeholder="222002045" id="regnumber">
                    <span id="messageRegNumber" class = "error"><b></b></span>
                </td>
            </tr>
            <tr>
                <td>Enter your serial number:</td>
                <td>
                    <input type="text" name="serialnumber" placeholder=" Mxl..." id="serialnumber">
                    <span id="messageSerialNumber" class = "error"><b></b></span>
                </td>
            </tr>
            <tr>
                <tr>
                    <td>Enter your computer name:</td>
                    <td>
                        <input type="text" name="computername" placeholder="HP" id="Computer name">
                        <span id="messageSerialNumber" class = "error"><b></b></span>
                    </td>
                </tr>
           
                <td>Choose year of study:</td>
                <td>
                   <input type="text" name="year" placeholder=" 1" id="year of study">
                    <span id="messageYearStudy" class = "error"><b></b></span>
                </td>
            </tr>
    
<tr><td>Enter your Email:</td><td><input type="email" name="email" placeholder="email" id="emaill" > </td></tr>
<span id="email" class = "error"><b></b></span>


<tr><td colspan="2" class="awa">
    <button type="submit" onclick="validateForm()">Register now</button>
    <!-- <button type="button" onclick="reset()">Clear warnings</button>
    <button type="button" onclick="clearFields()">Clean</button> -->
</td></tr>
</table>






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
    document.getElementById("password").textContent = "";
    document.getElementById("password2").textContent = "";
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
            


            // Clear previous error messages
            document.getElementById("messageFName").textContent = "";
            document.getElementById("messageLName").textContent = "";
            document.getElementById("messageRegNumber").textContent = "";
            document.getElementById("messageSerialNumber").textContent = "";
            document.getElementById("messageYearStudy").textContent = "";
            

            // Perform validation and show error messages
            if (fname === "" || fname.length <= 4) {
                document.getElementById("messageFName").textContent = "Please enter your  correct first name.";
            }
            if (lname === "" || lname.length <= 2) {
                document.getElementById("messageLName").textContent = "Please enter your correct last name.";
            }
            if (regNumber === "" || regNumber.length <= 6) {
                document.getElementById("messageRegNumber").textContent = "Please enter your correct registration number.";
            }

            if (serialNumber === "" || serialNumber.length < 10) {
                document.getElementById("messageSerialNumber").textContent = "Please enter your correct serial number.";
            }
            if (!yearStudy) {
                document.getElementById("messageYearStudy").textContent = "Please choose your year of study.";
            }
           
            
        
        
</script>
</form>
</body>
</html>
