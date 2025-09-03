<?php include "header.php"; ?>

<style>
  .home-body {
    margin: 0;
    padding: 0;
    background: url('images/home.jpeg') no-repeat center center fixed;
    background-size: cover; 
    color: white;
  }

  .overlay {
    background-color: rgba(0, 0, 0, 0.7);
    min-height: 100vh;
    padding: 60px 20px;
  }

  #home h1 {
    font-size: 3.2rem;
    font-weight: bold;
  }

  #home p {
    font-size: 1.1rem;
    max-width: 800px;
    margin: 20px auto;
  }

  #sizechart {
    margin-top: 60px;
    background-color: rgba(255, 255, 255, 0.4);
    padding: 30px;
    border-radius: 15px;
  }

  #sizechart h2 {
    text-align: center;
    font-weight: 700;
    color: #001524;
    font-size: 40px;
    margin-bottom: 30px;
  }

  .table {
    width: 100%;
    text-align: center;
    background-color: rgba(255, 255, 255, 0.05);
  }

  .table th, td {
    padding: 15px;
    color: white;
    background-color: #14213d;
  }

  .table thead {
    background-color: #3a5a40;
  }

  tbody tr:nth-child(even) {
    background-color: rgba(255, 255, 255, 0.1);
  }

  @media (max-width: 768px) {
    #home h1 {
      font-size: 2rem;
    }

    #home p {
      font-size: 1rem;
    }
  }
</style>

<div class="home-body">
  <div class="overlay text-center">
    <section id="home">
      <h1>Welcome to SNQS Production Portal</h1>
      <p>
        Welcome to the official production management portal of SNQS International Socks Pvt. Ltd. 
        Our platform empowers the production team to efficiently track daily progress, manage targets, and ensure smooth operations. 
        Stay updated with real-time data and insights to enhance productivity and meet company goals with ease.
      </p>
    </section>

    <section id="sizechart" class="container mt-5">
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
</div>

<?php include "footer.php"; ?>
