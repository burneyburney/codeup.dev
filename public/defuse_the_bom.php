<!DOCTYPE html>
<html>
<head>
    <title>Defuse the BOM</title>
</head>
<body>
    <h2 id="message">This BOM will self destruct in <span id="timer">5</span> seconds...</h2>

    <button id="defuser">Defuse the BOM</button>

    <script>
    // console.log ("in JS")
        var detonationTimer = 5;
        // interval
        var interval = 1000;

        // TODO: This function needs to be called once every second
        function updateTimer()
        {
            if (detonationTimer == 0) {
                alert('EXTERMINATE!');
                document.body.innerHTML = '';
                // clearInterval(intervalID);
            } else if (detonationTimer > 0) {
                document.getElementById('timer').innerHTML = detonationTimer;
            }

            detonationTimer--;
        }


        var intervalId = setInterval(updateTimer, interval);

        // TODO: When this function runs, it needs to
        // cancel the interval/timeout for updateTimer()
        function defuseTheBOM()
        {
            // function updateTimer(){
            if (detonationTimer > 1){
                var detonationTimer = 5
            } else{
                console.log("wtf did you try to do1?")
            }
                // clearInterval(intervalID);            }
                // var detonationTimer = 0;
                // return detonationTimer;
            // timeoutID = setTimeout(function()
            // function updateTimer(5,5);
            console.log("you pressed the button");
        }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // Don't modify anything below this line!
        //
        // This causes the defuseTheBOM() function to be called
        // when the "defuser" button is clicked.
        // We will learn about events in the DOM lessons
        var defuser = document.getElementById('defuser');
        defuser.addEventListener('click', defuseTheBOM, false);
    </script>
</body>
</html>
