<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Replica</title>
    <link rel="stylesheet" href="stylePage.css">
    <link rel="stylesheet" href="login-style.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <!--Header Nav-->
    <header>
        <div class="container">
            <ul class="header-nav">
                <a class="header-menu" href="Spotify-login v1.0/User/user.html"><img class = "header-logo" src="imgs/Spotify_Logo_CMYK_White.png"></a>
                <a class="header-menu" href="https://www.spotify.com/us/premium/">Premium</a>
                <a class="header-menu" href="https://support.spotify.com/us/">Support</a>
                <a class="header-menu" href="https://www.spotify.com/us/download/windows/">Download</a>
                <a class="divider">|</a>
                <div class="dropdown">
                    <button class="profile-menu"><img class="profile-icon-top" src="imgs/profile-icon-top.svg">Profile
                        <i class="arrow down"></i></button>
                </div>
            </ul>
        </div>
    </header>

    <section class="main">
        <div class="wrapper">
            <div class="mtxt">
                <div>
                    <h1>
                        Get 3 months of Premium for free
                    </h1>
                </div>
                <div>
                    <h2>Enjoy ad-free music, offline listening, and more. Cancel anytime.</h2>
                </div>
                <div class="button">
                    Get 3 Months Free
                </div>
                <div>
                    <p id="smol">
                        Individual plan only. Only $9.99/month after. Offer not available to users who already tried
                        Premium.<a href="https://www.spotify.com/legal/premium-promotional-offer-terms%22%3E">Terms
                            and conditions apply.</a>Offer ends Dec 31, 2020.
                    </p>
                </div>
            </div>
            <div class="mimage">
            </div>   
        </div>
    </section>
    
    <div class="sideNav">
        <div class="wrap">
            <div class="vertical-menu">
                <img class="profile-icon" src="imgs/profile-icon.png">
                <hr style="border: 0.1px solid rgb(32, 32, 32); border-top: none;">
                <a href="accountOverview.php" class="active">Account overview</a>
                <hr style="border: 0.1px solid rgb(32, 32, 32); border-top: none;">
                <a href="edit_profile.html">Edit profile</a>
                <hr style="border: 0.1px solid rgb(32, 32, 32); border-top: none;">
                <a href="#">Change password</a>
                <hr style="border: 0.1px solid rgb(32, 32, 32); border-top: none;">
                <a href="#">Notification settings</a>
                <hr style="border: 0.1px solid rgb(32, 32, 32); border-top: none;">
                <a href="#">Privacy settings</a>
                <hr style="border: 0.1px solid rgb(32, 32, 32); border-top: none;">
                <a href="#">Recover playlists</a>
                <hr style="border: 0.1px solid rgb(32, 32, 32); border-top: none;">
                <a href="#">Receipts</a>
                <hr style="border: 0.1px solid rgb(32, 32, 32); border-top: none;">
                <a href="#">Apps</a>
                <hr style="border: 0.1px solid rgb(32, 32, 32); border-top: none;">
                <a href="#">Redeem</a>
                <hr style="border: 0.1px solid rgb(32, 32, 32); border-top: none;">
              </div>
        </div> 

    <div class="account-page">
        <div class="content-container">
            <h1 class="Section-title">Account overview</h1>
            <h3>Profile</h3>
            <table>
                <tr>
                    <th>Username</th>
                    <td><label value="Username">
                        <?php 
                                echo $_SESSION['username']; 
                            ?>
                    </label></td>
                </tr> 
                <tr>
                    <th>Email</th>
                    <td><label value="Email">
                        <?php 
                                echo $_SESSION['email'];
                            ?>
                    </label></td> 
                </tr>
                <tr>
                    <th>Date of birth</th>
                    <td><label value="Date-of-birth">
                        <?php 
                                echo $_SESSION['date_of_birth'];
                            ?>
                    </label></td>
                </tr>
                <tr>
                    <th>Country or region</th>
                    <td><label value="country-or-region">
                        <?php 
                                echo $_SESSION['country_or_region'];
                            ?>
                    </label></td>
                </tr>
            </table>
            <div class="edit-profile-btn">
                <!-- changed href="account.html" to "edit_profile.html" -->
                <a class="edit-btn" href="edit_profile.html">EDIT PROFILE</a>
            </div>
        </div>
    </div>
    </div>





    <footer>
        <div class="footer-container">
            <div class="footer-child"><a href="index.html"><img src="imgs/Spotify_Logo_CMYK_White.png"></a></div>
            <div class="footer-child">
                <ul class="footer-nav">
                    <p>COMPANY</p>
                    <a class="footer-menu" href="#">About</a>
                    <a class="footer-menu" href="#">Jobs</a>
                    <a class="footer-menu" href="#">For the Record</a>
                </ul>
            </div>
            <div class="footer-child">
                <ul class="footer-nav">
                    <p>COMMUNITIES</p>
                    <a class="footer-menu" href="#">For Artists</a>
                    <a class="footer-menu" href="#">Developers</a>
                    <a class="footer-menu" href="#">Advertising</a>
                    <a class="footer-menu" href="#">investors</a>
                    <a class="footer-menu" href="#">Vendors</a>
                </ul>
            </div>
            <div class="footer-child">
                <ul class="footer-nav">
                    <p>USEFUL LINKS</p>
                    <a class="footer-menu" href="#">Support</a>
                    <a class="footer-menu" href="#">Web Player</a>
                    <a class="footer-menu" href="#">Free Mobile App</a>
                    <a class="footer-menu" href="#">2020 Wrapped</a>
                </ul>
            </div>
        </div>
        <!--footer at the very bottom-->
        <div class="footer-bot">
            <ul class="footer-info">
                <a class="footer-legal" href="#">Legal</a>
                <a class="footer-legal" href="#">Privacy Center</a>
                <a class="footer-legal" href="#">Privacy Policy</a>
                <a class="footer-legal" href="#">Cookies</a>
                <a class="footer-legal" href="#">About Ads</a>
                <a class="footer-legal" href="#">Additional CA Privacy Disclosures</a>
                <div class="Region">
                    <a class="Region-text" href="#">USA
                        <img class="us-flag" src="imgs/usflag.png"></a>
                    <p>@2020 Spotify AB</p>
                </div>
                                
            </ul>
        </div>
        
        
    </footer>
</body>
</html>
