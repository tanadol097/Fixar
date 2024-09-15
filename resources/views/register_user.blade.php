<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixar | ลงทะเบียนสำหรับผุูใช้</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <header>
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

            <div class="container">
                <h2 class="form-title">ลงทะเบียน</h2>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="first-name">ชื่อ</label>
                        <input type="text" id="first-name" name="first-name" value="มีชัย" required>
                    </div>
                    <div class="form-group">
                        <label for="last-name">นามสกุล</label>
                        <input type="text" id="last-name" name="last-name" value="มีสุข" required>
                    </div>
                    <div class="form-group">
                        <label for="email">อีเมล</label>
                        <input type="email" id="email" name="email" value="meshi@kkumail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">เบอร์โทรศัพท์</label>
                        <input type="text" id="phone" name="phone" value="0521454897" required>
                    </div>
                    <div class="form-group">
                        <label for="password">รหัสผ่าน</label>
                        <input type="password" id="password" name="password" value="123456789" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">ยืนยันรหัสผ่าน</label>
                        <input type="password" id="confirm-password" name="confirm-password" value="123456789" required>
                    </div>
                    <div class="radio-group">
                        <label>เพศ</label>
                        <label><input type="radio" name="gender" value="male" checked> ชาย</label>
                        <label><input type="radio" name="gender" value="female"> หญิง</label>
                    </div>
                    <button type="submit" class="submit-btn">SUBMIT</button>
                </form>
            </div>

</body>

</html>
