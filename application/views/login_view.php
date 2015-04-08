<!DOCTYPE HTML>
<html>
<head>
<title>NIT_Student</title>
<link rel="stylesheet" href="<?php echo base_url('../static/css/home.css'); ?>" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style>
#alt-1{
			-o-animation-name: color_change;
			-o-animation-delay: 0s;
			-o-animation-duration: 12s;
			-o-animation-iteration-count: infinite;
			-o-animation-play-state: running;
			-moz-animation-name: color_change;
			-moz-animation-delay: 0s;
			-moz-animation-duration: 12s;
			-moz-animation-iteration-count: infinite;
			-moz-animation-play-state: running;
			-webkit-animation-name: color_change;
			-webkit-animation-delay: 0s;
			-webkit-animation-duration: 12s;
			-webkit-animation-iteration-count: infinite;
			-webkit-animation-play-state: running;
			animation-name: color_change;
			animation-delay: 0s;
			animation-duration: 12s;
			animation-iteration-count: infinite;
			animation-play-state: running;
		}
		@-webkit-keyframes color_change{
			0%, 33% {color:white;}
			42% {color:blue;}
			50%, 100% {color:white;}
		}
		@-o-keyframes color_change{
			0%, 33% {color:white;}
			42% {color:blue;}
			50%, 100% {color:white;}
		}@-moz-keyframes color_change{
			0%, 33% {color:white;}
			42% {color:blue;}
			50%, 100% {color:white;}
		}@keyframes color_change{
			0%, 33% {color:white;}
			42% {color:blue;}
			50%, 100% {color:white;}
		}
		#alt-2{
			-o-animation-name: color_change2;
			-o-animation-delay: 0s;
			-o-animation-duration: 12s;
			-o-animation-iteration-count: infinite;
			-o-animation-play-state: running;
			-moz-animation-name: color_change2;
			-moz-animation-delay: 0s;
			-moz-animation-duration: 12s;
			-moz-animation-iteration-count: infinite;
			-moz-animation-play-state: running;
			-webkit-animation-name: color_change2;
			-webkit-animation-delay: 0s;
			-webkit-animation-duration: 12s;
			-webkit-animation-iteration-count: infinite;
			-webkit-animation-play-state: running;
			animation-name: color_change2;
			animation-delay: 0s;
			animation-duration: 12s;
			animation-iteration-count: infinite;
			animation-play-state: running;
		}
		@-webkit-keyframes color_change2{
			0%, 50% {color:white;}
			58% {color:blue;}
			67%, 100% {color:white;}
		}
		@-o-keyframes color_change2{
			0%, 50% {color:white;}
			58% {color:blue;}
			67%, 100% {color:white;}
		}@-moz-keyframes color_change2{
			0%, 50% {color:white;}
			58% {color:blue;}
			67%, 100% {color:white;}
		}@keyframes color_change2{
			0%, 50% {color:white;}
			58% {color:blue;}
			67%, 100% {color:white;}
		}
		#alt-3{
			-o-animation-name: color_change3;
			-o-animation-delay: 0s;
			-o-animation-duration: 12s;
			-o-animation-iteration-count: infinite;
			-o-animation-play-state: running;
			-moz-animation-name: color_change3;
			-moz-animation-delay: 0s;
			-moz-animation-duration: 12s;
			-moz-animation-iteration-count: infinite;
			-moz-animation-play-state: running;
			-webkit-animation-name: color_change3;
			-webkit-animation-delay: 0s;
			-webkit-animation-duration: 12s;
			-webkit-animation-iteration-count: infinite;
			-webkit-animation-play-state: running;
			animation-name: color_change3;
			animation-delay: 0s;
			animation-duration: 12s;
			animation-iteration-count: infinite;
			animation-play-state: running;
		}
		@-webkit-keyframes color_change3{
			0%, 67% {color:white;}
			75% {color:blue;}
			83%, 100% {color:white;}
		}
		@-o-keyframes color_change3{
			0%, 67% {color:white;}
			75% {color:blue;}
			83%, 100% {color:white;}
		}@-moz-keyframes color_change3{
			0%, 67% {color:white;}
			75% {color:blue;}
			83%, 100% {color:white;}
		}@keyframes color_change3{
			0%, 67% {color:white;}
			75% {color:blue;}
			83%, 100% {color:white;}
		}

		#alt-4{
			-o-animation-name: color_change4;
			-o-animation-delay: 0s;
			-o-animation-duration: 12s;
			-o-animation-iteration-count: infinite;
			-o-animation-play-state: running;
			-moz-animation-name: color_change4;
			-moz-animation-delay: 0s;
			-moz-animation-duration: 12s;
			-moz-animation-iteration-count: infinite;
			-moz-animation-play-state: running;
			-webkit-animation-name: color_change4;
			-webkit-animation-delay: 0s;
			-webkit-animation-duration: 12s;
			-webkit-animation-iteration-count: infinite;
			-webkit-animation-play-state: running;
			animation-name: color_change4;
			animation-delay: 0s;
			animation-duration: 12s;
			animation-iteration-count: infinite;
			animation-play-state: running;
		}
		@-webkit-keyframes color_change4{
			0%, 83% {color:white;}
			92% {color:blue;}
			100% {color:white;}
		}
		@-o-keyframes color_change4{
			0%, 83% {color:white;}
			92% {color:blue;}
			100% {color:white;}
		}@-moz-keyframes color_change4{
			0%, 83% {color:white;}
			92% {color:blue;}
			100% {color:white;}
		}@keyframes color_change4{
			0%, 83% {color:white;}
			92% {color:blue;}
			100% {color:white;}
		}
</style>
</head>

<body >
<div class="container">
<div class="row">
<div class="login">
 <form action="<?php echo base_url('/home/login_submit'); ?>" id="form" method="POST">
    Email id :&nbsp; <input type="text" name="email">
    Password :&nbsp; <input type="password" name="password">
    <input type="submit" value="Login">
 </form>
 </div >

</div>
<div class="row">
    <div class="col-xs-12 col-sm-6">
        <div class="row ques-row">
        <br/>
             <div class="questions">
			<span class="questions">Welcome to the Online Treasure Hunt</span></br>
             </div>
                 <div class="rul">
			<span id="alt-1">RULES</span><br/>
                 </div>
                 <ul>
                    <div class="rules">
                        <li><span id="alt-2" class="rules"> You will be presented with a difficult questions at every level</span><br/></li>
			<li><span id="alt-3" class="rules"> Find out the answers and be presented with a great reward!!</span><br/></li>
			<li><span id="alt-4" class="rules"> Enter your answer in lowercase and without spaces in between!</span><br/></li>
                    </div>
                </ul>
                </div>
		<div class="row advice">
                    <center>
			<span class="register-text">Get yourself registered as soon as possible</span><br/>
			<span class="register-txt">All the best :D</span><br/>
                    </center>
		</div>
    </div>
	<div class="col-xs-12 col-sm-6" id="registration">
            <div class="panel-transparent">
		<form action="<?php echo base_url('/home/register_submit'); ?>" method="post" name="registration">
                    <span class="row form-title">Register yourself now</span>
                    <div class="form-cont">
                        <div class="row form-group">
			<label class="col-xs-4 form-label">Your Name</label>
			<div class="col-xs-8 col-md-6 col-lg-6">
                            <span class="input-icon">
			<input class="form-input form-control" name="name" id="companyname" placeholder="Enter your name" required/>
                            <i class="fa fa-building"></i>
			</span>
			</div>

                        </div>
			<div class="row form-group">
                            <label class="col-xs-4 form-label">Your email ID</label>
				<div class="col-xs-8 col-md-6 col-lg-6">
                                    <span class="input-icon">
					<input class="form-input form-control" name="email" id="email" placeholder="Enter the email ID" required/>
						<i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-xs-4 form-label">Your Roll Number</label>
                                <div class="col-xs-8 col-md-6 col-lg-6">
                                    <span class="input-icon">
                                     <input class="form-input form-control" name="roll" id="designation" placeholder="Enter your Roll Number" required/>
                                        <i class="fa fa-bars"></i>
                                    </span>
				</div>
                        </div>
                        <div class="row form-group">
                            <label class="col-xs-4 form-label">Phone Number</label>
				<div class="col-xs-8 col-md-6 col-lg-6">
                                    <span class="input-icon">
					<input type="number" class="form-input form-control"  name="phone" id="phone" placeholder="Enter phone number" required/>

                                    </span>
                                </div>
                        </div>
			<div class="row form-group">
				<label class="col-xs-4 form-label">Password</label>
                                    <div class="col-xs-8 col-md-6 col-lg-6">
					<span class="input-icon">
                                            <input type="password" class="form-input form-control" name="password" id="password" placeholder="Enter password" required/>
						<i class="fa fa-lock"></i>
					</span>
                                    </div>
                        </div>
                        <div class="row form-group">
                        <label class="col-xs-4 form-label">Confirm Password</label>
                            <div class="col-xs-8 col-md-6 col-lg-6">
                                <span class="input-icon">
				<input type="password" class="form-input form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirm password" required/>
                                <i class="fa fa-lock"></i>
                                </span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-6" style="font-size: 16px;margin-top:10px;color:white;">
				<input type="checkbox" name="terms" required checked disabled/>&nbsp;I accept the <a target="_blank" href="terms.php">terms and conditions</a>.
                            </div>
                            <div class="col-xs-4">
				<input type="submit" id="reg_sub" name="register_submit" value="Submit" class="btn btn-etb btn-sub btn-lg btn-block"/>
                            </div>
			</div>
                        </div>
                      </form>
                 </div>
	</div>
    </div>
</div>
</body>
</html>