<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Manual Scroll Gallery</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html, body {
      height: 100%;
      overflow-y: auto;
      font-family: sans-serif;
      background: #f0f0f0;
    }

    .gallery {
      display: flex;
      flex-direction: column;
      gap: 48px;
      padding-top: 48px;
      padding-bottom: 48px;
    }

    .image-container {
      width: 100%;
      padding: 0;
    }

    .image-container img {
      width: 100%;
      height: auto;
      display: block;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    }

    @media (min-width: 1000px) {
      .image-container {
        padding-left: 1.5in;
        padding-right: 1.5in;
      }
    }

    .fixed-button {
      position: fixed;
      top: 50%;
      right: 20px;
      transform: translateY(-50%);
      background: #007bff;
      color: white;
      border: none;
      padding: 12px 18px;
      border-radius: 6px;
      z-index: 1000;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(0,0,0,0.3);
    }
	.fixed-top-bar {
  position: fixed;
  top: 0;
  width: 100%;
  background: #ffffff;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  z-index: 1001;
  padding-left: 0px;
}
body {
  padding-top: 100px; /* adjust to match fixed bar height */
}
  </style>
</head>
<body>
<div class="fixed-top-bar">
     <?php
	include('include_files.php');
	include('head.php');
	?>
</div>

  <div class="gallery">
    <div class="image-container">
      <img src="./assets/img/pdf/tv1.jpg" alt="Image 1" />
    </div>
    <div class="image-container">
      <img src="./assets/img/pdf/tv2.jpg" alt="Image 2" />
    </div>
    
    <!-- Add more images if needed -->
  </div>

  <button class="fixed-button">Fixed Button</button>

</body>
</html>
