                    <!--=================================
                                             wrapper -->
                    <!--=================================
                                             footer -->

                        <footer class="bg-white p-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-center text-md-left">
                                        <p class="mb-0"> &copy; Copyright <span id="copyright">
                                                <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
                                            </span>.
                                            <a href="#"> Admin Dashboard </a> All Rights Reserved.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <ul class="text-center text-md-right">
                                        <li class="list-inline-item"><a href="#">Terms & Conditions </a></li>
                                        <li class="list-inline-item"><a href="#">API Use Policy </a></li>
                                        <li class="list-inline-item"><a href="#">Privacy Policy </a></li>
                                    </ul>
                                </div>
                            </div>
                        </footer>
                    </div><!-- main content wrapper end-->
                </div>
            </div>
        </div>

        <!--=================================
         footer -->


        <!--=================================
         jquery -->

        <!-- jquery -->
        <script src="{{ asset('/dashboard_files/assets/js/jquery-3.3.1.min.js') }}"></script>

        <!-- plugins-jquery -->
        <script src="{{ asset('/dashboard_files/assets/js/plugins-jquery.js') }}"></script>

        <!-- plugin_path -->
        <script>var plugin_path = '{{ asset('/dashboard_files/assets/js/') }}';</script>

        <!-- chart -->
        <script src="{{ asset('/dashboard_files/assets/js/chart-init.js') }}"></script>

        <!-- calendar -->
        <script src="{{ asset('/dashboard_files/assets/js/calendar.init.js') }}"></script>

        <!-- charts sparkline -->
        <script src="{{ asset('/dashboard_files/assets/js/sparkline.init.js') }}"></script>

        <!-- charts morris -->
        <script src="{{ asset('/dashboard_files/assets/js/morris.init.js') }}"></script>

        <!-- datepicker -->
        <script src="{{ asset('/dashboard_files/assets/js/datepicker.js') }}"></script>

        <!-- sweetalert2 -->
        <script src="{{ asset('/dashboard_files/assets/js/sweetalert2.js') }}"></script>

        <!-- toastr -->
        <script src="{{ asset('/dashboard_files/assets/js/toastr.js') }}"></script>

        <!-- validation -->
        <script src="{{ asset('/dashboard_files/assets/js/validation.js') }}"></script>

        <!-- lobilist -->
        <script src="{{ asset('/dashboard_files/assets/js/lobilist.js') }}"></script>

        <!-- custom -->
        <script src="{{ asset('/dashboard_files/assets/js/custom.js') }}"></script>

        <script>
            $(document).ready(function() {
                $('#datatable').DataTable();
            } );
        </script>

        @if (App::getLocale() == 'en')
            <script src="{{ asset('dashboard_files/assets/js/bootstrap-datatables/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('dashboard_files/assets/js/bootstrap-datatables/dataTables.bootstrap4.min.js') }}"></script>
        @else
            <script src="{{ asset('dashboard_files/assets/js/bootstrap-datatables/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('dashboard_files/assets/js/bootstrap-datatables/dataTables.bootstrap4.min.js') }}"></script>
        @endif

        @stack('js')

    </body>
</html>
