<?php
include 'LoginCheck.php';
checkUser();
?>
<html>
<head>
    <title>User Profile | Single Students</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
</head>

<body>

<div class="wrapper">
    <!-- This wrapper will contain everything to keep it aligned -->
    <div id = "navbar">
        <ul>
            <li><a href = "UserProfile.php" />Profile <span class = "glyphicon glyphicon-user"></span></a></li>
            <li><a href = "EditProfile.php" />Edit Profile <span class = "glyphicon glyphicon-pencil"></span></a></li>
            <li><a href = "Matches.php" />Matches <span class = "glyphicon glyphicon-heart-empty"></span></a></li>
            <li><a href = "Requests.php" />Requests <span class = "glyphicon glyphicon-question-sign"></span></a></li>
            <li><a href = "Search.php" />Search <span class = "glyphicon glyphicon-search"></span></a></li>
            <ul style="float:right;list-style-type:none;">
                <li><img src = "images/logo-flat.png" height = "50"/></li>
                <li><a href = "Logout.php" />Logout <span class = "glyphicon glyphicon-log-out"></span></a></li>
            </ul>
        </ul>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="container col-xs-9">
            <!-- user-page-sizelock is just to hold a minimum size -->
            <div class="row user-page-borders user-page-sizelock">
                <h3 style="margin: 0px 0px 10px">$firstname $lastname</h3>
                <img class="col-xs-5 user-profile-pic" src="images/i02.png" alt="Semi decent photo" />


                <!-- This can be used to give information about the person.
                Or it can be their bio -->

                <!-- This has the gammiest workaround atm using break tags, might find a better way to list information with gap, perhaps a table. -->
                <div class="col-xs-4" style="border-right:1px solid grey">
                    Born on <br><br>
                    Goes to <br><br>
                    From <br><br><br>
                    Gender <br><br>
                    Seeking <br><br>
                    Likes <br><br><br><br><br><br>

                </div>
                <div class="col-xs-3">
                    <i>$date</i><br><br>
                    <i>$college</i><br><br>
                    <i>$town</i>,<br>
                    <i>$county</i><br><br>
                    <i>$sex</i><br><br>
                    <i>$preference</i><br><br>
                    <i>$likes1</i><br>
                    <i>$likes2</i><br>
                    <i>$likes3</i><br>
                    <i>$likes4</i><br>
                    <i>$likes5</i><br>
                </div>
            </div>

            <!-- **************Space below the first block************** -->
            <div class="row user-page-borders user-page-sizelock">
                <h3>Likes</h3>
                $like1 $like2 $like3 $like4 and $like5

                <h3>Other info?</h3>
                We have a lot of space and I am not sure what to fill it with
            </div>


        </div>
        <!-- ***************************************************************** -->
        <!-- Below this is the Sidebar, above is the users profile -->
        <div class="container col-xs-3">
            <div class="row user-page-borders">
                <h3>Suggested Matches</h3>
                <div class="container col-xs-12">

                    <div class="row">
                        <img class="suggested-userpic" src="images/i02.png" alt="Semi decent photo" />
                        <div class="">

                            <b>Tom Barret</b>
                            <br><i>From Cork, going to UL</i><br><br>
                            <i>"I can't believe I'm not butter, so smooth"</i> - <b>Jeezus</b>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <img class="suggested-userpic" src="images/i02.png" alt="Semi decent photo" />
                        <div class="suggested-textarea">

                            <b>Jay Conroy</b>
                            <br><i>From Cork, going to UL</i>
                            More random text to make sure the isn't a problem with the text cap on the profiles
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <img class="suggested-userpic" src="images/i02.png" alt="Semi decent photo" />
                        <div class="suggested-textarea">

                            <b>Jack Deegan</b>
                            <br><i>From Cork, going to UL</i>
                            <br>Bananas
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <img class="suggested-userpic" src="images/i02.png" alt="Semi decent photo" />
                        <div class="suggested-textarea">
                            <b>Will Flaherty</b>
                            <br><i>From Cork, going to UL</i>
                            <br>Also Likes: Dank Memes and Running
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <img class="suggested-userpic" src="images/i02.png" alt="Semi decent photo" />
                        <div class=" suggested-textarea">
                            <b>Will Flaherty</b>
                            <br><i>From Cork, going to UL</i>
                            <br>Also Likes: Hating on clones
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


</div>

<!-- jQuery file -->
<script src="js/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>