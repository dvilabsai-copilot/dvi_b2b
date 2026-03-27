      <!-- Menu -->
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo ">
              <a href="dashboard.php" class="app-brand-link">
                  <!-- <span class="app-brand-text demo menu-text fw-bold"> <img src="./assets/img/logo.png" class="sidebar_logo" heogh /></span> -->
                  <h4 class="m-4" style="font-size: 23px;"><span class="text-danger">DVi</span> Holidays</h4>
              </a>

              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                  <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                  <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
              </a>
          </div>

          <div class="menu-inner-shadow"></div>
          <ul class="menu-inner navbar-nav py-1">
              <!-- Dashboards -->
              <li class="menu-item <?php if ($current_page == 'dashboard.php') echo 'active'; ?>">
                  <a href="dashboard.php" class="menu-link active" aria-current="page">
                      <i class="menu-icon tf-icons ti ti-home-ribbon"></i>
                      <div data-i18n="Dashboard">Dashboard</div>
                  </a>
              </li>

              <li class="menu-item active">
                  <a class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons ti ti-building-estate"></i>
                      <div data-i18n="Hotels">Hotels</div>
                  </a>
                  <ul class="menu-sub">
                      <li class="menu-item <?php if ($current_page == 'hotel_basic_info.php') echo 'active'; ?>">
                          <a href="hotel.php" class="menu-link active" aria-current="page">
                              <i class="tf-icons ti ti-info-circle mx-2"></i>
                              <div data-i18n="Basic Info">Basic Info</div>
                          </a>
                      </li>
                      <!-- <li class="menu-item <?php if ($current_page == 'rooms.php') echo 'active'; ?>">
                          <a href="rooms.php" class="menu-link active" aria-current="page">
                              <i class="tf-icons ti ti-bed mx-2"></i>
                              <div data-i18n="Rooms">Rooms</div>
                          </a>
                      </li> -->
                      <li class="menu-item <?php if ($current_page == 'hotel_calendar_preview.php') echo 'active'; ?>">
                          <a href="hotel_calendar_preview.php" class="menu-link active">
                              <i class="tf-icons ti ti-currency-rupee ms-2"></i>
                              <div data-i18n="Price List">Price List</div>
                          </a>
                      </li>
                      <li class="menu-item active">
                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i class="tf-icons ti ttf-icons ti ti-settings-automation mx-2"></i>
                              <div data-i18n="Masters">Masters</div>
                          </a>
                          <ul class="menu-sub">
                              <li class="menu-item <?php if ($current_page == 'hotel_category.php') echo 'active'; ?>">
                                  <a href="hotel_category.php" class="menu-link open">
                                      <!-- <i class="tf-icons ti ti-adjustments-horizontal mx-2"></i> -->
                                      <div data-i18n="Hotel Categories" class="ms-4">Hotel Category</div>
                                  </a>
                              </li>
                              <!-- <li class="menu-item <?php if ($current_page == 'room_type.php') echo 'active'; ?>">
                                  <a href="room_type.php" class="menu-link">
                                      <div data-i18n="Room Type" class="ms-4">Room Type</div>
                                  </a>
                              </li>

                              <li class="menu-item">
                              <li class="menu-item <?php if ($current_page == 'amenities_category.php') echo 'active'; ?>">
                                  <a href="amenities_category.php" class="menu-link">
                                      <div data-i18n="Amenities Categories" class="ms-4">Amenities Category</div>
                                  </a>
                              </li>
                              <li class="menu-item <?php if ($current_page == 'amenities_list.php') echo 'active'; ?>">
                                  <a href="amenities_list.php" class="menu-link">
                                      <div data-i18n="Amenities List" class="ms-4">Amenities List</div>
                                  </a>
                              </li>
                              <li class="menu-item <?php if ($current_page == 'hotel_gallery.php') echo 'active'; ?>">
                                  <a href="hotel_gallery.php" class="menu-link">
                                      <div data-i18n="Gallery" class="ms-4">Gallery</div>
                                  </a>
                              </li> -->
                          </ul>
                      </li>
                  </ul>
              </li>
          </ul>



      </aside>
      <!-- / Menu -->