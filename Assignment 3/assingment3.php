<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
    <script src="custom.js"></script>
    <link rel="stylesheet" href="style.css"> 
    <style>*,*::after,*:before{
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
}
body{
    font-family: arial;
    font-size: 16px;
    margin: 0;
    background-color:lightgray;
    color: #000;
    display: flex;
    align-items: center;
    justify-content: space-around;
    min-height: 100vh;
}
 .form_box{
    width: 600px;
    background-color: rgb(99, 104, 106);
    padding: 30px;
    border-radius: 10px;
    
}
.input-row{ position: relative; margin-bottom: 13px;}
.form_box input:not([type="submit"],[type="checkbox"]),
.form_box textarea,
.form_box select{
    width: 100%;
    margin: 0 0 3px;
    padding: 10px 15px;
    font-size: 20px;
    color: gray;
    border-radius: 5px;
    border: 1px solid transparent;
   
}
.form_box textarea{ height: 70px;}
.form_box input[type="checkbox"]{
    position: absolute;
    left: 0;
    top: 0;
}
.check_label{
    padding-left: 25px;
}
.form_box input[type="submit"]{
    padding: 10px 30px;
    font-size: 20px;
    cursor: pointer;
    border-radius: 5px;
    border: 0;
    color:#000;
    background-color: #075680;
}
.form_box input[type="submit"]:hover{
    background:#05699f;
}
.error{
    display: block;
    font-weight: 700;
    font-size: 14px;
    color: red;
    display: none;
}
</style>
    <script>function validForm(){
//   alert("alert") 

var name = document.custom_form.name;
var email = document.custom_form.email;
var phone = document.custom_form.phone;
var subject = document.custom_form.subject;
var message = document.custom_form.message;
var conditions = document.custom_form.conditions;

if(name.value == ""){
    name.nextElementSibling.style.display = "block";
    name.style.border = "1px solid #f00";
    return false
}else{
    name.nextElementSibling.style.display = "none";
    name.style.border = "1px solid #f00";
}
if(email.value.match( /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,8}\b$/) || email.value == ""){
    email.nextElementSibling.style.display = "block";
    email.style.border = "1px solid #f00";
    return false
}else{
    email.nextElementSibling.style.display = "none";
    email.style.border = "1px solid #f00";
}
if(!phone.value.match( /^([0-9]{10})$/) || phone.value == ""){
    phone.nextElementSibling.style.display = "block";
    phone.style.border = "1px solid #f00";
    return false
}else{
    phone.nextElementSibling.style.display = "none";
    phone.style.border = "1px solid #f00";
}
if(subject.value == ""){
    subject.nextElementSibling.style.display = "block";
    subject.style.border = "1px solid #f00";
    return false
}else{
    subject.nextElementSibling.style.display = "none";
    subject.style.border = "1px solid #f00";
}
if(message.value == ""){
    message.nextElementSibling.style.display = "block";
    message.style.border = "1px solid #f00";
    return false
}else{
    message.nextElementSibling.style.display = "none";
    message.style.border = "1px solid #f00";
}
if(conditions.checked == false){
    conditions.nextElementSibling.style.display = "block";
    conditions.style.border = "1px solid #f00";
    return false
}else{
    conditions.nextElementSibling.style.display = "none";
    conditions.style.border = "1px solid #f00";
}
}</script>
  
</head>

<body>
    <form id="feedbackform" name="form1" method="post" action="database.php">
    <div class="container">
        <h3 class="text">&nbsp;Feedback Form</h3>
        <hr>
        <form name="custom_form" onsubmit="return validForm()" action="valid.html">
            <div class="form_box">
                <div class="input-row">
                    
                    <input type="text" placeholder="Name*" name="name"> 
                    <span class="error">Please enter your name </span>
                </div>
                <div class="input-row">
                    <input type="text" placeholder="Email*" name="email">
                    <span class="error">Please enter your email</span>
                </div>
                <div class="input-row">
                    <input type="text" placeholder="Phone*" name="phone">
                    <span class="error">Please enter your phone</span>
                </div>
                <div class="input-row">
                    <select name="subject">
                        <option value="">Subject*</option>
                        <option value="Design">Web Design</option>
                        <option value="Development">Web Development</option>
                        <option value="Marketing">Digital Marketing</option>
                    </select>
                    <span class="error">Please enter your subject</span>
                </div>
                <div class="input-row">
                   <textarea placeholder="Message" name="message"></textarea>
                    <span class="error">Please enter your message</span>
                </div>
                <div class="input-row">
                    <label class="check_label" for="conditions">Accept all terms and conditions</label>
                    <input type="checkbox" name="conditions" id="conditions">
                    <span class="error">Please accept all terms and conditions </span>
                </div>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    </form>
</body>
</html>