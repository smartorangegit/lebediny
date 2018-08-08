<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>404 Помилка</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon.png">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>

    <?php include 'includes/header.php'; ?>
    <main class="error">
      <div class="wrapper">
        <div class="error_404 bold yellow">
          404
        </div>
        <p class="demi yellow">Вибачте, сторінку не знайдено</p>
        <div class="error_flex flex">
          <a class="border_link" href="/">На головну</a>
          <a class="border_link" href="javascript:history.go(-1)">Повернутись</a>

        </div>
      </div>

    </main>
    <style media="screen">
    .error{
      min-height: 100vh;
      background: url('/img/404-bg.jpg') center no-repeat;
      background-size: cover;
      text-align: center;
      padding-top: 110px;
      }
    .error p{font-size: 24px; text-transform: uppercase;}
    .error_404{
      font-size: 150px;
      text-align: center;
      margin: 20px auto 10px;
      background: url('/img/Round_logo.png') center center no-repeat;
      background-size: 250px;
      padding: 56px 0;
    }
    .error_flex{
      width: 100%;
       max-width: 620px;
       margin: 16px auto;
    }
    .error_flex .border_link{
      width: 49%;
      height: 46px;
      padding: 14px 0;
      text-align: center;
      text-transform: uppercase;
    }

    </style>
    <script src="/js/script.js"></script>

    </body>
    </html>
