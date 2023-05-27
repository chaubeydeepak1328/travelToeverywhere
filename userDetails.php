
<!DOCTYPE html>
<html>
<head>
  <title>Ticket Booking System</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
  margin: 0;
  padding: 0;
}

h1 {
  text-align: center;
  padding: 20px;
  background-color: #333;
  color: #fff;
  margin: 0;
}

.ticket-form {
  max-width: 400px;
  margin: 40px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-bottom: 8px;
}

input[type="text"],
input[type="date"],
input[type="time"],
input[type="submit"] {
  padding: 8px;
  margin-bottom: 12px;
  border-radius: 3px;
  border: 1px solid #ccc;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  cursor: pointer;
  border: none;
}

input[type="submit"]:hover {
  background-color: #45a049;
}
label
{
  margin-top:8px;
}
  </style>
</head>
<body>
  <h1>Passenger Details</h1>
  <div class="ticket-form">
    <h2>Book Your Ticket</h2>
    <form>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>

      <label for="Age">Age:</label>
      <input type="number" id="age" name="age" placeholder="Enter your Age" required>

      <label for="sex">Sex:</label>
      <select name="sex"  id="sex">
            <option selected value="Male">Male</option>
            <option value="Female">Female</option>
      </select>
      <label for="phone">Phone Number:</label>
      <input type="number" id="phone" placeholder="Enter Phone Number" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="eg xyz@gmail.com" required>

      <label for="class">class</label>
      <select name="class"  id="class">
            <option selected value="1">General class</option>
            <option value="sleeper class">sleeper class</option>
            <option value="3-A class">3-A class</option>
            <option value="2-A class">2-A class</option>
            <option value="1-A class">1-A class</option>
        </select>

      <input style="margin-top:30px" type="submit" value="Book Ticket">
    </form>
  </div>
</body>
</html>
