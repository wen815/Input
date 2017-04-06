var xmlHttp;

function ajax(){
try{
    xmlHttp=new ActiveXObject();
} 
catch(e){
  xmlHttp=new XMLHttpRequest();    
}
run1();
}
function run1(){
    xmlHttp.onreadystatechange=write;
    url="PHP/get.php";
    xmlHttp.open("GET",url,true);
    xmlHttp.send();
}
function write(){
    if(xmlHttp.readyState==4&&xmlHttp.status==200){
        var list=document.getElementById("list");
        var xmlDoc=xmlHttp.responseText;
        list.innerHTML=xmlDoc;
    }
}
ajax();

