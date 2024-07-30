<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'mobile' => $_POST['mobile'],
        'email' => $_POST['email'],
        'enquiry' => $_POST['enquiry'],
        'contact_date' => $_POST['contact_date'],
        'contact_time' => $_POST['contact_time'],
        'brand' => $_POST['brand'],
        'source' => $_POST['source'],
        'branch' => $_POST['branch']
    ];

    $url = 'https://cario.co.za/source/landing-pages?token=986a1d4745841ba053debfc52ac7e79964eb';
    $options = [
        'http' => [
            'header' => "Content-Type: application/json\r\n",
            'method' => 'POST',
            'content' => json_encode($data)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === FALSE) {
        http_response_code(500);
        echo 'Error submitting form';
    } else {
        echo 'Form submitted successfully';
    }
}
?>
