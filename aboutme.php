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

<div class="main_content" id="aboutmemain">
    <div>
        <p class="random">
   I am a Pre-final year student at
NIT Kurukshetra. I enjoying
solving coding, Algorithm Analysis
and competitive Programming
</p>
<p class="random1">
/ E D U C A T I O N H I S T O R Y<br/>
>> National Institute of Technology, Kurukshetra<br/>
7.8 CGPA up till the 4th semester<br/>
Btech Information Technology | July 2019 - June 2023<br/>
>> D H SR SEC SCHOOL DHABI TEK SINGH<br/>
86.6% in Senior Secondary Examination<br/>
All India Rank 7793 in Joint Entrance Examination (JEE)
Main 2019
</p>
<p class="random">
    <i style="color:blue">More about me..</i><br/>
    I am a self confident person, I spend my most of time in devloping my carrier.<br/>
    I am a commpetitve programmer enjoying solving challenging coding problem.<br/>
    CodeChef Rating:- 1654
    CodeChef profile Link<a href="https://www.codechef.com/users/wbhi_1_nain" style='text-decoration:none; padding:2px; background-color:skyblue; color:white; border-radius:5px;'>Click Here</a>

</p>
</div>
<h3>Area I am working in</h3>
<p class="random1">
/ C O M P E T E N C I E S<br/>
> Proficiency in C/C++<br/>
> Data Structures<br/>
> Algorithms<br/>
> Algorithm Analysis<br/>
> HTML & CSS<br/>
> JavaScript<br/>
> React.js<br/>
> PHP<br/>
> SQL
</p>
<div>
</div>
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
    setTimeout(() => {
        var x=document.getElementsByClassName("random");
        var y=document.getElementsByClassName("random1");
        for(let i=0;i<x.length;i++){
            x[i].style.opacity=1;
        }
        for(let i=0;i<y.length;i++)
        y[i].style.opacity=1;
    }, 3000);

    
</script>
</body>
</html>