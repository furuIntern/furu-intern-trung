
function check(){
    var a = document.getElementById("form");
    var d = a.getElementsByClassName("alert");
    var x = 0;
    for (var i = 0; i < a.getElementsByTagName("INPUT").length; i++){
        a.getElementsByTagName("INPUT")[i].style.borderWidth = "2px";
        if( a.getElementsByTagName("INPUT")[i].getAttribute("class") !="unrequired" &&  a.getElementsByTagName("INPUT")[i].getAttribute("type") == "text"){
                if(a.getElementsByTagName("INPUT")[i].value == ""){
                a.getElementsByTagName("INPUT")[i].style.borderColor = "red";
                d[x].textContent = "This is required";
                } else {
                    a.getElementsByTagName("INPUT")[i].style.borderColor = "green";
                    d[x].textContent = "";
                }
                x++;
        } else{
            a.getElementsByTagName("INPUT")[i].style.borderColor = "green";
        }
    }    
    var b = document.getElementsByTagName("SELECT");
    for (var i = 0; i < b.length ; i++){
        if(b[i].options[b[i].selectedIndex].text == "Choose..."){
            b[i].style.borderColor = "red";
        }else{
            b[i].style.borderColor = "green";
        }
        b[i].style.borderWidth = "2px";
    }
    a.addEventListener("keydown",check);
}