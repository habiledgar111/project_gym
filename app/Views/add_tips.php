<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add_tips</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
</head>
<body>
<div class="row">
    <header class="p-3 bg-dark text-white" id="navbar">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li>
                <div class="menu_animation" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
                </div>
              </li>
              <li><a href="home_admin" class="nav-link px-2 text-white">ADMIN</a></li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
              <img src="/resource/icon_gym.png" alt="gym icon" width="50" height="50">
            </div>
          </div>
        </div>
      </header>
  </div>
  <div class="row">
    <div class="col-1">
      <div id="mysidebar" class="sidebar">
        <a href="add_tips">Add Tips</a>
        <a href="show_tips">Show tips</a>
      </div>
    </div>
    <div id="formwrapper">
    <h1 class="text-center" style="align-items: center;">TAMBAH TIPS</h1>
        <form action="add_tips_action" id="addform">
          <input type="text" id="judul" name="judul" placeholder="judul" class="input-judul mt-5"><br>
          <div id="buyerForm" class="mt-3">
            <input type="text" id="subjudul" name="subjudul" placeholder="Sub judul" class="input-judul"><br>
            <textarea id="content" name="content" cols="100" placeholder="Content" class="input-content"></textarea>
          </div>
          <div id="wrapper"></div>
          <input type="submit" value ="ADD" class="input-button mt-5" >
        </form>
        <input type="button" id="testButton" value="Test" />
      </div>
</div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/sidebar.js"></script>
    <script type="text/javascript" src="js/form.js"></script>

</body>
</html>