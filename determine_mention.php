<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .mention {
            font-size: 14px;
        }
    </style>
</head>
<body>
  <?php
    $moyenne = 14;

    if ($moyenne >= 10) {
        $decision = "Admis";
    } else {
        $decision = "Éliminé";
    }

    if ($moyenne >= 17) {
        $mention = "Excellent";
        $mentionColorClass = "text-success";
    } elseif ($moyenne >= 16) {
        $mention = "Très Bien";
        $mentionColorClass = "text-primary";
    } elseif ($moyenne >= 14) {
        $mention = "Bien";
        $mentionColorClass = "text-info";
    } elseif ($moyenne >= 12) {
        $mention = "Assez Bien";
        $mentionColorClass = "text-warning";
    } else {
        $mention = "Passable";
        $mentionColorClass = "text-danger";
    }
  ?>

    <div class="container mt-5">
        <h1>Décision : <?php echo $decision; ?></h1>
        <h2 class="<?php echo $mentionColorClass; ?> mention">Mention : <?php echo $mention; ?></h2>
    </div>

</body>