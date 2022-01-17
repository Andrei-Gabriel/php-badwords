<?php 
    $explicit = "Lorem ipsum dolor sit amet ipsum adipisicing elit. Ipsum est iusto minima molestias non error quisquam, molestiae ipsum enim, ipsum accusantium at nostrum officia? Architecto cupiditate perspiciatis repellat consequuntur nobis! Lorem ipsum dolor sit amet consectetur adipisicing elit. ipsum est iusto minima molestias non error quisquam, molestiae ipsum enim, laudantium accusantium at nostrum officia? ipsum cupiditate perspiciatis ipsum consequuntur nobis! Lorem ipsum dolor sit amet consectetur adipisicing elit. ipusm est iusto minima molestias non error quisquam, molestiae ipsum enim, laudantium accusantium at nostrum officia? Architecto cupiditate perspiciatis repellat consequuntur nobis!";
    
    $censored = str_replace($_GET["censoredWord"], "***", $explicit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
</head>
<body>
    <h2>Explicit</h2>
    <h3>Lunghezza: <?php echo strlen($explicit) ?></h3>
    <p><?php echo $explicit; ?></p>

    <h2>Censored</h2>
    <h3>Lunghezza: <?php echo strlen($censored) ?></h3>
    <p><?php echo $censored; ?></p>
</body>
</html>