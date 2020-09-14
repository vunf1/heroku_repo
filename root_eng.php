<?php 
$address_Server = "vunf1.coventry.domains"
?>
<!DOCTYPE>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <meta name="description" content="root folder page">
  <meta name="author" content="Maia">

  <title>Root page</title>

  <!-- Bootstrap core JavaScript -->
  <script src="helpers/jquery/jquery.min.js"></script>
  <script src="helpers/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="helpers/jquery-easing/jquery.easing.min.js"></script>

  <script src="js/resume.min.js"></script>

  <!-- Custom scripts for this template https://alertifyjs.org-->
  <script src="https://cdn.rawgit.com/alertifyjs/alertify.js/v1.0.10/dist/js/alertify.js"></script>

  <script src="js/alertify1.0.10.js"></script>

  <script src="js/modernizr2.8.2.js"></script>

  <script>
    /** remove [.php] from route on URL */
    // window.history.pushState("", "", '/root');
  </script>

  <script src="helpers/jquery/jquery.min.js"></script>
  <!-- Allertify styles -->
  <!-- JavaScript -->
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>

  <link rel="stylesheet" href="css/custom.css" />
  <!-- CSS -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css" />
  <!-- Default theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css" />
  <!-- Semantic UI theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css" />
  <!-- Bootstrap theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css" />

  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<link href="helpers/devicons/css/devicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
</head>


<body class="text-center bg-dark">
  <style>
    .copyleft {
      display: inline-block;
      transform: rotate(180deg);
    }
  </style>
  <div class="cover-container  w-100 h-100 p-3 mx-auto flex-column">

    <?php//  Body Content ?>
    <div class="container">
      <?php//  Body Head ?>

      <p style="width: 20%; height: 20%"  onclick="triggerDiv('Web-Based')">
      <img   style="width: 80%; height: 80%"  src="img/svg/apache.svg">
    </p>
      <br>
      <div id="Web-Based" style="display:none;">
        <a target="_blank" style="color: darkgrey;" class="btn " id="Project_Nexus"
          href="projects/Project_Nexus/">Project Nexus <span
            class="badge badge-light">2017</span></a>
        <br>

        <a target="_blank" style="color: darkgrey;" class="btn " id="Portfolio"
          href="https://<?php echo $address_Server ?>/">Portfolio <span class="badge badge-light">2018</span></a>
        <br>

        <a href="projects/RWP_releaseVersion.apk"><span id="RWP_releaseVersion.apk"
            class="badge badge-warnning">.APK</span></a><a target="_blank" style="color: darkgrey;" class="btn "
          id="real_world_project" href="real_world_project">Navigation Campus <span
            class="badge badge-light">2019</span></a>
        <br>
      </div>


      <button class="badge badge-info" onclick="triggerDiv('vb.NET')">vb.NET</button>
      <br>
      <div id="vb.NET" style="display:none;">

        <a style="color: darkgrey;" class="btn " id="vbNet_Software_2016.zip"
          href="projects/vbNet_Software_2016.zip">Report <span
            class="badge badge-light">2016</span></a>
        <br>
      </div>

      <p style="width: 10%; height: 10%" onclick="triggerDiv('Java')">
      <svg viewBox="0 0 128 128">
          <path fill="#0074BD" d="M52.581 67.817s-3.284 1.911 2.341 2.557c6.814.778 10.297.666 17.805-.753 0 0 1.979 1.237 4.735 2.309-16.836 7.213-38.104-.418-24.881-4.113zM50.522 58.402s-3.684 2.729 1.945 3.311c7.28.751 13.027.813 22.979-1.103 0 0 1.373 1.396 3.536 2.157-20.352 5.954-43.021.469-28.46-4.365z"></path><path fill="#EA2D2E" d="M67.865 42.431c4.151 4.778-1.088 9.074-1.088 9.074s10.533-5.437 5.696-12.248c-4.519-6.349-7.982-9.502 10.771-20.378.001 0-29.438 7.35-15.379 23.552z"></path><path fill="#0074BD" d="M90.132 74.781s2.432 2.005-2.678 3.555c-9.716 2.943-40.444 3.831-48.979.117-3.066-1.335 2.687-3.187 4.496-3.576 1.887-.409 2.965-.334 2.965-.334-3.412-2.403-22.055 4.719-9.469 6.762 34.324 5.563 62.567-2.506 53.665-6.524zM54.162 48.647s-15.629 3.713-5.534 5.063c4.264.57 12.758.439 20.676-.225 6.469-.543 12.961-1.704 12.961-1.704s-2.279.978-3.93 2.104c-15.874 4.175-46.533 2.23-37.706-2.038 7.463-3.611 13.533-3.2 13.533-3.2zM82.2 64.317c16.135-8.382 8.674-16.438 3.467-15.353-1.273.266-1.845.496-1.845.496s.475-.744 1.378-1.063c10.302-3.62 18.223 10.681-3.322 16.345 0 0 .247-.224.322-.425z"></path><path fill="#EA2D2E" d="M72.474 1.313s8.935 8.939-8.476 22.682c-13.962 11.027-3.184 17.313-.006 24.498-8.15-7.354-14.128-13.828-10.118-19.852 5.889-8.842 22.204-13.131 18.6-27.328z"></path><path fill="#0074BD" d="M55.749 87.039c15.484.99 39.269-.551 39.832-7.878 0 0-1.082 2.777-12.799 4.981-13.218 2.488-29.523 2.199-39.191.603 0 0 1.98 1.64 12.158 2.294z"></path><path fill="#EA2D2E" d="M94.866 100.181h-.472v-.264h1.27v.264h-.47v1.317h-.329l.001-1.317zm2.535.066h-.006l-.468 1.251h-.216l-.465-1.251h-.005v1.251h-.312v-1.581h.457l.431 1.119.432-1.119h.454v1.581h-.302v-1.251zM53.211 115.037c-1.46 1.266-3.004 1.978-4.391 1.978-1.974 0-3.045-1.186-3.045-3.085 0-2.055 1.146-3.56 5.738-3.56h1.697v4.667h.001zm4.031 4.548v-14.077c0-3.599-2.053-5.973-6.997-5.973-2.886 0-5.416.714-7.473 1.622l.592 2.493c1.62-.595 3.715-1.147 5.771-1.147 2.85 0 4.075 1.147 4.075 3.521v1.779h-1.424c-6.921 0-10.044 2.685-10.044 6.723 0 3.479 2.058 5.456 5.933 5.456 2.49 0 4.351-1.028 6.088-2.533l.316 2.137h3.163v-.001zM70.694 119.585h-5.027l-6.051-19.689h4.391l3.756 12.099.835 3.635c1.896-5.258 3.24-10.596 3.912-15.733h4.271c-1.143 6.481-3.203 13.598-6.087 19.688zM89.982 115.037c-1.465 1.266-3.01 1.978-4.392 1.978-1.976 0-3.046-1.186-3.046-3.085 0-2.055 1.149-3.56 5.736-3.56h1.701v4.667h.001zm4.033 4.548v-14.077c0-3.599-2.059-5.973-6.999-5.973-2.889 0-5.418.714-7.475 1.622l.593 2.493c1.62-.595 3.718-1.147 5.774-1.147 2.846 0 4.074 1.147 4.074 3.521v1.779h-1.424c-6.923 0-10.045 2.685-10.045 6.723 0 3.479 2.056 5.456 5.93 5.456 2.491 0 4.349-1.028 6.091-2.533l.318 2.137h3.163v-.001zM37.322 122.931c-1.147 1.679-3.005 3.008-5.037 3.757l-1.989-2.345c1.547-.794 2.872-2.075 3.489-3.269.532-1.063.753-2.43.753-5.701v-22.482h4.284v22.173c0 4.375-.348 6.144-1.5 7.867z"></path>
          </svg>
        </p>
      <br>

      <div id="Java" style="display:none;">
        <a style="color: darkgrey;" class="btn " id="JARcase_Study_Coursework.zip"
          href="projects/JARcase_Study_Coursework.zip">Gym Management <span
            class="badge badge-light">2019</span></a>
        <br>
      </div>

      <?php//  Body Footer ?>
      <div id="cover-container " class="">
        <i style="color: darkgrey;">All available at <a href="https://github.com/vunf1"><span
              class="badge ">GitHub.com</span></a></i><br>
        <img title="Fetching" style="width: 15%; height: 15%;"
          src="projects/Project_Nexus/assets/img/00.gif">
        <label id="opensource-logo">
          <span class="copyleft">&copy;</span>
          <strong>João Maia</strong>
          <img title="OpenSource" style="width: 15%; height: 15%;"
            src="projects/Project_Nexus/assets/img/opensource.png">
        </label>
      </div>
    </div>


</body>

</html>