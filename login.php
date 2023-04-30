<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StudyBuddyFinder</title>
    <script src="js/uikit.js"></script>
</head>

    <body>

	<nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="login.php">Login In</a></li>
            <li><a href="signup.php">Sign Up</a></li>
        </ul>
    </nav>

	<div class="uk-width-1-1">
		<div class="uk-container">
			<div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
				<div class="uk-width-1-1@m">
					<div class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
						<h3 class="uk-card-title uk-text-center">Welcome back!</h3>
						<form action ="validation.php" method= "post" >
							<div class="uk-margin">
							<div>
									<input type="text" name="username" placeholder="Enter username">
								</div>
							</div>

							<div>
								<input type="text" name="password" placeholder="Enter password">	
								</div>
							<div class="uk-text-small uk-text-center">
								Not registered? <a href="#">Create an account</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

        
        
    </body>
</html>