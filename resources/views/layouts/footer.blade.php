    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Cr.eat.ivity
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2020 <a href="">pandda.lab</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ asset('js/app.js') }}"></script>
  @yield('js-content')
  <script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
 
   
   
 

 
 
 
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" defer></script>
 
 

  @include('sweetalert::alert')
   <script type="text/javascript">
      $(function () {
        
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('user.get_datatable') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
        
      });
    </script>

</body>

</html>