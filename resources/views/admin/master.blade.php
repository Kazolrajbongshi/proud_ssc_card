<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- bootstrap css -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
    <!-- font awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
<!--      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <!-- jQuery  ui -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>

    <title>
    Dashboard
  </title>
      <style>
          .email {
              /*background-color: #7a7a7a;*/
              width: 80%;
              height: 90%;
              padding: .375rem .75rem;
              border-radius: .25rem;
              border: 1px solid #ced4da;
              overflow-x: auto;
              white-space: nowrap;
          }

          .headline{
              padding: 10px;
          }
          .mail-box {
              border-collapse: collapse;
              border-spacing: 0;
              display: table;
              table-layout: fixed;
              width: 100%;
          }
          .mail-box aside {
              display: table-cell;
              float: none;
              height: 100%;
              padding: 0;
              vertical-align: top;
          }
          .mail-box .sm-side {
              background: none repeat scroll 0 0 #e5e8ef;
              border-radius: 4px 0 0 4px;
              width: 25%;
          }
          .mail-box .lg-side {
              background: none repeat scroll 0 0 #fff;
              border-radius: 0 4px 4px 0;
              width: 75%;
          }
          .mail-box .sm-side .user-head {
              background: none repeat scroll 0 0 #00a8b3;
              border-radius: 4px 0 0;
              color: #fff;
              min-height: 80px;
              padding: 10px;
          }
          .user-head .inbox-avatar {
              float: left;
              width: 65px;
          }
          .user-head .inbox-avatar img {
              border-radius: 4px;
          }
          .user-head .user-name {
              display: inline-block;
              margin: 0 0 0 10px;
          }
          .user-head .user-name h5 {
              font-size: 14px;
              font-weight: 300;
              margin-bottom: 0;
              margin-top: 15px;
          }
          .user-head .user-name h5 a {
              color: #fff;
          }
          .user-head .user-name span a {
              color: #87e2e7;
              font-size: 12px;
          }
          a.mail-dropdown {
              background: none repeat scroll 0 0 #80d3d9;
              border-radius: 2px;
              color: #01a7b3;
              font-size: 10px;
              margin-top: 20px;
              padding: 3px 5px;
          }
          .inbox-body {
              padding: 20px;
          }
          .btn-compose {
              background: none repeat scroll 0 0 #ff6c60;
              color: #fff;
              padding: 12px 0;
              text-align: center;
              width: 100%;
          }
          .btn-compose:hover {
              background: none repeat scroll 0 0 #f5675c;
              color: #fff;
          }
          ul.inbox-nav {
              display: inline-block;
              margin: 0;
              padding: 0;
              width: 100%;
          }
          .inbox-divider {
              border-bottom: 1px solid #d5d8df;
          }
          ul.inbox-nav li {
              display: inline-block;
              line-height: 45px;
              width: 100%;
          }
          ul.inbox-nav li a {
              color: #6a6a6a;
              display: inline-block;
              line-height: 45px;
              padding: 0 20px;
              width: 100%;
          }
          ul.inbox-nav li a:hover, ul.inbox-nav li.active a, ul.inbox-nav li a:focus {
              background: none repeat scroll 0 0 #d5d7de;
              color: #6a6a6a;
          }
          ul.inbox-nav li a i {
              color: #6a6a6a;
              font-size: 16px;
              padding-right: 10px;
          }
          ul.inbox-nav li a span.label {
              margin-top: 13px;
          }
          ul.labels-info li h4 {
              color: #5c5c5e;
              font-size: 13px;
              padding-left: 15px;
              padding-right: 15px;
              padding-top: 5px;
              text-transform: uppercase;
          }
          ul.labels-info li {
              margin: 0;
          }
          ul.labels-info li a {
              border-radius: 0;
              color: #6a6a6a;
          }
          ul.labels-info li a:hover, ul.labels-info li a:focus {
              background: none repeat scroll 0 0 #d5d7de;
              color: #6a6a6a;
          }
          ul.labels-info li a i {
              padding-right: 10px;
          }
          .nav.nav-pills.nav-stacked.labels-info p {
              color: #9d9f9e;
              font-size: 11px;
              margin-bottom: 0;
              padding: 0 22px;
          }
          .inbox-head {
              background: none repeat scroll 0 0 #41cac0;
              border-radius: 0 4px 0 0;
              color: #fff;
              min-height: 80px;
              padding: 20px;
          }
          .inbox-head h3 {
              display: inline-block;
              font-weight: 300;
              margin: 0;
              padding-top: 6px;
          }
          .inbox-head .sr-input {
              border: medium none;
              border-radius: 4px 0 0 4px;
              box-shadow: none;
              color: #8a8a8a;
              float: left;
              height: 40px;
              padding: 0 10px;
          }
          .inbox-head .sr-btn {
              background: none repeat scroll 0 0 #00a6b2;
              border: medium none;
              border-radius: 0 4px 4px 0;
              color: #fff;
              height: 40px;
              padding: 0 20px;
          }
          .table-inbox {
              border: 1px solid #d3d3d3;
              margin-bottom: 0;
          }
          .table-inbox tr td {
              padding: 12px !important;
          }
          .table-inbox tr td:hover {
              cursor: pointer;
          }
          .table-inbox tr td .fa-star.inbox-started, .table-inbox tr td .fa-star:hover {
              color: #f78a09;
          }
          .table-inbox tr td .fa-star {
              color: #d5d5d5;
          }
          .table-inbox tr.unread td {
              background: none repeat scroll 0 0 #f7f7f7;
              font-weight: 600;
          }
          ul.inbox-pagination {
              float: right;
          }
          ul.inbox-pagination li {
              float: left;
          }
          .mail-option {
              display: inline-block;
              margin-bottom: 10px;
              width: 100%;
          }
          .mail-option .chk-all, .mail-option .btn-group {
              margin-right: 5px;
          }
          .mail-option .chk-all, .mail-option .btn-group a.btn {
              background: none repeat scroll 0 0 #fcfcfc;
              border: 1px solid #e7e7e7;
              border-radius: 3px !important;
              color: #afafaf;
              display: inline-block;
              padding: 5px 10px;
          }
          .inbox-pagination a.np-btn {
              background: none repeat scroll 0 0 #fcfcfc;
              border: 1px solid #e7e7e7;
              border-radius: 3px !important;
              color: #afafaf;
              display: inline-block;
              padding: 5px 15px;
          }
          .mail-option .chk-all input[type="checkbox"] {
              margin-top: 0;
          }
          .mail-option .btn-group a.all {
              border: medium none;
              padding: 0;
          }
          .inbox-pagination a.np-btn {
              margin-left: 5px;
          }
          .inbox-pagination li span {
              display: inline-block;
              margin-right: 5px;
              margin-top: 7px;
          }
          .fileinput-button {
              background: none repeat scroll 0 0 #eeeeee;
              border: 1px solid #e6e6e6;
          }
          .inbox-body .modal .modal-body input, .inbox-body .modal .modal-body textarea {
              border: 1px solid #e6e6e6;
              box-shadow: none;
          }
          .btn-send, .btn-send:hover {
              background: none repeat scroll 0 0 #00a8b3;
              color: #fff;
          }
          .btn-send:hover {
              background: none repeat scroll 0 0 #009da7;
          }
          .modal-header h4.modal-title {
              font-family: "Open Sans",sans-serif;
              font-weight: 300;
          }
          .modal-body label {
              font-family: "Open Sans",sans-serif;
              font-weight: 400;
          }
          .heading-inbox h4 {
              border-bottom: 1px solid #ddd;
              color: #444;
              font-size: 18px;
              margin-top: 20px;
              padding-bottom: 10px;
          }
          .sender-info {
              margin-bottom: 20px;
          }
          .sender-info img {
              height: 30px;
              width: 30px;
          }
          .sender-dropdown {
              background: none repeat scroll 0 0 #eaeaea;
              color: #777;
              font-size: 10px;
              padding: 0 3px;
          }
          .view-mail a {
              color: #ff6c60;
          }
          .attachment-mail {
              margin-top: 30px;
          }
          .attachment-mail ul {
              display: inline-block;
              margin-bottom: 30px;
              width: 100%;
          }
          .attachment-mail ul li {
              float: left;
              margin-bottom: 10px;
              margin-right: 10px;
              width: 150px;
          }
          .attachment-mail ul li img {
              width: 100%;
          }
          .attachment-mail ul li span {
              float: right;
          }
          .attachment-mail .file-name {
              float: left;
          }
          .attachment-mail .links {
              display: inline-block;
              width: 100%;
          }

          .fileinput-button {
              float: left;
              margin-right: 4px;
              overflow: hidden;
              position: relative;
          }
          .fileinput-button input {
              cursor: pointer;
              direction: ltr;
              font-size: 23px;
              margin: 0;
              opacity: 0;
              position: absolute;
              right: 0;
              top: 0;
              transform: translate(-300px, 0px) scale(4);
          }
          .fileupload-buttonbar .btn, .fileupload-buttonbar .toggle {
              margin-bottom: 5px;
          }
          .files .progress {
              width: 200px;
          }
          .fileupload-processing .fileupload-loading {
              display: block;
          }
          * html .fileinput-button {
              line-height: 24px;
              margin: 1px -3px 0 0;
          }
          * + html .fileinput-button {
              margin: 1px 0 0;
              padding: 2px 15px;
          }
          @media (max-width: 767px) {
              .files .btn span {
                  display: none;
              }
              .files .preview * {
                  width: 40px;
              }
              .files .name * {
                  display: inline-block;
                  width: 80px;
                  word-wrap: break-word;
              }
              .files .progress {
                  width: 20px;
              }
              .files .delete {
                  width: 60px;
              }
          }
          ul {
              list-style-type: none;
              padding: 0px;
              margin: 0px;
          }



          .my-custom-scrollbar {
            position: relative;
            height: 425px;
            overflow: auto;
            }
          .table-wrapper-scroll-y {
            display: block;
            }
/////////////////////////////////////////
          body {font-family: Arial, Helvetica, sans-serif;}

          #myImg {
              border-radius: 5px;
              cursor: pointer;
              transition: 0.3s;
          }

          #myImg:hover {opacity: 0.7;}

          /* The Modal (background) */
          .modal {
              display: none; /* Hidden by default */
              position: fixed; /* Stay in place */
              z-index: 1; /* Sit on top */
              padding-top: 100px; /* Location of the box */
              left: 0;
              top: 0;
              width: 100%; /* Full width */
              height: 100%; /* Full height */
              overflow: auto; /* Enable scroll if needed */
              background-color: rgb(0,0,0); /* Fallback color */
              background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
          }

          /* Modal Content (image) */
          .modal-content {
              margin: auto;
              display: block;
              width: 80%;
              height: 70%;
              max-width: 700px;
          }

          /* Caption of Modal Image */
          #caption {
              margin: auto;
              display: block;
              width: 80%;
              max-width: 700px;
              text-align: center;
              color: #ccc;
              padding: 10px 0;
              height: 150px;
          }

          /* Add Animation */
          .modal-content, #caption {
              -webkit-animation-name: zoom;
              -webkit-animation-duration: 0.6s;
              animation-name: zoom;
              animation-duration: 0.6s;
          }

          @-webkit-keyframes zoom {
              from {-webkit-transform:scale(0)}
              to {-webkit-transform:scale(1)}
          }

          @keyframes zoom {
              from {transform:scale(0)}
              to {transform:scale(1)}
          }

          /* The Close Button */
          .close {
              position: absolute;
              top: 55px;
              right: 35px;
              color: #f1f1f1;
              font-size: 40px;
              font-weight: bold;
              transition: 0.3s;
          }

          .close:hover,
          .close:focus {
              color: #bbb;
              text-decoration: none;
              cursor: pointer;
          }

          /* 100% Image Width on Smaller Screens */
          @media only screen and (max-width: 700px){
              .modal-content {
                  width: 100%;
              }
          }
      </style>

    <script type="text/javascript">

      function user_change_status($id,$status){

        var change_msg = confirm('are you sure to '+$status+' this user?');
        if(change_msg){

          var id = $id;
          var token = $('meta[name="csrf-token"]').attr('content');
          console.log(id);
          jQuery.ajax({
            type: "POST",
            url: "{{URL::to('change-user-status')}}",
            data: {
            "_method": 'POST',
            "_token": token,
            "id":id
            },                     
           success: function(response){
            
              $('#ajax_change_user_list').html(response);
            // console.log(response.data);
                       
           }
          });

        }
        else{
          return false;
        }

      }
                
    </script>
  </head>
  <body class="delivery_setting_page">
    <!-- top header -->

    <header>
      <div class="container-fluid">
        <div class="row top_fixed" >
          <div class="header_left logo_top">
              <a href="{{url('pending-users')}}" class="logo_holder">
                <!-- <img src="{{asset('assets/img/logo.png')}}" alt=""> -->
                <h3 style="color: #ffffff;">DASHBOARD</h3>
              </a>
          </div>
          <div class="header_right">
              <div class="user_area">
                <ul class="dropdown_menu">
                  <li > {{Session::get('current_admin_name')}}
                    <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                    <ul class="dropdown-item-holder" style="top: 40px;">                       
                        <li>
                          <a class="dropdown-item" href="{{url('admin-logout')}}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">Logout</a>
                             <form id="logout-form" action="{{url('admin-logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>                  
                    </ul>
                    </li>
                  </ul>                             
              </div>
          </div>
        </div>
      </div>
    </header>

    <div id="wrapper" class="toggled">
      <!-- toggle menu -->

      <a href="#menu-toggle" class="btn btn-secondary" id="sidebar_toggle">
          <i class="fa fa-bars" aria-hidden="true"></i>
      </a>

      <!-- Sidebar -->
        <div id="sidebar-wrapper">

            <div class="sidebar">
              @if(isset($active_pending_list))
                <a class="template active" href="{{url('pending-users')}}">
                    <!--<span class="sidebar_icon"><img src="{{asset('assets/img/send.png')}}" alt=""></span>-->
                    <i class="fas fa-address-book"></i>
                    Pending
                </a>
              @else
                <a class="template" href="{{url('pending-users')}}">
                    <!--<span class="sidebar_icon"><img src="{{asset('assets/img/send.png')}}" alt=""></span>-->
                    <i class="fas fa-address-book"></i>
                    Pending
                </a>
              @endif

              @if(isset($active_user_list))
                <a class="template active" href="{{url('active-users')}}">
                    <!--<span class="sidebar_icon"><img src="{{asset('assets/img/send.png')}}" alt=""></span>-->
                    <i class="fas fa-address-book"></i>
                    Active
                </a>
              @else
                <a class="template" href="{{url('active-users')}}">
                    <!--<span class="sidebar_icon"><img src="{{asset('assets/img/send.png')}}" alt=""></span>-->
                    <i class="fas fa-address-book"></i>
                    Active
                </a>
              @endif
                @if(isset($active_list))
                <a class="template active" href="{{url('request-form')}}">
                    <!--<span class="sidebar_icon"><img src="{{asset('assets/img/send.png')}}" alt=""></span>-->
                    <i class="fas fa-address-book"></i>
                    Admin
                </a>
                @else
                <a class="template" href="{{url('request-form')}}">
                    <!--<span class="sidebar_icon"><img src="{{asset('assets/img/send.png')}}" alt=""></span>-->
                    <i class="fas fa-user"></i>
                    Admin
                </a>
                @endif


            </div>

        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        @yield('user_main_content')
          <!-- /#page-content-wrapper -->
      </div>


    <!-- jquery core -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <script>

      $(document).ready(function(){

          var $checkboxes = $('#devel-generate-content-form td input[type="checkbox"]');
              
          $checkboxes.change(function(){
              var countCheckedCheckboxes = $checkboxes.filter(':checked').length;
              // $('#count-checked-checkboxes').text(countCheckedCheckboxes);
              
              $('#edit-count-checked-checkboxes').text(countCheckedCheckboxes+'/');
              // document.getElementById("edit-count-checked-checkboxes").innerHTML = countCheckedCheckboxes+'/';
          });

          // $('input[type="checkbox"]').click(function(){
          //   var total_check = $('.test:checked').length;
          //    document.getElementById("edit-count-checked-checkboxes").innerHTML = total_check+'/';
          //     // alert($('.test:checked').length);

          // });

      });

      // $(document).ready(function(){
 
      //    $("#but_search").click(function(){
      //     var search = $('#hashtag').val();
      //     var token = $('meta[name="csrf-token"]').attr('content');
      //     // console.log(token);

      //     jQuery.ajax({
      //       type: "POST",
      //       url: "{{URL::to('hashtag-list-search')}}",
      //       data: {
      //       "_method": 'POST',
      //       "_token": token,
      //       "search": search,
      //       },
      //      dataType: 'html',
           
      //      beforeSend: function(){
      //       // Show image container
      //       $("#loader").show();
      //      },
      //      success: function(response){
      //       if(response.success){
      //         $('.hashtag_search_alert').html(result.success);
      //       }else{
      //         $('.response').empty();
      //         $('.response').append(response);
      //       }
            
      //      },
      //      complete:function(data){
      //       // Hide image container
      //       $("#loader").hide();
      //      }
      //     });
         
      //    });
      //   });
      // custom date format
      $(function(){
        $("#delivery_pr_start").datepicker({ dateFormat: 'dd-mm-yy'});
        $("#delivery_pr_end").datepicker({ dateFormat: 'dd-mm-yy'});
        $("#except_start").datepicker({ dateFormat: 'dd-mm-yy'});
        $("#except_end").datepicker({ dateFormat: 'dd-mm-yy'});
      });

      function readURL(input) { 
        $('.preview').show();
          $('#blah').hide();
          // $('#title').hide();
          var description = $("textarea").val();
          // document.getElementById("title").innerHTML = title;
          document.getElementById("description").innerHTML = description;
          $('#description').show();
          $('.image_show').after('<img id="blah" src="#" alt="your image" />');
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
              $('#blah')
              .attr('src', e.target.result)
              .width(250)
              .height(200);
              document.getElementById('image_show_small').src =  e.target.result;
              document.getElementById('no_image_id').src =  e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
          }
        }

        function readimageURL(input) { 
        $('.preview').show();
          $('#blah').hide();
          // $('#title').hide();
          var description = $("textarea").val();
          // document.getElementById("title").innerHTML = title;
          document.getElementById("description").innerHTML = description;
          $('#description').show();
          $('.image_show').after('<img id="blah" src="#" alt="your image"/>');
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
              $('#blah')
              .attr('src', e.target.result)
              .width(250)
              .height(200);
              document.getElementById('no_image_id').src =  e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
          }
        }

        function getPreview(){
          var title = $(".title").val();
          var description = $("textarea").val();
          // document.getElementById("title").innerHTML = title;
          document.getElementById("description").innerHTML = description;
          $('.preview').show();
          $('#blah').show();
          // $('#title').show();
          $('#description').show();
        }


            function check_delete(){

                var check = confirm('Are you sure to delete this?');
                if(check){
                    return true;
                }else{
                    return false;
                }
            }
        
    </script>

   
  </body>
</html>
