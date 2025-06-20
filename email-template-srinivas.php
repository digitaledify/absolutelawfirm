<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
</head>
<body style="font-family: Arial, sans-serif;">

    <div style="background-color: #f4f4f4; padding: 20px; border-radius: 10px;">
        <h2 style="color: #333;">Hello, <?php echo $name; ?>!</h2>
        <p style="color: #333;">Thank you for contacting us</p>
        
        <hr style="border: 1px solid #ccc;">

        <p style="color: #333;">Here are the details:</p>
        <ul style="color: #333;">
            <li><strong>Name:</strong> <?php echo $name; ?></li>
            <li><strong>Phone:</strong><?php echo $phone; ?> </li>
            <li><strong>Email:</strong> <?php echo $email; ?></li>
            <li><strong>Organization:</strong> <?php echo $organization; ?>  </li>
            <li><strong>Message:</strong> <?php echo $message; ?> </li>
        </ul>

        <p style="color: #333;">Thank you!</p>
    </div>

</body>
</html>
