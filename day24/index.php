<?php
    // Load JSON data
    $json    = file_get_contents("data.json");
    $records = json_decode($json, true);

    // Get search keyword
    $search = $_GET['search'] ?? '';

    // Filter logic
    $filtered = [];

    if ($search) {
        foreach ($records as $r) {
            if (
                str_contains(strtolower($r['name']), strtolower($search)) ||
                str_contains(strtolower($r['email']), strtolower($search))
            ) {
                $filtered[] = $r;
            }
        }
    } else {
        // If no search, show all
        $filtered = $records;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Day 24 - JSON Search</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        input { padding: 6px; width: 250px; }
        table { border-collapse: collapse; width: 400px; margin-top: 20px; }
        th, td { border: 1px solid #888; padding: 8px; text-align: left; }
    </style>
</head>
<body>

<h2>Day 24: Search & Filter JSON Records</h2>

<form method="GET">
    <input type="text" name="search" placeholder="Search name or email..."
           value="<?php echo htmlspecialchars($search); ?>">
    <button type="submit">Search</button>
</form>

<h3>Results:</h3>

<table>
    <tr>
        <th>ID</th> <th>Name</th> <th>Email</th>
    </tr>

    <?php if (count($filtered) === 0): ?>
        <tr><td colspan="3">No results found.</td></tr>
    <?php endif; ?>

    <?php foreach ($filtered as $r): ?>
        <tr>
            <td><?php echo $r['id']; ?></td>
            <td><?php echo $r['name']; ?></td>
            <td><?php echo $r['email']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>


