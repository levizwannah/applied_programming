let email = document.getElementById("email");
let password = document.getElementById("password");

let submit = document.getElementById("submit");

submit.addEventListener("click", login);

function  login(){
    let input = [email.value, password.value];

    for(i = 0; i < input.length; i++){
        if(input[i].length == 0){
            alert("All fields required");
            return;
        }

        let formData = buildFormData({
            "email":input[0],
            "password": input[1]
        });

        makeRequest("../logic/login_logic.php", formData, function(json){
            if(json.status == "OK"){
                location.href = "../index.php";
            }
            else{
                alert(json.message);
            }
        });
    }
}