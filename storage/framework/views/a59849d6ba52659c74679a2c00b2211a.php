<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form submission</title>
</head>
<body style="font-family: sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <h2 style="color: #111;">Νέο μήνυμα από τη φόρμα επικοινωνίας</h2>

    <p><strong>Όνομα:</strong> <?php echo e($senderName); ?></p>
    <p><strong>Email:</strong> <?php echo e($senderEmail); ?></p>
    <p><strong>Θέμα:</strong> <?php echo e($contactSubject); ?></p>

    <hr style="border: none; border-top: 1px solid #eee; margin: 20px 0;">

    <p><strong>Μήνυμα:</strong></p>
    <div style="background: #f5f5f5; padding: 15px; border-radius: 6px; white-space: pre-wrap;"><?php echo e($messageBody); ?></div>

    <p style="margin-top: 24px; font-size: 12px; color: #666;">Αποστάλθηκε από <?php echo e(config('app.name')); ?> — <?php echo e(now()->toDateTimeString()); ?></p>
</body>
</html>
<?php /**PATH /var/www/vhosts/oikodomikigonia.gr/resources/views/emails/contact.blade.php ENDPATH**/ ?>