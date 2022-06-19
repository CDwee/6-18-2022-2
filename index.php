<!-- Started at 8:42 6-18-2022 -->

html, body {
    padding:  0;
    margin: 0;
    height: 100%;
}

* {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    color: #fff;
}

#nowPlayingBarContainer {
    width: 100%;
    background-color: #282828;
    bottom: 0;
    position: fixed;
    min-width: 620px;
}

#nowPlayingBar {
    display: flex;
    height: 90px;
    padding: 16px;
    box-sizing: border-box;
}

#nowPlayingLeft,
#nowPlayingRight {
    width: 30%;
    min-width: 180px;
}

#nowPlayingRight {
    position: relative;
    margin-top: 16px;
}

#nowPlayingCenter {
    width: 40%;
    max-width: 700px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

#nowPlayingBar .content {
    width: 100%;
    height:  57px;
}

.playerControls .buttons {
    margin: 0 auto;
    display: table;
}

.controlButton {
    background-color: transparent;
    border: none;
    vertical-align: middle;
}

.controlButton img {
    width: 20px;
    height: 20px;
}

.controlButton.play img,
.controlButton.pause img {
    width: 32px;
    height: 32px;
}

.controlButton:hover {
    cursor: pointer;
}

.progressTime {
    color: #a0a0a0;
    font-size: 11px;
    min-width: 40px;
    text-align: center;
}

.playbackBar {
    display: flex;
}

.progressbar {
    width: 100%;
    height: 12px;
    display: inline-flex;
    cursor: pointer;
}

.progressBarBG {
    background-color: #404040;
    height: 4px;
    width: 100%;
    border-radius: 2px;
}

.progress {
    background-color: #a0a0a0;
    height: 4px;
    width: 0;
    border-radius: 2px;
}

.playbackBar .progressBar {
    margin-top: 3px;
}

#nowPlayingLeft .albumArtWork{
    height: 100%;
    max-width: 57px;
    margin-right: 15px;
    float: left;
    background-size: cover;
}

.trackInfo {
    display: table;
}

#nowPlayingLeft .trackInfo .trackName {
    margin: 6px 0;
    display: inline-block;
    width: 100%;
}

#nowPlayingLeft .trackInfo .artistName span {
    font-size: 12px;
    color: #a0a0a0;
}

.volumeBar {
    width: 180px;
    position: absolute;
    right: 0;
}

.volumeBar .progressBar {
    width: 125px;
}

#topContainer {
    min-height: 100%;
    width: 100%;
}

#navBarContainer {
    background-color: #000;
    width: 220px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
}

.navBar {
    padding: 25px;
    display: flex;
    flex-direction: column;
    -ms-flex-direction: column;
}

.logo {
    margin-bottom: 15px;
}

.logo img {
    width: 32px;
}

.navBar .group {
    border-top: 1px solid #a0a0a0;
    padding: 10px 0;
}

.navItem {
    padding: 10px 0;
    font-size: 14px;
    font-weight: 500;
    display: block;
    letter-spacing: 1px;
    position: relative;
}

.navItemLink {
    color: #a0a0a0;
    text-decoration: none;
}

.navItemLink:hover {
    color: #fff;
}

.navItemLink .icon {
    position: absolute;
    right: 0;
    top: 6px;
    width: 25px;
}

<?php
include("includes/config.php");

// session_destroy();

if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
    header("Location: register.php");
}

?>

<html>
<head>
    <title>Welcome to Slotify!</title>

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    
    <div id="mainContainer">
        
        <div id="topContainer">
            
            <div id="navBarContainer">
                <nav class="navBar">

                    <a href="index.php" class="logo">
                        <img src="assets/images/icons/logo.png">
                    </a>


                    <div class="group">
                        
                        <div class="navItem">
                            <a href="search.php" class="navItemLink">Search
                                <img src="assets/images/icons/search.png" class="icon" alt="Search">
                            </a>
                        </div>

                    </div>

                    <div class="group">
                        <div class="navItem">
                            <a href="browse.php" class="navItemLink">Browse</a>
                        </div>

                        <div class="navItem">
                            <a href="yourMusic.php" class="navItemLink">Your Music</a>
                        </div>

                        <div class="navItem">
                            <a href="profile.php" class="navItemLink">Carter Dixon</a>
                        </div>
                    </div>


                    

                </nav>
            </div>

        </div>

        <div id="nowPlayingBarContainer">

            <div id="nowPlayingBar">

                <div id="nowPlayingLeft">
                    <div class="content">
                        <span class="albumLink">
                            <img src="https://i.discogs.com/8ILgRvJEJB1WJJ4Ze2JMcJkXn3z25kKSjCXu5MYZx90/rs:fit/g:sm/q:90/h:600/w:599/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTIxMTgw/NC0xMzM3MTE0NTk4/LTg2NjUuanBlZw.jpeg" class="albumArtWork">
                        </span>

                        <div class="trackInfo">
                            
                            <span class="trackName">
                                <span>A view to a kill</span>
                            </span>

                             <span class="artistName">
                                <span>Duran Duran</span>
                            </span>

                        </div>



                    </div>
                </div>

                <div id="nowPlayingCenter">

                    <div class="content playerControls">

                        <div class="buttons">

                            <button class="controlButton shuffle" title="Shuffle button">
                                <img src="assets/images/icons/shuffle.png" alt="Shuffle">
                            </button>

                            <button class="controlButton previous" title="Previous button">
                                <img src="assets/images/icons/previous.png" alt="Previous">
                            </button>

                            <button class="controlButton play" title="Play button">
                                <img src="assets/images/icons/play.png" alt="Play">
                            </button>

                            <button class="controlButton pause" title="Pause button" style="display: none;">
                                <img src="assets/images/icons/pause.png" alt="Pause">
                            </button>

                            <button class="controlButton next" title="Next button">
                                <img src="assets/images/icons/next.png" alt="Next">
                            </button>

                            <button class="controlButton repeat" title="Repeat button">
                                <img src="assets/images/icons/repeat.png" alt="Repeat">
                            </button>
                            
                        </div>


                        <div class="playbackBar">
                            
                            <span class="progressTime current">0.00</span>

                            <div class="progressBar">
                                <div class="progressBarBG">
                                    <div class="progress"></div>
                                </div>
                            </div>

                            <span class="progressTime remaining">0.00</span>


                        </div>

                        
                    </div>


                    
                </div>

                <div id="nowPlayingRight">
                    <div class="volumeBar">
                        
                        <button class="controlButton volume" title="Volume button">
                            <img src="assets/images/icons/volume.png" alt="Volume">
                        </button>

                        <div class="progressBar">
                                <div class="progressBarBG">
                                    <div class="progress"></div>
                                </div>
                        </div>
                    </div>
                </div>



                
            </div>
        </div>

    </div>


</body>

</html>

<!-- Ended at 10:42 6-18-2022 -->
