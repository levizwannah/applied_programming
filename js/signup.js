let firstName = document.getElementById("first-name");
let lastName = document.getElementById("last-name");
let email = document.getElementById("email");
let password = document.getElementById("password");
let confPassword = document.getElementById("conf-password");

let submitBtn = document.getElementById("submit");

submitBtn.addEventListener("click", register);

function register(){
    let allInput = [firstName, lastName, email, password, confPassword];

    for(i = 0; i < allInput.length; i++){
        if(allInput[i].value.length < 1){
            alert("No field should be empty");
            return;
        }
    }

    if(confPassword.value != password.value){
        alert("Password not match");
        return;
    }

    let formData = buildFormData({
        "first_name":firstName.value,
        "last_name": lastName.value,
        "email": email.value,
        "password": password.value,
        "conf_password": confPassword.value
    })

    makeRequest("../logic/form_logic.php", formData, function(json){
        if(json.status == "OK"){
            alert(json.message);
            location.href = "login.php";
        }
        else{
            alert(json.message);
        }
    });
}
