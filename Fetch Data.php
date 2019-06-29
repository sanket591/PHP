
<!DOCTYPE html>
<html>
<head>
<title>Fetch Data from MysSql</title>
</head>
<body>

		<?php
    //Your DataBAse confguration
			$servername="localhost";
			$username="root";
			$password="";
			$dbname = "Enter name of your database here";
    //Data base configuration ends here

			//Create connection
			$conn = mysqli_connect($servername,$username,$password, $dbname);//to connect with dataBase

			if($conn)
			{
				echo "<script>console.log('connected')</script>";
			}
			else
			{
				echo "<script>console.log('connection error')</script>";
			}

			$sql="SELECT * FROM `table_name`"; //enter the sql query insite double quotes

			$res=$conn->query($sql);   //enter result of query in result



			if($resultCircle->num_rows>0) //if database gives back a result
			{

				while($row = $resultCircle->fetch_assoc()) // row is an array which stores the data fetched from the database
				{
          //coulumn 1,2,3 are the names of the sql table columns
					echo $row['column1'];
          echo $row['column2'];
          echo $row['column3'];
				}
		}

		}
		?>
		<script>
      //script here(if any)
		</script>
</body>
</html>
