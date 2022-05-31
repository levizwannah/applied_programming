async function makeRequest(url = '', formData, callback = null) {

    // Default options are marked with *
    const response = await fetch(url, {
      method: 'POST',
      body: formData
    });

    const json = await response.json();
    handleError(json);

    if(callback){
        callback(json);
        return;
    }
    
    return json;
}

function handleError(json){
    switch(json.status){
        case "NLIE":
            {
                location.href = "login.php";
                break;
            }
        default:
            {

            }
    }
}

/**
 * 
 * @param {object} data - an associative array for key: data 
 */
function buildFormData(data){
    let formData = new FormData();

    for (const key in data) {
        formData.append(key, data[key]);
    }

    return formData;
}

