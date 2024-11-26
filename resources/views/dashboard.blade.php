<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{ asset('style.css') }}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
      <!-- color css -->
      <link rel="stylesheet" href="{{ asset('css/color_2.css') }}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('css/perfect-scrollbar.css') }}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_2">
    @include('sweetalert::alert')

      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_info">
                           <h6>{{ $data->full_name }}</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">

                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="/home"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                     </li>
                     <li><a href="/home/table"><i class="fa fa-table purple_color2"></i> <span>Laporan</span></a></li>
                     <li>
                        <a href="/home/students">
                        <i class="fa fa-mortar-board purple_color"></i> <span>Siswa</span></a>
                     </li>
                     <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-plus-square-o green_color"></i> <span>Input</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                            <li>
                                <a href="/home/inputadmin">> <span>Admin</span></a>
                            </li>
                           <li>
                              <a href="/home/inputstudent">> <span>Siswa</span></a>
                           </li>
                           <li>
                              <a href="/home/inputassessor">> <span>Penguji</span></a>
                           </li>
                           <li>
                            <a href="/home/inputmajor">> <span>Jurusan</span></a>
                           </li>
                           <li>
                            <a href="/home/inputcompetency">> <span>Standar Kompetensi</span></a>
                            </li>
                            <li>
                            <a href="/home/inputelement">> <span>Elemen Kompetensi</span></a>
                            </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><span class="name_user">{{ $data->full_name }}</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="/home/profile">My Profile</a>
                                       <a class="dropdown-item" href="/home/logout"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                <div class="container-fluid">
                    <div class="row column_title">
                        <div class="col-md-12">
                            <div class="page_title">
                                <h2>Dashboard</h2>
                            </div>
                        </div>
                    </div>
                    <div class="white_shd full margin_bottom_30">
                        <div class="full graph_head">
                            <div class="heading1 margin_0">
                                <h2>Jurusan</h2>
                            </div>
                        </div>
                        <div class="full inner_elements">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="tab_style1">
                                        <div class="tabbar padding_infor_info">
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    @foreach ($majors as $index => $major)
                                                        <a style="font-size: large" class="nav-item nav-link {{ $index === 0 ? 'active' : '' }}"
                                                           id="nav-major-{{ $major->id }}-tab"
                                                           data-toggle="tab"
                                                           href="#nav-major-{{ $major->id }}"
                                                           role="tab"
                                                           aria-controls="nav-major-{{ $major->id }}"
                                                           aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                                                           {{ $major->major_name }}
                                                        </a>
                                                    @endforeach
                                                </div>
                                            </nav>
                                            <div class="tab-content" id="nav-tabContent">
                                                @foreach ($majors as $index => $major)
                                                    <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}"
                                                         id="nav-major-{{ $major->id }}"
                                                         role="tabpanel"
                                                         aria-labelledby="nav-major-{{ $major->id }}-tab">
                                                        <p style="font-size: medium">{{ $major->description ?? 'No description available.' }}</p>
                                                        <div style="margin-top: 300px">
                                                            <a href="/home/editmajor/{{ $major->id }}" class="btn btn-primary">Edit</a>
                                                            <a href="/home/deletemajor/{{ $major->id }}" onclick="return window.confirm('Yakin Hapus Data Jurusan Ini?')" class="btn btn-danger">Delete</a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row column4 white_shd">
                        <div class="full graph_head">
                            <div class="heading1 margin_0">
                                <h2>Standar Kompetensi</h2>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Modal -->
                                    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header border-0">
                                                    <h5 class="modal-title">
                                                        <span class="fw-mediumbold"> New</span>
                                                        <span class="fw-light"> Row </span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table id="add-row" class="display table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Kode Unit</th>
                                                    <th>Judul Unit</th>
                                                    <th>Deskripsi</th>
                                                    <th>Jurusan</th>
                                                    <th>Kelas</th>
                                                    <th>Penguji</th>
                                                    <th style="width: 10%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($competencyStandard as $standard)
                                                    <tr>
                                                        <td>{{ $standard->unit_code }}</td>
                                                        <td>{{ $standard->unit_title }}</td>
                                                        <td>{{ $standard->unit_description }}</td>
                                                        <td>{{ $standard->major->major_name ?? 'N/A' }}</td>
                                                        <td>{{ $standard->grade_level ?? 'N/A' }}</td>
                                                        <td>{{ $standard->assessor->user->full_name }}</td>
                                                        <td class="d-flex">
                                                            <a href="/home/detail/{{ $standard->id }}">
                                                                <button class="btn btn-success" style="margin-right: 10px">Detail</button>
                                                            </a>
                                                            <a href="/home/edit/{{ $standard->id }}">
                                                                <button class="btn btn-primary" style="margin-right: 10px">Edit</button>
                                                            </a>
                                                            <a href="/home/delete/{{ $standard->id }}" onclick="return window.confirm('Yakin Hapus Data Ini?')">
                                                                <button class="btn btn-danger">Delete</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row column4 white_shd mt-5">
                        <div class="full graph_head">
                            <div class="heading1 margin_0">
                                <h2>Penguji</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="dash_blog">
                                <div class="dash_blog_inner">
                                    <div class="dash_head">
                                        <h3><span>Internal</span></h3>
                                    </div>
                                    <div class="msg_list_main">
                                        <ul class="msg_list">
                                            @foreach ($assessors as $assessor)
                                                @if ($assessor->assessor_type === 'internal')
                                                    <li style="display: flex; justify-content: space-between; align-items: center;">
                                                        <span>
                                                            <span class="name_user">{{ $assessor->user->full_name }}</span>
                                                            <span class="msg_user">{{ $assessor->description }}</span>
                                                        </span>
                                                        <span style="display: flex; gap: 10px;"> <!-- Flexbox for buttons -->
                                                            <a href="/home/editassessor/{{ $assessor->id }}" class="btn btn-primary btn-xs">Edit</a>
                                                            <a href="/home/deleteassessor/{{ $assessor->id }}" onclick="return window.confirm('Yakin Hapus Data Penguji Ini?')" class="btn btn-danger btn-xs">Delete</a>
                                                        </span>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="dash_blog">
                                <div class="dash_blog_inner">
                                    <div class="dash_head">
                                        <h3><span>External</span></h3>
                                    </div>
                                    <div class="msg_list_main">
                                        <ul class="msg_list">
                                            @foreach ($assessors as $assessor)
                                                @if ($assessor->assessor_type === 'external')
                                                    <li style="display: flex; justify-content: space-between; align-items: center;">
                                                        <span>
                                                            <span class="name_user">{{ $assessor->user->full_name }}</span>
                                                            <span class="msg_user">{{ $assessor->description }}</span>
                                                        </span>
                                                        <span style="display: flex; gap: 5px;">
                                                            <a href="/home/editassessor/{{ $assessor->id }}" class="btn btn-primary btn-xs">Edit</a>
                                                            <a href="/home/deleteassessor/{{ $assessor->id }}" onclick="return window.confirm('Yakin Hapus Data Penguji Ini?')" class="btn btn-danger btn-xs">Delete</a>
                                                        </span>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row column4 white_shd mt-4">
                        <div class="full graph_head">
                            <div class="heading1 margin_0">
                                <h2>Admin Users</h2>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="white_shd full margin_bottom_30">
                                <div class="table_section padding_infor_info">
                                    <div class="table-responsive-sm">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Username</th>
                                                    <th>Nomor Telpon</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($admins as $index => $admin)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $admin->full_name }}</td>
                                                    <td>{{ $admin->email }}</td>
                                                    <td>{{ $admin->username }}</td>
                                                    <td>{{ $admin->phone_number }}</td>
                                                    <td>
                                                        <a href="/home/editadmin/{{ $admin->id }}">
                                                            <button type="button" class="btn btn-primary btn-xs full-width">
                                                                 Edit
                                                            </button>
                                                        </a>
                                                        <a href="/home/deleteadmin/{{ $admin->id }}" onclick="return window.confirm('Yakin Hapus Data Admin Ini?')" class="btn btn-danger btn-xs full-width">Delete</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>

      <!-- jQuery -->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <!-- wow animation -->
      <script src="{{ asset('js/animate.js') }}"></script>
      <!-- select country -->
      <script src="{{ asset('js/bootstrap-select.js') }}"></script>
      <!-- owl carousel -->
      <script src="{{ asset('js/owl.carousel.js') }}"></script>
      <!-- chart js -->
      <script src="{{ asset('js/Chart.min.js') }}"></script>
      <script src="{{ asset('js/Chart.bundle.min.js') }}"></script>
      <script src="{{ asset('js/utils.js') }}"></script>
      <script src="{{ asset('js/analyser.js') }}"></script>
      <!-- nice scrollbar -->
      <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{ asset('js/custom.js') }}"></script>
      <script src="{{ asset('js/chart_custom_style1.js') }}js/chart_custom_style1.js"></script>
      <script src="{{ asset('js/datatables.min.js') }}"></script>
      <script>
        $(document).ready(function () {
          $("#basic-datatables").DataTable({});

          $("#multi-filter-select").DataTable({
            pageLength: 5,
            initComplete: function () {
              this.api()
                .columns()
                .every(function () {
                  var column = this;
                  var select = $(
                    '<select class="form-select"><option value=""></option></select>'
                  )
                    .appendTo($(column.footer()).empty())
                    .on("change", function () {
                      var val = $.fn.dataTable.util.escapeRegex($(this).val());

                      column
                        .search(val ? "^" + val + "$" : "", true, false)
                        .draw();
                    });

                  column
                    .data()
                    .unique()
                    .sort()
                    .each(function (d, j) {
                      select.append(
                        '<option value="' + d + '">' + d + "</option>"
                      );
                    });
                });
            },
          });

          // Add Row
          $("#add-row").DataTable({
            pageLength: 5,
          });

          var action =
            '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

          $("#addRowButton").click(function () {
            $("#add-row")
              .dataTable()
              .fnAddData([
                $("#addName").val(),
                $("#addPosition").val(),
                $("#addOffice").val(),
                action,
              ]);
            $("#addRowModal").modal("hide");
          });
        });
        </script>
   </body>
</html>
