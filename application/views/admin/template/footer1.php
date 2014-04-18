<!-- BEGIN FOOTER -->
<div class="footer">
   <div class="footer-inner">
      2013 &copy; Metronic by keenthemes.
   </div>
   <div class="footer-tools">
      <span class="go-top">
      <i class="icon-angle-up"></i>
      </span>
   </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->   
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->   

<!--    KENDO UI javascript files-->

  <script src='<?php// echo base_url('assets/plugins/jquery-1.10.2.min.js')?>'></script>
  <script src='<?php //echo base_url('assets/plugins/jquery-migrate-1.2.1.min.js')?>'></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
  <script src='<?php echo base_url('assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')?>'></script>
  <script src='<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>'></script>
  <script src='<?php echo base_url('assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js')?>'></script>
  <script src='<?php echo base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')?>'></script> 
  <script src='<?php echo base_url('assets/plugins/jquery.blockui.min.js')?>'></script>
  <script src='<?php echo base_url('assets/plugins/jquery.cookie.min.js')?>'></script>
  <script src='<?php echo base_url('assets/plugins/uniform/jquery.uniform.min.js')?>'></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->	
<script src='<?php echo base_url('assets/plugins/jquery-validation/dist/jquery.validate.min.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/select2/select2.min.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js')?>'></script>
 <script src='<?php echo base_url('assets/plugins/gmaps/gmaps.js')?>'></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src='<?php echo base_url('assets/scripts/app.js')?>'></script>
<script src='<?php echo base_url('assets/scripts/maps-google.js')?>'></script> 
<!-- END PAGE LEVEL SCRIPTS -->  
<script>
  jQuery(document).ready(function() {    
     App.init(); // initlayout and core plugins     
    MapsGoogle.init();
  });
</script>
  <style>
      #map_canvas {
        width: 100%;
        height: 100%;
      }
       
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var myLatlng = new google.maps.LatLng(<?php  echo $data->Entity['longitude'].",".$data->Entity['latitude'];?>);
        //var myLatlng = new google.maps.LatLng(-1.273483, 36.808258);
        var map_options = {
          center:myLatlng,
          zoom: 8
         // mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(map_canvas, map_options);
          var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<script>
  	function handleLogin () 
        {
		$('.login-form').validate({
	            errorElement: 'span', //default input error message container
	            errorClass: 'help-block', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            rules: {
	                username: {
	                    required: true
	                },
	                password: {
	                    required: true
	                },
	                remember: {
	                    required: false
	                }
	            },

	            messages: {
	                username: {
	                    required: "Username is required1."
	                },
	                password: {
	                    required: "Password is required2."
	                }
	            },

	            invalidHandler: function (event, validator) { //display error alert on form submit   
	                $('.alert-error', $('.login-form')).show();
	            },

	            highlight: function (element) { // hightlight error inputs
	                $(element)
	                    .closest('.form-group').addClass('has-error'); // set error class to the control group
	            },

	            success: function (label) {
	                label.closest('.form-group').removeClass('has-error');
	                label.remove();
	            },

	            errorPlacement: function (error, element) {
	                error.insertAfter(element.closest('.input-icon'));
	            },

	            submitHandler: function (form) {
	                form.submit();
	            }
	        });

	        $('.login-form input').keypress(function (e) {
	            if (e.which == 13) {
	                if ($('.login-form').validate().form()) {
	                    $('.login-form').submit();
	                }
	                return false;
	            }
	        });
	}

	function  handleForgetPassword () {
		$('.forget-form').validate({
	            errorElement: 'span', //default input error message container
	            errorClass: 'help-block', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            ignore: "",
	            rules: {
	                email: {
	                    required: true,
	                    email: true
	                }
	            },

	            messages: {
	                email: {
	                    required: "Email is required."
	                }
	            },

	            invalidHandler: function (event, validator) { //display error alert on form submit   

	            },

	            highlight: function (element) { // hightlight error inputs
	                $(element)
	                    .closest('.form-group').addClass('has-error'); // set error class to the control group
	            },

	            success: function (label) {
	                label.closest('.form-group').removeClass('has-error');
	                label.remove();
	            },

	            errorPlacement: function (error, element) {
	                error.insertAfter(element.closest('.input-icon'));
	            },

	            submitHandler: function (form) {
	                form.submit();
	            }
	        });

	        $('.forget-form input').keypress(function (e) {
	            if (e.which == 13) {
	                if ($('.forget-form').validate().form()) {
	                    $('.forget-form').submit();
	                }
	                return false;
	            }
	        });

	        jQuery('#forget-password').click(function () {
	            jQuery('.login-form').hide();
	            jQuery('.forget-form').show();
	        });

	        jQuery('#back-btn').click(function () {
	            jQuery('.login-form').show();
	            jQuery('.forget-form').hide();
	        });

	};

	function handleRegister  () {

		function format(state) {
            if (!state.id) return state.text; // optgroup
            return "<img class='flag' src='assets/img/flags/" + state.id.toLowerCase() + ".png'/>&nbsp;&nbsp;" + state.text;
        }


		$("#select2_sample4").select2({
		  	placeholder: '<i class="icon-map-marker"></i>&nbsp;Select a Country',
            allowClear: true,
            formatResult: format,
            formatSelection: format,
            escapeMarkup: function (m) {
                return m;
            }
        });


			$('#select2_sample4').change(function () {
                $('.register-form').validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
            });



         $('.register-form').validate({
	            errorElement: 'span', //default input error message container
	            errorClass: 'help-block', // default input error message class
	            focusInvalid: false, // do not focus the last invalid input
	            ignore: "",
	            rules: {
	                
	                fullname: {
	                    required: true
	                },
	                email: {
	                    required: true,
	                    email: true
	                },
	                address: {
	                    required: true
	                },
	                city: {
	                    required: true
	                },
	                country: {
	                    required: true
	                },

	                username: {
	                    required: true
	                },
	                password: {
	                    required: true
	                },
	                rpassword: {
	                    equalTo: "#register_password"
	                },

	                tnc: {
	                    required: true
	                }
	            },

	            messages: { // custom messages for radio buttons and checkboxes
	                tnc: {
	                    required: "Please accept TNC first."
	                }
	            },

	            invalidHandler: function (event, validator) { //display error alert on form submit   

	            },

	            highlight: function (element) { // hightlight error inputs
	                $(element)
	                    .closest('.form-group').addClass('has-error'); // set error class to the control group
	            },

	            success: function (label) {
	                label.closest('.form-group').removeClass('has-error');
	                label.remove();
	            }

	        });


	};
    
   jQuery(document).ready(function() {  
   //Login.init();
  
  //handleLogin () ;
 if( handleRegister()&& handleLogin()){ 
    $("#upload").submit(function(e) {
     e.preventDefault();
     
   //  alert(postData);
    var formObj = $(this);
    var formURL = '<?php echo site_url('admin/profile/do_upload')?>';
    var formData = new FormData(this);
    $.ajax({
        url: formURL,
    type: 'POST',
        data:  formData,
    mimeType:"multipart/form-data",
    contentType: false,
        cache: false,
        processData:false,
    success: function(data, textStatus, jqXHR)
    {
    alert(data);
    },
     error: function(jqXHR, textStatus, errorThrown) 
     {
         alert(errorThrown);
     }          
    });

});
    $("#regform").submit(function(e) {
     e.preventDefault();
     var postData = $(this).serializeArray();
      var formURL = $(this).attr("action");
       $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(data, textStatus, jqXHR) 
        {
            
        alert(data);//data: return data from server
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
              alert(errorThrown);      
        }
    });
 });
    $("#loginform").submit(function(e) {
     e.preventDefault();
          var postData = $(this).serializeArray();
      var formURL = $(this).attr("action");
       $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(data, textStatus, jqXHR) 
        {
            
        alert(data);//data: return data from server
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
              alert(errorThrown);      
        }
    });
 });
 };     
});
</script>
 <script type="text/javascript">
    $(function (){
        $('a.edit').click(function() {
            var url = this.href;
            // show a spinner or something via css
            var dialog = $('<div style="display:none" class="loading"></div>').appendTo('body');
            // open the dialog
            dialog.dialog({
                width: 400,
                height: 450,
                modal: true,
                // add a close listener to prevent adding multiple divs to the document
                close: function(event, ui) {
                    // remove div with all data and events
                    dialog.remove();
                }
              
            });
            // load remote content
            dialog.load(
                url, 
                {}, // omit this param object to issue a GET request instead a POST request, otherwise you may provide post parameters within the object
                function (responseText, textStatus, XMLHttpRequest) {
                    // remove the loading class
                    dialog.removeClass('loading');
                }
            );
            //prevent the browser to follow the link
            return false;
        });
    });
    </script>
<!-- END JAVASCRIPTS -->
</body>
