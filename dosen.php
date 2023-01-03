<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];


if(!isset($user_id)){
    header('location:index.php');
};

if(isset($_GET['logout'])){
    unset($user_id);
    session_destroy();
    header('location:index.php');
};

if(isset($_GET['hapus'])){
    $hapus_nim = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM `mahasiswa` WHERE nim = '$hapus_nim'") or die('query failed');
    header('location:dosen.php');
    }    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dosen | USU </title>

    <!-- import custom css -->
    <link rel="stylesheet" href="css/style_user.css">

    <!-- import bootsrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- import google fonts : Poppins & Caveat -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- import bootsrap icons -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">


</head>
<body>
    <!-- menu section -->
    <div class="menu pt-5">

        <?php
            $select_user = mysqli_query($conn, "SELECT * FROM `dosen` WHERE nip = '$user_id'") or die('query failed');
            if(mysqli_num_rows($select_user) > 0){
               $fetch_user = mysqli_fetch_assoc($select_user);
            };

        ?>

        <div class="logo text-center">
            <h2>Profil Saya</h2>
            <img src="images/<?php 
            if ($fetch_user['foto']=='')
            echo 'profile.png';
            else echo $fetch_user['foto']; ?>" width="100px">
            <h3 class="text-center pt-4"><?php echo $fetch_user['nip'] ?></h3>
            <p><?php echo $fetch_user['nama'] ?></p>
            <p><?php echo $fetch_user['fakultas'] ?></p>
        </div>

        <div class="exit">
            <a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('Apakah anda ingin keluar?');" class="delete-btn">
                <button>
                    <h4><i class="bi bi-box-arrow-left"></i> Keluar</h4>
                </button>
            </a>
        </div>
    </div>

    <!-- main section -->
    <div class="content">
        <!-- navbar -->
        <nav>
            <div class="d-md-flex">
                <div class="usernav ms-auto">
                    <p>Halo, <?php echo $fetch_user['nama']; ?> !</p>
                </div>
            </div>
        </nav>
        <!-- navbar -->

        <div class="profil container pb-4">
            <h3 style="color: #251965;" class="text-center p-4"><i class="bi bi-person-circle"></i> Data Saya</h3>
            <div class="d-md-flex flex-row">
                <div class="col-8 p-2">
                    <table>
                        <tr>
                            <td>NIP</td>
                            <td>:<?php echo $fetch_user['nip']; ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:<?php echo $fetch_user['nama']; ?></td>
                        </tr>
                        <tr>
                            <td>Fakultas</td>
                            <td>:<?php echo $fetch_user['fakultas']; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-4 p-2">
                    <p class="mb-0">Foto Profil</p>
                    <img class="mt-3" src="images/<?php 
                    if ($fetch_user['foto']=='')
                    echo 'profile.png';
                    else echo $fetch_user['foto']; ?>"><br>
                    <?php if($fetch_user['foto']=='') echo "<h3 class='pt-2' style='color:#fff'>Anda Belum Menambahkan Foto, Silahkan tambahkan</h3>";?>
                    <h3 class="btn btn-warning mt-3">Edit Foto</h3>
                </div>
            </div>     
        </div>
        <div class="edit m-4 pt-4">
            <h3 class="text-center">Daftar Mahasiswa</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Fakultas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $select_user = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY nim ASC");
                    $no = 0;
                    while($fetch_user = mysqli_fetch_array($select_user)){
                        $no++;
                    ?>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><img src="images/<?php echo $fetch_user['foto'];?>" width="100"></td>
                        <td><?php echo $fetch_user['nim'];?></td>
                        <td><?php echo $fetch_user['nama'];?></td>
                        <td><?php echo $fetch_user['jenis_kelamin'];?></td>
                        <td><?php echo $fetch_user['fakultas'];?></td>
                        <td>
                            <a href="dosen.php?hapus=<?php echo $fetch_user['nim']; ?>" class="btn btn-danger" onclick="return confirm('Hapus data mahasiswa ini?');"> Hapus</a>
                        </td>
                    </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>