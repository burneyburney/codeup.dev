<!-- used for debugging! very helpful! remember this! save as *.php -->
<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<br>
<hr>
<br>

<!DOCTYPE html>
<html lang="en">
<header>
    <title>My First Form</title>
</header>
<body>

    <h2>My First Form</h2> 
     <!-- using GET instead of POST, b/c GET shows pw in url -->
    <form method="GET" action="/my_first_form.php">
        <p>
            <label for="username">Username</label>
            <input id="username" placeholder="PUT STUFF HERE"name="username" type="text">
        </p>
        <p>
            <label for="password">Password</label>
            <input id="password" placeholder="SOME MORE!"name="password" type="password">
        </p>
        <p>
            <label for="email_body">Text Area</label>
            <textarea id="email_body" name="email_body" cols="6" rows="9"> </textarea>
        </p>
        <p>
            <!-- this is a submit thing -->
            <!-- <input type="Submit" name="s u b m i t ">  -->
            <!-- this is a submit button, SAME THING as input -->
            <button type="submit" name="buttonname">Log In</button>
        </p>

        <!-- anytime you use inputs(90% of time use label) or checkbox's, use a label -->
        <!-- make id and name the same, its easier -->
       <label for="awesome"> <p>Is Ike Awsome?</p></label>
    <br>
        <label><input type="checkbox" name="Awsome" value="yes" id="checkbox" checked>


    <br>
    <hr>
    <br>




</body>
</html>

<!-- 

http://codeup.dev/my_first_form.php

?
username=asdf
&
password=adsfasdf

