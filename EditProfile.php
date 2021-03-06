<?php
include 'LoginCheck.php';
checkUser();
?>
<html>
<head>
    <title>Edit Profile| Single Students</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/index.css" media="screen" title="no title" charset="utf-8">
	
</head>

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

<body background = "images/Couple.jpg">
    <div class="container">
        <div class="signuptext container">	
<h2>Your account</h2>
			<div class="row">
				<div class="col-md-4">
					Name
				</div>
				<div class="col-md-8 form-group">
					<input class="form-control" type="text" name="name" id = "name">
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					Password
				</div>
				<div class="col-md-8 form-group">
					<input class="form-control" type="password" name="paswword" id = "password">
				</div>
			</div>

            <div class="row">
				<div class="col-md-4">
					Confirm Password
				</div>
				<div class="col-md-8 form-group">
					<input class="form-control" type="password" name="paswword" id = "confirmPassword">
				</div>
			</div>
					
			<div class="row">
				<div class="col-md-4">
					I am looking for
				</div>
				<div class="col-md-8 form-group">
					<select name="sex" id="preference" class="optionlist form-control">
						<option value="blank"></option>
						<option value="m">a man</option>
						<option value="f">a woman</option>
					</select>
				</div>
			</div>
                
<h2>Hobbies, Likes & Interests</h2>
			<div class="row">
				<div class="col-md-5">
					Hobby/Like/Interest 1
				</div>
				<div class="col-md-7 form-group">
					<select name="hobby2" id="hobby2" class="optionlist form-control">
						<option value="blank"></option>
						<option value="americanfootball">American Football</option>
						<option value="art">Art</option>
						<option value="athletics">Athletics</option>
						<option value="badminton">Badminton</option>
						<option value="basketball">Basketball</option>
						<option value="camping">Camping</option>
						<option value="climbing">Climbing</option>
						<option value="clubbing">Clubbing</option>
						<option value="coding">Coding</option>
						<option value="cricket">Cricket</option>
						<option value="cycling">Cycling</option>
						<option value="dance">Dance</option>
						<option value="diving">Driving</option>
						<option value="drama">Drama</option>
						<option value="driving">Driving</option>
						<option value="eating">Eating</option>
						<option value="fashion">Fashion</option>
						<option value="fishing">Fishing</option>
						<option value="frisbee">Frisbee</option>
						<option value="gaa">GAA</option>
						<option value="gaming">Gaming</option>				
						<option value="golf">Golf</option>
						<option value="handball">Handball</option>
						<option value="hiking">Hiking</option>
						<option value="hockey">Hockey</option>
						<option value="horseriding">Horseriding</option>
						<option value="kayaking">Kayaking</option>
						<option value="movies">Movies</option>
						<option value="music">Music</option>
						<option value="netball">Netball</option>
						<option value="netflix">Netflix</option>
						<option value="reading">Reading</option>
						<option value="rugby">Rugby</option>
						<option value="running">Running</option>
						<option value="singing">Singing</option>
						<option value="skateboarding">Skateboarding</option>
						<option value="skiing">Skiing</option>	
						<option value="soccer">Soccer</option>
						<option value="socializing">Socializing</option>
						<option value="surfing">Surfing</option>
						<option value="swimming">Swimming</option>
						<option value="tennis">Tennis</option>
						<option value="walking">Walking</option>
                    </select>
				</div>
			</div>

			<div class="row">
				<div class="col-md-5">
					Hobby/Like/Interest 2
				</div>
				<div class="col-md-7 form-group">
					<select name="hobby2" id="hobby2" class="optionlist form-control">
						<option value="blank"></option>
						<option value="americanfootball">American Football</option>
						<option value="art">Art</option>
						<option value="athletics">Athletics</option>
						<option value="badminton">Badminton</option>
						<option value="basketball">Basketball</option>
						<option value="camping">Camping</option>
						<option value="climbing">Climbing</option>
						<option value="clubbing">Clubbing</option>
						<option value="coding">Coding</option>
						<option value="cricket">Cricket</option>
						<option value="cycling">Cycling</option>
						<option value="dance">Dance</option>
						<option value="diving">Driving</option>
						<option value="drama">Drama</option>
						<option value="driving">Driving</option>
						<option value="eating">Eating</option>
						<option value="fashion">Fashion</option>
						<option value="fishing">Fishing</option>
						<option value="frisbee">Frisbee</option>
						<option value="gaa">GAA</option>
						<option value="gaming">Gaming</option>				
						<option value="golf">Golf</option>
						<option value="handball">Handball</option>
						<option value="hiking">Hiking</option>
						<option value="hockey">Hockey</option>
						<option value="horseriding">Horseriding</option>
						<option value="kayaking">Kayaking</option>
						<option value="movies">Movies</option>
						<option value="music">Music</option>
						<option value="netball">Netball</option>
						<option value="netflix">Netflix</option>
						<option value="reading">Reading</option>
						<option value="rugby">Rugby</option>
						<option value="running">Running</option>
						<option value="singing">Singing</option>
						<option value="skateboarding">Skateboarding</option>
						<option value="skiing">Skiing</option>	
						<option value="soccer">Soccer</option>
						<option value="socializing">Socializing</option>
						<option value="surfing">Surfing</option>
						<option value="swimming">Swimming</option>
						<option value="tennis">Tennis</option>
						<option value="walking">Walking</option>
                    </select>
				</div>
			</div>                   

			<div class="row">
				<div class="col-md-5">
					Hobby/Like/Interest 3
				</div>
				<div class="col-md-7 form-group">
					<select name="hobby2" id="hobby2" class="optionlist form-control">
						<option value="blank"></option>
						<option value="americanfootball">American Football</option>
						<option value="art">Art</option>
						<option value="athletics">Athletics</option>
						<option value="badminton">Badminton</option>
						<option value="basketball">Basketball</option>
						<option value="camping">Camping</option>
						<option value="climbing">Climbing</option>
						<option value="clubbing">Clubbing</option>
						<option value="coding">Coding</option>
						<option value="cricket">Cricket</option>
						<option value="cycling">Cycling</option>
						<option value="dance">Dance</option>
						<option value="diving">Driving</option>
						<option value="drama">Drama</option>
						<option value="driving">Driving</option>
						<option value="eating">Eating</option>
						<option value="fashion">Fashion</option>
						<option value="fishing">Fishing</option>
						<option value="frisbee">Frisbee</option>
						<option value="gaa">GAA</option>
						<option value="gaming">Gaming</option>				
						<option value="golf">Golf</option>
						<option value="handball">Handball</option>
						<option value="hiking">Hiking</option>
						<option value="hockey">Hockey</option>
						<option value="horseriding">Horseriding</option>
						<option value="kayaking">Kayaking</option>
						<option value="movies">Movies</option>
						<option value="music">Music</option>
						<option value="netball">Netball</option>
						<option value="netflix">Netflix</option>
						<option value="reading">Reading</option>
						<option value="rugby">Rugby</option>
						<option value="running">Running</option>
						<option value="singing">Singing</option>
						<option value="skateboarding">Skateboarding</option>
						<option value="skiing">Skiing</option>	
						<option value="soccer">Soccer</option>
						<option value="socializing">Socializing</option>
						<option value="surfing">Surfing</option>
						<option value="swimming">Swimming</option>
						<option value="tennis">Tennis</option>
						<option value="walking">Walking</option>
                    </select>
				</div>
			</div>

			<div class="row">
				<div class="col-md-5">
					Hobby/Like/Interest 4
				</div>
				<div class="col-md-7 form-group">
					<select name="hobby2" id="hobby2" class="optionlist form-control">
						<option value="blank"></option>
						<option value="americanfootball">American Football</option>
						<option value="art">Art</option>
						<option value="athletics">Athletics</option>
						<option value="badminton">Badminton</option>
						<option value="basketball">Basketball</option>
						<option value="camping">Camping</option>
						<option value="climbing">Climbing</option>
						<option value="clubbing">Clubbing</option>
						<option value="coding">Coding</option>
						<option value="cricket">Cricket</option>
						<option value="cycling">Cycling</option>
						<option value="dance">Dance</option>
						<option value="diving">Driving</option>
						<option value="drama">Drama</option>
						<option value="driving">Driving</option>
						<option value="eating">Eating</option>
						<option value="fashion">Fashion</option>
						<option value="fishing">Fishing</option>
						<option value="frisbee">Frisbee</option>
						<option value="gaa">GAA</option>
						<option value="gaming">Gaming</option>				
						<option value="golf">Golf</option>
						<option value="handball">Handball</option>
						<option value="hiking">Hiking</option>
						<option value="hockey">Hockey</option>
						<option value="horseriding">Horseriding</option>
						<option value="kayaking">Kayaking</option>
						<option value="movies">Movies</option>
						<option value="music">Music</option>
						<option value="netball">Netball</option>
						<option value="netflix">Netflix</option>
						<option value="reading">Reading</option>
						<option value="rugby">Rugby</option>
						<option value="running">Running</option>
						<option value="singing">Singing</option>
						<option value="skateboarding">Skateboarding</option>
						<option value="skiing">Skiing</option>	
						<option value="soccer">Soccer</option>
						<option value="socializing">Socializing</option>
						<option value="surfing">Surfing</option>
						<option value="swimming">Swimming</option>
						<option value="tennis">Tennis</option>
						<option value="walking">Walking</option>
                    </select>
				</div>
			</div>			
			
			<div class="row">
				<div class="col-md-5">
					Hobby/Like/Interest 5
				</div>
				<div class="col-md-7 form-group">
					<select name="hobby2" id="hobby2" class="optionlist form-control">
						<option value="blank"></option>
						<option value="americanfootball">American Football</option>
						<option value="art">Art</option>
						<option value="athletics">Athletics</option>
						<option value="badminton">Badminton</option>
						<option value="basketball">Basketball</option>
						<option value="camping">Camping</option>
						<option value="climbing">Climbing</option>
						<option value="clubbing">Clubbing</option>
						<option value="coding">Coding</option>
						<option value="cricket">Cricket</option>
						<option value="cycling">Cycling</option>
						<option value="dance">Dance</option>
						<option value="diving">Driving</option>
						<option value="drama">Drama</option>
						<option value="driving">Driving</option>
						<option value="eating">Eating</option>
						<option value="fashion">Fashion</option>
						<option value="fishing">Fishing</option>
						<option value="frisbee">Frisbee</option>
						<option value="gaa">GAA</option>
						<option value="gaming">Gaming</option>				
						<option value="golf">Golf</option>
						<option value="handball">Handball</option>
						<option value="hiking">Hiking</option>
						<option value="hockey">Hockey</option>
						<option value="horseriding">Horseriding</option>
						<option value="kayaking">Kayaking</option>
						<option value="movies">Movies</option>
						<option value="music">Music</option>
						<option value="netball">Netball</option>
						<option value="netflix">Netflix</option>
						<option value="reading">Reading</option>
						<option value="rugby">Rugby</option>
						<option value="running">Running</option>
						<option value="singing">Singing</option>
						<option value="skateboarding">Skateboarding</option>
						<option value="skiing">Skiing</option>	
						<option value="soccer">Soccer</option>
						<option value="socializing">Socializing</option>
						<option value="surfing">Surfing</option>
						<option value="swimming">Swimming</option>
						<option value="tennis">Tennis</option>
						<option value="walking">Walking</option>
                    </select>
				</div>
			</div>
                
<h2>Personality Traits</h2>
                    <div class="row">
                        <div class="col-md-4">
                            Trait 1
                        </div>
                        <div class="col-md-8 form-group">
                            <select name="t1" id="trait1" class="optionlist form-control">
                                <option value="blank"></option>
								<option value="adventurous">Adventurous</option>
								<option value="ambitious">Ambitious</option>
								<option value="charismatic">Charismatic</option>
								<option value="charming">Charming</option>
								<option value="clever">Clever</option>
								<option value="clumsy">Clumsy</option>
								<option value="confident">Confident</option>
								<option value="enthuasiastic">Enthuasiastic</option>
								<option value="friendly">Friendly</option>
								<option value="fun">Fun</option>
								<option value="funny">Funny</option>
								<option value="generous">Generous</option>
								<option value="happy">Happy</option>
								<option value="hardworking">Hardworking</option>
								<option value="kind">Kind</option>
								<option value="lazy">Lazy</option>
								<option value="optimistic">Optimistic</option>
								<option value="outgoing">Outgoing</option>
								<option value="quiet">Quiet</option>
								<option value="relaxed">Relaxed</option>
								<option value="smart">Smart</option>
								<option value="stylish">Stylish</option>
								<option value="trustworthy">Trustworthy</option>
								<option value="witty">Witty</option>
							</select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            Trait 2
                        </div>
                        <div class="col-md-8 form-group">
                            <select name="t2" id="trait2" class="optionlist form-control">
                                <option value="blank"></option>
								<option value="adventurous">Adventurous</option>
								<option value="ambitious">Ambitious</option>
								<option value="charismatic">Charismatic</option>
								<option value="charming">Charming</option>
								<option value="clever">Clever</option>
								<option value="clumsy">Clumsy</option>
								<option value="confident">Confident</option>
								<option value="enthuasiastic">Enthuasiastic</option>
								<option value="friendly">Friendly</option>
								<option value="fun">Fun</option>
								<option value="funny">Funny</option>
								<option value="generous">Generous</option>
								<option value="happy">Happy</option>
								<option value="hardworking">Hardworking</option>
								<option value="kind">Kind</option>
								<option value="lazy">Lazy</option>
								<option value="optimistic">Optimistic</option>
								<option value="outgoing">Outgoing</option>
								<option value="quiet">Quiet</option>
								<option value="relaxed">Relaxed</option>
								<option value="smart">Smart</option>
								<option value="stylish">Stylish</option>
								<option value="trustworthy">Trustworthy</option>
								<option value="witty">Witty</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            Trait 3
                        </div>
                        <div class="col-md-8 form-group">
                            <select name="t3" id="trait3" class="optionlist form-control">
                                <option value="blank"></option>
								<option value="adventurous">Adventurous</option>
								<option value="ambitious">Ambitious</option>
								<option value="charismatic">Charismatic</option>
								<option value="charming">Charming</option>
								<option value="clever">Clever</option>
								<option value="clumsy">Clumsy</option>
								<option value="confident">Confident</option>
								<option value="enthuasiastic">Enthuasiastic</option>
								<option value="friendly">Friendly</option>
								<option value="fun">Fun</option>
								<option value="funny">Funny</option>
								<option value="generous">Generous</option>
								<option value="happy">Happy</option>
								<option value="hardworking">Hardworking</option>
								<option value="kind">Kind</option>
								<option value="lazy">Lazy</option>
								<option value="optimistic">Optimistic</option>
								<option value="outgoing">Outgoing</option>
								<option value="quiet">Quiet</option>
								<option value="relaxed">Relaxed</option>
								<option value="smart">Smart</option>
								<option value="stylish">Stylish</option>
								<option value="trustworthy">Trustworthy</option>
								<option value="witty">Witty</option>
                            </select>
                        </div>
                    </div>
                		
<h2>Physical attributes</h2>
                    <div class="row">
                        <div class="col-md-4">
                            Eye colour
                        </div>
                        <div class="col-md-8 form-group">
                            <select name="eyes" id="eyes" class="optionlist form-control">
                                <option value="blank"></option>
				<option value="brown">Brown</option>
                                <option value="blue">Blue</option>
                                <option value="green">Green</option>
                                <option value="grey">Grey</option>
                                <option value="hazel">Hazel</option>
                                <option value="olive">Olive</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            Hair colour
                        </div>
                        <div class="col-md-8 form-group">
                            <select name="haircolour" id="hair" class="optionlist form-control">
                                <option value="blank"></option>
				<option value="black">Black</option>
                                <option value="brown">Brown</option>
                                <option value="darkbrown">Dark Brown</option>
                                <option value="lightbrown">Light Brown</option>
                                <option value="blond">Blond</option>
                                <option value="darkblond">Dark Blond</option>
                                <option value="lightblond">Light Blond</option>
				<option value="strawberryblond">Strawberry Blond</option>
                                <option value="red">Red</option>
                                <option value="dyed">Dyed</option>
                                <option value="bald">Bald</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            Skin tone
                        </div>
                        <div class="col-md-8 form-group">
                            <select name="skintone" id="skin" class="optionlist form-control">
                                <option value="blank"></option>
								<option value="vfair">Very Fair</option>
                                <option value="fair">Fair</option>
                                <option value="olive">Olive</option>
                                <option value="sblack">Brown/Black</option>
                            </select>
                        </div>
                    </div>
					
		<div class="row">
                        <div class="col-md-4">
                            Body type
                        </div>
                        <div class="col-md-8 form-group">
                            <select name="bodytype" id="bodytype" class="optionlist form-control">
                                <option value="blank"></option>
				<option value="slim">Slim</option>
				<option value="skinny">Skinny</option>
                                <option value="athletic">Athletic</option>
                                <option value="muscular">Muscular</option>
                                <option value="large">Large</option>
                                <option value="chubby">Chubby</option>
                                <option value="average">Average</option>
                                <option value="fit">Fit</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            Height (cm)
                        </div>
						<div class="col-md-8 form-group">
                            <input class="form-control" type="number" name="height" id = "height">
                        </div>
                    </div>
                
<h2>Location</h2>
                    <div class="row">
                        <div class="col-md-4">
                            College
                        </div>
                        <div class="col-md-8 form-group">
                            <select name="college" id="college" class="optionlist form-control">
                                <option value="blank"></option>
								<option value="ul">UL</option>
                                <option value="lit">LIT</option>
                                <option value="ucc">UCC</option>
                                <option value="ucd">UCD</option>
                                <option value="dcu">DCU</option>
                                <option value="cit">CIT</option>
                                <option value="dit">DIT</option>
                                <option value="gmit">GMIT</option>
                                <option value="ucg">UCG</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            County
                        </div>
                        <div class="col-md-8 form-group">
                            <select name="county" id="county" class="optionlist form-control">
                                <option value="blank"></option>
								<option value="antrim">Antrim</option>
                                <option value="armagh">Armagh</option>
                                <option value="carlow">Carlow</option>
                                <option value="cavan">Cavan</option>
                                <option value="clare">Clare</option>
                                <option value="cork">Cork</option>
                                <option value="derry">Derry</option>
                                <option value="donegal">Donegal</option>
                                <option value="down">Down</option>
                                <option value="dublin">Dublin</option>
                                <option value="fermanagh">Fermanagh</option>
                                <option value="galway">Galway</option>
                                <option value="kerry">Kerry</option>
                                <option value="kildare">Kildare</option>
                                <option value="kilkenny">Kilkenny</option>
                                <option value="laois">Laois</option>
                                <option value="leitrim">Leitrim</option>
                                <option value="limerick">Limerick</option>
                                <option value="longford">Longford</option>
                                <option value="louth">Louth</option>
                                <option value="mayo">Mayo</option>
                                <option value="meath">Meath</option>
                                <option value="monaghan">Monaghan</option>
                                <option value="offaly">Offaly</option>
                                <option value="roscommon">Roscommon</option>
                                <option value="sligo">Sligo</option>
                                <option value="tipperary">Tipperary</option>
                                <option value="tyrone">Tyrone</option>
                                <option value="waterford">Waterford</option>
                                <option value="westmeath">Westmeath</option>
                                <option value="wexford">Wexford</option>
                                <option value="wicklow">Wicklow</option>
                            </select>
                        </div>
                    </div>
					
					<div class="row">
                        <div class="col-md-4">
                            Town
                        </div>
                        <div class="col-md-8 form-group">
                            <input class="form-control" type="text" name="town" id = "town">
                        </div>
                    </div>

<h2>Bio</h2>
                    <div class="row">
                        <div class="col-md-4">
                            Tell us about yourself. This will be seen by other users.
                        </div>
                        <div class="col-md-8 form-group">
                            <textarea class="form-control" rows="6" id="bio" name="bio"></textarea>
                        </div>
                    </div>
					
					<div class="row">
						<div class="col-xs-12">
							<button onclick="location.href = 'UserProfile.html';" class="btn btn-success index-btn" type="button" name="join">Submit</button>
						</div>
					</div>
		</div>
    </div>
			
	<!-- jQuery file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>

</html>
