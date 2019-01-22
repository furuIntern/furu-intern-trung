
function check(){
    var a = document.getElementById("form");
    for (var i = 0; i < a.getElementsByTagName("INPUT").length; i++){
        a.getElementsByTagName("INPUT")[i].style.borderColor = a.getElementsByTagName("INPUT")[i].value != "" ? "green" : "red"
    }    
    var b = document.getElementsByTagName("SELECT");
    for (var i = 0; i < b.length ; i++){
        if(b[i].options[b[i].selectedIndex].text == "Choose..."){
            b[i].style.borderColor = "red";
        }else{
            b[i].style.borderColor = "green";
        }
    }
    var c = document.getElementsByClassName("unrequired");
    for(var i = 0; i < c.length; i++){
        c[i].style.borderColor = "green";
    }

}