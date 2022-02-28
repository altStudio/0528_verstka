<?php
  require_once "../libs/Mobile_Detect.php";

  $detect = new Mobile_Detect();

  if (!$detect->isMobile()) {
    header('Location: ../index.html'); // страница для переадресации
    exit(0);
  }else{
    header('Location: /index.html');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Metapax</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope:300,regular&amp;subset=cyrillic,latin" media="all">
</head>

<body>
  <style>
    @font-face {
      font-family: 'Agrandir Grand';
      src: url('../fonts/61b33f8733b808fd7fa4f572_Agrandir_Grand_Heavy_800.otf') format('opentype');
      font-weight: 800;
      font-style: normal;
      font-display: swap;
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    body {
      position: relative;
      margin: 0;
      padding: 0;
      background-color: #161616;
      background: #161616 url('../images/bg-php.png') no-repeat;
      background-size: cover;
      text-align: center;
      font-family: 'Agrandir Grand', sans-serif;
      font-weight: 800;
      font-size: 18px;
      line-height: 1.3;
      color: #ffffff;

      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;

      overflow: hidden;
    }

    .wrapper {
      position: relative;
      z-index: 1;

      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;

      height: calc(var(--vh,1vh) * 100);

      overflow: hidden;
      justify-content: space-between;
    }

    .content {
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .footer {
      flex-direction: column;
      display: flex;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: center;
    }
    .footer div {
      display: flex;
      justify-content: center;
    }
    .footer .text {
      font-weight: 600;
      font-size: 16px;
      line-height: 138%;
      letter-spacing: -0.02em;
      padding-bottom: 20px;
      font-family: Manrope;
    }

    .content .text {
      margin-bottom: 10px;
      font-weight: 800;
      font-size: 20px;
      line-height: 138%;
    }

    a {
      color: #F48B44;
    }

    .link-to-social-networks {
      display: flex;
      margin-right: 20px;
      font-size: 12px;
    }

    .link-to-social-networks:last-child {
      margin-right: 0;
    }

    .link-to-social-networks svg {
      width: auto;
      height: 33px;
    }
    .to-desktop {
      font-weight: 600;
      font-size: 18px;
      line-height: 138%;
      letter-spacing: -0.02em;
      font-family: Manrope;
    }
    .mob-logo {
      width: 173px;
    }
    .wrap-for-glasses {
      display: flex;
      justify-content: space-between;
      flex-direction: column;
      height: 100%;
      padding: 30px 0;
      align-items: center;
    }
  </style>

  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Metapax</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope:300,regular&amp;subset=cyrillic,latin" media="all">
</head>

<body>
  <style>
    @font-face {
      font-family: 'Agrandir Grand';
      src: url('../fonts/61b33f8733b808fd7fa4f572_Agrandir_Grand_Heavy_800.otf') format('opentype');
      font-weight: 800;
      font-style: normal;
      font-display: swap;
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    body {
      position: relative;
      margin: 0;
      padding: 0;
      background-color: #161616;
      background: #161616 url('../images/bg-php.png') no-repeat;
      background-size: cover;
      text-align: center;
      font-family: 'Agrandir Grand', sans-serif;
      font-weight: 800;
      font-size: 18px;
      line-height: 1.3;
      color: #ffffff;

      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;

      overflow: hidden;
    }

    .wrapper {
      position: relative;
      z-index: 1;

      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;

      height: calc(var(--vh,1vh) * 100);

      overflow: hidden;
      justify-content: space-between;
    }

    .content {
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .footer {
      flex-direction: column;
      display: flex;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: center;
    }
    .footer div {
      display: flex;
      justify-content: center;
    }
    .footer .text {
      font-weight: 600;
      font-size: 16px;
      line-height: 138%;
      letter-spacing: -0.02em;
      padding-bottom: 20px;
      font-family: Manrope;
    }

    .content .text {
      margin-bottom: 10px;
      font-weight: 800;
      font-size: 20px;
      line-height: 138%;
    }

    a {
      color: #F48B44;
    }

    .link-to-social-networks {
      display: flex;
      margin-right: 20px;
      font-size: 12px;
    }

    .link-to-social-networks:last-child {
      margin-right: 0;
    }

    .link-to-social-networks svg {
      width: auto;
      height: 33px;
    }
    .to-desktop {
      font-weight: 600;
      font-size: 18px;
      line-height: 138%;
      letter-spacing: -0.02em;
      font-family: Manrope;
    }
    .mob-logo {
      width: 173px;
    }
    .wrap-for-glasses {
      display: flex;
      justify-content: space-between;
      flex-direction: column;
      height: 100%;
      padding: 30px 0;
      align-items: center;
    }
    .wrap-img {
      height: 45%;
    }
    .wrap-img img {
      width: 80%;
    }
  </style>

  <div class="wrapper">
    <div class="wrap-for-glasses">
        <img src="../images/main-logo.svg" class="mob-logo">
        <div class="content">
          <div class="text">Mobile website <br />is now in progress</div>
          <div class="to-desktop">Desktop version is pure joy!</div>
        </div>
      <div class="footer">
        <div class="text">Follow us on social media to <br />stay informed and inspired:</div>
        <div>
          <a class="link-to-social-networks" href="https://t.me/metapax">
            <svg viewBox="0 0 71 72" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M35.6837 0.160254C26.4276 0.204478 17.5653 4.00007 11.0354 10.7167C4.50556 17.4334 0.839743 26.5244 0.839844 36.001C0.839844 45.5066 4.5281 54.6229 11.0932 61.3443C17.6584 68.0658 26.5626 71.8418 35.8471 71.8418C45.1316 71.8418 54.0359 68.0658 60.601 61.3443C67.1661 54.6229 70.8544 45.5066 70.8544 36.001C70.8544 26.4955 67.1661 17.3792 60.601 10.6578C54.0359 3.93633 45.1316 0.160254 35.8471 0.160254C35.7927 0.160124 35.7382 0.160124 35.6837 0.160254ZM50.1592 21.7364C50.451 21.7304 51.0957 21.8051 51.5158 22.1546C51.7949 22.4027 51.9729 22.7491 52.0146 23.1252C52.0613 23.403 52.1197 24.0392 52.073 24.535C51.5479 30.2038 49.2666 43.9547 48.1055 50.3015C47.6154 52.9896 46.6498 53.8886 45.7133 53.9752C43.6829 54.1693 42.1397 52.6013 40.1705 51.2812C37.0899 49.2114 35.3483 47.9241 32.3581 45.905C28.9011 43.5754 31.1416 42.2911 33.1107 40.2004C33.6271 39.6508 42.5831 31.3089 42.7581 30.5532C42.7786 30.4577 42.799 30.1052 42.5948 29.9201C42.3906 29.7349 42.0872 29.7976 41.8684 29.8484C41.5591 29.9201 36.6377 33.2532 27.104 39.839C25.7038 40.8246 24.4406 41.3025 23.3058 41.2726C22.0572 41.2487 19.6533 40.5528 17.865 39.9585C15.6713 39.2267 13.9296 38.8414 14.0813 37.6019C14.1601 36.9568 15.0295 36.2967 16.6865 35.6217C26.8911 31.0699 33.6942 28.0683 37.1015 26.6197C46.8219 22.4801 48.8436 21.7603 50.1592 21.7364Z" fill="white"></path>
            </svg>
          </a>
          <a class="link-to-social-networks" href="http://facebook.com/metapax.io">
            <svg viewBox="0 0 73 72" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M72.2078 36.2185C72.2078 16.3053 56.2504 0.160156 36.5687 0.160156C16.8871 0.160156 0.929688 16.3053 0.929688 36.2185C0.929688 54.2176 13.9617 69.1338 31.0001 71.8382V46.6424H21.9508V36.2155H31.0001V28.2767C31.0001 19.241 36.3222 14.247 44.4628 14.247C48.3593 14.247 52.44 14.9531 52.44 14.9531V23.8265H47.9435C43.5154 23.8265 42.1344 26.606 42.1344 29.4576V36.2185H52.0183L50.4383 46.6454H42.1344V71.8411C59.1758 69.1338 72.2078 54.2146 72.2078 36.2185Z" fill="white"></path>
            </svg>
          </a>
          <a class="link-to-social-networks" href="http://twitter.com/metapax_io">
            <svg viewBox="0 0 81 66" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M79.9423 8.48273C76.9776 9.78802 73.837 10.6496 70.6213 11.0398C74.0069 9.00488 76.5419 5.81361 77.758 2.05537C74.6202 3.88658 71.1426 5.21956 67.4406 5.96194C64.9982 3.35018 61.7618 1.61793 58.2339 1.03419C54.706 0.450451 51.0841 1.04788 47.9306 2.73371C44.7771 4.41954 42.2685 7.09943 40.7943 10.3572C39.3201 13.615 38.9628 17.2685 39.7779 20.7502C26.2831 20.1134 14.3291 13.6299 6.32128 3.83708C4.86554 6.31107 4.10623 9.13281 4.12384 12.0033C4.12384 17.6454 6.99437 22.6045 11.3431 25.5179C8.76572 25.4358 6.2453 24.739 3.99186 23.4854V23.6834C3.9904 27.4329 5.28613 31.0674 7.65924 33.9703C10.0323 36.8732 13.3366 38.8658 17.0116 39.6099C14.6303 40.248 12.1363 40.3438 9.71313 39.8904C10.7562 43.1173 12.7805 45.9381 15.5037 47.9592C18.227 49.9803 21.5132 51.1009 24.9039 51.1646C19.1612 55.6715 12.0705 58.1176 4.77053 58.11C3.48374 58.11 2.20025 58.0341 0.910156 57.889C8.35279 62.6545 17.0066 65.1841 25.8442 65.1775C55.7143 65.1775 72.0302 40.4447 72.0302 19.0344C72.0302 18.3415 72.0302 17.6487 71.9807 16.9558C75.1679 14.6622 77.9172 11.8146 80.0973 8.54872L79.9423 8.48273Z" fill="white"></path>
            </svg>
          </a>
          <a class="link-to-social-networks" href="http://youtu.be/CX1AQl8d758">
            <img src="../images/youtube.png">
          </a>
          <a class="link-to-social-networks" href="http://instagram.com/metapax.io">
            <svg viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M30.4399 0.617188C22.2511 0.617188 21.2287 0.654364 18.0134 0.795634C14.8032 0.94434 12.6178 1.4425 10.6962 2.1786C8.71432 2.937 7.03133 3.95563 5.35588 5.60874C3.68043 7.26185 2.64552 8.91992 1.87938 10.8779C1.13334 12.7739 0.625937 14.9301 0.477733 18.0975C0.327018 21.2699 0.296875 22.2786 0.296875 30.3583C0.296875 38.438 0.334554 39.4467 0.477733 42.6191C0.628448 45.7841 1.13334 47.9428 1.87938 49.8388C2.64803 51.7918 3.68043 53.4548 5.35588 55.1079C7.03133 56.7585 8.71181 57.7821 10.6962 58.538C12.6204 59.2717 14.8057 59.7748 18.0134 59.921C21.2287 60.0697 22.2511 60.0994 30.4399 60.0994C38.6288 60.0994 39.6511 60.0623 42.8664 59.921C46.0741 59.7723 48.262 59.2717 50.1836 58.538C52.163 57.7796 53.8485 56.7585 55.5239 55.1079C57.1969 53.4548 58.2343 51.7992 59.0004 49.8388C59.744 47.9428 60.2539 45.7841 60.4021 42.6191C60.5528 39.4467 60.583 38.438 60.583 30.3583C60.583 22.2786 60.5453 21.2699 60.4021 18.0975C60.2514 14.9326 59.744 12.7714 59.0004 10.8779C58.2318 8.9224 57.1969 7.26185 55.5239 5.60874C53.8485 3.95563 52.1705 2.93452 50.1836 2.1786C48.262 1.4425 46.0741 0.941862 42.8664 0.795634C39.6511 0.646929 38.6288 0.617188 30.4399 0.617188ZM30.4399 5.97059C38.4856 5.97059 39.4451 6.01025 42.6227 6.14656C45.5617 6.28287 47.1567 6.76369 48.2168 7.17511C49.6285 7.71293 50.6282 8.35732 51.6882 9.39578C52.7407 10.4367 53.3938 11.4256 53.9389 12.8185C54.3509 13.8644 54.8432 15.4382 54.9763 18.3379C55.1195 21.4756 55.1522 22.4174 55.1522 30.3583C55.1522 38.2992 55.1145 39.2435 54.9663 42.3787C54.8131 45.2785 54.3232 46.8523 53.9088 47.8982C53.3461 49.291 52.7056 50.2774 51.6506 51.3233C50.5981 52.3618 49.5807 53.0062 48.1841 53.544C47.1291 53.9505 45.5089 54.4362 42.57 54.5676C39.3698 54.7089 38.4278 54.7411 30.3646 54.7411C22.2988 54.7411 21.3568 54.7039 18.1591 54.5577C15.2177 54.4065 13.5975 53.9232 12.5425 53.5143C11.1132 52.9591 10.131 52.3271 9.07855 51.2862C8.02103 50.2477 7.34532 49.2439 6.81782 47.8659C6.40335 46.825 5.91604 45.2264 5.76281 42.3266C5.64978 39.2038 5.60959 38.2397 5.60959 30.3211C5.60959 22.4001 5.64978 21.4335 5.76281 18.2735C5.91604 15.3737 6.40335 13.7776 6.81782 12.7367C7.34532 11.324 8.02103 10.3574 9.07855 9.31399C10.131 8.27553 11.1132 7.60635 12.5425 7.08836C13.5975 6.67694 15.1825 6.19365 18.1215 6.04494C21.3242 5.93341 22.2661 5.89624 30.3269 5.89624L30.4399 5.97059ZM30.4399 15.0862C21.8868 15.0862 14.9615 21.9267 14.9615 30.3583C14.9615 38.7974 21.8944 45.6304 30.4399 45.6304C38.993 45.6304 45.9184 38.7899 45.9184 30.3583C45.9184 21.9193 38.9855 15.0862 30.4399 15.0862ZM30.4399 40.272C24.8886 40.272 20.3922 35.8356 20.3922 30.3583C20.3922 24.881 24.8886 20.4446 30.4399 20.4446C35.9913 20.4446 40.4876 24.881 40.4876 30.3583C40.4876 35.8356 35.9913 40.272 30.4399 40.272ZM50.1484 14.484C50.1484 16.4543 48.5257 18.0529 46.5313 18.0529C44.5343 18.0529 42.9141 16.4519 42.9141 14.484C42.9141 12.5161 44.5368 10.9175 46.5313 10.9175C48.5232 10.9151 50.1484 12.5161 50.1484 14.484Z" fill="white"></path>
            </svg>
          </a>
          
          
        </div>
      </div>
    </div>
    <div class="wrap-img">
      <img src="../images/Layer-1.png">
    </div>
  </div>

  <script>
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty("--vh", `${vh}px`);

    window.addEventListener("resize", () => {
      let vh = window.innerHeight * 0.01;
      document.documentElement.style.setProperty("--vh", `${vh}px`);
    });
  </script>
</body>

</html>