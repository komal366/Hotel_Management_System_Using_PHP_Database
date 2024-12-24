<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Book </title>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Merriweather&display=swap');
      body{
        font-family: 'Merriweather', serif;
  
       }
      .bg-img{
        background-image: url("./images/bg9.jpg");
        background-size:100% 100%;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        height: 100%;
      }
      h1{
        font-size: 60px;
      }
      input[type=text],[type=date],[type=email],[type=number],select{
        width: 100%;
        padding: 7px;
        border: 2px solid black;
        border-radius: 4px;
        resize: vertical;
        font-size: 20px;
      }   
      .form-control{
         width: 100%;
        padding: 7px;
        border: 2px solid black;
        border-radius: 4px;
        resize: vertical;
        font-size: 20px;
      }
      label{
        font-size:25px;
      }
      .sbtn{
        color: #fff;
        font-size: 18px;
        border: none;
        padding: 8px 30px;
        border-radius: 6px;
        background: crimson;
        cursor: pointer;
        transition: all 0.3s ease;
      }
      
      
    </style>
</head>
    
  <body class="bg-img">
    <div class="container w-50 m-auto">
      <div class="text">
          <h1 class="text-center ">Book</h1>
          <hr class="w-25 m-auto bg-dark">
      </div>

      <form action="bookdb.php" method="POST" >
        <div class="user my-4">
          <label for="username" >Username:</label>
           <input type="text" name="username" id="username" placeholder="Enter Your Full Name" class="form-control" required>
        </div>

        <div class="email my-4">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" placeholder="Enter Your E-mail" class="form-control" required>
        </div>

        <div class="contact my-4">
          <label for="contact">Contact:</label>
          <input type="number" name="contact" id="contact" placeholder="Enter Your Contact Number" class="form-control" required>
        </div>

        <div class="address my-4">
          <label for="address">Address:</label>
          <input type="text" name="address" id="address" placeholder="Enter Your Address" class="form-control" required>
        </div>

        <div class="message my-4">
          <label for="arrivaldate">Arrival Date:</label>
          <input type="date" name="arrivaldate" id="arrivaldate" placeholder="Enter Arrival-Date"  class="form-control" required>
        </div>

        <div class="message my-4">
          <label for="departuredate">Departure Date:</label>
           <input type="date" name="departuredate" id="departuredate" placeholder="Enter Departure-Date"  class="form-control" required>
        </div>

        <div class="message my-4">
          <label for="adults">Adults:</label>
           <input type="number" name="adults" id="adults" placeholder="Adults" class="form-control" required>
        </div>

        <div class="message my-4">
          <label for="kids">Kids:</label>
           <input type="number" name="kids" id="kids" placeholder="Kids" class="form-control" required>
        </div>

         <div class="message my-4">
          <label for="roomno">Number Of Rooms:</label> 
           <input type="number" name="roomno" id="roomno" placeholder="Enter Room Numbers" class="form-control" required>
        </div>

        <div class="message my-4">
          <label for="roomtype">Type Of Rooms:</label><br>
          <select id=" roomtype" name="roomtype" >
            <option value="Choose Room...">Choose Room...</option>
            <option value="Single Rooms">Single Room</option>
            <option value="Double Rooms">Double Room</option>
            <option value="Triple Room">Triple Room</option>
          </select>
        </div>

        <div class="message my-4">
          <label for="message">Message:</label>
          <textarea name="message" id="message" placeholder="Enter Your Any Message" class="form-control" cols="30" rows="5"></textarea>
        </div>
        
        <input type="submit" name="submit" value="Book" class="sbtn">
      </form>
    </div>

    
   
  </body>
</html>