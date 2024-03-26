<?php
add_action('wp_ajax_form', 'getform');
add_action('wp_ajax_nopriv_form', 'getform');

function getform()
{

    $errors = array();
    $success = false;


    // IDENTITY
    $nom = trim(strip_tags($_POST['nom']));
    $prenom = trim(strip_tags($_POST['prenom']));
    $email = trim(strip_tags($_POST['email']));
    $phone = trim(strip_tags($_POST['phone']));
    $message = trim(strip_tags($_POST['message']));


    $errors = validText($errors, $nom, 'nom', 3, 60);
    $errors = validText($errors, $prenom, 'prenom', 3, 60);
    $errors = validText($errors, $message, 'message', 5, 500);
    $errors = validmail($errors, $email, 'email');



    if (count($errors) === 0) {

        $message = "Ce message vous a été envoyé via le formulaire de contact du site mathis-lamotte.com 
        Nom : " . $nom . " 
        Prénom: " . $prenom . " 
        Email : " . $email . " 
        Message : " .$message;

        if (!empty($_POST["phone"])) {
            $message .= "Phone : " . $phone . "\r\n";
        }
        
        $retour = mail('contact@mathis-lamotte.com', "Nouveau message de " . $nom , $message, 'From: contact@mathis-lamotte.com' . "\r\n" . 'Reply-to: ' . $email );


        $messageretour = "Bonjour ". $prenom.",

        Votre message via le formulaire de contact a bien été reçu. Merci pour votre prise de contact.

        Je vous répondrai dans les plus brefs délais.

        Cordialement,

        Mathis Lamotte";

        $confirm = mail($email, "Confirmation de réception de votre message" , $messageretour, 'From: contact@mathis-lamotte.com' . "\r\n" . 'Reply-to: lamottemathis@gmail.com '  );


        $success = true;
    }



    showJson(
        array(
            'errors' => $errors,
            'success' => $success,
        )
    );
}
