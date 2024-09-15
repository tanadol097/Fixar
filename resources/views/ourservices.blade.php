<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixar|บริการของเรา</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home">Fixar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/home ">หน้าหลัก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/ourservices">บริการของเรา</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">สมัครเป็นผู้ให้บริการ</a>
                        </li>
                        <li class="nav-item">
                            <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAbCAYAAACN1PRVAAAAAXNSR0IArs4c6QAAAzRJREFUSEu9lmfIjmEUx392SUaEbNlRSCgryopCRtkyskeRomyirDIzki0jJLI+CInIlpWSmZCdL/b1r3O/nS738zzvp/fU030/13Wd+f+fc92FKEApVIC+yK+zckBHoAVQC6gIvAOeAdeBC8CnXIHnclYCWAxMD88iWYz9ApYDC4Efmc5lc9Yc2A/Ud8qfgavAfaAx0Boo6/YfAgOBu2kOMzkbDmwDiprSTmCFOfF2pN8ImAMMsg1lNgrYGztMc9bWMFDZPgAjA1bHTVHna4RAqgMvg9EXwF/b62sBKtPfhvGlODL/v3yI8DGgpwjQDHhjB5TBYcsk0VHZ+gF6SqqG//cAEUr6DT1x4sw2A2NNsTtwxt6rmMHSKVh8ARoAb22vD3DU3jcCkxId76xkYN1XY90OK19ybp9hchOYAVwGVO7Vlv0uYIQLZDcw1MpZBviuPe+sf2DYIVNoEpFB2AinacBaZ1SOVwJPgTpuvSlw22V6LHa2DJgVIv8WIo7LpbVSgAISbokMAA4CKqVvgcKGleyoT+fFzvYAQwwn4eVFvdUqEGcdMNVtbAhEmAhcAdpEOmeBLmHi5EHiyygydDUcVB4vwkNKf6wtZLw90M6gUJDC1csqmzyngB5xZgmo6qleKawTCYalrG+3Jo63TgA9gTzy+MyWArOB10C1FKNa0ijq5ppaBj2GXu09UCFMoSWBlXPjzBSFlCU6pOnhRQ2unyaICKCSiqW3gDvRWQWrCSPJ61efWTHrerFKdJ5ph2uHgau6q3EzyQPD5bkdUHtMCWT6CFQKs1O3wn/32VZgjCmILNeAG66HNPPEzJ9AcaClG9ZP7L4TaU6ajU1hskxIIozHlUqkZtRsU801KXpbySYb49RTiejc4FD29bZwBOjgYFDZX2VypnVldDrKWmMpbgdf0jVR/wnPTsBFfyjTfaa+0R2W3M4q7yIfpTMiMiwIhBhtayq19A/EAGe7qTuHbw1N7XqmpGjP23eHJnxloKbdW2KnRLiND6U8l8akXN8gymycfVuoHTKJ8J0PbLFJn3oul7NESdeEMq1rmap0Al6ZPLJMNKyzSn6d5bKTr/0CdfYPWP+kHHI96HsAAAAASUVORK5CYII=" />
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container search-container">
            <div class="d-flex justify-content-between align-items-center">
                <h5>ตำแหน่งของคุณ <span class="text-danger"><i class="fas fa-map-marker-alt"></i> ตักวิทยวิศาส - มข</span></h5>
                <button class="btn btn-outline-secondary"><i class="fas fa-filter"></i></button>
            </div>
            <input type="text" class="form-control mt-3" placeholder="ค้นหาช่าง">
            <div class="mt-3">
                <button class="btn btn-danger filter-btn">ทั้งหมด</button>
                <button class="btn btn-light filter-btn">รถยนต์</button>
                <button class="btn btn-light filter-btn">รถมอเตอร์ไซ</button>
                <button class="btn btn-light filter-btn">รถไฟฟ้า</button>
            </div>
        </div>
        
        <div class="container mt-4">
            <h5>แนะนำช่าง</h5>
            <div class="row">
                <div class="col-6 col-md-3 col-lg-2 mb-3">
                    <div class="card tech-card">
                        <img src="path/to/image.jpg" alt="Technician Image" class="tech-image mt-3">
                        <div class="card-body p-2">
                            <h6 class="card-title">ช่างเอนส์</h6>
                            <p class="mb-1">0.6 กม. <span class="star-rating">5.0★</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2 mb-3">
                    <div class="card tech-card">
                        <img src="path/to/image2.jpg" alt="Technician Image" class="tech-image mt-3">
                        <div class="card-body p-2">
                            <h6 class="card-title">ช่างแดน</h6>
                            <p class="mb-1">1.2 กม. <span class="star-rating">4.9★</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="location">
            <span>ตำแหน่งของคุณ</span>
            <span class="location-icon">📍</span>
            <span>ตึกวิทยวิภาส - มข</span>
        </div>

        <div class="search-bar">
            <input type="text" placeholder="ค้นหาช่าง">
            <div class="filter-icon">🔍</div>
        </div>
        
        <div class="categories">
          <button class="active">ทั้งหมด</button>
          <button>รถยนต์</button>
          <button>รถมอเตอร์ไซ</button>
          <button>รถไฟฟ้า</button>
      </div>

        <section>
            <h4>บริการซ่อมรถ</h4>
            <p>บริการเกี่ยวกับรถครบวงจร โดยผู้ให้บริการใกล้บ้านคุณ </p>
            <p> ที่เดียวครบจัดการได้ทุกปัญหา</p>

        </section>
       

        <section class="technicians">
          <h2>แนะนำช่าง</h2>
          <div class="technician-grid">
              <div class="technician-card">
                  <img src="images/technician1.jpg" alt="ช่างเจมส์">
                  <div class="info">
                      <p>ช่างเจมส์</p>
                      <p>0.6 กม. ⭐ 5.0</p>
                  </div>
              </div>
              <div class="technician-card">
                  <img src="images/technician2.jpg" alt="ช่างแดน">
                  <div class="info">
                      <p>ช่างแดน</p>
                      <p>1.2 กม. ⭐ 4.9</p>
                  </div>
              </div>
              <div class="technician-card">
                  <img src="images/technician3.jpg" alt="ช่างโอ">
                  <div class="info">
                      <p>ช่างโอ</p>
                      <p>1.8 กม. ⭐ 4.8</p>
                  </div>
              </div>
              <div class="technician-card">
                  <img src="images/technician4.jpg" alt="ช่างเควิน">
                  <div class="info">
                      <p>ช่างเควิน</p>
                      <p>2.4 กม. ⭐ 4.7</p>
                  </div>
              </div>
              <div class="technician-card">
                  <img src="images/technician5.jpg" alt="ช่างโบรอัน">
                  <div class="info">
                      <p>ช่างโบรอัน</p>
                      <p>3.0 กม. ⭐ 4.6</p>
                  </div>
              </div>
          </div>
      </section>
  </div>

      

        <footer>
            <p>&copy; 2024 All Rights Reserved by FIXAR Co., Ltd.</p>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

</body>

</html>
