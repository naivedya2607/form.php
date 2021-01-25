<?php
    $name=$_GET['Name'];
    $email=$_GET['Email'];
    $content=$_GET['Content'];
    $city=$_GET['City'];
    $course=$_GET['Course'];
    $interest=$_GET['Interest'];
    echo "Name is $sum";
    echo "Email is $email$";
    echo "Content is $content";
    echo "City is $city";
     echo "Course is $course";
    echo "Interest is $interest";

?>
<html>
<head>
<title>hello everybody</title>
</head>
<body>
<form method="get" action="abcd.php">
Name<input type="text" name="Name" required="">
Email<input type="text" name="Email" required="">
Content<input type="text" name="Content" required="">
City<input type="text" name="City" required="">
Course<input type="text" name="Course" required="">
Interest<input type="text" name="Interest" required="">

<input type="submit">
</form>

</body>
</html>