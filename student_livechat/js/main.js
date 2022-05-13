 function validation()
 {
     var form = document.getElementById("form");
     var email= document.getElementById("email").value;
     var text = document.getElementById("text0");
     var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

     if(email.match(pattern))
     {
         form.classList.add("valid");
         form.classList.remove("invalid");
         text.innerHTML ="Your Email Address in Valid";
         text.style.color ="#00ff00";
     }
     else
     {
         form.classList.remove("valid");
         form.classList.add("invalid");
         text.innerHTML ="Please Enter Valid Email Address";
         text.style.color ="#ff0000";
     }

          if(email == "")
     {
         form.classList.remove("valid");
         form.classList.remove("invalid");
         text.innerHTML ="";
         text.style.color ="#00ff00";
     }
 }

document.querySelectorAll('.input-container')
                .forEach((element, index) => {
                        element.addEventListener('focusin', () => {
                                element.classList.add('active');
                        });
                        element.addEventListener('focusout', () => {
                                if(element.querySelector('.input').value === ""){
                                        element.classList.remove('active');
                                }
                        })
                });


var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");


myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}


myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}


myInput.onkeyup = function() {

    var lowerCaseLetters = /[a-z]/g;
    if(myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
    } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
    }


    var upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
    } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
    }


    var numbers = /[0-9]/g;
    if(myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
    } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
    }


    if(myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
    }
}


