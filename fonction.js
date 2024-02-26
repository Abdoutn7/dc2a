function alpha(ch){
    ch=ch.toUpperCase();
    test=true;
    i=0;
    while((i<ch.lenght)||(test==true)){
        if((ch.charAt(i)<"A")||(ch.charAt(i)>"Z")||(ch=="")){
            test=false;
        }
        i++
    }
    return test;
}

function() {
    date=document.getElementById("date").value;
    exep=document.getElementById("exep").value;
    dist=document.getElementById("dist").value;
    i=document.getElementById("depart").selectedIndex;
    j=document.getElementById("arrivee").selectedIndex;
    poids=document.getElementById("poids").value;
    check=document.getElementById("express").checked;
    tel=document.getElementById("tel").value;
    if(date==""){
        alert("verifier votre date");
    }
    else if ((exep==dist)||(!alpha(exep))(!alpha(dist))){
        alert("veuiller verifier votre destinateur ou expediteur");
    }
    else if((poids<1)){
        alert("verifier votre poids");
    }
    else if((tel.charAt(0)!="9","5","2","4")){
        alert("veuiller verifier votre tel");
    }
    else if(!(document.getElementById("express").checked)){
        alert("confirmer!!")
    }
    else{
        f1.submit();
    }

}