
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI elements /</span> Spinners</h4>

              <!-- Style -->
              <div class="card mb-4">
                <h5 class="card-header">Style</h5>
                <div class="card-body">
                  <div class="row gy-3">
                    <div class="col-md">
                      <div class="text-light small fw-semibold">Border</div>

                      <div class="demo-inline-spacing">
                        <div class="spinner-border" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-primary" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-secondary" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-success" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-danger" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-warning" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-info" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-light" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-dark" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="text-light small fw-semibold">Growing</div>

                      <div class="demo-inline-spacing">
                        <div class="spinner-grow" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-primary" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-secondary" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-success" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-danger" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-warning" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-info" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-light" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-dark" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Style -->

              <!-- Size -->
              <div class="card mb-4">
                <h5 class="card-header">Size</h5>
                <div class="card-body">
                  <div class="row gy-3">
                    <!-- Large -->
                    <div class="col-md">
                      <div class="text-light small fw-semibold">Large</div>
                      <div class="demo-inline-spacing">
                        <div class="spinner-border spinner-border-lg text-primary" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border spinner-border-lg text-secondary" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                      </div>
                    </div>

                    <!-- Medium -->
                    <div class="col-md">
                      <div class="text-light small fw-semibold">Medium</div>
                      <div class="demo-inline-spacing">
                        <div class="spinner-border text-primary" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border text-secondary" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                      </div>
                    </div>

                    <!-- Small -->
                    <div class="col-md">
                      <div class="text-light small fw-semibold">Small</div>
                      <div class="demo-inline-spacing">
                        <div class="spinner-border spinner-border-sm text-primary" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-border spinner-border-sm text-secondary" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Size -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('admin.footer')
  </body>
</html>
