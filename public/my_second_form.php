<?php
    var_dump($_GET);
    var_dump($_POST)
?>

<br>
<hr>
<br>

<!doctype html>
<html>
    <head>
        <title>my_second_form.php</title>
          <!-- type="text/css" = optional -->
        <link rel="stylesheet" href="/css/site.css">
    </head>
    <body>
        <ol>
           <li>Home</li>
           <li>About Me</li>
           <li>contact</li>
           <li>Resume</li>
        </ol>

        <form method="GET" action="/my_second_form.php">
            <main>
                <div class="login_form">
                    <h2>User Login</h2>
                    <label for="User Name">User Name</label>
                    <input id="username" placeholder="input user name" name="usr" type="text">
     <br>
                    <label for="Password">Password</label>
                    <input id="password" placeholder="input password here!" name="pw" type="password">
                </div>

     <br>
                <div class="send_email_form">
                    <h2>Compose an Email</h2>        
                    <label for="To">To</label>
                    <input id="To" placeholder="who are you sending this to?" name="To" type="text">
                </div>

        <br>
                <section>
                    <label for="From">From</label>
                    <input id="from" placeholder="From who?" name="From" type="text">
         <br>
                    <label for="Subject">Subject</label>
                    <input id="subject" placeholder="subject Matter?" name="Subject" type="text">
         <br>   
                    <label for="Body">Body</label>
         <br>
                    <textarea id="Body" name="Body" cols="40" rows="14" placeholder="placeholder duhh"></textarea>
         <br>
               
                   <button type="submit" name="Send Button">SEND MAIL NOW!</button>
               </section>
            </main>
        <br>

        <!-- THIS IS A CHECKBOX -->
        <label><input type="checkbox" id="mailing_list" name="mailing_list" value="yes" checked>Save a copy to sent folder</input>
        
        <br>
        <hr>    
        <br> 
            <div class="multiple_choice_test">
                <h2>Multiple Choice Test</h2>
        <br>
                <label><input type="checkbox" id="os1 name" os[] value="linux">Check box for YES!</label>

        <br>
        <br>

            <h3>what flavor do you use!?</h3>
        <br>

            <label><input type="radio" id="os1" name="os[]" value="Ubuntu"> Ubuntu</label>
        <br>
            <label><input type="radio" id="os2" name="os[]" value="Mint">   Mint</label>
        <br>
            <label><input type="radio" id="os3" name="os[]" value="Arch">   Arch</label>
        <br>
            <label><input type="radio" id="os4" name="os[]" value="other">  Other</label>
        <br>
            <label><input type="radio" id="os5" name="os[]" value="no">     What are you talking about?</label>

        <br>
        <br>
            which flavors do you enjoy in general?
        <br>
            <label><input type="checkbox" id="os1" name="os[]" value="chocolate">chocolate</label>
         <br>
            <label><input type="checkbox" id="os2" name="os[]" value="citrus">   citrus</label>
         <br>
            <label><input type="checkbox" id="os3" name="os[]" value="cherry">   cherry</label>
         <br>
            <label><input type="checkbox" id="os4" name="os[]" value="lime">     lime</label>
        </form>
    </div>
        <br>
        <hr>
        <br>

        <label for="multianswer"> Select 2 or more answers please.</label>
        <select id="answer" name="answer[]" multiple>
            <option value="0">RED       </option>
            <option>          BLUE      </option>
            <option>          ORANGE    </option>
            <option>          SHOE      </option>
        </select>


        <br>
        <hr>
        <br>

        <h2>Select Testing</h2>
        
        <label for="selectme"> Select YES or NO </label>
            <select name="question" id="question">
                <option value="1" selected> YES</option>
                <option value="0">          NO</option>
            </select>

    </body>
<br>
<hr>
<br>
</html>












