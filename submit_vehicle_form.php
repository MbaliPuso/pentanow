<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
        'vehicle_name' => $_POST['vehicle_name'],
        'vehicle_brand' => $_POST['vehicle_brand'],
        'select_year' => $_POST['select_year'],
        'select_fuel' => $_POST['select_fuel'],
        'transmission' => $_POST['transmission'],
        'vehicle_condition' => $_POST['vehicle_condition'],
        'full_name' => $_POST['full_name'],
        'cell_number' => $_POST['cell_number'],
        'email' => $_POST['email'],
        'contact_date' => $_POST['contact_date'],
        'contact_time' => $_POST['contact_time']
    ];

    // Handle the file upload
    $target_dir = "sale-uploads/";
    $target_file = $target_dir . basename($_FILES["vehicle_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file is an actual image
    $check = getimagesize($_FILES["vehicle_image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }

    // Check file size (5MB limit)
    if ($_FILES["vehicle_image"]["size"] > 5000000) {
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        http_response_code(500);
        echo 'Error uploading file';
    } else {
        if (move_uploaded_file($_FILES["vehicle_image"]["tmp_name"], $target_file)) {
            // Construct the image URL
            $image_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/' . $target_file;
            $data['vehicle_image'] = $image_url;
        } else {
            http_response_code(500);
            echo 'Error uploading file';
        }
    }

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
