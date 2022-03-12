<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
 
    <link rel="shortcut icon" href="{{asset('img/logo title/1.png')}}">

    <title>My Portfolio | M Rifaizh D W</title>
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#" >M Rifaizh Dzikir W</a>
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
          <a class="nav-link" href="#projects">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
    <!-- Akhir Navbar -->
<section class="pb-4" style="background-color: #fef9eb">
  
</section>
    <!-- Jumbotron -->
  <section class="jumbotron text-center pt-5" style="background-color: #fef9eb">
    <img src="{{asset('img/profile.jpg')}}" alt="M Rifaizh D W" width="200" class="rounded-circle img-thumbnail">
    <h1 class="display-4  fw-bold">M Rifaizh Dzikir W</h1>
    <p class="lead">Industrial Engineering | Content creator</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,160L48,170.7C96,181,192,203,288,176C384,149,480,75,576,53.3C672,32,768,64,864,74.7C960,85,1056,75,1152,74.7C1248,75,1344,85,1392,90.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    
  </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="About" class="pt-5">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>ABOUT ME</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-6 text-center">
          <div class="col-md-6">
            <p>Teknik Industri adalah bidang ilmu yang mempelajari bagaimana mengoptimalisasi kegiatan manusia seperti; produksi, pengelolaan dan ekonomi. Lulusan Teknik Industri nantinya bertanggungjawab atas optimalisasi praktis dari sistem produksi pabrik, proposal strategi, serta desain optimal manajemen perusahaan. Di jurusan Teknik Industri, kamu akan banyak melakukan penyelesaian masalah melalui pendekatan matematis.</p>
          </div>
          <div class="col-md-6">
            <p>Pengertian Content Creator – Besarnya perkembangan internet di Indonesia seiring dengan penambahan infrastruktur dalam teknologi kemudian membuat para pelaku bisnis memiliki keleluasaan dalam memilih suatu media dan format apa yang akan digunakan dalam penyampaian pesan terbaik kepada para konsumennya.</p>
          </div>

        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fef9eb" fill-opacity="1" d="M0,192L40,181.3C80,171,160,149,240,149.3C320,149,400,171,480,165.3C560,160,640,128,720,144C800,160,880,224,960,218.7C1040,213,1120,139,1200,122.7C1280,107,1360,149,1400,170.7L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir About -->

    <!-- Projects -->
    <section id="projects" style="background-color: #fef9eb" class="pt-5">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>MY PROJECTS</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card" >
              <img src="{{asset('img/projects/1.jpg')}}" class="card-img-top" alt="Projects 1">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" >
              <img src="{{asset('img/projects/2.jpg')}}" class="card-img-top" alt="Projects 2">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" >
              <img src="{{asset('img/projects/3.jpg')}}" class="card-img-top" alt="Projects 3">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" >
              <img src="{{asset('img/projects/4.jpg')}}" class="card-img-top" alt="Projects 4">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" >
              <img src="{{asset('img/projects/5.jpg')}}" class="card-img-top" alt="Projects 5">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div> 
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,160L40,181.3C80,203,160,245,240,234.7C320,224,400,160,480,128C560,96,640,96,720,106.7C800,117,880,139,960,154.7C1040,171,1120,181,1200,160C1280,139,1360,85,1400,58.7L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Projects -->

    <!-- Contact -->
    <section id="contact" class="pt-5">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>CONTACT ME</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 ">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name">
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email">
              </div>

              <div class="mb-3">
                <label for="pesan" class="form-label">pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>

              <button type="submit" class="btn btn-warning">Kirim</button>
            </form>
          </div>
        </div>
      </div>  
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffc107" fill-opacity="1" d="M0,192L60,208C120,224,240,256,360,240C480,224,600,160,720,160C840,160,960,224,1080,245.3C1200,267,1320,245,1380,234.7L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="bg-warning text-center pb-5">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="https://www.instagram.com/ripaij66/" class="text-black fw-bold">M Rifaizh Dzikir W | Ripaij66</a></p>
    </footer>
    <!-- Akhir Footer -->
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>