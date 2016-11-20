var xmlhttp; 
var url="Tnews.php";

function bd(id){
    return document.getElementById(id);
}

function loadXMLDoc(url){
    xmlhttp=null;
    if (window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }else if (window.ActiveXObject){
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }

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
            var obj=eval("("+xmlhttp.responseText+")");

            for(i=1;i<11;++i){
                document.getElementById("news"+i).innerHTML="·   "+obj.news[i-1];
            } 

        }else{
            alert("Problem retrieving XML data:" + xmlhttp.statusText);
        }
    }
}
loadXMLDoc(url);