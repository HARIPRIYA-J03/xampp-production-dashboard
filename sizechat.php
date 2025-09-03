<?php include "header.php"; ?>
<!-- Assuming header.php already contains DOCTYPE, html, head, and starts body -->

<style>
  .size {
    background: url('images/size.jpeg') no-repeat center center/cover;
    min-height: 91vh;
  }

  .size-chart {
    background-color: rgba(0, 0, 0, 0.7);
    border-radius: 15px;
    padding: 30px;
    max-width: 80%;
    width: 100%;
  }

  .size-chart h2 {
    font-size: 40px;
    text-align: center;
    margin-bottom: 30px;
    font-weight: bold;
    color: white;
  }

  .size-chart table {
    width: 100%;
  }

  .size-chart th {
    color: white;
    background-color: #073b4c;
    font-size: 20px;
  }

  .size-chart th, .size-chart td {
    text-align: center;
    padding: 15px;
  }

  .size-chart thead {
    background-color: rgba(255, 255, 255, 0.2);
  }

  .size-chart tbody tr:nth-child(even) {
    background-color: rgba(255, 255, 255, 0.1);
  }

  .size-chart tbody tr:hover {
    background-color: rgba(255, 255, 255, 0.2);
  }
</style>

<div class="p-3 d-flex justify-content-center align-items-center size">
  <section id="sizechart" class="size-chart">
    <h2>Size Chart</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Size</th>
            <th>Length (cm)</th>
            <th>Width (cm)</th>
            <th>Heel Height (cm)</th>
            <th>Toe Height (cm)</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Small</td><td>22</td><td>8</td><td>2</td><td>2.5</td></tr>
          <tr><td>Medium</td><td>25</td><td>9</td><td>2.5</td><td>3</td></tr>
          <tr><td>Large</td><td>28</td><td>10</td><td>3</td><td>3.5</td></tr>
          <tr><td>X-Large</td><td>31</td><td>11</td><td>3.5</td><td>4</td></tr>
        </tbody>
      </table>
    </div>
  </section>
</div>

<?php include "footer.php"; ?>
