<?php
include "header.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SNQS Production Department</title>
  <style>
    /* Background image and overlay */
    body {
    
      
      background: url('images/overview.jpeg') no-repeat center center fixed;
    background-size: cover;
      color: white;
    }

    /* dark overlay on background */
    body::before {
      content: "";
      position: fixed;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0, 0, 0, 0.6);
      z-index: -1;
    }

    header, footer {
      background-color: rgba(0, 0, 0, 0.7);
      padding: 20px;
      text-align: center;
      font-weight: bold;
      font-size: 1.2rem;
    }

    header {
      font-size: 1.5rem;
    }

    main {
      max-width: 1000px;
      margin: 30px auto;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 20px;
      border-radius: 8px;
    }

    h1, h2 {
      margin: 0 0 15px 0;
      font-weight: 700;
    }

    /* Chart section */
    #chart-section {
      margin-bottom: 40px;
    }

    /* Simple chart container */
    #chart {
      width: 100%;
      height: 300px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 10px;
      position: relative;
    }

    /* Table styles */
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
      color: white;
    }

    th, td {
      border: 1px solid white;
      padding: 8px;
      text-align: center;
    }

    th {
      background-color: rgba(255, 255, 255, 0.3);
    }

    /* Size cards container */
    #size-cards {
      display: flex;
      justify-content: space-around;
      margin-top: 30px;
    }

    .size-card {
      background: rgba(255, 255, 255, 0.2);
      padding: 15px;
      border-radius: 8px;
      width: 100px;
      text-align: center;
      font-weight: bold;
      font-size: 1.2rem;
      cursor: default;
      user-select: none;
      transition: background 0.3s ease;
    }

    .size-card:hover {
      background: rgba(255, 255, 255, 0.4);
    }

    /* Price tags under size cards */
    .price-tag {
      margin-top: 8px;
      font-size: 1rem;
      font-weight: normal;
    }

  </style>
</head>
<body>

  <header>
    SNQS International Company - Production Department
  </header>

  <main>
    <section id="chart-section">
      <h2  class="text-center">Production Overview</h2>
      <div id="chart">  
        <!-- Chart will be here (static example) -->
        <svg width="100%" height="300" viewBox="0 0 500 300" style="display:block; margin: auto;">
          <rect x="50" y="150" width="50" height="120" fill="#4caf50"></rect>
          <rect x="130" y="100" width="50" height="170" fill="#2196f3"></rect>
          <rect x="210" y="180" width="50" height="90" fill="#ff9800"></rect>
          <rect x="290" y="130" width="50" height="140" fill="#e91e63"></rect>
          <rect x="370" y="90" width="50" height="180" fill="#9c27b0"></rect>
          <text x="75" y="145" fill="white" font-size="14" font-weight="bold" text-anchor="middle">Jan</text>
          <text x="155" y="95" fill="white" font-size="14" font-weight="bold" text-anchor="middle">Feb</text>
          <text x="235" y="175" fill="white" font-size="14" font-weight="bold" text-anchor="middle">Mar</text>
          <text x="315" y="125" fill="white" font-size="14" font-weight="bold" text-anchor="middle">Apr</text>
          <text x="395" y="85" fill="white" font-size="14" font-weight="bold" text-anchor="middle">May</text>
        </svg>
      </div>

      <table>
        <thead>
          <tr>
            <th>Month</th>
            <th>Units Produced</th>
            <th>Defects</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>January</td><td>1200</td><td>30</td></tr>
          <tr><td>February</td><td>1500</td><td>25</td></tr>
          <tr><td>March</td><td>1100</td><td>50</td></tr>
          <tr><td>April</td><td>1300</td><td>40</td></tr>
          <tr><td>May</td><td>1600</td><td>20</td></tr>
        </tbody>
      </table>
    </section>

    <section id="size-cards-section">
      <h2 class="text-center">Product Sizes & Prices</h2>
      <div id="size-cards">
        <div class="size-card">
          Small
          <div class="price-tag">$5.00</div>
        </div>
        <div class="size-card">
          Medium
          <div class="price-tag">$7.50</div>
        </div>
        <div class="size-card">
          Large
          <div class="price-tag">$9.00</div>
        </div>
        <div class="size-card">
          X-Large
          <div class="price-tag">$12.00</div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    &copy; 2025 SNQS International Company. All Rights Reserved.
  </footer>

</body>
</html>
