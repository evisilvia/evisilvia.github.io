       <!-- Logout Delete Confirmation-->
       <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <h4 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h4>
             </div>
             <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
             <div class="modal-footer">
               <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
               <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
             </div>
           </div>
         </div>
       </div>

       

       <script>
         function deleteConfirm(url) {
           $('#btn-delete').attr('href', url);
           $('#deleteModal').modal();
         }

       </script>
       <!-- Akhir Content------------------------------------ -->
       </div>
       </div>
       </div>

       <script src="<?= base_url('assets/lib/jquery/jquery.min.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/js/main.js'); ?> " type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/bootstrap/dist/js/bootstrap.min.js'); ?> " type="text/javascript"></script>

       <script src="<?= base_url('assets/lib/jquery-flot/jquery.flot.js'); ?> " type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/jquery-flot/jquery.flot.pie.js'); ?> " type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/jquery-flot/jquery.flot.resize.js'); ?> " type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js'); ?> " type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/jquery-flot/plugins/curvedLines.js'); ?> " type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/jquery.sparkline/jquery.sparkline.min.js'); ?> " type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/countup/countUp.min.js'); ?> " type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/jqvmap/jquery.vmap.min.js'); ?> " type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/jqvmap/maps/jquery.vmap.world.js'); ?> " type="text/javascript"></script>
       <script src="<?= base_url('assets/js/app-dashboard.js'); ?> " type="text/javascript"></script>

       <script src="<?= base_url('assets/lib/prettify/prettify.js'); ?> " type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/datatables/js/jquery.dataTables.min.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/datatables/js/dataTables.bootstrap.min.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/datatables/plugins/buttons/js/buttons.html5.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/datatables/plugins/buttons/js/buttons.flash.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/datatables/plugins/buttons/js/buttons.print.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/datatables/plugins/buttons/js/buttons.colVis.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/datatables/plugins/buttons/js/buttons.bootstrap.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/js/app-tables-datatables.js'); ?>" type="text/javascript"></script>

       <script src="<?= base_url('assets/lib/jquery-ui/jquery-ui.min.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/jquery.nestable/jquery.nestable.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/moment.js/min/moment.min.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/select2/js/select2.min.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/bootstrap-slider/js/bootstrap-slider.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/js/app-form-elements.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/summernote/summernote.min.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/summernote/summernote-ext-beagle.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/bootstrap-markdown/js/bootstrap-markdown.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/markdown-js/markdown.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/js/app-form-wysiwyg.js'); ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/lib/bs-custom-file-input/bs-custom-file-input.js') ?>" type="text/javascript"></script>

       <script src="<?= base_url('assets/lib/fuelux/js/wizard.js') ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/js/app-form-wizard.js') ?>" type="text/javascript"></script>


       <script src="<?= base_url('assets/lib/jquery.maskedinput/jquery.maskedinput.min.js') ?>" type="text/javascript"></script>
       <script src="<?= base_url('assets/js/app-form-masks.js') ?>" type="text/javascript"></script>

       <script type="text/javascript">
         $(document).ready(function() {
           //initialize the javascript
           App.init();

           App.masks();
           App.wizard();

           //Runs prettify
           prettyPrint();

           App.textEditors();
           App.dataTables();
           App.formElements();
           App.dashboard();

           App.wizard();
         });
       </script>


       </body>

       </html>