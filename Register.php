<?php
include 'LoginCheck.php';
forHomeAndRegister();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Register | Single Students</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleReg.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/index.css" media="screen" title="no title" charset="utf-8">
    <!-- Optional theme-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

</head>

<body background = "images/Couple.jpg">
    <div class="container">
        <div class="row">
            <div class="headtext col-lg-12s">
                <img src="images/logo.png" alt="Single Students" />
            </div>
        </div>
        <div class="signuptext container">
            <div class="row">
                <h2 id="subtitle">
                        Register now<br/>to meet new students today!
                    </h2>
            </div>
			
			<div class="row">
                <div class="col-md-3">
					Forename
				</div>
				<div class="col-md-9 form-group">
					<input class="form-control" type="text" name="forename" placeholder="John">
                </div>
			</div>
			
			<div class="row">
                <div class="col-md-3">
					Surname
				</div>
				<div class="col-md-9 form-group">
					<input class="form-control" type="text" name="surname" placeholder="Doe">
                </div>
			</div>
			
            <div class="row">
                <div class="col-md-3">
					Username
				</div>
				<div class="col-md-9 form-group">
					<input class="form-control" type="text" name="username" placeholder="JohnDoe100">
                </div>
			</div>
			
			<div class="row">
                <div class="col-md-3">
					Password
				</div>
				<div class="col-md-9 form-group">
					<input class="form-control" type="password" name = "password1">
                </div>
			</div>
			
			
			<div class="row">
                <div class="col-md-3">
					Confirm Password
				</div>
				<div class="col-md-9 form-group">
					<input class="form-control" type="password" name = "password2">
                </div>
			</div>
			
			<div class="row">
                <div class="col-md-3">
					Student Email
				</div>
				<div class="col-md-9 form-group">
					<input class="form-control" type="email" name = "email" placeholder="studentNum@example.ie">
                </div>
			</div>
			
			<div class="row">
                <div class="col-md-3">
					I am
				</div>
                <div class="form-group col-xs-9">
                    <select class="form-control" id="sex">
                        <option value="blank"></option>
						<option value="mw">a man</option>
                        <option value="wm">a woman</option>
                    </select>
                </div>
			</div>
			
			<div class="row">
                <div class="col-md-3">
					Looking for
				</div>
                <div class="form-group col-xs-9">
                    <select class="form-control" id="sex">
                        <option value="blank"></option>
						<option value="mw">a man</option>
                        <option value="wm">a woman</option>
                    </select>
                </div>
			</div>
			
			
			
            <div class="row">
				<div class="col-md-3">
					DOB
				</div>
                <div class="form-group col-xs-3">
                    <select class="form-control" id="dob-day">
                        <option value="-">Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>

                    </select>

                </div>

                <div class="form-group col-xs-3">
                    <select class="form-control" id="dob-month">
                        <option value="-">Month</option>
                        <option value="1">Jan</option>
                        <option value="2">Feb</option>
                        <option value="3">Mar</option>
                        <option value="4">Apr</option>
                        <option value="5">May</option>
                        <option value="6">Jun</option>
                        <option value="7">Jul</option>
                        <option value="8">Aug</option>
                        <option value="9">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
					</select>
                </div>

                <div class="form-group col-xs-3">
                    <select class="form-control" id="dob-year">
                        <option value="-">Year</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                        <option value="1958">1958</option>
                        <option value="1957">1957</option>
                        <option value="1956">1956</option>
                        <option value="1955">1955</option>
                        <option value="1954">1954</option>
                        <option value="1953">1953</option>
                        <option value="1952">1952</option>
                        <option value="1951">1951</option>
                        <option value="1950">1950</option>

                    </select>
				</div>
			</div>
			
			<div class="row">
                <div class="col-md-3">
					College
				</div>
				<div class="col-md-9 form-group">
					<input class="form-control" type="text" name="college">
                </div>
			</div>
			
			<div class="row">
                <div class="col-md-3">
					City
				</div>
				<div class="col-md-9 form-group">
					<input class="form-control" type="text" name="city">
                </div>
			</div>
			
			<div class="row">
                <div class="col-md-3">
					Town
				</div>
				<div class="col-md-9 form-group">
					<input class="form-control" type="text" name="town">
                </div>
			</div>
			
			
			Credit Card Details:<br>
			<br>	<div class="row">
                        <div class="col-md-3">
                            Name on card
                        </div>
                        <div class="col-md-9 form-group">
                            <input class="form-control" type="text" name="cardname" placeholder="John Doe">
                        </div>
                    </div>
				
				<div class="row">
                        <div class="col-md-3">
                            Card Number
                        </div>
                        <div class="col-md-9 form-group">
                            <input class="form-control" type="text" name="cardnum">
                        </div>
                    </div>
					
				<div class="row">
                        <div class="col-md-3">
                            CVV
                        </div>
                        <div class="col-md-9 form-group">
                            <input class="form-control" type="text" name="cvv">
                        </div>
                    </div>
					
				<div class="row">
                        <div class="col-md-3">
                            Type
                        </div>
						<div class = "col-md-9 form-group">
							<select class="form-control" id="cardtype">
								<option value="blank"></option>
								<option value="v">Visa</option>
								<option value="d">MasterCard</option>
								<option value="d">Laser</option>
								<option value="d">Other</option>
							</select>
						</div>
				</div>
				
				<div class="row">
						<div class="col-md-3">
                            Expiry Date
                        </div>

                <div class="form-group col-xs-4">
                    <select class="form-control" id="exp-month">
                        <option value="-">Month</option>
                        <option value="1">January</option>
                        <option value="2">Febuary</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>

                    </select>
                </div>

                <div class="form-group col-xs-4">
                    <select class="form-control" id="exp-year">
                        <option value="-">Year</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                    </select>

                </div>
			</div>
			
			<div class="row">
                <div class="col-xs-12">
                    <button onclick="location.href = 'UserProfile.html';" class="btn btn-success index-btn" type="button" name="join">Join Now</button>
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