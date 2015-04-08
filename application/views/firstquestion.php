<!DOCTYPE html>
<html>
    <head>
        <title>Second Question</title>
    </head>
    <body bgcolor="blanchedalmond" align="center">
        <h1>Second Question</h1>
        <img src="<?php echo base_url('../static/image/github.jpg'); ?>" alt="second question" height=450 width=600 />
        <form action="<?php echo base_url('/home/user_response'); ?>" method="post">
            Your answer : <input type="text" name="first_response" />
            <input type="submit">
        </form>
    </body>
</html>