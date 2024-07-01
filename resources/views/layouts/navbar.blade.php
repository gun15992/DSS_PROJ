        <nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll" style="background-color:#ffff;">
            <div class="container" ::before>
                <a href="/" class="navbar-brand">
                    <img src="logo.png" width="54" height="54" class="img-fluid" style="margin-right: 5px;"> DSS Inventory
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarText">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="/" class="nav-link fw-bold active" style="margin-right: 10px;">หน้าหลัก</a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link fw-bold" style="margin-right: 10px;">สรุปภาพรวม</a>
                        </li>
                        <li class="nav-item">
                            <a href="/type" class="nav-link fw-bold" style="margin-right: 10px;">ประเภทครุภัณฑ์</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown show d-flex">
                                <a href="#" class="btn dropdown-toggle nav-link fw-bold" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 20px;">ค้นหาครุภัณฑ์</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="/type-search/name">ค้นหาตามชื่อครุภัณฑ์</a>
                                    <a class="dropdown-item" href="/type-search/list">ค้นหาตามประเภทครุภัณฑ์</a>
                                    <a class="dropdown-item" href="/type-search/category">ค้นหาตามหมวดหมู่ครุภัณฑ์</a>
                                    <a class="dropdown-item" href="/type-search/section">ค้นหาตามหน่วยงาน</a>
                                </div>
                            </div>
                        </li>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="ค้นหาครุภัณฑ์" aria-label="Search" style="margin-right: 5px;">
                            <button class="btn btn-me btn-light" type="submit" style="margin-right: 10px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                </svg>
                                ค้นหา
                            </button>
                        </form>
                        <li class="nav-item">
                            <a href="/login" class="btn btn-primary btn-me active" role="button" aria-pressed="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                                </svg>
                                เข้าสู่ระบบ
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>