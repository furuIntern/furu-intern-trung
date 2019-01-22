
function check(){
    var x = document.getElementsByClassName("name");
    for (var j = 0; j < x.length; j++){
        var y = x[j].getElementsByTagName("INPUT");
        for (var i = 0; i < y.length; i++){
            if(y[i].getAttribute("type") == "text" )
            y[i].style.borderColor = (y[i].value != "" ? "green" : "red");
        }
    }    
}