function pass(){

    if (document.getElementById("password").value != document.getElementById("repass").value){
        alert("Password does not matched");
        return false;
    }
  }
function back(){
  location.replace("../HTML/Edit page.html")
}