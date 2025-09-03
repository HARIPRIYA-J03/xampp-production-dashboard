<?php
include "header.php";
include "config.php";


// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = $_POST['dateInput'];
    $product = $_POST['productTypeInput'];
    $target = $_POST['targetInput'];
    $completed = $_POST['completedInput'];
    $shift = $_POST['shiftInput'];

    $stmt = $conn->prepare("INSERT INTO production_data (date, product_type, target, completed, shift) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdds", $date, $product, $target, $completed, $shift);
    $stmt->execute();
    $stmt->close();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Fetch all production data
$data = [];
$sql = "SELECT * FROM production_data ORDER BY date DESC";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Production Dashboard</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    body {
     
      margin: 0;
      background: #f4f4f4;
      color: #333;
    }
    #dashboard {
      padding: 20px;
      max-width: 1200px;
      margin: auto;
      background-color: rgba(0, 0, 0, 0.7);
      border-radius: 10px;
    }
    h2 {
      color: #ffb563;
      text-align: center;
      margin-bottom: 30px;
      font-size:45px;
      font-weight: 700;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 30px;
      background: #fff;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    th, td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }
    th {
      background: #003d5b;
      color: white;
    }
    .good { color: green; font-weight: bold; }
    .average { color: orange; font-weight: bold; }
    .poor { color: red; font-weight: bold; }
    .form-container {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    .form-container h3 {
      margin-bottom: 15px;
      color: #331e38;
      font-size: 35px;
      font-weight: 700;
    }
    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }
    input, select {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      margin: 15px 0 0 350px;
      background: #003d5b;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
      width: 400px;
    }
    button:hover {
      background: #5a473c;
    }
    #chartContainer {
      height: 400px;
      margin-bottom: 40px;
      background-color: #fffcf7;

    }

    .dash{
      background: url('images/dashboard.jpeg') no-repeat center center fixed;
      background-size: cover; 
      padding: 20px; 
    }
  </style>
</head>
<body>
  <div class="dash">
<section id="dashboard">
  <h2>Production Dashboard</h2>

  <div class="dashboard">
    <table id="productionTable">
      <thead>
        <tr>
          <th>Date</th><th>Product Type</th><th>Target</th><th>Completed</th><th>Shift</th><th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $item): 
          $status = '';
          $class = '';
          if ($item['completed'] >= $item['target']) {
            $status = 'Completed'; $class = 'good';
          } elseif ($item['completed'] >= $item['target'] * 0.75) {
            $status = 'On Track'; $class = 'average';
          } else {
            $status = 'On Track'; $class = 'average';
          }
        ?>
        <tr>
          <td><?= htmlspecialchars($item['date']) ?></td>
          <td><?= htmlspecialchars($item['product_type']) ?></td>
          <td><?= htmlspecialchars($item['target']) ?></td>
          <td><?= htmlspecialchars($item['completed']) ?></td>
          <td><?= htmlspecialchars($item['shift']) ?></td>
          <td class="<?= $class ?>"><?= $status ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <div id="chartContainer">
    <canvas id="productionChart"></canvas>
  </div>

  <div class="form-container">
    <h3 class="text-center">Add Production Data</h3>
    <form method="POST">
      <label for="dateInput">Date</label>
      <input type="date" name="dateInput" required />

      <label for="productTypeInput">Product Type</label>
      <select name="productTypeInput" required>
        <option value="">--Select--</option>
        <option value="Men's Socks">Men's Socks</option>
        <option value="Women's Socks">Women's Socks</option>
        <option value="Kids' Socks">Kids' Socks</option>
        <option value="Sports Socks">Sports Socks</option>
        <option value="Casual Socks">Casual Socks</option>
      </select>

      <label for="targetInput">Target</label>
      <input type="number" name="targetInput" min="0" required />

      <label for="completedInput">Completed</label>
      <input type="number" name="completedInput" min="0" required />

      <label for="shiftInput">Shift</label>
      <select name="shiftInput" required>
        <option value="">--Select--</option>
        <option value="Morning">Morning</option>
        <option value="Evening">Evening</option>
        <option value="Night">Night</option>
      </select>

      <button type="submit">Add Data</button>
    </form>
  </div>
</section>
</div>
<?php

include "footer.php";
?>
<script>
  const productionData = <?php echo json_encode($data); ?>;
  const ctx = document.getElementById('productionChart').getContext('2d');

  const totals = {};
  productionData.forEach(item => {
    if (!totals[item.product_type]) totals[item.product_type] = 0;
    totals[item.product_type] += parseInt(item.completed);
  });

  const labels = Object.keys(totals);
  const data = Object.values(totals);

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels,
      datasets: [{
        label: 'Completed Production',
        data,
        backgroundColor: '#15616d',
        borderColor: 'rgba(109, 88, 75, 1)',
        borderWidth: 1,
        borderRadius: 6,
      }]
    },
    options: {
      scales: {
        y: { beginAtZero: true, ticks: { stepSize: 200 } }
      },
      plugins: {
        legend: { labels: { color: '#6d584b', font: { weight: 'bold' } } }
      },
      responsive: true,
      maintainAspectRatio: false,
    }
  });
</script>
</body>
</html>
