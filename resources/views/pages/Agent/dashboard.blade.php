@extends('layout.main')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" />
    <title>Responsive Profile Page</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="/css/agent/detail.css">
    <script src="/js/agent/detail.js" defer></script>
  </head>
  <body>
    <div class="header__wrapper2">
      <div class="img_detailagent"></div>
      <div class="cols__container">
        <div class="left__col">
          <div class="img__container">
            <img src="/assets/agent/detail/bambang.jpg" alt="Bambang" />
            <span></span>
          </div>
          <h2>Bambang Jono</h2>
          <p style="color: #000">Independent Agent Property</p>
          <p>bambangjono95@gmail.com</p>

          <ul class="about">
            <li><span>73</span>Dijual</li>
            <li><span>322</span>Disewa</li>
            <li><span>20</span>Klient</li>
          </ul>

          <div class="content">
            <p>
              Saya adalah agen properti berpengalaman dengan 10+ tahun pengalaman. Spesialisasi dalam rumah, apartemen, dan properti investasi. Pelayanan transparan, jujur, dan profesional. Hubungi John Doe untuk bantuan dalam mencari properti yang sesuai dengan kebutuhan Anda.
            </p>

            <ul class="abc">
              <li><i class="fab fa-twitter"></i></li>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-facebook"></i>
              <i class="fab fa-whatsapp"></i>
            </ul>
          </div>
        </div>
        <div class="right__col">
            <!-- Images Filter Buttons Section -->
            <div class=" row mt-5" >
              <div class="col-12" id="filter-buttons">
                <button class="btn mb-2 me-1 active" data-filter="all">Semuanya</button>
                <button class="btn mb-2 mx-1" data-filter="apartemen">Apartemen</button>
                <button class="btn mb-2 mx-1" data-filter="rumah">Rumah</button>
                <button class="btn mb-2 mx-1" data-filter="ruko">Ruko</button>
                <button class="btn mb-2 mx-1" data-filter="villa">Villa</button>
              </div>
            </div>


            <!-- <button class="btn-ajukan mb-2 float-end" id="ajukan-button" style="margin-top: -43px; background-color: #0C40E8; color: #fff; cursor: auto;">Ajukan</button> -->

            
      
            <!-- Filterable Images / Cards Section -->
            <div class="card-detailagent row px-2 mt-4 gap-3" style="width: 770px; margin-bottom: 60px;" id="filterable-cards">
              <div class="card p-0" data-name="rumah">
                <img src="/assets/pages/home/apartemen1.jpg" alt="img" />
                <div class="card-body">
                  <h6 class="card-title">Rumah</h6>
                  <!-- <p class="card-text"></p> -->
                </div>
                <span class="label sold">Tersewa</span>
              </div>
              
              
              <div class="card p-0" data-name="apartemen">
                <img src="/assets/pages/home/apartemen1.jpg" alt="img" />
                <div class="card-body">
                  <h6 class="card-title">Apartemen</h6>
                  <!-- <p class="card-text"></p> -->
                </div>
                <span class="label sold">Terjual</span>
              </div>
              <div class="card p-0" data-name="rumah">
                <img src="/assets/pages/home/apartemen1.jpg" alt="img" />
                <div class="card-body">
                  <h6 class="card-title">Rumah</h6>
                  <!-- <p class="card-text"></p> -->
                </div>
                <span class="label sold">Terjual</span>
              </div>
              <div class="card p-0" data-name="apartemen">
                <img src="/assets/pages/home/apartemen1.jpg" alt="img" />
                <div class="card-body">
                  <h6 class="card-title">Apartemen</h6>
                  <!-- <p class="card-text"></p> -->
                </div>
                <span class="label sold">Tersewa</span>
              </div>
              <div class="card p-0" data-name="ruko">
                <img src="/assets/pages/home/apartemen1.jpg" alt="img" />
                <div class="card-body">
                  <h6 class="card-title">Ruko</h6>
                  <!-- <p class="card-text"></p> -->
                </div>
                <span class="label sold">Terjual</span>
              </div>
              <div class="card p-0" data-name="villa">
                <img src="/assets/pages/home/apartemen1.jpg" alt="img" />
                <div class="card-body">
                  <h6 class="card-title">Villa</h6>
                  <!-- <p class="card-text"></p> -->
                </div>
                <span class="label sold">Tersewa</span>
              </div>
              <div class="card p-0" data-name="ruko">
                <img src="/assets/pages/home/apartemen1.jpg" alt="img" />
                <div class="card-body">
                  <h6 class="card-title">Ruko</h6>
                  <!-- <p class="card-text"></p> -->
                </div>
                <span class="label sold">Terjual</span>
              </div>
              <div class="card p-0" data-name="rumah">
                <img src="/assets/pages/home/apartemen1.jpg" alt="img" />
                <div class="card-body">
                  <h6 class="card-title">Rumah</h6>
                  <!-- <p class="card-text"></p> -->
                </div>
                <span class="label sold">Tersewa</span>
              </div>
              <div class="card p-0" data-name="villa">
                <img src="/assets/pages/home/apartemen1.jpg" alt="img" />
                <div class="card-body">
                  <h6 class="card-title">Villa</h6>
                  <!-- <p class="card-text"></p> -->
                </div>
                <span class="label sold">Terjual</span>
              </div>
            </div>
          </div>
        
        </div>
        
    </div>
  </div>
      
  </body>
</html>


@endsection