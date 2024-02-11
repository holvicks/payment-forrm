<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style media="screen">
  body {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background-image: url(bg2.jpg);
  background-size: cover;
}

.box {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  padding: 40px;
  background: rgba(0, 0, 0, 0.6);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
  border-radius: 10px;
}

.box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.box .input-box {
  position: relative;
  margin-bottom: 20px;
}

.box .input-box input,
.box .input-box select {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  letter-spacing: 1px;
  margin-bottom: 10px;
  border: none;
  outline: none;
  background: transparent;
  border-bottom: 1px solid #fff;
}

.box .input-box label {
  position: absolute;
  top: 0;
  left: 0;
  letter-spacing: 1px;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  transition: .5s;
  pointer-events: none;
}

.box .input-box input:focus ~ label,
.box .input-box input:valid ~ label,
.box .input-box select:focus ~ label,
.box .input-box select:valid ~ label {
  top: -18px;
  left: 0;
  color: #03a9f4;
  font-size: 12px;
}

.box input[type="submit"] {
  background: transparent;
  border: none;
  outline: none;
  color: #fff;
  background: #227be3;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.box input[type="submit"]:hover {
  background-color: #3067b9;
}

.box select:focus {
  border-bottom: 1px solid #03a9f4;
}

.box select option {
  background: rgba(0, 0, 0, 0.6);
}

.box select,
.box select option {
  color: #fff;
}

  </style>
  <title>Document</title>
</head>
<body>
  <div class="box">
    <h2>Payment Details</h2>
    <form action="config.php" method="post">
      <div class="input-box">
        <input type="text" name="username" autocomplete="off" required>
        <label for="username">Username</label>
      </div>
      <div class="input-box">
        <input type="email" name="email" autocomplete="off" required>
        <label for="email">Email</label>
      </div>
      <div class="input-box">
        <input type="password" name="password" autocomplete="off" required>
        <label for="password">Password</label>
      </div>
      <div class="input-box">
        <input type="text" name="cardholderName" autocomplete="off" required>
        <label for="cardholderName">Cardholder Name</label>
      </div>
      <div class="input-box">
        <input type="text" name="cardNumber" autocomplete="off" required>
        <label for="cardNumber">Card Number</label>
      </div>
      <div class="input-box">
        <input type="text" name="expiryDate" placeholder="MM/YY" autocomplete="off" required>
        <label for="expiryDate">Expiry Date</label>
      </div>
      <div class="input-box">
        <input type="text" name="cvv" autocomplete="off" required>
        <label for="cvv">CVV</label>
      </div>
      <div class="input-box">
        <input type="number" name="amount" autocomplete="off" required>
        <label for="amount">Amount</label>
      </div>
      <div class="input-box">
        <label for="paymentMethod">Payment Method</label><br>
        <select id="paymentMethod" name="paymentMethod" required>
          <option value="creditCard">Credit Card</option>
          <option value="debitCard">Debit Card</option>
        </select>
      </div>
      <input type="submit" value="Save">
    </form>
  </div>
</body>
</html>
