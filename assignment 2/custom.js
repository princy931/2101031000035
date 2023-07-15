function validForm(){
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
}