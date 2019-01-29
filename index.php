<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Calculate</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
        integrity="sha256-OweaP/Ic6rsV+lysfyS4h+LM6sRwuO3euTYfr6M124g=" crossorigin="anonymous"/>
  <link rel="stylesheet" href="style.css">
</head>
<body class="cyan">
<div class="container">
  <div class="card calc-form">
    <div class="card-content">
      <span class="card-title">Calculate!</span>
      <form id="calcForm">
        <div class="input-field">
          <label for="num1">First number</label>
          <input type="number" id="num1" name="num1" required>
        </div>
        <div class="input-field">
          <label for="num2">Second number</label>
          <input type="number" id="num2" name="num2" required>
        </div>
        <button type="submit" id="addition" name="type" value="addition" class="waves-effect waves-light btn">+</button>
        <button type="submit" id="subtraction" name="type" value="subtraction" class="waves-effect waves-light btn">-
        </button>
        <button type="submit" id="multiplication" name="type" value="multiplication"
                class="waves-effect waves-light btn">
          *
        </button>
        <button type="submit" id="division" name="type" value="division" class="waves-effect waves-light btn">/</button>
      </form>
      <label for="result">Result</label>
      <input id="result" type="text" disabled="disabled"/>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"
        integrity="sha256-U/cHDMTIHCeMcvehBv1xQ052bPSbJtbuiw4QA9cTKz0=" crossorigin="anonymous"></script>
<script src="calculate.js"></script>
</body>
</html>