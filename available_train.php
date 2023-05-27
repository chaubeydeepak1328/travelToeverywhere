<?php
$start = $_POST["start"];
$end = $_POST["destination"];
$date = $_POST["date"];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Train Details</title>
  <style>
    <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: black;
    }

    header::before {
      content: "";
      background: url('Images/side_image.jpg') no-repeat center center/cover;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      opacity: 0.5;

    }

    .navbar {
      overflow: hidden;
      background-color: #333;
      border-radius: 23px;
    }

    .navbar a {
      float: left;
      font-size: 16px;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .dropdown {
      float: left;
      overflow: hidden;
    }

    .dropdown .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    .navbar a:hover,
    .dropdown:hover .dropbtn {
      background-color: red;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    /* for Mobile */
    .phdropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: black;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    .phdropdown-content {
      margin: -20px 120px;
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .phdropdown-content {
      display: none;
    }

    .phdropdown:hover .phdropdown-content {
      display: block;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    table ,th,td
    {
      border: 1px solid white;
      border-collapse: collapse;
    }
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
      background-color: #96D4D4;
    }
    button {
      padding: 8px 12px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
<header>
    <nav class="navbar">
      <a href="#">Home</a>
      <div class="dropdown">
        <button class="dropbtn">Travel</button>
        <div class="dropdown-content">
          <a href="#">Bus</a>
          <a href="#">Train</a>
          <a href="#">Aeroplane</a>
          <a href="#">ship</a>

          <div class="phdropdown">
            <button class="phdropbtn">Deals</button>
            <div class="phdropdown-content">
              <a href="#">summer packages</a>
              <a href="#">winter packages</a>
              <a href="#">Autom packages</a>
              <a href="#">Monsoon packages</a>
            </div>
          </div>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">Offers</button>
        <div class="dropdown-content">
          <a href="#">20% discount</a>
          <a href="#">35% discount</a>
          <a href="#">40% discount</a>
        </div>
      <a href="#">About</a>
      </div>
    </nav>
  </header>


  <h1>Train Details</h1>
  <table>
    <tr>
      <th>Train Number</th>
      <th>Train</th>
      <th>Destination</th>
      <th>Date journey</th>
      <th>Departure Time</th>
      <th>Duration</th>
      <th></th>
    </tr>
    <tr>
      <form action="userDetails.php">
      <td name="number" >12801</td>
      <td name="trainName">Rajdhani Exp</td>
      <td name="jounery"><?php echo "$start to $end" ?></td>
      <td name="Date"><?php echo $date ?></td>
      <td name="time">12:30</td>
      <td>6 hours</td>
      <td><button onclick="bookTrain(12801)">Book</button></td>
      </form>
    </tr>
    <tr>
    <form action="userDetails.php">
      <td name="number">12458</td>
      <td name="trainName">tejas Exp</td>
      <td name="jounery"><?php echo "$start to $end" ?></td>
      <td name="Date"><?php echo $date ?></td>
      <td name="time">12:30</td>
      <td>7.20 hours</td>
      <td><button onclick="bookTrain(12458)">Book</button></td>
      </form>
    </tr>
    <tr>
    <form action="userDetails.php">
      <td name="number">13290</td>
      <td name="trainName">satabdi Exp</td>
      <td name="jounery"><?php echo "$start to $end" ?></td>
      <td name="Date"><?php echo $date ?></td>
      <td name="time">12:30</td>
      <td>8 hours</td>
      <td><button onclick="bookTrain(13290)">Book</button></td>
      </form>
    </tr>
    <tr>
    <form action="userDetails.php">
      <td name="number">12453</td>
      <td name="trainName">Mahabodhi Exp</td>
      <td name="jounery"><?php echo "$start to $end" ?></td>
      <td name="Date"><?php echo $date ?></td>
      <td name="time">12:30</td>
      <td>11.30 hours</td>
      <td><button onclick="bookTrain(12453)">Book</button></td>
      </form>
    </tr>
    <tr>
    <form action="userDetails.php">
      <td name="number">23772</td>
      <td name="trainName">Purushottam Exp</td>
      <td name="jounery"><?php echo "$start to $end" ?></td>
      <td name="Date"><?php echo $date ?></td>
      <td name="time">12:30</td>
      <td>11 hours</td>
      <td><button onclick="bookTrain(13754)">Book</button></td>
    </tr>
    <tr>
    <form action="userDetails.php"></form>
      <td name="number">16857</td>
      <td name="trainName">Garib Rath</td>
      <td name="jounery"><?php echo "$start to $end" ?></td>
      <td name="Date"><?php echo $date ?></td>
      <td name="time">12:30</td>
      <td>6 hours</td>
      <td><button onclick="bookTrain(16857)">Book</button></td>
      </form>
    </tr>
  </table>
  <script>
    function bookTrain(trainNumber) {
      alert("please confirm Booking train number " + trainNumber);
    }
  </script>
</body>
</html>
