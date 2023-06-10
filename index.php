<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'links.php';
    ?>
    <form class="" action="index.html" method="post">
      Surname: <input type="text" name="surname" value=""><br>
      Email Address: <input type="email" name="email_address" value=""><br>
      Password: <input type="password" name="password" value=""><br>
      Telephone: <input type="tel" name="telephone" value=""><br>
      Salary: <input type="number" name="amount" value=""><br>
      Search Number: <input type="search" name="search_number" value=""><br>
      URL: <input type="url" name="uniq_res_loc" value=""><br>
      Attach: <input type="file" name="" value=""><br>
      Hide: <input type="hidden" name="" value="5000"><br>
      Range: <input type="range" name="" value=""><br>
      Date: <input type="date" name="" value=""><br>
      Time: <input type="time" name="" value=""><br>
      Week: <input type="week" name="" value=""><br>

      <input type="button" name="clickable" value="Check">
      <input type="reset" name="reset_all" value="Clear All">
      <input type="submit" name="Submit" value="Submit">
    </form>
  </body>
</html>
