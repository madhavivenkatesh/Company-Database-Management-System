<!DOCTYPE html>
<html>
	<head>
		<title>Company Name</title>
		<!--Include Libraries-->
		<!--Slider Libraries-->
		

		<!--User Defined Libraries-->
		<link rel="stylesheet" href="./resources/css/index.css"/>
		<script type="text/javascript" src="./resources/js/index.js"></script>
		<script type="text/javascript" src="./resources/js/jquery.js"></script>
	</head>
	<body>
		<header>
			<h1>
				COMPANY DATABASE
			</h1>
		</header>
		
		<nav id="navbar">
				<p class="subtitle"><a onclick="clicked(1);">Views</a></p>
				<p class="subtitle"><a onclick="clicked(2);">Queries</a></p>
		</nav>
		
		<div id="content">
			<div id="viewsDiv" >
				<p class="viewsHeader">Views</p>
				<div id="leftContent">
					<p style="text-align:center; font-weight:bolder;">Click on the links to check the views</p>
					<ul id="menu">
						<li><a href='index.php?number=21'>EMPLOYEE_VIEW</a></li>
						<li><a href='index.php?number=22'>SENIOREMPLOYEE</a></li>
						<li><a href='index.php?number=23'>MARKETINGINFORMATION</a></li>
						<li><a href='index.php?number=24'>ADMINISTRATORSINFO</a></li>
					</ul>
				</div>
				<div id="rightContent">
					<?php
						function runFirstView()
						{
							mysql_connect("localhost", "root", "srinidhi") or die(mysql_error()); 
							mysql_select_db("company") or die(mysql_error());
							$data = mysql_query("SELECT * FROM EMPLOYEE_VIEW;") or die(mysql_error());		
							echo "<table border='1'>
							<tr>
							<th>Employee ID</th>
							<th>Employee Fname</th>
							<th>Employee Lname</th>
							<th>Employee Supervisor ID</th>
							<th>Employee Rank</th>
							<th>Employee Title</th>
							</tr>";
							while($row = mysql_fetch_array($data))
							{
							echo "<tr>";

							echo "<td>" . $row['Emp_id'] . "</td>";
							echo "<td>" . $row['Fname'] . "</td>";
							echo "<td>" . $row['Lname'] . "</td>";
							echo "<td>" . $row['Supervisor_id'] . "</td>";
							echo "<td>" . $row['Rank'] . "</td>";
							echo "<td>" . $row['Title'] . "</td>";
							echo "</tr>";
							}
							echo "</table>";
							echo "
								<script type=\"text/javascript\">
									document.getElementById('viewsDiv').style.display='block';
									document.getElementById('queriesDiv').style.display='none';
								</script>
							";
						}
						function runSecondView()
						{
							mysql_connect("localhost", "root", "srinidhi") or die(mysql_error()); 
							mysql_select_db("company") or die(mysql_error());
							$data = mysql_query("SELECT * FROM SENIOREMPLOYEE;") or die(mysql_error());		
							echo "<table border='1'>
							<tr>
							<th>Employee ID</th>
							<th>Employee Fname</th>
							<th>Employee Lname</th>
							<th>Employee GradSchool</th>
							</tr>";
							while($row = mysql_fetch_array($data))
							{
							echo "<tr>";

							echo "<td>" . $row['ID of Employee'] . "</td>";
							echo "<td>" . $row['First Name'] . "</td>";
							echo "<td>" . $row['Last Name'] . "</td>";
							echo "<td>" . $row['Graduate School'] . "</td>";
							echo "</tr>";
							}
							echo "</table>";
							echo "
								<script type=\"text/javascript\">
									document.getElementById('viewsDiv').style.display='block';
									document.getElementById('queriesDiv').style.display='none';
								</script>
							";
						}
						function runThirdView()
						{
							mysql_connect("localhost", "root", "srinidhi") or die(mysql_error()); 
							mysql_select_db("company") or die(mysql_error());
							$data = mysql_query("SELECT * FROM MARKETINGINFORMATION;") or die(mysql_error());		
							echo "<table border='1'>
							<tr>
							<th>Employee Last Name</th>
							<th>Employee ID</th>
							<th>Marketing Site</th>
							<th>Marketing Location</th>
							</tr>";
							while($row = mysql_fetch_array($data))
							{
							echo "<tr>";

							echo "<td>" . $row['Last name'] . "</td>";
							echo "<td>" . $row['Employee_id'] . "</td>";
							echo "<td>" . $row['marketingsite'] . "</td>";
							echo "<td>" . $row['marketing_location'] . "</td>";
							echo "</tr>";
							}
							echo "</table>";
							echo "
								<script type=\"text/javascript\">
									document.getElementById('viewsDiv').style.display='block';
									document.getElementById('queriesDiv').style.display='none';
								</script>
							";
						}
						function runFourthView()
						{
							mysql_connect("localhost", "root", "srinidhi") or die(mysql_error()); 
							mysql_select_db("company") or die(mysql_error());
							$data = mysql_query("SELECT * FROM ADMINISTRATORSINFORMATION;") or die(mysql_error());		
							echo "<table border='1'>
							<tr>
							<th>Administrator Name</th>
							<th>Employee ID</th>
							<th>First Name</th>
							<th>Last Name</th>
							</tr>";
							while($row = mysql_fetch_array($data))
							{
							echo "<tr>";

							echo "<td>" . $row['Admin_name'] . "</td>";
							echo "<td>" . $row['employee_id'] . "</td>";
							echo "<td>" . $row['firstname'] . "</td>";
							echo "<td>" . $row['lastname'] . "</td>";
							echo "</tr>";
							}
							echo "</table>";
							echo "
								<script type=\"text/javascript\">
									document.getElementById('viewsDiv').style.display='block';
									document.getElementById('queriesDiv').style.display='none';
								</script>
							";
						}
					if (isset($_GET['number'])) 
					{
						if(($_GET['number']) == "21")
						{
							runFirstView();
						}
						else if(($_GET['number'])=="22")
						{
							runSecondView();
						}
						else if(($_GET['number'])=="23")
						{
							runThirdView();
						}
						else if(($_GET['number'])=="24")
						{
							runFourthView();
						}
					}
					?>
				</div>
			</div>
			
			
			<div id="queriesDiv" style="display:none;">
				<p class="viewsHeader" name="queries">Queries</p>
				<div id="leftContent">
					<p style="text-align:center; font-weight:bolder;">Click on the links to check the Query Results</p>
					<ul id="menu">
						<li><a href='index.php?number=1'>Total #Employees of certain groups</a></li>
						<li><a href='index.php?number=2'>Total #Employees by Title</a></li>
						<li><a href='index.php?number=3'>Employees with Rank 7</a></li>
						<li><a href='index.php?number=4'>Female Employees with Rank >= 6</a></li>
						<li><a href='index.php?number=5'>Employees Living in Street Campbell</a></li>
						<li><a href='index.php?number=6'>Salary of Employee in Certain Month</a></li>
						<li><a href='index.php?number=7'>Employee with more than 1 phone number</a></li>
						<li><a href='index.php?number=8'>Employee with Phone# 972 and Rank 8</a></li>
						<li><a href='index.php?number=9'>Get Marketing sites with 5 Employees</a></li>
						<li><a href='index.php?number=10'>Products and Employees</a></li>
						<li><a href='index.php?number=11'>Incharge Details</a></li>
						<li><a href='index.php?number=12'>Employee who can Update system Info</a></li>
					</ul>
				</div>
				<div id="rightContent">
					<?php
						function runFirstQuery() {
							mysql_connect("localhost", "root", "srinidhi") or die(mysql_error()); 
							mysql_select_db("company") or die(mysql_error()); 
							$data1 = mysql_query("SELECT COUNT(m.Emp_id) FROM Manager m;") or die(mysql_error());
									
							$data2 = mysql_query("SELECT COUNT(ms.Emp_id) FROM Marketing_Group ms;") or die(mysql_error());
									
							$data3 = mysql_query("SELECT COUNT(h.Emp_id) FROM HR h;") or die(mysql_error());
									 
							$data4 = mysql_query("SELECT COUNT(f.Emp_id) FROM Financer f") or die(mysql_error());

							echo "<table border='1'>
							<tr>
							<th>GROUP TYPE</th>
							<th>COUNT</th>
							</tr>";
							$row = mysql_fetch_array($data1);
							echo "<tr>";
							echo "<td>". "Manager"."</td>";
							echo "<td>" . $row['COUNT(m.Emp_id)'] . "</td>";
							echo "</tr>";
							
							$row = mysql_fetch_array($data2);
							echo "<tr>";
							echo "<td>". "Marketing Group"."</td>";
							echo "<td>" . $row['COUNT(ms.Emp_id)'] . "</td>";
							echo "</tr>";
							
							$row = mysql_fetch_array($data3);
							echo "<tr>";
							echo "<td>". "HR"."</td>";
							echo "<td>" .$row['COUNT(h.Emp_id)'] . "</td>";
							echo "</tr>";

							$row = mysql_fetch_array($data4);
							echo "<tr>";
							echo "<td>". "Financer"."</td>";
							echo "<td>" . $row['COUNT(f.Emp_id)'] . "</td>";
							echo "</tr>";
							echo "</table>";
							echo "
								<script type=\"text/javascript\">
									document.getElementById('viewsDiv').style.display='none';
									document.getElementById('queriesDiv').style.display='block';
								</script>
							";
						}
						function runSecondQuery(){
							mysql_connect("localhost", "root", "srinidhi") or die(mysql_error()); 
							mysql_select_db("company") or die(mysql_error()); 
							$data = mysql_query("SELECT E.Title ,COUNT(*) FROM Employee E Group by E.title")
							or die(mysql_error());

							echo "<table border='1'>
							<tr>

							<th>Employee Title</th>
							<th>Count</th>
							</tr>";

							while($row = mysql_fetch_array($data))
							{
							echo "<tr>";

							echo "<td>" . $row['Title'] . "</td>";
							echo "<td>" . $row['COUNT(*)'] . "</td>";
							echo "</tr>";
							}
							echo "</table>";
							echo "
								<script type=\"text/javascript\">
									document.getElementById('viewsDiv').style.display='none';
									document.getElementById('queriesDiv').style.display='block';
								</script>
							";
						}						
						function runThirdQuery(){
							mysql_connect("localhost", "root", "srinidhi") or die(mysql_error()); 
							mysql_select_db("company") or die(mysql_error()); 
							$data = mysql_query("SELECT employee.emp_id,employee.rank,employee.lname from Employee where employee.rank=7")
							or die(mysql_error());

							echo "<table border='1'>
							<tr>

							<th>Lname</th>
							<th>EmployeeId</th>
							<th>Rank</th>
							</tr>";

							while($row = mysql_fetch_array($data))
							{
							echo "<tr>";

							echo "<td>" . $row['lname'] . "</td>";
							echo "<td>" . $row['rank'] . "</td>";
							echo "<td>" . $row['emp_id'] . "</td>";
							echo "</tr>";
							}
							echo "</table>";
							echo "
								<script type=\"text/javascript\">
									document.getElementById('viewsDiv').style.display='none';
									document.getElementById('queriesDiv').style.display='block';
								</script>
							";
						}						
						function runFourthQuery(){
							mysql_connect("localhost", "root", "srinidhi") or die(mysql_error()); 
							mysql_select_db("company") or die(mysql_error()); 
							$data = mysql_query("SELECT E.Lname ,E.Emp_id,E.Rank From Employee E WHERE E.Rank>=6 and E.Gender='f';")
							or die(mysql_error());

							echo "<table border='1'>
							<tr>

							<th>Lname</th>
							<th>Emp_id</th>
							<th>Rank</th>
							</tr>";

							while($row = mysql_fetch_array($data))
							{
							echo "<tr>";

							echo "<td>" . $row['Lname'] . "</td>";
							echo "<td>" . $row['Emp_id'] . "</td>";
							echo "<td>" . $row['Rank'] . "</td>";
							echo "</tr>";
							}
							echo "</table>";
							echo "
								<script type=\"text/javascript\">
									document.getElementById('viewsDiv').style.display='none';
									document.getElementById('queriesDiv').style.display='block';
								</script>
							";
						}						
						function runFifthQuery(){
							mysql_connect("localhost", "root", "srinidhi") or die(mysql_error()); 
							mysql_select_db("company") or die(mysql_error()); 
							$data = mysql_query("SELECT E.Emp_id from Employee E where E.Street_name='campbell'")
							or die(mysql_error());

							echo "<table border='1'>
							<tr>

							<th>Emp_id</th>
							</tr>";

							while($row = mysql_fetch_array($data))
							{
							echo "<tr>";
							echo "<td>" . $row['Emp_id'] . "</td>";
							echo "</tr>";
							}
							echo "</table>";
							echo "
								<script type=\"text/javascript\">
									document.getElementById('viewsDiv').style.display='none';
									document.getElementById('queriesDiv').style.display='block';
								</script>
							";
						}						
						function runSixthQuery(){
							mysql_connect("localhost", "root", "srinidhi") or die(mysql_error()); 
							mysql_select_db("company") or die(mysql_error()); 
							$data = mysql_query("SELECT  ES.Emp_id ,ES.Pay_date, ES.Salary FROM SALARY ES WHERE ES.Pay_date like '%04%' and ES.Emp_id=34512")
							or die(mysql_error());

							echo "<table border='1'>
							<tr>

							<th>Emp_id</th>
							<th>Month</th>
							<th>Salary</th>
							</tr>";

							while($row = mysql_fetch_array($data))
							{
							echo "<tr>";
							echo "<td>" . $row['Emp_id'] . "</td>";
							echo "<td>" . $row['Pay_date'] . "</td>";
							echo "<td>" . $row['Salary'] . "</td>";
							echo "</tr>";
							}
							echo "</table>";
							echo "
								<script type=\"text/javascript\">
									document.getElementById('viewsDiv').style.display='none';
									document.getElementById('queriesDiv').style.display='block';
								</script>
							";
						}						
						function runSeventhQuery(){
							mysql_connect("localhost", "root", "srinidhi") or die(mysql_error()); 
							mysql_select_db("company") or die(mysql_error()); 
							$data = mysql_query("SELECT vs.Emp_id,e.Fname,e.Lname,eph.Phone_num FROM employee e, PhoneView vs, phone eph 
									WHERE CountEmp>1 AND vs.Emp_id=e.Emp_id AND vs.Emp_id=eph.Emp_id ;") or die(mysql_error());

							echo "<table border='1'>
							<tr>

							<th>Employee_id</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Phone Number</th>
							</tr>";

							while($row = mysql_fetch_array($data))
							{
							echo "<tr>";
							echo "<td>" . $row['Emp_id'] . "</td>";
							echo "<td>" . $row['Fname'] . "</td>";
							echo "<td>" . $row['Lname'] . "</td>";
							echo "<td>" . $row['Phone_num'] . "</td>";
							echo "</tr>";
							}
							echo "</table>";
							echo "
								<script type=\"text/javascript\">
									document.getElementById('viewsDiv').style.display='none';
									document.getElementById('queriesDiv').style.display='block';
								</script>
							";
						}
						
						function runEighthQuery(){
							mysql_connect("localhost", "root", "srinidhi") or die(mysql_error()); 
							mysql_select_db("company") or die(mysql_error()); 
							$data = mysql_query("SELECT E.Emp_id,E.Lname, P.Phone_num From Employee E,phone P 
							where E.Emp_id=P.Emp_id and P.Phone_num like '972%' and E.Rank=8")
							or die(mysql_error());

							echo "<table border='1'>
							<tr>

							<th>Emp_id</th>
							<th>Name</th>
							<th>Contact Number</th>
							</tr>";

							while($row = mysql_fetch_array($data))
							{
							echo "<tr>";
							echo "<td>" . $row['Emp_id'] . "</td>";
							echo "<td>" . $row['Lname'] . "</td>";
							echo "<td>" . $row['Phone_num'] . "</td>";
							echo "</tr>";
							}
							echo "</table>";
							echo "
								<script type=\"text/javascript\">
									document.getElementById('viewsDiv').style.display='none';
									document.getElementById('queriesDiv').style.display='block';
								</script>
							";
						}						
						function runNinthQuery(){
							mysql_connect("localhost", "root", "srinidhi") or die(mysql_error()); 
							mysql_select_db("company") or die(mysql_error()); 
							
							$data = mysql_query("SELECT DISTINCT ms.site_id,ms.site_name,ms.site_location  
									from MARKETING_SITES ms,sitecount t  
									where ms.Site_id=t.Site_id ;") or die(mysql_error());
							
							echo "<table border='1'>
							<tr>
							<th>Site_id</th>
							<th>Site_Name</th>
							<th>Site_Location</th>
							</tr>";

							while($row = mysql_fetch_array($data))
							{
							echo "<tr>";
							echo "<td>" . $row['site_id'] . "</td>";
							echo "<td>" . $row['site_name'] . "</td>";
							echo "<td>" . $row['site_location'] . "</td>";
							echo "</tr>";
							}
							echo "</table>";
							echo "
								<script type=\"text/javascript\">
									document.getElementById('viewsDiv').style.display='none';
									document.getElementById('queriesDiv').style.display='block';
								</script>
							";
						}						
						function runTenthQuery(){
						mysql_connect("localhost", "root", "srinidhi") or die(mysql_error()); 
							mysql_select_db("company") or die(mysql_error()); 
							$data = mysql_query("SELECT E.Emp_id,E.Lname,P.Product_id, P.pname FROM EMPLOYEE E ,MARKETING_SITES Ms,PRODUCT P ,PRODUCT_SOLD_AT Sp
							where Sp.Emp_id = E.Emp_id AND Sp.Site_ID = Ms.Site_ID AND Sp.Product_id = P.Product_id and ms.site_location='plano';
							")
							or die(mysql_error());

							echo "<table border='1'>
							<tr>

							<th>Emp_id</th>
							<th>Lname</th>
							<th>Product ID</th>
							<th>Product Name</th>
							</tr>";

							while($row = mysql_fetch_array($data))
							{
							echo "<tr>";
							echo "<td>" . $row['Emp_id'] . "</td>";
							echo "<td>" . $row['Lname'] . "</td>";
							echo "<td>" . $row['Product_id'] . "</td>";
							echo "<td>" . $row['pname'] . "</td>";
							echo "</tr>";
							}
							echo "</table>";
							echo "
									<script type=\"text/javascript\">
										document.getElementById('viewsDiv').style.display='none';
										document.getElementById('queriesDiv').style.display='block';
									</script>
								";
						}						
						function runEleventhQuery(){
							mysql_connect("localhost", "root", "srinidhi") or die(mysql_error()); 
							mysql_select_db("company") or die(mysql_error()); 
							$data = mysql_query("SELECT Ms.site_name,Ms.site_location 
							from MARKETING_SITES Ms,CHARGE_OF S 
							where S.Site_ID = Ms.Site_ID and S.Emp_id='17689'
							")
							or die(mysql_error());

							echo "<table border='1'>
							<tr>

							<th>Site Name</th>
							<th>Site_Location</th>
							</tr>";

							while($row = mysql_fetch_array($data))
							{
							echo "<tr>";
							echo "<td>" . $row['site_name'] . "</td>";
							echo "<td>" . $row['site_location'] . "</td>";
							echo "</tr>";
							}
							echo "</table>";
							echo "
								<script type=\"text/javascript\">
									document.getElementById('viewsDiv').style.display='none';
									document.getElementById('queriesDiv').style.display='block';
								</script>
							";
						}						
						function runTwelthQuery(){
							mysql_connect("localhost", "root", "srinidhi") or die(mysql_error());
							mysql_select_db("company") or die(mysql_error()); 
							$data = mysql_query("SELECT E.Emp_id,E.Fname,E.Lname 
							from EMPLOYEE E,Administrators M ,Administrates AA 
							where AA.Admin_id=M.Admin_id and M.admin_Emp_id=E.Emp_id and AA.Emp_id=98653")
							or die(mysql_error());

							echo "<table border='1'>
							<tr>

							<th>Employee Id</th>
							<th>First Name</th>
							<th>Last Name</th>
							</tr>";

							while($row = mysql_fetch_array($data))
							{
							echo "<tr>";
							echo "<td>" . $row['Emp_id'] . "</td>";
							echo "<td>" . $row['Fname'] . "</td>";
							echo "<td>" . $row['Lname'] . "</td>";
							echo "</tr>";
							}
							echo "</table>";
							echo "
								<script type=\"text/javascript\">
									document.getElementById('viewsDiv').style.display='none';
									document.getElementById('queriesDiv').style.display='block';
								</script>
							";
						}						
						
					  if (isset($_GET['number'])) {
						if(($_GET['number']) == "1"){
							runFirstQuery();
						}else if(($_GET['number']) == "2"){
							runSecondQuery();
						}else if(($_GET['number']) == "3"){
							runThirdQuery();
						}else if(($_GET['number']) == "4"){
							runFourthQuery();
						}else if(($_GET['number']) == "5"){
							runFifthQuery();
						}else if(($_GET['number']) == "6"){
							runSixthQuery();
						}else if(($_GET['number']) == "7"){
							runSeventhQuery();
						}else if(($_GET['number']) == "8"){
							runEighthQuery();
						}else if(($_GET['number']) == "9"){
							runNinthQuery();
						}else if(($_GET['number']) == "10"){
							runTenthQuery();
						}else if(($_GET['number']) == "11"){
							runEleventhQuery();
						}else if(($_GET['number']) == "12"){
							runTwelthQuery();
						}
					  }
					?>
				</div>
			</div>
		</div>
		
	</body>
</html>
