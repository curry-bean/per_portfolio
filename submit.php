//send a html form submitted using php to a mail?
<?php
    $error = false;
    $sent = false;

    if(isset($_POST['submit'])) {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comments'])) {
            $error = true;
        }
        else {
            $to = "wangechihope29@gmail.com";

            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $comments = trim($_POST['comments']);

            $subject = "Contact Form";

            $message =  "Name: $name \r\n Email: $email \r\n Comments: $comments";
            $headers = "From:" . $name;
            $mailsent = mail($to, $subject, $message, $headers);

            if($mailsent) {
                $sent = true;
            }
        }
    }
?>

<?php if($error == true){ ?>
<p class="error">Text</p>
<?php } if($sent == true) { ?>
<p class="sent">Text</p>
<?php } ?>
<div id="form">
    <form name="contact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <h4>Contact Me!</h4>
            <label for="name">Name:</label>
                <input type="text" name="name" id="name"/>
                <label for="email"/>Email:</label>
                <input type="text" name="email" id="email"/>
                <label for="comments" id="comments">Comments:</label>
                <textarea name="comments" id=""></textarea>
                <fieldset>
                <input class="btn" type="submit" name="submit"  class="submit" value="Send email"/>
                <input class="btn" type="reset" value="Reset"/>
                </fieldset>
        </fieldset>
    </form>
</div>




undefinedSource: https://stackoverflow.com/questions/12158229




