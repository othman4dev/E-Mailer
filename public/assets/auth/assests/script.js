var submit = document.getElementById('submit');
var registre = document.getElementById('registreSubmit');
submit?.addEventListener('click', function (){
    let form = document.forms["loginForm"];
    let email = form['email'];
    let password = form['password'];

    if(email.value!="" && password.value != ""){
        let res1 = validateEmail(email);
        let res2 = validatePassword(password,2);
        if(res1 && res2){
            const xhttp = new XMLHttpRequest();
            let data = {
                email: email.value,
                password: password.value,
            }
            let dataJson=JSON.stringify(data);
            let url = "/soutCrois/public/";
            xhttp.onload = function (){
                if(this.responseText=="successfuly"){
                    window.location="/soutCrois/public/";
                }else{
                    document.getElementById('errorLoginForm').innerHTML="Your email or password is incorrect. Please check your credentials and try again.";
                    document.getElementById('errorLoginForm').style.opacity="1";
                    validateMessage("errorMessage","Invalid email address. Please enter a valid email.",1);
                    validateMessage("errorMessage","Invalid password. Please enter a valid password.",2);
                }
                
            }
            xhttp.open('POST',url,true);
            xhttp.send(dataJson);
        }
    }else{
        if(email.value==""){
            validateMessage("errorMessage","Email cannot be empty. Please enter a valid email.",1);
            email.style.border="red 1px solid";
        }else validateEmail(email);

        if(password.value == ""){
            validateMessage("errorMessage","Password cannot be empty. Please enter a valid password.",2);
            password.style.border="red 1px solid";
        } else validatePassword(password,2);
    }
});
registre?.addEventListener('click', function (){
    let form = document.forms["registreForm"];
    let name = form['username'];
    let email = form['email'];
    let password = form['password'];

    if(email.value!="" && password.value != "" && name.value != ""){
        let res1 = validateEmail(email);
        let res2 = validatePassword(password,2);
        let res3 = validatePassword(name,3);
        if(res1 && res2 && res3){
            const xhttp = new XMLHttpRequest();
            let data = {
                username: name.value,
                email: email.value,
                password: password.value,
            }
            let dataJson=JSON.stringify(data);
            let url = "/soutCrois/public/login";
            xhttp.onload = function (){
                console.log(this.responseText);
                if(this.responseText=="successfuly"){
                    window.location="/soutCrois/public/login";
                }else{
                    document.getElementById('errorRegistreForm').innerHTML="The provided email already exists. Please use a different email address.";
                    document.getElementById('errorRegistreForm').style.opacity="1";
                    validateMessage("Invalid email address. Please enter a valid email.",1);
                    validateMessage("errorMessage","Invalid password. Please enter a valid password.",2);
                }
                
            }
            xhttp.open('POST',url,true);
            xhttp.send(dataJson);
        }
    }else{
        if(email.value==""){
            validateMessage("errorMessage","Email cannot be empty. Please enter a valid email.",1);
            email.style.border="red 1px solid";
        }else validateEmail(email);

        if(password.value == ""){
            validateMessage("errorMessage","Password cannot be empty. Please enter a valid password.",2);
            password.style.border="red 1px solid";
        } else validatePassword(password,2);
        
        if(name.value == ""){
            validateMessage("errorMessage","Name cannot be empty. Please enter a valid Name.",3);
            name.style.border="red 1px solid";
        } else validatePassword(name,3);
    }
});
function validatePassword(password,id){
    let passwordRegex = /^(?![^<>]*[<>])[a-zA-Z0-9_+-@]{1,16}$/;
    if(passwordRegex.test(password.value)){
        password.style.border="green 1px solid";
        document.getElementById("errorMessage"+id).style.opacity='0';
        return true;
    }
    else{
        validateMessage("errorMessage","Invalid",id);
        password.style.border="red 1px solid";
        return false;
    }
}
function validateEmail(Email){
    let emalRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if(emalRegex.test(Email.value)){
        Email.style.border="green 1px solid";
        document.getElementById("errorMessage1").style.opacity='0';
        return true;
    }else{
        validateMessage("errorMessage","Invalid email address. Please enter a valid email.",1);
        Email.style.border="red 1px solid";
        return false;
    }
}
function validateMessage(spanId,message,id){
    var spanIdi = document.getElementById(spanId+id);
    spanIdi.innerHTML =message;
    spanIdi.style.opacity ="1";
}