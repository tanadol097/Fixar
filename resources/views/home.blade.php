<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixar</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    </head>

    <body>
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom fixed-top bg-white">
                <a href="#"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <span class="fs-4"><b>Fixar</b></span>
                </a>
                <ul class="nav nav-pills">
                    <!-- Dropdown for Home -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link active dropdown-toggle" id="homeDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Home
                        </a>
                        <!-- Dropdown Menu Items -->
                        <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                            <li><a class="dropdown-item" href="#1">วัดเกาะแก้วสุทธาราม</a></li>
                            <li><a class="dropdown-item" href="#2">บ้านช่างทอง ป้าเนื่อง</a></li>
                            <li><a class="dropdown-item" href="#3">ตลาดริมน้ำเมืองเพชร</a></li>
                            <li><a class="dropdown-item" href="#4">Street Art</a></li>
                        </ul>
                    </li>

                    <!-- Other Nav Items -->
                    <li class="nav-item"><a href="/home" class="nav-link">หน้าหลัก</a></li>
                    <li class="nav-item"><a href="/ourservices" class="nav-link">บริการของเรา</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">สมัครเป็นผู้ให้บริการ</a></li>
                    <button type="button" class="btn btn-primary"><i class="bi bi-person-circle"></i></button>
                </ul>
            </header>
        </div>
        <div class="container">
            <img src="{{ asset('img/HP.png') }}" alt="Image" class="img-fluid rounded mx-auto d-block">
            <div class="card text-bg-dark">
                <img src="{{ asset('img/map.png') }}" class="card-img " alt="map">
                <div class="card-img-overlay">
                    <div class="card-body text-secondary">
                            <h4>บริการซ่อมรถ</h4>
                            <p >บริการเกี่ยวกับรถครบวงจร โดยผู้ให้บริการใกล้บ้านคุณ </p>
                            <p > ที่เดียวครบจัดการได้ทุกปัญหา</p>
                            <a href="/ourservices">จองบริการ คลิก</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-body-secondary">&copy;  2024  All Rights Reserved by FIXAR  Co., Ltd.</p>

                <a href="/"
                    class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>
            </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>

</html>
