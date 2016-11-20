var xmlhttp; 

function bd(id){
    return document.getElementById(id);
}

function loadbuy(numb){
    xmlhttp=null;
    if (window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }else if (window.ActiveXObject){
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }

    var url="buy.php?id="+numb;

    if (xmlhttp!=null){
        xmlhttp.onreadystatechange=state_Change; 
        xmlhttp.open("GET",url,true);
        xmlhttp.send();  
    }else{
        alert("Your browser does not support XMLHTTP.");
    }
}

function loadzan(numb){
    xmlhttp=null;
    if (window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }else if (window.ActiveXObject){
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }

    var url="zan.php?id="+numb;

    if (xmlhttp!=null){
        xmlhttp.onreadystatechange=state_Change; 
        xmlhttp.open("GET",url,true);
        xmlhttp.send();  
    }else{
        alert("Your browser does not support XMLHTTP.");
    }
}

function state_Change(){
    if (xmlhttp.readyState==4){
        if (xmlhttp.status==200){

        }else{
            alert("Problem retrieving XML data:" + xmlhttp.statusText);
        }
    }
}