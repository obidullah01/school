<?php
// $title = "login";
include('sessionCheck.php'); 
?>
</head>

<body style="background-color: LightGoldenrodYellow;">
	<div style="padding:30px; background-color:LightGreen; ">
		<table width="100%">

			<td align="left">
				<h1 style="font-size:400%;color: white;">ক্ষুদিরাম বিদ্যালয়</h1>
			</td>
			<td align="left" width="50%">
</body>
<div id="main">
	<ul>
		<li><a href="addTeacher.php"><b>শিক্ষক নিয়োগ করুন</b></a></li><br>
		<li><a href="editteacher.php"><b>শিক্ষক তথ্য পরিবর্তন করুন</b></a></li><br>
		<li><a href="removeteacher.php"><b>শিক্ষক বাতিল করুন</b></a></li><br>
		<li><a href="employeedetails.php"><b>অন্যান্য কর্মচারি ডিটেইলস দেখুন</b></a></li><br>
		<li><a href="editstudent.php"><b>শিক্ষার্থী তথ্য পরিবর্তন করুন</b></a></li><br>
		<li><a href="removestudent.php"><b>শিক্ষার্থী বাতিল করুন</b></a></li><br>
		<li><a href="addsubject.php"><b>পাঠ্য বিষয় যোগ করুন</b></a></li><br>
		<li><a href="removesubject.php"><b>পাঠ্য বিষয় বাতিল করুন</b></a></li><br>
		<li><a href="addnotice.php"><b>নোটিশ যোগ করুন</b></a></li><br>
		<li><a href="makeroutine.php"><b>রুটিন বানান</b></a></li><br>
		<li><a href="editroutine.php"><b>রুটিন আপডেট করুন</b></a><br>
		<br>
		<br>
		
		<form action="../controller/logout.php" method="post">
			<input type="hidden" name="action" value="logout">
			<button type="submit">Log out</button>
		</form>

	</ul>

</div>