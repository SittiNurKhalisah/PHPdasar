<?php
if(isset($_POST["submit"])){
    $quiz = $_POST["quiz"];
    $uts= $_POST["uts"];
    $uas = $_POST["uas"];

    $na = ($quiz * 0.2) + ($uts * 0.3) + ($uas * 0.5);
    $result = "";
    
    if ($na >= 80 && $na <= 100) {
        $result = "A";
    }
    elseif ($na < 80 && $na >=50) {
        $result = "B";
    }
    else {
        $result = "C";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            row-gap: 1rem;
            width: 200px;
        }

        button {
            width: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="post">
            <input type="number" name="quiz" placeholder="masukkan nilai quiz">
            <input type="number" name="uts" placeholder="masukkan nilai uts">
            <input type="number" name="uas" placeholder="masukkan nilai uas">
            <button type="submit" name="submit">Kirim</button>
        </form>
    </div>
    <div class="result">
        <h1>perhitungan nilai akhir</h1>
        <?php if (isset($_POST["submit"])) : ?>
            <table>
                <tr>
                    <td><?= $_POST["quiz"] ?></td>
                    <td><?= $_POST["uts"] ?></td>
                    <td><?= $_POST["uas"] ?></td>
                </tr>
            </table>
            <p>nilai akhir = <?= $na ?></p>
            <p>predikat = <?= $result ?></p>
        <?php endif; ?>


    </div>
    
</body>

</html>
