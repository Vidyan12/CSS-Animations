<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Metadata for character set and viewport -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Page title -->
  <title>Interactive 3D Cube</title>

  <!-- Styles for the cube animation -->
  <style>
    /* Base styling for the entire page */
    body {
      perspective: 800px;
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color:black;
      overflow: hidden;
    }

    /* Styling for the rotating cube */
    .cube {
      --size: 200px; /* Size of the cube */
      --face-background: rgba(255, 255, 255, 0.9); /* Background color of each face */
      --border-color: #61dafb; /* Border color of each face */

      position: relative;
      width: var(--size);
      height: var(--size);
      transform-style: preserve-3d;
      transform: rotateX(45deg) rotateY(45deg);
      animation: rotateCube 8s infinite linear; /* Rotation animation */
      cursor: pointer;
      transition: transform 0.3s ease-in-out; /* Hover effect transition */
    }

    /* Styling for each face of the cube */
    .face {
      position: absolute;
      width: var(--size);
      height: var(--size);
      background: var(--face-background);
      border: 1px solid var(--border-color);
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 24px;
      font-weight: bold;
      user-select: none;
    }

    /* Hover effect on each face */
    .face:hover {
      transform: scale(1.1); /* Scale up on hover */
      box-shadow: 0 0 20px rgba(97, 218, 251, 0.8); /* Box shadow on hover */
    }

    /* Positioning and rotation for each face */
    .face:nth-child(1) { transform: translateZ(calc(var(--size) / 2)); }
    .face:nth-child(2) { transform: rotateY(90deg) translateZ(calc(var(--size) / 2)); }
    .face:nth-child(3) { transform: rotateY(180deg) translateZ(calc(var(--size) / 2)); }
    .face:nth-child(4) { transform: rotateY(-90deg) translateZ(calc(var(--size) / 2)); }
    .face:nth-child(5) { transform: rotateX(90deg) translateZ(calc(var(--size) / 2)); }
    .face:nth-child(6) { transform: rotateX(-90deg) translateZ(calc(var(--size) / 2)); }

    /* Keyframe animation for cube rotation */
    @keyframes rotateCube {
      from { transform: rotateX(0) rotateY(0); }
      to { transform: rotateX(360deg) rotateY(360deg); }
    }
  </style>
</head>
<body>
  <!-- Cube container with individual faces -->
  <div class="cube">
    <div class="face">Kill</div>
    <div class="face">Spare</div>
    <div class="face">Kill</div>
    <div class="face">Spare</div>
    <div class="face">Kill</div>
    <div class="face">Spare</div>
  </div>
</body>
</html>


