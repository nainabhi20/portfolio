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
    <p> I am a competitive programer enjoy the solving challenging problem and Now I am searching for a job</p>
</div>
<a class="button" href="open_resume.php">See My resume</a>
</div>
</div>


<div class="corner">
    
</div>
<div id="footer">
    <div class="card">
        <img src="reactlogo.jpg" width="100%" height="80%" style="border-radius:5px;"/>
        <p id="react.js" style="font-size:1.5rem;margin:0;padding:0;">React.js<p>
            <button class="learn" onclick="f1()">Learn More</button>
    </div>
    <div class="card">
        <img src="androidstudio.png" width="100%" height="80%" style="border-radius:5px;"/>
        <p id="react.js" style="font-size:1.5rem;margin:0;padding:0;">Android Studio<p>
            <button class="learn" onclick="f1()">Learn More</button>
    </div>
    <div class="card">
        <img src="cpp.png" width="100%" height="80%" style="border-radius:5px;"/>
        <p id="react.js" style="font-size:1.5rem;margin:0;padding:0;">C++<p>
            <button class="learn" onclick="f1()">Learn More</button>
    </div>
    <div class="card">
        <img src="htmlcss.jpg" width="100%" height="80%" style="border-radius:5px;"/>
        <p id="react.js" style="font-size:1.5rem;margin:0;padding:0;">HTML & CSS<p>
            <button class="learn" onclick="f1()">Learn More</button>
    </div>
    <div class="card">
        <img src="javascript.jpg" width="100%" height="80%" style="border-radius:5px;"/>
        <p id="react.js" style="font-size:1.5rem;margin:0;padding:0;">JavaScript<p>
            <button class="learn" onclick="f1()">Learn More</button>
    </div>
    <div class="card">
        <img src="phps.jpg" width="100%" height="80%" style="border-radius:5px;"/>
        <p id="react.js" style="font-size:1.5rem;margin:0;padding:0;">PHP<p>
            <button class="learn" onclick="f1()">Learn More</button>
    </div>
    <div class="card">
        <img src="mysql.png" width="100%" height="80%" style="border-radius:5px;"/>
        <p id="react.js" style="font-size:1.5rem;margin:0;padding:0;">MYSQL<p>
            <button class="learn" onclick="f1()">Learn More</button>
    </div>
    <div class="card">
        <img src="firebase.jpg" width="100%" height="80%" style="border-radius:5px;"/>
        <p id="react.js" style="font-size:1.5rem;margin:0;padding:0;">Firebase<p>
            <button class="learn" onclick="f1()">Learn More</button>
    </div>
</div>
<div id="pop_off">
    <div class="cover">
    <p id="cross" onclick="f2()">+</p>
    <p id="innertext" style="color:white;margin:1rem"></p>
    </div>
    
</div>
<div id="last">
    <div style="margin:2rem;">
        <h2>You can follow me on:-</h2>
        <a  style="margin-left:1rem;" href="https://www.instagram.com/nain_abhi_2.0/"><img class="follow" src="insta.jpg" width="25px" height="25px"/></a>
        <a style="margin-left:1rem;" href="https://twitter.com/Abhishe65582124"><img class="follow" src="twitter.png" width="25px" height="25px"/></a>
        <a style="margin-left:1rem;" href="https://www.facebook.com/abhi.nain.9279"><img class="follow" src="facebook.png" width="25px" height="25px"/></a>
    </div>
    <h2 style="color:white; margin-left:5px;">You can contact me on:-</h2>
    <p style="color:white; margin-left:5px;">Email:- abhisheknain1200@gmail.com</p>
    <p style="color:white; margin-left:5x;">Phone no:- 9991361402</p>
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