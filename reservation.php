<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reserve.css">
</head>
<body>
    <form class="booking-form" action="#" method="post">
        <!-- <div class="elem-group">
          <label for="email">Your Name</label>
          <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
        </div> -->
        <div class="elem-group">
          <label for="email">Your E-mail</label>
          <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
        </div>
        <div class="elem-group">
          <label for="phone">Your Phone</label>
          <input type="tel" id="phone" name="visitor_phone" placeholder="498-348-3872" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
        </div>
        <hr>
        <div class="elem-group inlined">
          <label for="adult">Number of Person</label>
          <input type="number" id="adult" name="total_adults" placeholder="2" min="1" required>
        </div>
        <div class="elem-group inlined">
            <label for="checkin-date"> Date</label>
            <input type="date" id="checkin-date" name="checkin" required>
        </div>
        <div class="elem-group inlined">
          <label for="checkin-date">Reserve Time</label>
          <input type="time" id="checkin-date" name="checkin" required>
        </div>
        <!-- <div class="elem-group inlined">
          <label for="checkout-date">To Reserve Time</label>
          <input type="date" id="checkout-date" name="checkout" required>
        </div> -->

        <!-- <div class="elem-group"> -->
          <!-- <label for="room-selection">Select Room Preference</label> -->
          <!-- <select id="room-selection" name="room_preference" required>
              <option value="">Choose a Resturant from the List</option>
              <option value="connecting">Taj Hotel</option>
              <option value="adjoining">CS Cafeteria</option>
              <option value="adjacent"> New Welcome</option>
          </select> -->
        <!-- </div>
        <hr> -->
        <!-- <div class="elem-group">
          <label for="message">Anything Else?</label>
          <textarea id="message" name="visitor_message" placeholder="Tell us anything else that might be important." required></textarea>
        </div> -->
        <br>
        <button type="submit" onclick="submitReserve()">Reserve</button>
      </form>

      <script>
        function submitReserve()
      {
        window.location.href="index.php";
      }
      </script>
</body>
</html>