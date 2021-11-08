function Pass(){
    if (document.getElementById("newpass").value != document.getElementById("repass").value){
        document.getElementById("error").innerHTML = "*Password does not matched";
    }
    return false;
}