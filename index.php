<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Comment</title>
        <link href="Style/s.css" rel="stylesheet">
    </head>
    <body>
        <h1>Demo of No Refreshed Comment</h1>
        <?php
echo"<textarea id='t1'  onkeydown='keySend(event),ajax()' placeholder='Please write down your comment here, then click the submit button or Ctrl+Enter'></textarea>"
        . "<button id='b1' onclick='createXmlHttpRequest(),ajax()'>Submit</button>"
        ?>
        <section id="list"></section>
     <script src="Script/post.js"></script>
     <script src="Script/get.js"></script>
    </body>
</html>
