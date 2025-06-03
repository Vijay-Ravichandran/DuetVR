<?php
// Initialize mergedData from a JSON file or any source
$mergedData = [];

$dataFile = 'mergedData.json'; // replace with your actual file

if (file_exists($dataFile)) {
    $json = file_get_contents($dataFile);
    $mergedData = json_decode($json, true); // decode to associative array
}
?>
<head>
  <meta charset="UTF-8">
  <title>Merged Customer & Payment Data</title>
  <link rel="stylesheet" href="table.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h3 class="mb-4">Customer & Payment Details</h3>
    <div class="table-responsive">
      <table class="table table-bordered table-striped align-middle">
        <thead>
          <tr class="table-primary text-center">
            <th colspan="7">Payment Details</th>
            <th colspan="9">Customer Details</th>
          </tr>
          <tr class="table-secondary text-center">
            <th>S.No</th>
            <th>Payment ID</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Amount Paid</th>
            <th>Frame</th>
            <th>Occasion</th>
            <th>Image</th>
            <th>Video</th>
            <th>Door No</th>
            <th>Area</th>
            <th>City</th>
            <th>Nearby</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $count = 1;
          foreach ($mergedData as $row) {
              echo "<tr>";
              echo "<td>" . $count++ . "</td>";
              echo "<td>" . htmlspecialchars($row['rp_payment_id'] ?? 'N/A') . "</td>";
              echo "<td>" . htmlspecialchars($row['user_name'] ?? 'N/A') . "</td>";
              echo "<td>" . htmlspecialchars($row['email'] ?? 'N/A') . "</td>";
              echo "<td>" . htmlspecialchars($row['mobile_number'] ?? 'N/A') . "</td>";
              echo "<td>" . htmlspecialchars($row['amount_paid'] ?? 'N/A') . "</td>";
              echo "<td>" . htmlspecialchars($row['frame'] ?? 'N/A') . "</td>";
              echo "<td>" . htmlspecialchars($row['occasion'] ?? 'N/A') . "</td>";
              echo "<td>" . htmlspecialchars($row['image_path'] ?? 'N/A') . "</td>";
              echo "<td>" . htmlspecialchars($row['video_path'] ?? 'N/A') . "</td>";
              echo "<td>" . htmlspecialchars($row['door_no'] ?? 'N/A') . "</td>";
              echo "<td>" . htmlspecialchars($row['area'] ?? 'N/A') . "</td>";
              echo "<td>" . htmlspecialchars($row['city'] ?? 'N/A') . "</td>";
              echo "<td>" . htmlspecialchars($row['nearby'] ?? 'N/A') . "</td>";
              echo "<td>" . htmlspecialchars($row['status'] ?? 'N/A') . "</td>";
              echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
