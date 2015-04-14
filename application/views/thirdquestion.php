<!DOCTYPE html>
<html>
    <head>
        <title>third question</title>
    </head>  
    <body background="<?php echo base_url('../static/image/simpleblack.jpg'); ?>">
       <h1>Second Question</h1>
       <br><br> 
       <img src="<?php echo base_url('../static/image/urban_dictionary.png'); ?>" alt="second question" height=450 width=600 />
        <form action="<?php echo base_url('/home/user_response'); ?>" method="post">
            <br><br>
            <input type="text" name="answer" />
            <input type="submit">
        </form>
    </body>
</html>