<?php ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700;900&display=swap" rel="stylesheet"> 
</head>
<body>
    <div class="container">
        <div class="menu">
            <img id="logo" src="./img/Vector.png" alt="">
            <ul>
                <li id="home">Home</li>
                <li id="explore">Explore</li>
                <li id="notifications">Notifications</li>
                <li id="messages">Messages</li>
                <li id="bookmarks">Bookmarks</li>
                <li id="lists">
                    <img class="img" src="./img/1.png" alt="">
                    <img class="img" id="img" src="./img/2.png" alt="">
                    Lists</li>    
                <li id="profile">Profile</li>
                <li id="more">
                    <img class="img1" src="./img/4.png" alt="">
                    <img class="img1" id="img1" src="./img/3.png" alt="">
                    More</li> 
            </ul>
            <button>Tweet</button>
        </div>
        <main>
            <div class="header">
                <h1 id="star">Home</h1>
            </div>
            <div class="new-tweet">
                <p id="text-tweet">What's happening</p>
                <div class="box-icon">
                    <div class="mini-icon">
                        <img src="./img/aa (8).png" alt="">
                        <img src="./img/aa (7).png" alt="">
                        <img src="./img/aa (6).png" alt="">
                        <img src="./img/aa (5).png" alt="">
                    </div>
                    <div class="tweet-icon">
                        <img src="./img/aa (3).png" alt="">
                        <div id="line"></div>
                        <img src="./img/aa (4).png" alt="">
                        <img src="./img/k.png" alt="">
                    </div>
                </div>

            </div>
            <div class="tweet">
                <p class="two" id="icon3">Annie</p>
                <span class="three ml">@annie · 14s</span>
                <br>
                <span id="text">This is a tweet. It can be long, or short. Depends on what you have to say. It can have some hashtags too. <a href="">#likethis</a>  This is a tweet. It can be long, or short. Depends on what you have to say. It can have some hashtags too. <a href=""> #likethis</a> </span>
                <br>
                <img id="card" src="./img/54.png" alt="">
            </div>
            <div class="line-icon">
                <img style="margin-left: 35px;" src="./img/52.png" alt="">
                <img src="./img/53.png" alt="">
                <img src="./img/51.png" alt="">
                <img style="margin-right: 71px;" src="./img/55.png" alt="">
            </div>
        </main>
        <div class="box">
            <div class="input">
                <img id="p" src="./img/p.png" alt="">
                <input type="text" placeholder="Search Twitter">
            </div>
            <div class="news">
                <p id="title">Paris Trend</p>
                <div class="block">
                    <p class="one">1. Trending</p>
                    <p class="two">#JessieMueller</p>
                    <p class="three">456K Tweets</p>
                </div>
                <hr>
                <div class="block">
                    <p class="one">2. Trending</p>
                    <p class="two">#ThelmaJones</p>
                    <p class="three">456K Tweets</p>
                </div>
                <hr>
                <div class="block">
                    <p class="one">3. Trending</p>
                    <p class="two">#LoisPearson</p>
                    <p class="three">456K Tweets</p>
                </div>
                <hr>
                <div class="block">
                    <p class="one">4. Trending</p>
                    <p class="two">#WilmaBoyd</p>
                    <p class="three">456K Tweets</p>
                </div>
                <hr>
                <div class="block">
                    <p class="one">5. Trending</p>
                    <p class="two">#WilmaBoyd</p>
                    <p class="three">456K Tweets</p>
                </div>
                <hr>
                <div class="block">
                    <p class="one">6. Trending</p>
                    <p class="two">#ErikBaker</p>
                    <p class="three">456K Tweets</p>
                </div>
                <hr>
                <p id="show">Show more</p>
            </div>
            <div class="box-follow">
                <p id="title2">Who to follow</p>
                <div class="block-follow">
                    <img class="ava" src="./img/o.png" alt="">
                    <div class="text">
                        <p class="two" id="icon">McFly</p>
                        <p class="three">@levraimcfly</p>
                    </div>
                    <img class="follow" src="./img/CTA Secondary.png" alt="">
                </div>
                <hr>
                <div class="block-follow">
                    <img class="ava" src="./img/r.png" alt="">
                    <div class="text">
                        <p class="two" id="icon1">JohnDoe</p>
                        <p class="three">@jonhdoe</p>
                    </div>
                    <img class="follow" src="./img/CTA Secondary.png" alt="">
                </div>
                <hr>
                <div class="block-follow">
                    <img class="ava" src="./img/g.png" alt="">
                    <div class="text">    
                        <p class="two" id="icon2">Janis Joplin</p>
                        <p class="three">@realjanice</p>
                    </div>
                    <img class="follow" src="./img/CTA Secondary.png" alt="">
                </div>
                <hr>
                <p id="show">Show more</p>
                
            </div>
        </div>
    </div>
</body>
</html>