<!DOCTYPE html>
<html>
<head>
    <title>Latihan array</title>
    <style>
        .kotak {
            widht: 10px;
            height: 10px:
            background-color: #bada55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rorate( 360deg);
            border-radius: 50%;
        }
      .clear  {
          clear: both;
        }
  </style>
</head>
<body>

<?php
$angka = [
         [1,2,3],
         [4,5,6],
         [7,8,9]
];
?>
<?php foreach( $angka as $a ) : ?>
    <?php foreach( $a as $b )  : ?>
       <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>


 </body>
