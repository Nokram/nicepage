<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Nouveau contact depuis le site',
    'email_message' => 'Vous avez un nouveau message qui vous attend.',
    'success_redirect' => '',
    'email' => array(
        'from' => 'contact@nokram.ovh',
        'to' => 'alexis.marcon@nokram.ovh'
    ),
    'fields' => array(
        'name' => array(
            'order' => 1,
            'type' => 'string',
            'label' => 'Nom',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Nom\' is required.'
            )
        ),
        'email' => array(
            'order' => 2,
            'type' => 'email',
            'label' => 'Email',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Email\' is required.'
            )
        ),
        'message' => array(
            'order' => 3,
            'type' => 'string',
            'label' => 'Message',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Message\' is required.'
            )
        ),
    )
);

$processor = new FormProcessor();
$processor->process($form);

?>