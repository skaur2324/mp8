var fs = 1.5;

function petit(){
    fs = fs-0.5;
    document.getElementsByClassName("text").style.fontSize=(fs+"rem");  
    //alert(fs+"rem");
}

function mitja(){
    fs = fs;
    document.getElementsByClassName("text").style.fontSize=(fs+"rem");
    //alert(fs+"rem");   
}

function gran(){
    fs = fs+0.5;
    document.getElementsByClassName("text").style.fontSize=(fs+"rem"); 
    //alert(fs+"rem");
}

document.getElementById("petit").addEventListener('click', petit);
document.getElementById("mitja").addEventListener('click', mitja);
document.getElementById("gran").addEventListener('click', gran);










