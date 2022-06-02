let groupName = document.getElementById("group-name-add");

let addGroupBtn = document.getElementById("add-group-btn");

addGroupBtn.addEventListener("click", addGroup);

function addGroup(){
    if(groupName.value.length == 0){
        alert("group name cannot be empty");
        return;
    }

    let formData = buildFormData(
        {
            "group_name":groupName.value
        }
    )

    makeRequest("./logic/group/add.php", formData, function(json){
        if(json.status == "OK"){
            alert(json.message);
            location.reload();
        }
        else{
            alert(json.message);
        }
    });
}