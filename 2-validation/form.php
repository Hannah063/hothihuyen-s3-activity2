<?php

function validate_message($message)
{
    // function to check if message is correct (must have at least 10 characters (after trimming))
    $message = trim($message, " \n\t");
    return strlen($message) < 10;
}

function validate_username($username)
{
    // function to check if username is correct (must be alphanumeric => Use the function 'ctype_alnum()')
    return !ctype_alnum($username);
}

function validate_email($useremail)
{
    // function to check if email is correct (must contain '@')
    return !strpos($useremail, "@");
}


$user_error = "";
$email_error = "";
$terms_error = "";
$message_error = "";
$username = "";
$email = "";
$message = "";

$form_valid = false;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Here is the list of error messages that can be displayed:
    //
    // "Message must be at least 10 caracters long"
    // "You must accept the Terms of Service"
    // "Please enter a username"
    // "Username should contains only letters and numbers"
    // "Please enter an email"
    // "email must contain '@'"

    $email = strip_tags($_POST['email']);
    $username = strip_tags($_POST['username']);
    $message = strip_tags($_POST['message']);

    if (validate_message($message)) {
        $message_error = "Message must be at least 10 caracters long";
    }

    if (validate_email($email)) {
        $email_error = "email must contain '@'";
        if (strlen($email) == 0) {
            $email_error = "Please enter an email";
        }
    }

    if (validate_username($username)){
        $user_error = "Username should contains only letters and numbers";
        if (strlen($username) == 0) {
            $user_error = "Please enter a username";
        }
    }

    if (!isset($_POST['terms'])) {
        $terms_error = "You must accept the Terms of Service";
    }

    if (strlen($email_error) == 0 && strlen($message_error) == 0 && strlen($terms_error) == 0 && strlen($user_error) == 0) {
        $form_valid = true;
    }

}

?>

<form action="#" method="post">
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="text" class="form-control" placeholder="Enter Name" name="username" value="<?php if ($form_valid == false) {echo $username;}?>">
            <small class="form-text text-danger"> <?php echo $user_error; ?></small>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Enter email" name="email" value="<?php if ($form_valid == false) {
                echo $email;
            }?>">
            <small class="form-text text-danger"> <?php echo $email_error; ?></small>
        </div>
    </div>
    <div class="mb-3">
        <textarea name="message" placeholder="Enter message" class="form-control"><?php if ($form_valid == false) {echo $message;}?></textarea>
        <small class="form-text text-danger"> <?php echo $message_error; ?></small>
    </div>
    <div class="mb-3">
        <input type="checkbox" class="form-control-check" name="terms" id="terms" value="terms"> <label for="terms">I accept the Terms of Service</label>
        <small class="form-text text-danger"> <?php echo $terms_error; ?></small>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<hr>

<?php
if ($form_valid) :
?>
    <div class="card">
        <div class="card-header">
            <p><?php echo $username; ?></p>
            <p><?php echo $email; ?></p>
        </div>
        <div class="card-body">
            <p class="card-text"><?php echo $message; ?></p>
        </div>
    </div>
<?php
endif;
?>