<!DOCTYPE html>
<html>
    <head>
        
        <style>
            body{
                margin:0px;
                padding:0px;
            }
            h1{

                margin:0px;
                background-color: grey;
                color:white;
                text-align:center;
            }
            h3{
                background-color: grey;
                color:white;
                text-align:center;
            }
            ::placeholder{
                color:blue;
            }
            @keyframes anim1 {
                0%{
                   transform: scale(0);
                }
                100%{
                   transform: scale(1);
                }
            }
            form{
                padding:20px;
                background-color:grey;
                animation-name:anim1;
                animation-duration:1s;
                animation-iteration-count:1;
            }
            button{
                color:white;
                background-color:blue;
                border-radius:5px;
                padding:5px;
                transition : all 1s;
            }
            button:hover{
                color:blue;
                background-color:white;
            }
            input{
                border-radius:3px;
            
            }
        </style>
</head>
    <body>
        <h1>
<?php

echo "Hello world";

?>
</h1>
<h3>Find max of out of 3 number</h3>
<form>

<input type="number" placeholder="Enter number1" id="num1"/><br/><br/>
<input type="number" placeholder="Enter number2" id="num2"/><br/><br/>
<input type="number" placeholder="Enter number3" id="num3"/><br/><br/>
<button id="but1">Find ans</button>

</form>
<h1 id="ans"></h1>
<h3>Find even or odd</h3>
<form>

<input type="number" placeholder="Enter number1" id="val1"/><br/><br/>
<button id="but2">Find ans</button>

</form>
<h1 id="ans2"></h1>
<h3>String operations</h3>
<form>

<input type="text" placeholder="Enter any string" id="tex"/><br/><br/>
<button id="but3">Find ans</button>

</form>
<h1 id="ans3"></h1>
<script>
     document.getElementById("but1").addEventListener("click",function(event){
         event.preventDefault();
         var xhr=new XMLHttpRequest();
         xhr.onreadystatechange=function(){
             if(this.readyState==4&&this.status==200){
                 
                 document.getElementById("ans").innerHTML=xhr.responseText;
             }
         }
         let a,b,c;
         a= document.getElementById("num1").value;
         b= document.getElementById("num2").value;
         c= document.getElementById("num3").value;
         xhr.open("post","findmax.php?num1="+a+"&num2="+b+"&num3="+c,true);
         xhr.send();
     });    
     document.getElementById("but2").addEventListener("click",function(event){
         event.preventDefault();
         var xhr=new XMLHttpRequest();
         xhr.onreadystatechange=function(){
             if(this.readyState==4&&this.status==200){
                 
                 document.getElementById("ans2").innerHTML=xhr.responseText;
             }
         }
         let a,b,c;
         a= document.getElementById("val1").value;
         xhr.open("post","findeven.php?num1="+a,true);
         xhr.send();
     });    
     document.getElementById("but3").addEventListener("click",function(event){
         event.preventDefault();
         var xhr=new XMLHttpRequest();
         xhr.onreadystatechange=function(){
             if(this.readyState==4&&this.status==200){
                 
                 document.getElementById("ans3").innerHTML=xhr.responseText;
             }
         }
         let a;
         a= document.getElementById("tex").value;
         xhr.open("post","string.php?num1="+a,true);
         xhr.send();
     });    
 </script>
</body>
</html>
