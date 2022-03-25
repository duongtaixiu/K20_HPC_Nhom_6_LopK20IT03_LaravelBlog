
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
  @include('admin.head')
  </head>

  <body>
    <!-- Layout wrapper -->
    @include('admin.content')

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI elements /</span> Navbar</h4>

              <!-- Basic -->
              <h5 class="pb-1 mt-5 mb-4">Example</h5>
              <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
                <div class="container-fluid">
                  <a class="navbar-brand" href="javascript:void(0)">Navbar</a>
                  <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="javascript:void(0)">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a
                          class="nav-link dropdown-toggle"
                          href="javascript:void(0)"
                          id="navbarDropdown"
                          role="button"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                          <li>
                            <hr class="dropdown-divider" />
                          </li>
                          <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="javascript:void(0)" tabindex="-1">Disabled</a>
                      </li>
                    </ul>
                    <form class="d-flex" onsubmit="return false">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                      <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
              <!--/ Basic -->

              <!-- Supported content -->
              <h5 class="pb-1 mb-4">Supported content</h5>
              <div class="mb-5">
                <h6 class="mt-2 mb-3 text-muted">Text</h6>
                <nav class="navbar navbar-example navbar-expand-lg navbar-light bg-light">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="javascript:void(0)">Navbar</a>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#navbar-ex-2"
                      aria-controls="navbar-ex-2"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-ex-2">
                      <div class="navbar-nav me-auto">
                        <a class="nav-item nav-link active" href="javascript:void(0)">Home</a>
                        <a class="nav-item nav-link" href="javascript:void(0)">About</a>
                        <a class="nav-item nav-link" href="javascript:void(0)">Contact</a>
                      </div>

                      <span class="navbar-text">Marshmallow brownie lemon drops cheesecake.</span>
                    </div>
                  </div>
                </nav>

                <h6 class="mt-4 mb-3 text-muted">Input Group</h6>
                <nav class="navbar navbar-example navbar-expand-lg bg-light">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="javascript:void(0)">Navbar</a>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#navbar-ex-4"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbar-ex-4">
                      <div class="navbar-nav me-auto">
                        <a class="nav-item nav-link active" href="javascript:void(0)">Home</a>
                        <a class="nav-item nav-link" href="javascript:void(0)">About</a>
                        <a class="nav-item nav-link" href="javascript:void(0)">Contact</a>
                      </div>

                      <form class="d-flex">
                        <div class="input-group">
                          <span class="input-group-text"><i class="tf-icons bx bx-search"></i></span>
                          <input type="text" class="form-control" placeholder="Search..." />
                        </div>
                      </form>
                    </div>
                  </div>
                </nav>

                <h6 class="mt-4 mb-3 text-muted">Button</h6>
                <nav class="navbar navbar-example navbar-expand-lg bg-light">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="javascript:void(0)">Navbar</a>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#navbar-ex-3"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbar-ex-3">
                      <div class="navbar-nav me-auto">
                        <a class="nav-item nav-link active" href="javascript:void(0)">Home</a>
                        <a class="nav-item nav-link" href="javascript:void(0)">About</a>
                        <a class="nav-item nav-link" href="javascript:void(0)">Contact</a>
                      </div>

                      <form onsubmit="return false">
                        <button class="btn btn-outline-primary" type="button">Buy Now</button>
                      </form>
                    </div>
                  </div>
                </nav>
              </div>
              <!--/ Supported content -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('admin.footer')
  </body>
</html>
