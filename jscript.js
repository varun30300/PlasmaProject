
function clickHome(){
    var disp = document.getElementById("home");
    var toHide1 = document.getElementById("about");
    var toHide2 = document.getElementById("form");
    var toHide3 = document.getElementById("inprogress");

    disp.style.display = "block";
    toHide1.style.display = "none";
    toHide2.style.display = "none";
    toHide3.style.display = "none";

}  

function clickAbout(){
    var disp = document.getElementById("about");
    var toHide1 = document.getElementById("home");
    var toHide2 = document.getElementById("form");
    var toHide3 = document.getElementById("inprogress");

    disp.style.display = "block";
    toHide1.style.display = "none";
    toHide2.style.display = "none";
    toHide3.style.display = "none";   
} 

function clickForm(){
    var disp = document.getElementById("form");
    var toHide1 = document.getElementById("about");
    var toHide2 = document.getElementById("home");
    var toHide3 = document.getElementById("inprogress");

    disp.style.display = "block";
    toHide1.style.display = "none";
    toHide2.style.display = "none";
    toHide3.style.display = "none";    
} 

function clickInprogress(){
    var disp = document.getElementById("inprogress");
    var toHide1 = document.getElementById("about");
    var toHide2 = document.getElementById("form");
    var toHide3 = document.getElementById("home");

    disp.style.display = "block";
    toHide1.style.display = "none";
    toHide2.style.display = "none";
    toHide3.style.display = "none";
} 


function validateform(){
    var fname = document.donor.firstname.value;
    var lname = document.donor.lastname.value;
    var age = document.donor.age.value;
    var email = document.donor.email.value;
    var phone = document.donor.phone.value;
    var address = document.donor.address.value;
    var date = document.donor.cured.value;

    var email_regex = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/ ;
    
    if (fname=="" || lname=="" || age=="" || email=="" || phone=="" || address=="" || date=="" ){
        alert("ALERT !! There is an empty field !")
		return false;
    }


    if (!email.match(email_regex)){
        alert("ALERT !! Enter a valid email address !")
        return false;
    }
}