<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع PHP بسيط</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            width: 100%;
        }

        h1 {
            color: #667eea;
            margin-bottom: 30px;
            text-align: center;
            font-size: 2.5em;
        }

        .info-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            border-right: 4px solid #667eea;
        }

        .info-box h2 {
            color: #764ba2;
            margin-bottom: 15px;
            font-size: 1.3em;
        }

        .info-box p {
            color: #555;
            line-height: 1.8;
            margin-bottom: 10px;
        }

        .info-box strong {
            color: #667eea;
        }

        .time-box {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            margin-top: 20px;
        }

        .time-box h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .time-box .time {
            font-size: 2em;
            font-weight: bold;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }

        .feature {
            background: #e9ecef;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }

        .feature-icon {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: #666;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🌟 مرحباً بك في موقع PHP 🌟</h1>

        <div class="info-box">
            <h2>معلومات الخادم</h2>
            <p><strong>إصدار PHP:</strong> <?php echo phpversion(); ?></p>
            <p><strong>نظام التشغيل:</strong> <?php echo php_uname('s'); ?></p>
            <p><strong>اسم الخادم:</strong> <?php echo gethostname(); ?></p>
        </div>

        <div class="info-box">
            <h2>معلومات الزائر</h2>
            <p><strong>عنوان IP:</strong> <?php echo $_SERVER['REMOTE_ADDR'] ?? 'غير متوفر'; ?></p>
            <p><strong>المتصفح:</strong> <?php echo $_SERVER['HTTP_USER_AGENT'] ?? 'غير متوفر'; ?></p>
        </div>

        <div class="time-box">
            <h3>الوقت والتاريخ الحالي</h3>
            <div class="time">
                <?php
                date_default_timezone_set('Asia/Riyadh');
                echo date('H:i:s');
                ?>
            </div>
            <p><?php echo date('l, d F Y'); ?></p>
        </div>

        <div class="features">
            <div class="feature">
                <div class="feature-icon">⚡</div>
                <strong>سريع</strong>
            </div>
            <div class="feature">
                <div class="feature-icon">🔒</div>
                <strong>آمن</strong>
            </div>
            <div class="feature">
                <div class="feature-icon">📱</div>
                <strong>متجاوب</strong>
            </div>
        </div>

        <div class="footer">
            <p>تم الإنشاء بواسطة Claude • <?php echo date('Y'); ?></p>
        </div>
    </div>
</body>
</html>
