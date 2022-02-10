<!-- Kristian Anwar - 2301853786 -->
<?php
    $conn = mysqli_connect('mysql','admin','2301853786','trucorp-db');
    
    if (!$conn){
        echo "tidak bisa konek ke MySQL" . PHP_EOL;
        exit;
    }

    echo "Sukses connect ke MySQL";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2301853786 | Kristian Anwar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h3>Berikut data User yang tersimpan dalam database trucorp</h3>
    <table>
        <tr style="background:royalblue;">
            <td>ID</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Jabatan</td>
        </tr>
        <?php
            $QUERY = "SELECT * FROM users";
            $result = mysqli_query($conn, $QUERY);

            if($result){
                while ($data = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $data['ID'] ?></td>
                    <td><?php echo $data['Nama'] ?></td>
                    <td><?php echo $data['Alamat'] ?></td>
                    <td><?php echo $data['Jabatan'] ?></td>
                </tr>
                <?php }
            } else {
                echo "[!] NO DATA FOUND";
            }
            
            $result->close();
            mysqli_close($conn);
        ?>
    </table>
</body>
</html>

<style>
    table, th, td {
        border: 1px solid black;
    }
</style>