<?php

/*
 * NOTE: This is a simple PHP function that 
 * will encrypt and decrypt the message,
 * before using it in production please research 
 * encryption a bit more in order to be safer
 * 
 * Have fun with care!
 * 
 * by: s3luX
 * 
 */

$password = "VeryStrongPassword123!";
$message = "Text that will be encrypted";
$encryption_method = "AES-256-CBC";

function encrypt_decrypt($action, $string, $key)
{
    $output = false;

    global $encryption_method;  // Pull the hashing method that will be used

    // Hash the password
    $key = hash('sha256', $key);

    if( $action == 'encrypt' )
    {
        // Generate a random string, hash it and get the first 16 character of the hashed string which will be ised as the IV
        $str = "qwertyuiopasdfghjklzxcvbnm,./;'\[]-=`!@#$%^&*()_+{}|\":?><0123456789QWERTYUIOPASDFGHJKLZXCVBNM";
        $shuffled = str_shuffle($str);
        $iv = substr(hash('sha256', $shuffled), 0, 16);

        $output = openssl_encrypt($string, $encryption_method, $key, 0, $iv);
        $output = base64_encode($output);       // Tidy up the string so that it survives the transport 100%
        $ivoutput = $iv.$output;                // Concat the IV with the encrypted message
        return $ivoutput;
    }
    else if( $action == 'decrypt' )
    {
        $iv = substr($string, 0, 16);           // Extract the IV from the encrypted string
        $string = substr($string, 16);          // The rest of the encrypted string is the message
        $output = openssl_decrypt(base64_decode($string), $encryption_method, $key, 0, $iv);
        return $output;
    }
}

echo "<b>Message in plain text:</b> $message"."<br /><br />";

// The encrypted text looks like this
$encrypted_txt = encrypt_decrypt('encrypt', $message, $password);
echo "<b>Encrypted text:</b> $encrypted_txt"."<br /><br />";

// Decrypte the message
$decrypted_txt = encrypt_decrypt('decrypt', $encrypted_txt, $password);
echo "<b>Decrypted message:</b> $decrypted_txt"."<br /><br />";

?>
