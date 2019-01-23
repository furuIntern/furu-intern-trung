
function check(){
    var form = document.getElementById("form");
    var required = form.getElementsByClassName("required");
    var alert = form.getElementsByClassName("alert");
    for (var i= 0; i < required.length;i++){
        if(required[i].value.trim() == 0){
            alert[i].textContent = "This is required";
            required[i].style.borderColor = "red";
        }else{
            alert[i].textContent = "";
            required[i].style.borderColor = "green";
        }
    }
    var address2 = document.getElementById("address2");
    address2.style.borderColor = "green";
    var select = document.getElementsByTagName('select');
    for(var i = 0; i < select.length; i++){
        if(select[i].value == 'unchoiced'){
            select[i].style.borderColor= 'red';
        } else {
            select[i].style.borderColor= 'green';
        }
    }    
    /**Check email by email expression */
    var email = document.getElementById("email");
    var alertEm = document.getElementById("email-alert");
    var emex = /^[a-z].+@[a-z 0-9]{2,}(\.[a-z 0-9]{2,})+$/i;
    if(emex.test(email.value)){
        email.style.borderColor = "green";
        alertEm.textContent = "";
    }else{
        email.style.borderColor = "red";
        alertEm.textContent = "This is required";
    }
}
function start(){
    check();
    var form = document.getElementById("form");
    form.addEventListener("keydown",check);
    form.addEventListener("change",check);
}