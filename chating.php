<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="stylinghome.css">
<script>
const cars={"react":"I worked a lot on React.js.Its not bad to call my self a professional in React.js devloper.you can visit one of my project<br/><a target='_blank' href='https://github.com/nainabhi20/covid19' style='text-decoration:none; padding:2px; background-color:skyblue; color:white; border-radius:5px;'>Click Here</a> to see my project"}
function f1(){
    document.getElementById("innertext").innerHTML=cars["react"];
    document.getElementById("pop_off").style.display="block";
    if(window.innerWidth<500){
        document.getElementById("pop_off").style.left="2rem";
        document.getElementById("pop_off").style.width="30rem";
    }
    const element = document.querySelector('#pop_off');
    const style = getComputedStyle(element);
  let I1=setInterval(() => {
      
        val=parseFloat(style.opacity);
        if(val==0.8){
            clearInterval(I1);
        }else{
            val=val+0.01;
            document.getElementById("pop_off").style.opacity=val.toString();
        }
    }, 5);


}

function f2(){
    const element = document.querySelector('#pop_off');
    const style = getComputedStyle(element);
  let I1=setInterval(() => {
        val=parseFloat(style.opacity);
        if(val==0){
            clearInterval(I1);
            document.getElementById("pop_off").style.left="30%";
        document.getElementById("pop_off").style.width="40rem";
            document.getElementById("pop_off").style.display="none";
        }else{
            val=val-0.01;
            document.getElementById("pop_off").style.opacity=val.toString();
        }
    }, 5);
}
</script>
</head>
<body>
<div class="navbar">
<div class="icon">
<img src="profile_img.jpg" alt="Girl in a jacket" width="50rem" height="50rem" id="profile_img">
    </div>
    <a href="portfolio.php" class="link" id="home">Home</a>
    <a href="aboutme.php" class="link" id="about">About me</a>
    <a href="profile" class="link" id="profile">Profile</a>
    <a href="contact.php" class="link" id="contact">CONTACT</a>
</div>

<div class="main_content">
<div id="main_content1">
<h4 id="hello">HELLO Looking for a sde</h4>
<h1>I'm Abhishek</h1>
<h1>I'm software developer</h1>
<a class="hireme" id="hiring" href="chating.php" style=" position:absolute; top:5rem; left:20%;"> Hire Me</a>

</div>
<div class="main_content2">
<div>
    <img src="software-engineer.jpg" width="50%" height="50%"/>
</div>
<div id="para">
    <p>You can contact me here:
        email:-<i style="color:blue;">abhisheknain1200@gmail.com</i>
        <br/>
        <a href="https://mail.google.com"> click here</a><br/>
        phone no:- 9991361402
    </p>
</div>
<a class="button" href="open_resume.php">See My resume</a>
</div>
</div>


<div class="corner">
    
</div>
<script>
    var to=setTimeout(() => {
        document.getElementById('about').style.visibility='visible';
        document.getElementById('profile').style.visibility='visible';
        document.getElementById('contact').style.visibility='visible';
        document.getElementsByClassName("corner")[0].style.visibility='visible';

    }, 1000);
    setTimeout(() => {
        document.getElementById("hiring").style.opacity=1;
    }, 5000);
    
</script>
</body>
</html>