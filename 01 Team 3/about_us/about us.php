




<head>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style> 
    *{margin:0px;
        padding:0px;
        box-sizing:border-box;
    }
body{width:100%;}

.introduction{ 
background-image: url("images/wallpaperflare.com_wallpaper.jpg");
background-color:blue;
width:99vw;
height:100vh;
}
.introductiontext{
    color:white;
    width:10vw;
    font-size:1.2rem;
    position:absolute;
    top:25vh;
    left:15vw;
    line-height:2.5rem;
    font-family: 'Trebuchet MS', sans-serif;
    text-transform: capitalize;
    word-spacing:4px;
    text-shadow: 5px 5px 8px black, 0 0 25px blue, 0 0 35px darkblue;
}
.privilages{background-color:black; width:99vw;
height:60vh;
display:flex;
flex-direction:row;
 }
.card1,.card2,.card3,.card4{
width:20vw;
height:30vh;
border-top: 5px #0087ff solid;
border-radius:10px;
margin-top:10vh;
 margin-left:4vw;
background-color:white;
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
font-size:1.5rem;
font-weight:bolder;
color:#266e85;
text-align:center;}

.card1 >img {
    width:10vw;
height:10vh;
margin-bottom:2vh
}
.card2 >img {
    width:10vw;
height:10vh;
margin-bottom:2vh
}
.card3 >img {
    width:10vw;
height:10vh;
margin-bottom:2vh
}
.card4 >img {
    width:10vw;
height:10vh;
margin-bottom:2vh
}
.ourteam{
    display:flex;
    flex-direction:row;
    flex-wrap:wrap;
width:99vw;
justify-content:space-evenly;
background-color:#e6e6e6;
padding-bottom:10vh;
}
.member{display:flex;
flex-direction:row;
width:35vw;
height:40vh;
border:3px black solid;
align-items:center;
justify-content:space-around;
background-color:#ffff;
border-radius:20px;
margin-top:15vh;
font-size:1.3rem;

}
.description{
    display:flex;
    flex-direction:column;

}

.memberimg >img{
    width:10vw;
    height:20vh;
    border-radius:50%;
    
}
.job-title {
    color:grey
}
.membername{
    font-weight:bolder;
    color:#07293e;
}
.testimonials{
    display:flex;
    flex-direction:row;
    flex-wrap:wrap;
    width:99vw;
    background-color:black;
    justify-content:space-evenly
}
.user{
    display:flex;
    flex-direction:row;
    width:40vw;
    background-color:black;
    height:25vh;
    align-items:center;
    justify-content:space-evenly;

}
.userimg >img{
    width:8vw;
    height:19vh;
    border-radius:50%;
    border:15px solid #4285f4 ;

}
.usertestimony > p {
    color: white;
    margin-left:2vw
}
#user_name{color:#4285f4;
font-weight:bolder;}
.outro{
    font-size:2rem;
    color:darkblue;
    text-align:center;
    margin-top: 5vh;
    font-weight:bolder;
}
</style>
</head>
<body>
 <div class="introduction"> 
<span class="introductiontext"><h1>Our  job </h1>  is  to  keep  you   up   to  date  with  the  most  recent  fashion  styles  </span> 
</div> 
<div class="privilages">  
    
<div class="card1" ><img src="images/speedometer.svg"><p> FAST DELIVERY</p></div>  
<div class="card2" ><img src="images/check2-circle.svg"> <p> BEST OF QUALITY PRODUCTS</p> </div>  
<div class="card3" >  <img src="images/arrow-left-right.svg"><p> QUICK RESPONSE TO CUSTOMERS </p> </div>  
<div class="card4" > <img src="images/emoji-sunglasses.svg"> <p> GOOD LOOKING PRODUCTS </p> </div>  

</div>


<div class="ourteam">
<div class="member"><div class="memberimg"> <img src="images/man-avata.png"></div>  <div class="description"><p class="job-title"> creative leader</p> 
<p class="membername"> ALQassem Oweida</p> <p> </p> </div>   </div>    

<div class="member"><div class="memberimg"> <img src="images/femaleavatar.png"></div>  <div class="description">
    <p class="job-title"> sales manager</p> <p class="membername"> Doa'a Obiedat</p> <p> </p> </div>   </div> 

<div class="member"><div class="memberimg"> <img src="images/man-avata.png"></div>  <div class="description"><p class="job-title"> manager</p> 
<p class="membername"> Basel  Abu Saleem</p> <p> </p> </div>   </div>

<div class="member"><div class="memberimg"> <img src="images/man-avata.png"></div>  <div class="description"><p class="job-title"> cheif accountant</p> 
<p class="membername"> Emran Dabbas</p> <p> </p> </div>   </div>    

<div class="member"><div class="memberimg"> <img src="images/man-avata.png"></div>  <div class="description"><p class="job-title"> lead developer </p>
<p class="membername"> Osama Saaideh</p> <p> </p> </div>   </div>    
</div> 

<div class="testimonials">
<div class="user"> <div class="userimg"><img src="images/person1.png"> </div>  <div class="usertestimony"> <p>Thanks for the great service. Accessory buying is worth much more than I paid. I wish I would have thought of it first.

</p> <p id="user_name"> Umer Vinson </p>       </div></div>

<div class="user"> <div class="userimg"><img src="images/person2.png"> </div>  <div class="usertestimony"> <p>I recently purchased two watches. One for me one for my wife , they look aboslutely stunning.

</p> <p id="user_name"> Cooper Ferrell </p>       </div></div>
<div class="user"> <div class="userimg"><img src="images/person3.png"> </div>  <div class="usertestimony"> <p>everywhere I go people ask me about the name of the perfume I bought from you guys , THANK YOU SO MUCH
</p> <p id="user_name"> Kacy Shah </p>       </div></div>
<div class="user"> <div class="userimg"><img src="images/person4.png"> </div>  <div class="usertestimony"> <p>Purchased my watch here  last year no issues at all keep amazing accuracy fantastic watch … my advice buy a watch from this shop you’re getting the best …
</p> <p id="user_name"> Eleasha Robles </p>       </div></div>
<div class="user"> <div class="userimg"><img src="images/person5.png"> </div>  <div class="usertestimony"> <p> I had great experience with this particular store.great service , customer care really do their best to help !!!
</p> <p id="user_name"> Charlton Mann </p>       </div></div>
<div class="user"> <div class="userimg"><img src="images/person6.png"> </div>  <div class="usertestimony"> <p>Very probably THE best customer service experience I have ever had!, customers are guaranteed to be satisfied
</p> <p id="user_name"> Zane Golden </p>       </div></div>

</div> 

<p class="outro"> if you have any questions don't hesitate to conact us by clicking on this link <a href="#contactuspage link">CONTACT US  </a> </p>






</body>
</html>