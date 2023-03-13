<footer class="footer text-center text-sm-left">&copy; 2023 URVYA Security <spans class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by URVYA Security</span></footer>
<!--end footer-->
</div><!-- end page content -->
</div><!-- end page-wrapper -->
<!-- jQuery  -->
<script src="<?php echo site_Url; ?>admin/assets/js/jquery.min.js"></script>
<script src="<?php echo site_Url; ?>admin/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo site_Url; ?>admin/assets/js/metismenu.min.js"></script>
<script src="<?php echo site_Url; ?>admin/assets/js/waves.js"></script>
<script src="<?php echo site_Url; ?>admin/assets/js/feather.min.js"></script>
<script src="<?php echo site_Url; ?>admin/assets/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo site_Url; ?>admin/assets/js/jquery-ui.min.js"></script>
<script src="<?php echo site_Url; ?>admin/plugins/apexcharts/apexcharts.min.js"></script>
<script src="<?php echo site_Url; ?>admin/plugins/moment/moment.js"></script>
<script src="<?php echo site_Url; ?>admin/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?php echo site_Url; ?>admin/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
<script src="<?php echo site_Url; ?>admin/assets/pages/jquery.analytics_dashboard.init.js"></script><!-- App js -->
<script src="<?php echo site_Url; ?>admin/assets/js/app.js"></script>
<script src="<?php echo site_Url; ?>admin/tinymce/tinymce.min.js"></script>

<script src="tinymce/tinymce.min.js"></script>  

<script>

tinymce.init
({
   selector: "#about",
   theme: "modern",
   plugins: 'image code',
   plugins: 
   [
       "advlist autolink lists link image charmap print preview hr anchor pagebreak",
       "searchreplace wordcount visualblocks visualchars code fullscreen",
       "insertdatetime media nonbreaking save table contextmenu directionality",
       "emoticons template paste textcolor colorpicker textpattern imagetools"
   ],
   toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
   toolbar2: "print preview media | forecolor backcolor emoticons",
   image_advtab: true,

   
   file_picker_callback: function (cb, value, meta) 
       {
           var input = document.createElement('input');
           input.setAttribute('type', 'file');
           input.setAttribute('accept', 'image/*');
           input.onchange = function () 
           {
               var file = this.files[0];
               var reader = new FileReader();
               reader.onload = function () 
               {
                   var id = + (new Date()).getTime();
                   var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                   var base64 = reader.result.split(',')[1];
                   var blobInfo = blobCache.create(id, file, base64);
                   blobCache.add(blobInfo);
                   cb(blobInfo.blobUri(), { title: file.name });
               };
           reader.readAsDataURL(file);
           };

           input.click();
       },
           content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});



</script>



</body>

</html>