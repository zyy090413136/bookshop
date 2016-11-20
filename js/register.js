var xmlhttp; 
var url="Tregister.php";

function bd(id){
    return document.getElementById(id);
}

function check(){
    if (bd("xing").value!=""&&bd("ming").value!=""&&bd("email").value!=""&&bd("id").value!=""&&bd("passwd").value!=""&&bd("passwdd").value!=""&&bd("passwd2").value!=""){
        if (bd("passwd").value==bd("passwd2").value) loadXMLDoc(url);
            else bd("respond").innerHTML="两次密码不一致";
    }else{
        bd("respond").innerHTML="*号项不能为空";
    }
}

function loadXMLDoc(url){
    xmlhttp=null;
    if (window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }else if (window.ActiveXObject){
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }

    var url_change=url+"?xing="+bd("xing").value+"&ming="+bd("ming").value+"&email="+bd("email").value+"&id="+bd("id").value+"&passwd="+bd("passwd").value+"&passwd2="+bd("passwd2").value;

    if (xmlhttp!=null){
        xmlhttp.onreadystatechange=state_Change; 
        xmlhttp.open("GET",url_change,true);
        xmlhttp.send();  
    }else{
        alert("Your browser does not support XMLHTTP.");
    }
}

function state_Change(){
    if (xmlhttp.readyState==4){
        if (xmlhttp.status==200){
            var obj=xmlhttp.responseText;
            console.log(obj);

            if (obj=="1") bd("respond").innerHTML="注册成功!";
                else if (obj=="2") bd("respond").innerHTML="该用户已存在!";

        }else{
            alert("Problem retrieving XML data:" + xmlhttp.statusText);
        }
    }
}
//loadXMLDoc(url);