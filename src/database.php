<?php

function connect()
{
  $servername = "localhost";
  $username = "sammy";
  $password = "password";
  $dbname = "boots_verleih";

  //Verbindung zur Datenbank
  $conn = new mysqli($servername, $username, $password, $dbname);

  //Überpüfen die Verbindung zur Datenbank
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
}

function selectCategories()
{
  $conn = connect();
  $sql = "SELECT * FROM boot_categorie";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $categories[] = $row;
    }
  } else {
    $categories = [];
  }
  $result->free_result();
  $conn->close();
  return  $categories;
}

function selectBoote($category_slug)
{
  $conn = connect();
  $sql = "SELECT * FROM boat WHERE category_slug = '" . $category_slug . "'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $boote[] = $row;
    }
  } else {
    $boote = [];
  }
  $result->free_result();
  $conn->close();
  return  $boote;
}

function getMinPrice()
{
  $conn = connect();
  $sql = "SELECT category_slug, MIN(price) FROM boat GROUP BY category_slug";

  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $minPrices[$row['category_slug']] = $row['MIN(price)'];
    }
  } else {
    $minPrices = [];
  }
  $result->free_result();
  $conn->close();

  return $minPrices;
}

function createOrder($boot_id, $name, $email, $date, $time, $user_id)
{
  $conn = connect();
  $query = $conn->query("SELECT * FROM users WHERE id = '$user_id'");
  $user = $query->fetch_assoc();

  if ($user) {
    $name = $user['first_name'] . ' ' . $user['last_name'];
    $email = $user['email_form'];
  }

  $stmt = $conn->prepare("INSERT INTO buchung (`boot_id`, `name`, `email`, `date`, `time`)
VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("dssss", $boot_id, $name, $email, $date, $time);
  $result = $stmt->execute();

  $stmt->close();
  $conn->close();

  return $result;
}

function creatUser($firsName, $lastName, $email, $password)
{
  $conn = connect();
  $password = md5($password . "qjkflcm894");
  $stmt = $conn->prepare("INSERT INTO users (`first_name`, `last_name`, `email_form`, `password_form`)
VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $firsName, $lastName, $email, $password);
  $result = $stmt->execute();
  $stmt->close();
  $conn->close();

  return $result;
}

function authUser($email, $password)
{
  $conn = connect();
  $password = md5($password . "qjkflcm894");
  $result = $conn->query("SELECT * FROM users WHERE email_form = '$email' AND password_form = '$password'");
  $user = $result->fetch_assoc();

  $conn->close();

  return $user;
}
