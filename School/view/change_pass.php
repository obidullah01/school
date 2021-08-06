<?php
$title = "login";
session_start();
if (!isset($_COOKIE['flag'])) {
    header('location: login.php');
}
?>
</head>
<body style="background-color: LightGoldenrodYellow;">
	<div style="padding:30px; background-color:LightGreen; ">
		<table width="100%">
			<tr>
				<td align = "left" width="50%">
					<img src= ../assets/logo.jpg alt="Logo of the Company" sizes="10px" width="30%">
				</td>
				<td align="center">
                    <h1 style= "font-size:400%;color: Cornsilk;">HOPE</h1>
                </td>
                <td align = "right" width="50%">  
                    <div style= "font-size:150%;">
                        <a href="homepage.php" style ="color:RosyBrown;"> Go Back To Home</a><br>
                        <a href='../controller/logout.php'style ="color:RosyBrown;">Log Out</a>
                    </div>

				</td>
			</tr>
		</table>
	</div>
	<div >
		<center>
			<form method="POST" action="../controller/passcheck.php" >
				<h2 style="color: black;">Change Your Password:</h2>
                <table>
                	<tr>
                        <td>
                            <input type='text'  placeholder="User Name" name='uname' style="height: 30px;font-size: 20px; width:180px;">
                        </td>
                        <td><h4><br><br></h4></td>
                    </tr>
                    <tr>
                        <td>
                            <input type='password'  placeholder="Current Password" name='curpass' style="height: 30px;font-size: 20px; width:180px;">
                        </td>
                        <td><h4><br><br></h4></td>
                    </tr>
                    <tr>
                        <td>
                            <input type='password' placeholder= "New Password" name='newpass' style="height: 30px;font-size: 20px; width:180px;">
                        </td>
                        <td><h4><br><br></h4></td>
                    </tr>
                    <tr>
                        <td>
                            <input type='password' placeholder="Retype Password" name='conpass' style="height: 30px;font-size: 20px; width:180px;">
                        </td>
                        <td><h4><br><br></h4></td>
                    </tr>
                </table>
                <input type='submit' name="submit" value="Confirm" style="height: 30px;font-size: 20px; width:120px;"><br><br>
                <a href="viewprofile.php" style="font-size: 20px;">Go Back</a>
			</form>
		</center>
	</div>
    <div style="background-color: LightGreen;">
	<?php 
	   include('footer.php');
	?>
    </div>