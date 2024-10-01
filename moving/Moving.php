<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    
    <style>
      @keyframes slideRight {
        from {
          transform: translateX(0);
        }
        to {
          transform: translateX(-100%);
        }
      }

      @keyframes slideLeft {
        from {
          transform: translateX(-100%);
        }
        to {
          transform: translateX(0);
        }
      }

      .logos,
      .logos2,
      .logos3 {
        overflow: hidden;
        padding: 10px 0;
        background: white;
        white-space: nowrap;
        position: relative;
      }

      .logos:before,
      .logos:after,
      .logos2:before,
      .logos2:after,
      .logos3:before,
      .logos3:after {
        position: absolute;
        top: 0;
        width: 250px;
        height: 100%;
        content: "";
        z-index: 2;
      }

      .logos:before,
      .logos2:before,
      .logos3:before {
        left: 0;
        background: linear-gradient(to left, rgba(255, 255, 255, 0), white);
      }

      .logos:after,
      .logos2:after,
      .logos3:after {
        right: 0;
        background: linear-gradient(to right, rgba(255, 255, 255, 0), white);
      }

      .logos:hover .logos-slide,
      .logos2:hover .logos-slide-middle,
      .logos3:hover .logos-slide {
        animation-play-state: paused;
      }

      .logos-slide {
        display: inline-block;
        animation: 35s slideRight infinite linear;
      }

      .logos-slide img {
        height: 25px;
        margin: 0 5px;
        padding-left: 15px;
        padding-right: 15px;
        padding-top: 10px;
        padding-bottom: 10px;
        border: 0.5px solid black;
        border-radius: 12px;
        background-color: yellow;
      }

      .logos-slide-middle {
        display: inline-block;
        animation: 35s slideLeft infinite linear;
      }

      .logos-slide-middle img {
        height: 25px;
        margin: 0 5px;
        padding-left: 15px;
        padding-right: 15px;
        padding-top: 10px;
        padding-bottom: 10px;
        border: 0.5px solid black;
        border-radius: 10px;
        background-color: yellow;
      }
    </style>
  </head>
  <body>
    <div class="logos">
      <div class="logos-slide">
        <img src="./logos/3m.svg" />
        <img src="./logos/barstool-store.svg" />
        <img src="./logos/budweiser.svg" />
        <img src="./logos/buzzfeed.svg" />
        <img src="./logos/forbes.svg" />
        <img src="./logos/macys.svg" />
        <img src="./logos/menshealth.svg" />
        <img src="./logos/mrbeast.svg" />
      </div>

      <div class="logos-slide">
        <img src="./logos/3m.svg" />
        <img src="./logos/barstool-store.svg" />
        <img src="./logos/budweiser.svg" />
        <img src="./logos/buzzfeed.svg" />
        <img src="./logos/forbes.svg" />
        <img src="./logos/macys.svg" />
        <img src="./logos/menshealth.svg" />
        <img src="./logos/mrbeast.svg" />
      </div>
    </div>

    <div class="logos2">
      <div class="logos-slide-middle">
        <img src="./logos/3m.svg" />
        <img src="./logos/barstool-store.svg" />
        <img src="./logos/budweiser.svg" />
        <img src="./logos/buzzfeed.svg" />
        <img src="./logos/forbes.svg" />
        <img src="./logos/macys.svg" />
        <img src="./logos/menshealth.svg" />
        <img src="./logos/mrbeast.svg" />
      </div>

      <div class="logos-slide-middle">
        <img src="./logos/3m.svg" />
        <img src="./logos/barstool-store.svg" />
        <img src="./logos/budweiser.svg" />
        <img src="./logos/buzzfeed.svg" />
        <img src="./logos/forbes.svg" />
        <img src="./logos/macys.svg" />
        <img src="./logos/menshealth.svg" />
        <img src="./logos/mrbeast.svg" />
      </div>
    </div>

    <div class="logos3">
      <div class="logos-slide">
        <img src="./logos/3m.svg" />
        <img src="./logos/barstool-store.svg" />
        <img src="./logos/budweiser.svg" />
        <img src="./logos/buzzfeed.svg" />
        <img src="./logos/forbes.svg" />
        <img src="./logos/macys.svg" />
        <img src="./logos/menshealth.svg" />
        <img src="./logos/mrbeast.svg" />
      </div>

      <div class="logos-slide">
        <img src="./logos/3m.svg" />
        <img src="./logos/barstool-store.svg" />
        <img src="./logos/budweiser.svg" />
        <img src="./logos/buzzfeed.svg" />
        <img src="./logos/forbes.svg" />
        <img src="./logos/macys.svg" />
        <img src="./logos/menshealth.svg" />
        <img src="./logos/mrbeast.svg" />
      </div>
    </div>
  </body>
</html>

</body>
</html>