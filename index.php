<!DOCTYPE html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="css/reboot.css" />
    <link type="text/css" rel="stylesheet" href="css/grid.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <title>Ticketing</title>
</head>
<body>
    <header>
        <div class="container">
            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 50 50">
                <path fill="currentColor" d="M 25 2 C 12.309295 2 2 12.309295 2 25 C 2 37.690705 12.309295 48 25 48 C 37.690705 48 48 37.690705 48 25 C 48 12.309295 37.690705 2 25 2 z M 25 4 C 36.609824 4 46 13.390176 46 25 C 46 36.609824 36.609824 46 25 46 C 13.390176 46 4 36.609824 4 25 C 4 13.390176 13.390176 4 25 4 z M 25.183594 15.501953 C 21.348594 15.501953 18.769531 17.588922 18.769531 20.669922 C 18.769531 23.246922 20.190656 24.730547 23.472656 25.560547 L 25.798828 26.164062 C 28.300828 26.793062 29.433594 27.773312 29.433594 29.320312 C 29.433594 31.118313 27.634313 32.4375 25.195312 32.4375 C 22.617312 32.4375 20.806297 31.231031 20.529297 29.332031 L 18.242188 29.332031 C 18.481187 32.463031 21.134422 34.501953 24.982422 34.501953 C 29.132422 34.501953 31.759766 32.376922 31.759766 29.044922 C 31.759766 26.378922 30.250234 24.919563 26.490234 23.976562 L 24.591797 23.472656 C 22.088797 22.830656 21.095703 22.01475 21.095703 20.59375 C 21.095703 18.75775 22.693422 17.550781 25.107422 17.550781 C 27.371422 17.550781 28.90475 18.656578 29.21875 20.517578 L 31.494141 20.517578 C 31.306141 17.587578 28.691594 15.501953 25.183594 15.501953 z"></path>
            </svg>
            <span>ServiceMillion</span>
        </div>
    </header>

    <div class="container">
        <div class="items">
            <div class="item self">
                <div class="header">
                    <span class="name">Chow Khai Bin</span>
                    <span class="datetime">Yesterday at 10.30pm</span>
                </div>
                <p class="body">Hello Restaurant Ali. I really wanted to try your foods but I have a question. May I know what is your working hours? I tried to Google it but still can't find it. Thanks :)</p>
            </div>
            <div class="item">
                <div class="header">
                    <span class="name">Agent (Jeffrey Tan)</span>
                    <span class="datetime">Yesterday at 10.36pm</span>
                </div>
                <p class="body">Good morning Mr Chow Khai Bin.
                    Our restaurant is open Everyday from 8am until 10pm.</p>
            </div>
            <div class="item self">
                <div class="header">
                    <span class="name">Chow Khai Bin</span>
                    <span class="datetime">Today at 8.13am</span>
                </div>
                <p class="body">Thanks for your information. I will visit your restaurant today~</p>
            </div>
            <div class="item">
                <div class="header">
                    <span class="name">Agent (Jeffrey Tan)</span>
                    <span class="datetime">Today at 8.34am</span>
                </div>
                <p class="body">Glad that we helped. Please don't hesitate to contact us again if you got any problems.

                    Regards
                    Jeffery Tan</p>
            </div>
        </div>

        <form class="comment">
            <textarea class="input" placeholder="Type your message..." rows="4"></textarea>
            <input class="submit" type="button" value="Reply">
        </form>
    </div>
</body>
</html>

<?php
