<?php
function getVehicleStockList() {
    $url = "https://api.pinewoodsa.co.za/APIv2/Vehicles/StockList/?includeusedvehicles=true&includeImageDetails=true&includeOptions=true&includeVideoDetails=true";

    $headers = [
        "Accept: application/json",
        "UserName: api@pentamotorgroup.co.za",
        "Password: Y81m4)veT#FAlVcdpcmNJ!",
        "OrganisationalUnit_UID: cf71a1e9-a60b-4c65-b34c-f71b39bc78cb,3ee07cf2-75ae-4059-9f28-e7a0bae0214c,0b02e8c7-b8f4-44be-b37d-0e5a1cec8b47,d36c5bf8-da85-4623-9cb7-1c7c2f050f9a,e40d13a9-7444-442e-9aea-8568022b3bc0,06a8ec7d-b599-45fe-8f87-c43e00704fe6,d80af4bb-722b-422b-b72f-9bb2fbacfbc1,74a42178-8561-49ce-b816-453790284388,"
        "Accept-Encoding: gzip,deflate",
    ];

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_ENCODING => ""
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #: " . $err;
    } else {
        return json_decode($response, true);
    }
}

$stockList = getVehicleStockList();
if (is_array($stockList)) {
    echo "<h1>Vehicle Stock List</h1>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Make</th><th>Model</th><th>Price</th><th>Image</th></tr>";
    foreach ($stockList as $vehicle) {
        echo "<tr>";
        echo "<td>{$vehicle['ID']}</td>";
        echo "<td>{$vehicle['Make']}</td>";
        echo "<td>{$vehicle['Model']}</td>";
        echo "<td>{$vehicle['Price']}</td>";
        if (!empty($vehicle['Images']) && !empty($vehicle['Images'][0])) {
            echo "<td><img src='{$vehicle['Images'][0]['URL']}' alt='Vehicle Image' width='100'></td>";
        } else {
            echo "<td>No Image</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo $stockList;
}
?>
