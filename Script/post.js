/*Ctrl+Enter to create request*/
function keySend(event) {
if (event.ctrlKey && event.keyCode === 13) {
 createXmlHttpRequest();
}
}

/*Ajax to write the text into database*/
var xmlHttp;
  function  createXmlHttpRequest(){
   try{
       xmlHttp=new ActiveXObject();
   }  
   catch(e){
  xmlHttp=new XMLHttpRequest();       
   }
   run();
}
function run(){
   var text=document.getElementById("t1").value;
   if(text==""){
       alert("The text area should not be empty. Please write down your comment.");
   }
url="PHP/post.php?text="+text;
xmlHttp.open("POST",url,true);
xmlHttp.send();
clear();
}
/*Clear the content in the textarea*/
function clear(){ 
document.getElementById("t1").value="";   
}
