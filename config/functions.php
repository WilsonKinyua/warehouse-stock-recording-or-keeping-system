
<!--
 * 
 * author:wilson kinyua
 * email: wilsonkinyuam@gmail.com
 * year created : May 2020
 * start date: 21 Sep 2020
 * end date: 
 * 
 * 
 * -->

<?php include "database.php";

/**=================================================HELPER FUNCTIONS ================================ */
/**=================================================HELPER FUNCTIONS ================================ */
/**=================================================HELPER FUNCTIONS ================================ */
/**=================================================HELPER FUNCTIONS ================================ */
/**=================================================HELPER FUNCTIONS ================================ */
/**=================================================HELPER FUNCTIONS ================================ */



/**=================================================query function================================ */


function query($sql) {
    global $connection;
    return mysqli_query($connection,$sql);
}


/**=================================================redirect function================================ */

function redirect($location) {
    return header("Location: ".$location);
}

/**=================================================last id insterted function======================== */

function last_insert_id() {
    global $connection;
    return mysqli_insert_id($connection);
}

/**==============================================set message function================================= */

function set_message($msg) {

    if(!empty($msg)) {

        $_SESSION['message'] = $msg;
    } else {
        $msg = "";
    }

}

/**============================================display the message create through the session========== */

function display_message() {

    if(isset($_SESSION['message'])) {

        echo $_SESSION['message'];
        unset($_SESSION['message']);

    }
}

/**=====================================function to check whtether there an error to the query========== */

function confirm($result) {
    global $connection;

    if(!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

/**============================================prevent mysql stringinjuction=============================== */

function escape($string) {
    global $connection;
    return mysqli_real_escape_string($connection,$string);
}

/**============================================function to count rows===================================== */

function count_rows($result) {
    return mysqli_num_rows($result);
}

/**===========function to generate a unique token and set it to session===================================== */

function token_generator() {
    return $token = $_SESSION['token'] = md5(uniqid(mt_rand(),true));
}

/**===========function to hast user password========================================================== */

function hash_password($password) {

}

/**===========clean from htmlentities========================================================== */

function clean($string) {
    return htmlentities($string);
}


/**===========send email to user email========================================================== */

function send_email($email,$subject,$message,$headers) {
    return mail($email,$subject,$message,$headers);
}

/**=================================================USER LOGIN FUNCTIONS================================ */
/**=================================================USER LOGIN FUNCTIONS ================================ */
/**=================================================USER LOGIN FUNCTIONS================================ */
/**=================================================USER LOGIN FUNCTIONS ================================ */

