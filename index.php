<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel</title>
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

    /* here i am going to paste all the code */
    section {
      height: 350px;
    }

    .popular-destinations {

      margin-top: 800px;
      display: flex;
      flex-shrink: inherit;
      flex-direction: column;
      justify-content: space-around;
    }

    .destination-card {
      color: white;
      background-color: black;
      border: 2px solid black;
      border-radius: 45px;
      display: flex;
      /* flex-direction: column;
      float: left; */
      position: relative;
      justify-content: space-around;
      margin: 2px 20px;
    }

    .destination-card h3 {
      text-align: center;
    }
    .destination-card a
    {
      display: flex;
      color: white;
      float: left;
    }

    .destination-card {
            background: url('Images/card_background.jpg') no-repeat center center/cover;
            z-index: -1;
            opacity: 0.8;
    }

    .destination-card p {
      text-align: center;
      padding: 2px 100px;
    }

    img {
      border: 2px solid rgb(226, 222, 222);
      border-radius: 45px;
      margin: 8px 8px;
      box-shadow: rgba(0, 0, 0, 0.2);
    }

    input[type="button"] {
      background: none;
      border: none;
      text-align: center;
    }

    .travel {
      display: flex;
      flex-direction: column;
      text-align: center;
    }

    footer {
      margin-top: 550px;
      color: white;
      border: 2px solid black;
      background-color: black;
      text-align: center;
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

  <section class="travel">
    <form action="available_train.php" method="post">
      <div class="treavel-content">
        <h1>Explore the World!</h1>
        <p>Find your perfect travel destination and book your dream vacation today!</p>

        <label for="to">To</label>
        <input type="text" id="left" name="start" placeholder="Starting Location">
        <input type="button" onclick="interchange()">&#8651</input>
        <label for="from">from</label>
        <input type="text" name="destination" id="right" placeholder="Enter a destination">
        <input type="date" name="date" placeholder="Travel dates">
        <button type="submit">Search</button>
      </div>
    </form>
  </section>


  <section class="popular-destinations">
    <h2 style="color: greenyellow;">Popular Destinations</h2>
    <div class="destination-card">
      <img src="Images/Brazil.jpeg" alt="Destination 1">
      <h3>Brazil</h3>
      <p>Brazil, a captivating South American country, beckons travelers with its unparalleled beauty, diverse
        landscapes, and vibrant culture. From the awe-inspiring Amazon rainforest to the sun-kissed beaches of Rio de
        Janeiro, Brazil is a treasure trove of natural wonders and cultural experiences.</p>
      <a href="#">View Details</a>
    </div>
    <div class="destination-card">
      <img src="Images/britan.jpeg" alt="Destination 2">
      <h3>Britan</h3>
      <p>
        Britain, a land of timeless charm and rich history, invites tourists to embark on a captivating journey through
        its diverse landscapes, iconic landmarks, and cultural treasures. From the regal palaces of London to the
        mystical landscapes of Scotland, Britain offers a tapestry of experiences that captivate every traveler</p>
      <a href="#">View Details</a>
    </div>
    <div class="destination-card">
      <img src="Images/Burma.jpeg" alt="Destination 3">
      <h3>Burma</h3>
      <p>Begin your adventure in Yangon, the bustling former capital and home to the awe-inspiring Shwedagon Pagoda.
        Marvel at the golden spires of this sacred Buddhist site, bask in its serene atmosphere, and witness the locals'
        devotion to their spiritual traditions.</p>
      <a href="#">View Details</a>
    </div>
    <div class="destination-card">
      <img src="Images/china.jpeg" alt="Destination 4">
      <h3>china</h3>
      <p>Begin your adventure in Beijing, the capital city steeped in imperial grandeur. Stand in the presence of the
        iconic Great Wall, an engineering marvel that stretches across thousands of kilometers. Explore the majestic
        Forbidden City, an imperial palace complex that once housed Chinese emperors, and stroll through the serene
        gardens of the Summer Palace.</p>
      <a href="#">View Details</a>
    </div>

    <div class="destination-card">
      <img src="Images/japan.jpeg" alt="Destination 7">
      <h3>japan</h3>
      <p>Start your journey in Tokyo, a vibrant and futuristic capital that pulsates with energy. Immerse yourself in
        the neon-lit streets of Shinjuku and Shibuya, explore the serene gardens of the Imperial Palace, and witness the
        harmonious blend of tradition and innovation at the Meiji Shrine.</p>
      <a href="#">View Details</a>
    </div>
    <div class="destination-card">
      <img src="Images/new york.jpeg" alt="Destination 8">
      <h3>New york</h3>
      <p>Start your exploration in the heart of Manhattan, where the iconic skyline boasts architectural wonders like
        the Empire State Building, One World Trade Center, and the art deco masterpiece, Rockefeller Center. Immerse
        yourself in the bright lights of Times Square, a vibrant hub of entertainment, shopping, and Broadway theaters.
      </p>
      <a href="#">View Details</a>
    </div>
  </section>


  <footer>
    <p>&copy; 2023 Travel Booking Website. All rights reserved.</p>
  </footer>


  <!-- javavscript code  -->
  <script>
    function interchange() {
      let obj1 = document.getElementById("left");
      let obj2 = document.getElementById("right");
      let temp = obj1.value;
      obj1.value = obj2.value;
      obj2.value = temp;
    }
  </script>

</body>

</html>