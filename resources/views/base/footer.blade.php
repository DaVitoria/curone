 <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">&copy; Da Vick Clands&trade;</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Pro <a href="https://www.goole.com/" target="_blank">Faça sua busca</a> no Google.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
    <script type="text" src="{{asset('assets/i18n/pt-PT.json')}}"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
      $('#table').DataTable({
         "pageLength": 5,
         "language": {
            "url": "assets/i18n/pt-PT.json" }
      }); }); 
    </script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/js/modal-demo.js')}}"></script>
    <script src="{{asset('assets/js1/modal.js')}}"></script>
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/misc.js')}}"></script>
    <script src="{{asset('assets/js/settings.js')}}"></script>
    <script src="{{asset('assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>