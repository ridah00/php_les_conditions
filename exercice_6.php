<?php 
$dark_momde = (true);
$appearance = ($dark_momde) ? 'light' : 'dark' ;
?>












<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
                <style>
                .dark {
                color: white;
                background-color: black;
                border: 1px solid black;
                }
                .light {
                color: black;
                background-color: light-grey;
                border: 1px solid black;
                }
                </style>
</head>
<body>
    
<div class="container">
<input type="checkbox" id="dark_mode" name="dark_mode" <?= ($dark_momde)? 'checked' : "" ; ?>>
<label for="dark_mode">dark mode</label>
<div id="myElement" class='<?= $appearance ?>' >
<p>Hello World</p>
</div>
</div>
  

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>