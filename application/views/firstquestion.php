<!DOCTYPE html>
<html>
    <head>
        <title>first Question</title>
    </head>
    <body bgcolor="blanchedalmond">
        <h1>Second Question</h1>
        <br><br>
        <img src="<?php echo base_url('../static/image/github.jpg'); ?>" alt="second question" height=450 width=600 />
        <form action="<?php echo base_url('/home/user_response'); ?>" method="post">
            <input type="text" name="answer" />
            <input type="submit">
        </form>
    </body>
</html>