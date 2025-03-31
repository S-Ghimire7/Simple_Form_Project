<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <style>
        h1{
            font-size: 2cm;
        }

        .dev{
            padding-right: 90%;
        }

      .bg{
        background: grey;
        text-align:center;
      }

      .button-18 {
  align-items: center;
  background-color: #0A66C2;
  border: 0;
  border-radius: 100px;
  box-sizing: border-box;
  color: #ffffff;
  cursor: pointer;
  display: inline-flex;
  font-family: -apple-system, system-ui, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Fira Sans", Ubuntu, Oxygen, "Oxygen Sans", 
  Cantarell, "Droid Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Lucida Grande", Helvetica, Arial, sans-serif;
  font-size: 16px;
  font-weight: 600;
  justify-content: center;
  line-height: 20px;
  max-width: 480px;
  min-height: 40px;
  min-width: 0px;
  overflow: hidden;
  padding: 0px;
  padding-left: 20px;
  padding-right: 20px;
  text-align: center;
  touch-action: manipulation;
  transition: background-color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, box-shadow 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: middle;
}

.button-18:hover,
.button-18:focus { 
  background-color: #293442;
  color: #ffffff;
}

.button-18:active {
  background: #09223b;
  color: rgb(255, 255, 255, .7);
}

.button-18:disabled { 
  cursor: not-allowed;
  background: rgba(0, 0, 0, .08);
  color: rgba(0, 0, 0, .3);
}
    </style>
</head>
<body class="bg">
    <div class="dev"><button class="button-18"><a href="login.html"> ← Back to login</a></button></div>
    <h1>Admin Panel:</h1>
    <div id="existing-users">
    <?php
    include 'connect.php';
    $result = mysqli_query($conn, "SELECT * FROM std");
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "User: " . htmlspecialchars($row['user']) . "<br>Email: " . htmlspecialchars($row['email']) . "<br>Age: " . htmlspecialchars($row['age']) . "<br>";
            echo '<form action="delete.php" method="POST" style="display:inline;">';
            echo '<input type="hidden" name="user" value="' . htmlspecialchars($row['user']) . '">';
            echo '<input type="hidden" name="email" value="' . htmlspecialchars($row['email']) . '">';
            echo '<input type="hidden" name="age" value="' . htmlspecialchars($row['age']) . '">';
            echo '<input type="submit" value="Delete">';
            echo '</form><br><br>';
        }
    } else {
        echo "Nothing was found.";
    }
    mysqli_close($conn);
    ?>
    </div>
</body>
</html>