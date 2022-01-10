
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
<ul>
	<li><a href="login.php">Login</a></li>
	<li><a href="test.php">Complaints</a></li>
	<li><a href="registration.php">Registration</a></li>


	
</ul>
</head>
<body>
<h1>Please Enter Your Complaints</h1>
<form action="test.php" id="complain" method="post">
	Complaint: <br>
	<input type="text" name="complaints[0][name]" id="inptname" placeholder="Enter your username" required>
	<input type="text" name="complaints[0][problems]" id="inptprob" placeholder="What is your complaints?" required>
	<br><br>

	<button id="btn" type="button">Submit </button>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script>
$("#btn").click(function(){
	var inputname = $("#inptname").val();
	var inputprob = $("#inptprob").val();
	$.ajax({
            type: "POST",
            url: "test2.php",
            data: {
                "name" : inputname, 
				
				"prob" : inputprob
            },
            success: function(result){
                var returnedData = $.parseJSON(result);
                console.log(returnedData);
            }
        });
	
})

</script>
</body>

</html>

