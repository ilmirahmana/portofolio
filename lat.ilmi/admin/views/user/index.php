<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio</title>
    <!-- CSS Bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= baseurl;?>/asset/CSS/style.css">
  </head>
  <body id="home">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!--- Navbar -->
    <nav class="navbar navbar-inverse  bg-info fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">HilmanF.N</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#About">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <!--jumbotron-->
    <section class="jumbotron text-center">
      <img src="<?= baseurl;?>/asset/img/88.jpg" alt="" width="250" height="250" class="rounded-circle img-thumbnail"./>
      <h1 class="display-4">HilmanFN</h1>
      <p class="lead">SMKN 4 TASIKMALAYA.</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#808080" fill-opacity="1" d="M0,224L26.7,197.3C53.3,171,107,117,160,122.7C213.3,128,267,192,320,197.3C373.3,203,427,149,480,122.7C533.3,96,587,96,640,90.7C693.3,85,747,75,800,96C853.3,117,907,171,960,197.3C1013.3,224,1067,224,1120,234.7C1173.3,245,1227,267,1280,234.7C1333.3,203,1387,117,1413,74.7L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
    </section>
    <!-- akhir jumbotron -->
    <!-- About -->
    <section id="About">
      <div class="row text-center">
        <h2>About</h2>
      </div>
      <div class="row justify-content-center ">
          <div class="col-md-4 mb-3">
            <p>“Tidak ada yang abadi di dunia ini kecuali kebodohanmu.”</p></p>
          </div>
          <div class="col-md-4 mb-3">
            <p>“Impianmu akan menjadi kenyataan, jika kau bersungguh-sungguh untuk meraihnya"</p>
          </div>
      </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ccccff" fill-opacity="1" d="M0,192L24,170.7C48,149,96,107,144,117.3C192,128,240,192,288,213.3C336,235,384,213,432,186.7C480,160,528,128,576,144C624,160,672,224,720,261.3C768,299,816,309,864,288C912,267,960,213,1008,165.3C1056,117,1104,75,1152,96C1200,117,1248,203,1296,240C1344,277,1392,267,1416,261.3L1440,256L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir About -->
    
    <!-- Projects -->
<section id="project">
  <div class="Container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2>My project</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="<?= baseurl;?>/asset/img/6.jpg" class="card-img-top" alt="Project 1">
          <div class="card-body">
            <h3>Judul</h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content."></p>
          </div>
      </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,192L9.2,186.7C18.5,181,37,171,55,181.3C73.8,192,92,224,111,229.3C129.2,235,148,213,166,213.3C184.6,213,203,235,222,250.7C240,267,258,277,277,288C295.4,299,314,309,332,309.3C350.8,309,369,299,388,293.3C406.2,288,425,288,443,277.3C461.5,267,480,245,498,213.3C516.9,181,535,139,554,106.7C572.3,75,591,53,609,58.7C627.7,64,646,96,665,96C683.1,96,702,64,720,74.7C738.5,85,757,139,775,170.7C793.8,203,812,213,831,218.7C849.2,224,868,224,886,224C904.6,224,923,224,942,218.7C960,213,978,203,997,213.3C1015.4,224,1034,256,1052,261.3C1070.8,267,1089,245,1108,229.3C1126.2,213,1145,203,1163,186.7C1181.5,171,1200,149,1218,165.3C1236.9,181,1255,235,1274,213.3C1292.3,192,1311,96,1329,64C1347.7,32,1366,64,1385,106.7C1403.1,149,1422,203,1431,229.3L1440,256L1440,320L1430.8,320C1421.5,320,1403,320,1385,320C1366.2,320,1348,320,1329,320C1310.8,320,1292,320,1274,320C1255.4,320,1237,320,1218,320C1200,320,1182,320,1163,320C1144.6,320,1126,320,1108,320C1089.2,320,1071,320,1052,320C1033.8,320,1015,320,997,320C978.5,320,960,320,942,320C923.1,320,905,320,886,320C867.7,320,849,320,831,320C812.3,320,794,320,775,320C756.9,320,738,320,720,320C701.5,320,683,320,665,320C646.2,320,628,320,609,320C590.8,320,572,320,554,320C535.4,320,517,320,498,320C480,320,462,320,443,320C424.6,320,406,320,388,320C369.2,320,351,320,332,320C313.8,320,295,320,277,320C258.5,320,240,320,222,320C203.1,320,185,320,166,320C147.7,320,129,320,111,320C92.3,320,74,320,55,320C36.9,320,18,320,9,320L0,320Z"></path></svg>
</section>
    <!-- Akhir projects -->
 <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" aria-describedby="email">
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-label">Pesan</label>
                  <textarea class="form-control" id="pesan" rows="3"></textarea>
                </div>
                
             <button type="submit" class="btn btn-primary">Kirim</button>
           </form>
          </div>
        </div>
      </div>
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ccccff" fill-opacity="1" d="M0,0L48,32C96,64,192,128,288,170.7C384,213,480,235,576,218.7C672,203,768,149,864,122.7C960,96,1056,96,1152,122.7C1248,149,1344,203,1392,229.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Contact -->
    <!-- Footer -->
    <footer class= "footer text-white text-center p-3">
      <p>Created With <i class="bi bi-heart-fill text-danger"></i> by <a href="https://www.instagram.com/hilmanf.n" Class="text-white fw-bold">hilmanf.n</p>
    </footer>
    <!-- Akhir Footer -->
    <!-- JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>