@extends("layouts.sidebar")
@section("container")
    <div class="has-sidebar-left">
        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
                    <div class="search-bar">
                        <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                               placeholder="start typing...">
                    </div>
                    <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
                       aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
                </div>
            </div>
        </div>
        <div class="sticky">
            <div class="navbar navbar-expand d-flex justify-content-between bd-navbar white shadow">
                <div class="relative">
                    <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
                        <i></i>
                    </a>
                </div>
                <!--Top Menu Start -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages-->
{{--                        <li class="dropdown custom-dropdown messages-menu">--}}
{{--                            <a href="#" class="nav-link" data-toggle="dropdown">--}}
{{--                                <i class="icon-message "></i>--}}
{{--                                <span class="badge badge-success badge-mini rounded-circle">4</span>--}}
{{--                            </a>--}}
{{--                            <ul class="dropdown-menu dropdown-menu-right">--}}
{{--                                <li>--}}
{{--                                    <!-- inner menu: contains the actual data -->--}}
{{--                                    <ul class="menu pl-2 pr-2">--}}
{{--                                        <!-- start message -->--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <div class="avatar float-left">--}}
{{--                                                    <img src="assets/img/dummy/u4.png" alt="">--}}
{{--                                                    <span class="avatar-badge busy"></span>--}}
{{--                                                </div>--}}
{{--                                                <h4>--}}
{{--                                                    Support Team--}}
{{--                                                    <small><i class="icon icon-clock-o"></i> 5 mins</small>--}}
{{--                                                </h4>--}}
{{--                                                <p>Why not buy a new awesome theme?</p>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <!-- end message -->--}}
{{--                                        <!-- start message -->--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <div class="avatar float-left">--}}
{{--                                                    <img src="assets/img/dummy/u1.png" alt="">--}}
{{--                                                    <span class="avatar-badge online"></span>--}}
{{--                                                </div>--}}
{{--                                                <h4>--}}
{{--                                                    Support Team--}}
{{--                                                    <small><i class="icon icon-clock-o"></i> 5 mins</small>--}}
{{--                                                </h4>--}}
{{--                                                <p>Why not buy a new awesome theme?</p>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <!-- end message -->--}}
{{--                                        <!-- start message -->--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <div class="avatar float-left">--}}
{{--                                                    <img src="assets/img/dummy/u2.png" alt="">--}}
{{--                                                    <span class="avatar-badge idle"></span>--}}
{{--                                                </div>--}}
{{--                                                <h4>--}}
{{--                                                    Support Team--}}
{{--                                                    <small><i class="icon icon-clock-o"></i> 5 mins</small>--}}
{{--                                                </h4>--}}
{{--                                                <p>Why not buy a new awesome theme?</p>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <!-- end message -->--}}
{{--                                        <!-- start message -->--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <div class="avatar float-left">--}}
{{--                                                    <img src="assets/img/dummy/u3.png" alt="">--}}
{{--                                                    <span class="avatar-badge busy"></span>--}}
{{--                                                </div>--}}
{{--                                                <h4>--}}
{{--                                                    Support Team--}}
{{--                                                    <small><i class="icon icon-clock-o"></i> 5 mins</small>--}}
{{--                                                </h4>--}}
{{--                                                <p>Why not buy a new awesome theme?</p>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <!-- end message -->--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="footer s-12 p-2 text-center"><a href="#">See All Messages</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <!-- Notifications -->--}}
{{--                        <li class="dropdown custom-dropdown notifications-menu">--}}
{{--                            <a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">--}}
{{--                                <i class="icon-notifications "></i>--}}
{{--                                <span class="badge badge-danger badge-mini rounded-circle">4</span>--}}
{{--                            </a>--}}
{{--                            <ul class="dropdown-menu dropdown-menu-right">--}}
{{--                                <li class="header">You have 10 notifications</li>--}}
{{--                                <li>--}}
{{--                                    <!-- inner menu: contains the actual data -->--}}
{{--                                    <ul class="menu">--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <i class="icon icon-data_usage text-success"></i> 5 new members joined today--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <i class="icon icon-data_usage text-danger"></i> 5 new members joined today--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <i class="icon icon-data_usage text-yellow"></i> 5 new members joined today--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="footer p-2 text-center"><a href="#">View all</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a class="nav-link " data-toggle="collapse" data-target="#navbarToggleExternalContent"--}}
{{--                               aria-controls="navbarToggleExternalContent"--}}
{{--                               aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                                <i class=" icon-search3 "></i>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <!-- Right Sidebar Toggle Button -->
{{--                        <li>--}}
{{--                            <a class="nav-link ml-2" data-toggle="control-sidebar">--}}
{{--                                <i class="icon-tasks "></i>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <!-- User Account-->
{{--                        <li class="dropdown custom-dropdown user user-menu ">--}}
{{--                            <a href="#" class="nav-link" data-toggle="dropdown">--}}
{{--                                <img src="assets/img/dummy/u8.png" class="user-image" alt="User Image">--}}
{{--                                <i class="icon-more_vert "></i>--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu p-4 dropdown-menu-right">--}}
{{--                                <div class="row box justify-content-between my-4">--}}
{{--                                    <div class="col">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="icon-apps purple lighten-2 avatar  r-5"></i>--}}
{{--                                            <div class="pt-1">Apps</div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col"><a href="#">--}}
{{--                                            <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>--}}
{{--                                            <div class="pt-1">Profile</div>--}}
{{--                                        </a></div>--}}
{{--                                    <div class="col">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>--}}
{{--                                            <div class="pt-1">Settings</div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row box justify-content-between my-4">--}}
{{--                                    <div class="col">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="icon-star light-green lighten-1 avatar  r-5"></i>--}}
{{--                                            <div class="pt-1">Favourites</div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="icon-save2 orange accent-1 avatar  r-5"></i>--}}
{{--                                            <div class="pt-1">Saved</div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="icon-perm_data_setting grey darken-3 avatar  r-5"></i>--}}
{{--                                            <div class="pt-1">Settings</div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <hr>--}}
{{--                                <div class="row box justify-content-between my-4">--}}
{{--                                    <div class="col">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="icon-apps purple lighten-2 avatar  r-5"></i>--}}
{{--                                            <div class="pt-1">Apps</div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col"><a href="#">--}}
{{--                                            <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>--}}
{{--                                            <div class="pt-1">Profile</div>--}}
{{--                                        </a></div>--}}
{{--                                    <div class="col">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>--}}
{{--                                            <div class="pt-1">Settings</div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="page  has-sidebar-left height-full">


        <div class="container-fluid animatedParent animateOnce">
            <div class="tab-content my-3" id="v-pills-tabContent">
                <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel"
                     aria-labelledby="v-pills-all-tab">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <div class="card r-0 shadow">
                                <div class="table-responsive">
                                    <form>
                                        <table class="table table-striped table-hover r-0">
                                            <thead>
                                            <tr class="no-b">

                                                <th>USER NAME</th>
                                                <th>Tickets</th>
                                                <th>Created at</th>
                                                <th>PHONE</th>
                                                <th>STATUS</th>
                                                <th>ROLE</th>
                                                <th></th>
                                            </tr>
                                            </thead>

                                            <tbody>

                                            @foreach($users as $user)
                                            <tr>

                                                <td>
                                                    <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <span
                                                        class="avatar-letter avatar-letter-{{\Illuminate\Support\Str::lower(\Illuminate\Support\Str::substr($user->name,0,1))}}  avatar-md circle"></span>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <strong>{{$user->name}}</strong>
                                                        </div>
                                                        <small>{{$user->email}}</small>
                                                    </div>
                                                </td>

                                                <td>2</td>
                                                <td>{{$user->created_at}}</td>

                                                <td>Null</td>
                                                <td><span class="icon icon-circle s-12  mr-2 text-success"></span>
                                                    Active
                                                </td>
                                                <td><span class="r-3 badge badge-success ">{{\App\users_roles::where("role_id","=",$user->role_id)->first()->title}}</span></td>
{{--                                                <td>--}}
{{--                                                    <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>--}}
{{--                                                    <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>--}}
{{--                                                </td>--}}
                                            </tr>

                                                @endforeach
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--                <nav class="my-3" aria-label="Page navigation">--}}
                    {{--                    <ul class="pagination">--}}
                    {{--                        <li class="page-item"><a class="page-link" href="#">Previous</a>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="page-item"><a class="page-link" href="#">1</a>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="page-item"><a class="page-link" href="#">2</a>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="page-item"><a class="page-link" href="#">3</a>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="page-item"><a class="page-link" href="#">Next</a>--}}
                    {{--                        </li>--}}
                    {{--                    </ul>--}}
                    {{--                </nav>--}}
                </div>
                <div class="tab-pane animated fadeInUpShort" id="v-pills-buyers" role="tabpanel"
                     aria-labelledby="v-pills-buyers-tab">
                    <div class="row">
                        <div class="col-md-3 my-3">
                            <div class="card no-b">
                                <div class="card-body text-center p-5">
                                    <div class="avatar avatar-xl mb-3">
                                        <img src="assets/img/dummy/u1.png" alt="User Image">
                                    </div>
                                    <div>
                                        <h6 class="p-t-10">Alexander Pierce</h6>
                                        alexander@paper.com
                                    </div>
                                    <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="card no-b">
                                <div class="card-body text-center p-5">
                                    <div class="avatar avatar-xl mb-3">
                                        <img src="assets/img/dummy/u2.png" alt="User Image">
                                    </div>
                                    <div>
                                        <h6 class="p-t-10">Alexander Pierce</h6>
                                        alexander@paper.com
                                    </div>
                                    <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="card no-b">
                                <div class="card-body text-center p-5">
                                    <div class="avatar avatar-xl mb-3">
                                        <img src="assets/img/dummy/u4.png" alt="User Image">
                                    </div>
                                    <div>
                                        <h6 class="p-t-10">Alexander Pierce</h6>
                                        alexander@paper.com
                                    </div>
                                    <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="card no-b">
                                <div class="card-body text-center p-5">
                                    <div class="avatar avatar-xl mb-3">
                                        <img src="assets/img/dummy/u5.png" alt="User Image">
                                    </div>
                                    <div>
                                        <h6 class="p-t-10">Alexander Pierce</h6>
                                        alexander@paper.com
                                    </div>
                                    <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="card no-b">
                                <div class="card-body text-center p-5">
                                    <div class="avatar avatar-xl mb-3">
                                        <img src="assets/img/dummy/u6.png" alt="User Image">
                                    </div>
                                    <div>
                                        <h6 class="p-t-10">Alexander Pierce</h6>
                                        alexander@paper.com
                                    </div>
                                    <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="card no-b">
                                <div class="card-body text-center p-5">
                                    <div class="avatar avatar-xl mb-3">
                                        <img src="assets/img/dummy/u7.png" alt="User Image">
                                    </div>
                                    <div>
                                        <h6 class="p-t-10">Alexander Pierce</h6>
                                        alexander@paper.com
                                    </div>
                                    <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="card no-b">
                                <div class="card-body text-center p-5">
                                    <div class="avatar avatar-xl mb-3">
                                        <img src="assets/img/dummy/u8.png" alt="User Image">
                                    </div>
                                    <div>
                                        <h6 class="p-t-10">Alexander Pierce</h6>
                                        alexander@paper.com
                                    </div>
                                    <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="card no-b">
                                <div class="card-body text-center p-5">
                                    <div class="avatar avatar-xl mb-3">
                                        <img src="assets/img/dummy/u9.png" alt="User Image">
                                    </div>
                                    <div>
                                        <h6 class="p-t-10">Alexander Pierce</h6>
                                        alexander@paper.com
                                    </div>
                                    <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="card no-b">
                                <div class="card-body text-center p-5">
                                    <div class="avatar avatar-xl mb-3">
                                        <img src="assets/img/dummy/u9.png" alt="User Image">
                                    </div>
                                    <div>
                                        <h6 class="p-t-10">Alexander Pierce</h6>
                                        alexander@paper.com
                                    </div>
                                    <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="card no-b">
                                <div class="card-body text-center p-5">
                                    <div class="avatar avatar-xl mb-3">
                                        <img src="assets/img/dummy/u10.png" alt="User Image">
                                    </div>
                                    <div>
                                        <h6 class="p-t-10">Alexander Pierce</h6>
                                        alexander@paper.com
                                    </div>
                                    <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="card no-b">
                                <div class="card-body text-center p-5">
                                    <div class="avatar avatar-xl mb-3">
                                        <img src="assets/img/dummy/u11.png" alt="User Image">
                                    </div>
                                    <div>
                                        <h6 class="p-t-10">Alexander Pierce</h6>
                                        alexander@paper.com
                                    </div>
                                    <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="card no-b">
                                <div class="card-body text-center p-5">
                                    <div class="avatar avatar-xl mb-3">
                                        <img src="assets/img/dummy/u12.png" alt="User Image">
                                    </div>
                                    <div>
                                        <h6 class="p-t-10">Alexander Pierce</h6>
                                        alexander@paper.com
                                    </div>
                                    <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane animated fadeInUpShort" id="v-pills-sellers" role="tabpanel"
                     aria-labelledby="v-pills-sellers-tab">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <span class="avatar-letter avatar-letter-a avatar-lg  circle"></span>
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Alexander Pierce</strong>
                                        </div>
                                        <small> alexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <span class="avatar-letter avatar-letter-c avatar-lg  circle"></span>
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <img src="assets/img/dummy/u1.png" alt="User Image">
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <img src="assets/img/dummy/u4.png" alt="User Image">
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <img src="assets/img/dummy/u1.png" alt="User Image">
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <img src="assets/img/dummy/u4.png" alt="User Image">
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <span class="avatar-letter avatar-letter-a avatar-lg  circle"></span>
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Alexander Pierce</strong>
                                        </div>
                                        <small> alexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <span class="avatar-letter avatar-letter-c avatar-lg  circle"></span>
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <span class="avatar-letter avatar-letter-a avatar-lg  circle"></span>
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Alexander Pierce</strong>
                                        </div>
                                        <small> alexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <span class="avatar-letter avatar-letter-c avatar-lg  circle"></span>
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <img src="assets/img/dummy/u1.png" alt="User Image">
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <img src="assets/img/dummy/u4.png" alt="User Image">
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <img src="assets/img/dummy/u1.png" alt="User Image">
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <img src="assets/img/dummy/u4.png" alt="User Image">
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <span class="avatar-letter avatar-letter-a avatar-lg  circle"></span>
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Alexander Pierce</strong>
                                        </div>
                                        <small> alexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <span class="avatar-letter avatar-letter-c avatar-lg  circle"></span>
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <span class="avatar-letter avatar-letter-a avatar-lg  circle"></span>
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Alexander Pierce</strong>
                                        </div>
                                        <small> alexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <span class="avatar-letter avatar-letter-c avatar-lg  circle"></span>
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <img src="assets/img/dummy/u1.png" alt="User Image">
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <img src="assets/img/dummy/u4.png" alt="User Image">
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <img src="assets/img/dummy/u1.png" alt="User Image">
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <img src="assets/img/dummy/u4.png" alt="User Image">
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <span class="avatar-letter avatar-letter-a avatar-lg  circle"></span>
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Alexander Pierce</strong>
                                        </div>
                                        <small> alexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <span class="avatar-letter avatar-letter-c avatar-lg  circle"></span>
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <span class="avatar-letter avatar-letter-a avatar-lg  circle"></span>
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Alexander Pierce</strong>
                                        </div>
                                        <small> alexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <span class="avatar-letter avatar-letter-c avatar-lg  circle"></span>
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <img src="assets/img/dummy/u1.png" alt="User Image">
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <img src="assets/img/dummy/u4.png" alt="User Image">
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <img src="assets/img/dummy/u1.png" alt="User Image">
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <img src="assets/img/dummy/u4.png" alt="User Image">
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <span class="avatar-letter avatar-letter-a avatar-lg  circle"></span>
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Alexander Pierce</strong>
                                        </div>
                                        <small> alexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card no-b p-3">
                                <div>
                                    <div class="image mr-3 avatar-lg float-left">
                                        <span class="avatar-letter avatar-letter-c avatar-lg  circle"></span>
                                    </div>
                                    <div class="mt-1">
                                        <div>
                                            <strong>Clexander Pierce</strong>
                                        </div>
                                        <small>clexander@paper.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
