
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
  @include('admin.content')

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Layout Demo -->
              <div class="layout-demo-wrapper">
                <div class="layout-demo-placeholder">
                  <img
                    src="../assets/img/layouts/layout-without-navbar-light.png"
                    class="img-fluid"
                    alt="Layout without navbar"
                    data-app-light-img="layouts/layout-without-navbar-light.png"
                    data-app-dark-img="layouts/layout-without-navbar-dark.png"
                  />
                </div>
                <div class="layout-demo-info">
                  <h4>Layout without Navbar</h4>
                  <p>Layout does not contain Navbar component.</p>
                </div>
              </div>
              <!--/ Layout Demo -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('admin.footer')
  </body>
</html>
