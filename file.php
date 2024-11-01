$result = mysqli_query($db_conn,"SHOW DATABASES"); 
while ($row = mysqli_fetch_array($result)) { 
    echo $row[0]."<br>"; 
}
