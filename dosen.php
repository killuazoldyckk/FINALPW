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

if(isset($_POST['simpan'])){

    $query = mysqli_query($conn, "UPDATE mahasiswa SET 
            nama            ='$_POST[nama]',
            jenis_kelamin   ='$_POST[jk]',
            fakultas        ='$_POST[fak]' WHERE nim='$_POST[nim]' ");
    if ($query){
        $message[] = '<h4 class="result">data berhasil diupdate!</h4>';
        echo "<meta http-equiv='refresh' url=user.php'>";
    } else {
        $message[] = '<h4 class="result">data gagal diupdate!</h4>';
        echo mysqli_error();
    }

    }
 ?>


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
            <p class="text-center"><a href="?hal=pegawai_tambah" class="btn btn-primary">Tambah</a></p>
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
                            <a class="btn btn-warning" onclick="openPopup()"> Edit</a>
                            <a href="hapus_user.php?nim=<?php echo $fetch_user['nim'];?>" class="btn btn-danger"> Hapus</a>
                        </td>
                    </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="bg-modal" id="modal"> 
            <div class="modal-content">
                <div class="close">
                    <h3><a><i class="fa fa-window-close" aria-hidden="true" onclick="closePopup()"></i></a></h3>
                </div>
                <div class="icon">
                    <h3><i class="fas fa-edit"></i></h3>
                </div>
                <h3 class="text-center mb-3">Edit Data</h3>
                <form method="post">  
                    <table>
                        <tr>
                            <td><input class="box" type="hidden" name="nim" value="<?php echo $fetch_user['nim']; ?>"></td>
                        </tr>
                        <tr>
                            <td class="text-start">Nama<i class="fa fa-close" style="color: red;"></i></td>
                            <td> : <input class="box" type="text" name="nama" value="<?php echo $fetch_user['nama']; ?>"></td>
                        </tr>
                        <tr>
                            <?php
                            if($fetch_user['jenis_kelamin'] == "L"){
                                $l = " checked";
                                $p = "";
                            }else {
                                $l = "";
                                $p = " checked";
                            }
                            ?>
                            <td class="jk text-start">Jenis_Kelamin</td>
                            <td>: 
                                <input type="radio" name="jk" value="L" <?php echo $l ?>> Laki-Laki
                                <input type="radio" name="jk" value="P" <?php echo $p ?>> Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td class="text-start">Fakultas</td>
                            <td> : <input class="box" type="text" name="fak" value="<?php echo $fetch_user['fakultas']; ?>"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="btn btn-success text-center" name="simpan">Simpan</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <script>
        let popup = document.getElementById("modal");
        function openPopup(){
            popup.classList.add("pop-bg-modal");
        }
        function closePopup(){
            popup.classList.remove("pop-bg-modal");
        }
    </script>
    

</body>
</html>