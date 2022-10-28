var vnum = function validateNum(){
    var num = document.enquiryform.number.value;
    if(num == "" || num == null){
        document.enquiryform.number.className = "highlight";
        return 0;
    }
    else{
        if(isNaN(num)){
            document.enquiryform.number.className = "highlight";
            return 0;
        }
        else{
            return 1;
        }
    }
}
var vnam = function validateName(){
    var nam = document.enquiryform.name.value;
    if(nam == "" || nam == null){
        document.enquiryform.name.className = "highlight";
        return 0;
    }
    else{
        var c = 1;
        for(var a = 0; a < nam.length; a++){
            for(var b = 0; b < 10; b++){
                if(nam.charAt(a) == b){
                    c = 0;
                }
            }
        }
        if(c == 0){
            document.enquiryform.name.className = "highlight";
        }
        return c;
    }
}
var vemail = function validateMail(){
    var email = document.enquiryform.emailaddress.value;
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");

    if(email == "" || email == null){
        document.enquiryform.emailaddress.className = "highlight";
        return 0;
    }
    else if(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length){
        document.enquiryform.emailaddress.className = "highlight";
        return 0;
    }
    else{
        return 1;
    }
}
var venquiry = function validateEnquiry(){
    var query = document.enquiryform.enquiry.value;

    if(query == "" || query == null){
        document.enquiryform.emailaddress.className = "highlight";
        return 0;
    }
    else{
        return 1;
    }
}
function validateForm(){
    if(vnum() == 0){
        alert("Invalid Entry in number field!!");
        return false;
    }
    else if (venquiry() == 0){
        alert("Invalid Entry in enquiry field!!");
        return false;
    }
    else if (vnam() == 0){
        alert("Invalid Entry in name field!!");
        return false;
    }
    else if (vemail() == 0){
        alert("Invalid Entry in mail field!!");
        return false;
    }

    else{
        alert("Successful)");
    }
}
function validateAdmin(){
    var unam = document.enquiryform.username.value;
    var pass = document.enquiryform.pword.value;

    if(unam === 'Character' && pass === '2708'){
        return true;
    }
    else{
        alert("Invalid password");
        return false;
    }
}
function showResponse(){
    document.getElementById('respo').className = "show"
}