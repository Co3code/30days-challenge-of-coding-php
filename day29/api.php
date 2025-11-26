<?php
header("Content-type: application/json");
$data = json_decode(file_get_contents("data.json"), true);

if(isset($_GET["item"])&& $_GET["item"] === "all"){
    echo json_encode([
        "status" => "success",
        "item"=> $data
    ]);
    exit;
}

// If request is asking for a single item by ID
if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $item = null;

    foreach ($data as $p) {
        if ($p["id"] === $id) {
            $item = $p;
            break;
        }
    }

    echo json_encode([
        "status" => $item ? "success" : "not_found",
        "item" => $item
    ]);
    exit;
}

// Default response
echo json_encode([
    "status" => "error",
    "message" => "Invalid API request"
]);

?>