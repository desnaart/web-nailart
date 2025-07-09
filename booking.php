<?php
session_start();
include("koneksi.php");

if (!isset($_SESSION['logged_in'])) {
    header("Location: login.html");
    exit();
}

$tanggal_hari_ini = date('Y-m-d');

// Booking yang sudah lewat
$query_sudah = "SELECT * FROM bookings WHERE date < '$tanggal_hari_ini' ORDER BY date DESC";
$result_sudah = $koneksi->query($query_sudah);

// Booking yang belum dilayani
$query_belum = "SELECT * FROM bookings WHERE date >= '$tanggal_hari_ini' ORDER BY date ASC";
$result_belum = $koneksi->query($query_belum);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Booking</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f0f0f5;
      padding: 30px;
    }

    h1, h2 {
      color: #6A1B9A;
    }

    .table-container {
      margin-bottom: 40px;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
    }

    th, td {
      padding: 10px 15px;
      border-bottom: 1px solid #ddd;
      text-align: left;
    }

    th {
      background-color: #f3e5f5;
      color: #4A148C;
    }

    tr:hover {
      background-color: #f9f9f9;
    }

    .logout-btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4A148C;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      margin-top: 20px;
    }

    .logout-btn:hover {
      background-color:rgb(110, 42, 194);
    }
  </style>
</head>
<body>

  <div class="table-container">
    <h2>Booking Belum Dilayani (Hari Ini & Mendatang)</h2>
    <table>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Layanan</th>
        <th>Tanggal</th>
        <th>Waktu</th>
      </tr>
      <?php
      if ($result_belum->num_rows > 0) {
          $no = 1;
          while($row = $result_belum->fetch_assoc()) {
              echo "<tr>
                      <td>$no</td>
                      <td>{$row['name']}</td>
                      <td>{$row['email']}</td>
                      <td>{$row['service']}</td>
                      <td>{$row['date']}</td>
                      <td>{$row['time']}</td>
                    </tr>";
              $no++;
          }
      } else {
          echo "<tr><td colspan='6'>Tidak ada booking yang belum dilayani.</td></tr>";
      }
      ?>
    </table>
  </div>

  <div class="table-container">
    <h2>Booking Sudah Lewat (Sudah Dilayani)</h2>
    <table>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Layanan</th>
        <th>Tanggal</th>
        <th>Waktu</th>
      </tr>
      <?php
      if ($result_sudah->num_rows > 0) {
          $no = 1;
          while($row = $result_sudah->fetch_assoc()) {
              echo "<tr>
                      <td>$no</td>
                      <td>{$row['name']}</td>
                      <td>{$row['email']}</td>
                      <td>{$row['service']}</td>
                      <td>{$row['date']}</td>
                      <td>{$row['time']}</td>
                    </tr>";
              $no++;
          }
      } else {
          echo "<tr><td colspan='6'>Belum ada booking yang sudah lewat.</td></tr>";
      }
      ?>
    </table>
  </div>

  <a href="logout.php" class="logout-btn">Logout</a>

</body>
</html>
