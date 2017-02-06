<?php 
require("dbcon.php");
?>
<?php

if (isset($_POST['submit'])) {
	$db = new mysqldb();
	$db->select_db();
	
	$errorMessage = "";
$Companyname=$_POST['cname'];
$Industry=$_POST['industry'];
$Businessdspn=$_POST['textarea'];
$Region=$_POST['region'];
$Address=$_POST['address'];
$City=$_POST['city'];
$States=$_POST['states'];
$Zipcode=$_POST['zipcode'];
$Personname=$_POST['name'];
$Designation=$_POST['designation'];
$Phonenumber=$_POST['phonenumber'];
$Email=$_POST['email'];
$Skypeid=$_POST['username'];
$Website=$_POST['website'];
$Authority=$_POST['authority'];
$Authorityname=$_POST['authorityname'];
$Objofapplication=$_POST['objofapplication'];
$Category=$_POST['category'];
$Othercategory=$_POST['othercategory'];
@$service1=$_POST['service1'];
@$service2=$_POST['service2'];
@$service3=$_POST['service3'];
@$service4=$_POST['service4'];
@$service5=$_POST['service5'];
@$service6=$_POST['service6'];
$Service="$service1,$service2,$service3,$service4,$service5,$service6";
$Targetaudience=$_POST['targetaudience'];
$Focusapplication=$_POST['focusapplication'];
$Existingtarget=$_POST['existingtarget'];
$Budget=$_POST['budget'];
$USD=$_POST['USD'];
$day=$_POST['day'];
$month=$_POST['month'];
$week=$_POST['week'];
$Timeframe="$day/$month/$week";

$insqDbtb="INSERT INTO `appwizard`.`clients`
(`Companyname`, `Industry`, `Businessdspn`, `Region`, `Address`,
`City`, `States`, `Zipcode`, `Personname`, `Designation`, `Phonenumber`, `Email`, `Skypeid`, `Website`, `Authority`, `Authorityname`, `Objofapplication`, `Category`, `Othercategory`, `Service`, `Targetaudience`, `Focusapplication`, `Existingtarget`,`Budget`, `USD`, `Timeframe`) VALUES ('$Companyname', '$Industry', 
'$Businessdspn', '$Region', '$Address', '$City', '$States', '$Zipcode', '$Personname', '$Designation', '$Phonenumber', '$Email', '$Skypeid', '$Website' , '$Authority','$Authorityname','$Objofapplication', '$Category', '$Othercategory', '$Service', '$Targetaudience', '$Focusapplication', '$Existingtarget', '$Budget', '$USD', '$Timeframe')";

$result_user = $db->query($insqDbtb);
	

	if ($_POST['field_name']) {
		
	
		$inserted_client_id = $db->last_insert_id();
		

		foreach ( $_POST['field_name'] as $key=>$value ) {
			
		
			$sql_website = sprintf("INSERT INTO Compete_websites (Website_URL) VALUES ('%s')",
						    	   mysql_real_escape_string($value) );  
			$result_website = $db->query($sql_website);
			$inserted_website_id = $db->last_insert_id();
			

			$sql_clients_website = sprintf("INSERT INTO Clients_Compete_websites_link (ClientID, WebsiteID) VALUES ('%s','%s')",
						    	   mysql_real_escape_string($inserted_client_id),
								   mysql_real_escape_string($inserted_website_id) );  
			$result_clients_website = $db->query($sql_clients_website);
			
		}
		} else {
	
		
	}
	echo "<script>alert('Thanks Successfully Submitted');window.location='index.php'</script>";

	$db->kill();
}
?>