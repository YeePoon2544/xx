<!DOCTYPE html>
<html>

<head>
  <title>ถาม-ตอบ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<style>
  input[type=submit] {
    background-color: #fa4848f7;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #49c31d;
  }
</style>

<body>

  <form action="/action_page.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
    <h2 class="w3-center">คำถาม</h2>

    <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><i class='fas fa-bullhorn' style='font-size:38px;color:red'></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border" name="question" type="text" placeholder="พิมพ์คำถาม...">
      </div>
    </div>
    <p class="w3-center">
      <input type="submit" name="submit" value="ส่ง" />
    </p>
  </form>

</body>

</html>