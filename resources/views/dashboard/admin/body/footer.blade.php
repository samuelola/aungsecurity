        <footer class="footer"> 
          <div class="container-fluid">
            <div class="row"> 
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2024 © Aungtechnology</p>
              </div>
              
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- jquery-->
    <script src="{{asset('assets/js/vendors/jquery/jquery.min.js')}}"></script>
    <!-- bootstrap js-->
    <script src="{{asset('assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}" defer=""></script>
    <script src="{{asset('assets/js/vendors/bootstrap/dist/js/popper.min.js')}}" defer=""></script>
    <!--fontawesome-->
    <script src="{{asset('assets/js/vendors/font-awesome/fontawesome-min.js')}}"></script>
    <!-- feather-->
    <script src="{{asset('assets/js/vendors/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/feather-icon/custom-script.js')}}"></script>
    <!-- sidebar -->
    <script src="{{asset('assets/js/sidebar.js')}}"></script>
    <!-- height_equal-->
    <script src="{{asset('assets/js/height-equal.js')}}"></script>
    <!-- config-->
    <script src="{{asset('assets/js/config.js')}}"></script>
    <!-- apex-->
    <script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
    <script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
    <!-- scrollbar-->
    <script src="{{asset('assets/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{asset('assets/js/scrollbar/custom.js')}}"></script>
    <!-- slick-->
    <script src="{{asset('assets/js/slick/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/slick/slick.js')}}"></script>
    <!-- data_table-->
    <script src="{{asset('assets/js/js-datatables/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- page_datatable-->
    <script src="{{asset('assets/js/js-datatables/datatables/datatable.custom.js')}}"></script>
    <!-- page_datatable1-->
    <script src="{{asset('assets/js/js-datatables/datatables/datatable.custom1.js')}}"></script>
    <!-- page_datatable-->
    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    <!-- theme_customizer-->
    <!-- <script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script> -->
    <!-- tilt-->
    <script src="{{asset('assets/js/animation/tilt/tilt.jquery.js')}}"></script>
    <!-- page_tilt-->
    <script src="{{asset('assets/js/animation/tilt/tilt-custom.js')}}"></script>
    <!-- dashboard_1-->
    <script src="{{asset('assets/js/dashboard/dashboard_1.js')}}"></script>
    <!-- custom script -->
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/chart-widget.js')}}"></script>
   <script>
document.addEventListener('DOMContentLoaded', function () {

  const links = document.querySelectorAll('.sidebar-link');

  links.forEach((link, index) => {

    const submenu = link.nextElementSibling;
    const arrow = link.querySelector('.arrow-toggle');

    if (!submenu || !submenu.classList.contains('sidebar-submenu')) return;

    const storageKey = "sidebar_menu_" + index;

    // Restore state from localStorage
    if (localStorage.getItem(storageKey) === "open") {
        submenu.classList.add('open');
        submenu.style.maxHeight = submenu.scrollHeight + "px";
        if (arrow) arrow.classList.add('rotate');
    } else {
        submenu.style.maxHeight = "0px";
    }

    link.addEventListener('click', function(e) {

        e.preventDefault();

        const isOpen = submenu.classList.contains('open');

        if (isOpen) {
            submenu.style.maxHeight = "0px";
            submenu.classList.remove('open');
            if (arrow) arrow.classList.remove('rotate');
            localStorage.setItem(storageKey, "closed");

        } else {
            submenu.classList.add('open');
            submenu.style.maxHeight = submenu.scrollHeight + "px";
            if (arrow) arrow.classList.add('rotate');
            localStorage.setItem(storageKey, "open");
        }

    });

  });

});
</script>

@yield('script')

  </body>


</html>