<?php 
	if(isset($_POST["submit"]) && $_POST["submit"] == "Login")  
	{
		$user = $_POST["username"];  
        $psw = $_POST["password"]; 
        mysql_connect("localhost","root","root");   //连接数据库  
        mysql_select_db("test");  //选择数据库  
        mysql_query("set names 'gdk'"); //设定字符集  
        $sql = "select username from user where username = '$user' and passwd='$psw'"; 
        $result = mysql_query($sql);
        $num = mysql_num_rows($result);
        //echo "num:$num  user:$user  passwd:$psw";
        if ($num)
        {
        	$target = "welcome.php?user=$user";
        	echo "<script> window.location='$target';</script>";
        }
        else
        {
        	echo "<script>alert('Username or Password Error!'); history.go(-1);</script>"; 
        }
	}
?>
