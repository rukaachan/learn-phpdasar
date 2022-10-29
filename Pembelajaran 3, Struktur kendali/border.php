<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris {
            color: silver;
        }
    </style>
</head>
<body>
<table border="1" cellspanding="5" cellspacing="0">
        <?php for($i = 1; $i <= 3; $i++): ?>
            <?php if( $i %2 == 1):?>
            <tr class="warna-baris">
        <?php else: ?>
            <tr>
        <?php endif; ?>
                <?php for($j = 1; $j <= 5;$j++): ?>
                    <td><?php echo "$i, $j";?></td>
                    <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
 <!-- PENJELASAN  -->
<!-- <table border="1" cellspanding="5" cellspacing="0">
        <?php for($i = 1; $i <= 3; $i++): ?>
            <?php if( $i %2 == 1):?>
            <tr class="warna-baris">
        <?php else: ?>
            <tr>
        <?php endif; ?>
                <?php for($j = 1; $j <= 5;$j++): ?>
                    <td><?php echo "$i, $j";?></td>
                    <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table> --> 
<!--  // $i = 1 + <= 3, hasil ; 123
    <!-- <?php for($i = 1; $i <= 3; $i++): ?> 
            <?php if( $i %2 == 1):?> // lanjut, $i jumlah ya ada 3 - 3 % 2 (3 bagi 2, hasil sisa 1), yang berati
                // setiap do baris 1 dan dijeda 1 baris, akan warna silver;
            <tr class="warna-baris">
        <?php else: ?>
            <tr>
    <!-- <?php endif; ?> -->