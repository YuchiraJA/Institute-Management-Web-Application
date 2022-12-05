<html>
    <head>
        
    </head>
    <body>

    <h1 id="remain"></h1>
        <form action="3.php" method="post" id="form1" name="form1">
            <input type="text" name="id">
            <input type="submit" name="submit" value="submit">
    </form>
    </body>
    <script>
        window.onload=counter;
        function counter()
        {
        var seconds = 5;
        countDown();
        function countDown()
        {
        document.getElementById("remain").innerHTML=seconds;
        if(seconds>0)
        {
        seconds=seconds - 1;
        setTimeout(countDown,1000);
        }
        if(seconds == 0)
        {
        document.form1.submit();
        }

        }
        }
    </script>
</html>