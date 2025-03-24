<!DOCTYPE html>
<html>
<head>
    <title>Email Sender</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input, textarea { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; }
        textarea { height: 150px; }
        button { background: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; }
        .message { padding: 10px; margin: 15px 0; border-radius: 4px; }
        .success { background: #dff0d8; color: #3c763d; }
        .error { background: #f2dede; color: #a94442; }
    </style>
</head>
<body>
    <h1>Send Email</h1>
    <form action="mail.php" method="POST">
        <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Your Email:</label>
            <input type="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" required></textarea>
        </div>
        <button type="submit">Send Message</button>
    </form>

    <?php
    if (isset($_GET['status'])) {
        $status = $_GET['status'];
        $message = $_GET['message'] ?? '';
        $class = ($status === 'success') ? 'success' : 'error';
        echo "<div class='message $class'>$message</div>";
    }
    ?>
</body>
</html>