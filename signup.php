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
            <li><a href="#home">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="signup.php">Sign Up</a></li>
          </ul>
    </nav>

	<div>
		<div>
			<div>
				<div>
					<div>
						<h3>Welcome!</h3>
						<form action ="registration.php" method= "post" >
								<div>
									<input type="text" name="firstname" placeholder="Enter first name">
								</div>
								<div>
									<input type="text" name="lastname" placeholder="Enter last name">
								</div>
								<div>
									<input type="text" name="email" placeholder="Enter Email">
								</div>
								<div>
									<input type="text" name="username" placeholder="Enter username">
								</div>
							<div>
								<div>
									<input type="text" name="password" placeholder="Enter password">	
								</div>
								<div>
									<input type="text" name="password-repeat" placeholder="Repeat password">	
								</div>
							</div>
							<div>
								<button>Sign Up</button>
							</div>
							<div>
								registered? <a href="#">Lognin</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

        
        
    </body>
</html>