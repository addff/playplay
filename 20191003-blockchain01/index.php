<?
	$getid = $_GET['block_id'];

	require 'connect.php';
	$sql2="SELECT previous_hash, candidate_name, info_admin, info_user, blocktimestamp FROM chain WHERE block_id =".$getid.";";
	if ($result2=mysqli_query($conn,$sql2))
  	{
  		while ($row2=mysqli_fetch_row($result2))
    		{
    			$info1 = $row2[0];
                        $info2 = $row2[1];
                        $info3 = $row2[2];
                        $info4 = $row2[3];
                        $info5 = $row2[4];
    		}
		mysqli_free_result($result2);
	}

	print '<br>'.$info1;
        print '<br>'.$info2;
        print '<br>'.$info3;
        print '<br>'.$info4;
        print '<br>'.$info5;

	$blockhash = md5($info1.$info2.$info3.$info4.$info5);

	print '<b><br>'.$blockhash.'</b>';

	$sql20="SELECT block_hash FROM block WHERE block_id =".$getid.";";
        if ($result20=mysqli_query($conn,$sql20))
        {
                while ($row20=mysqli_fetch_row($result20))
                {
                        $info_hash = $row20[0];
                }
                mysqli_free_result($result20);
        }

	print '<br>'.$info_hash;

	if ($info_hash == NULL){
		print '<br>NULL... stamping hash into block table <br>';

		$sql200="UPDATE block SET block_hash='".$blockhash."' WHERE block_id =".$getid.";";
		if(mysqli_query($conn, $sql200))
    			echo "Records were updated successfully.";
		else
    			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
				
	}
?>
