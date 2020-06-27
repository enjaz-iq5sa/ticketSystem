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

                                                <th>Subject</th>
                                                <th>Author</th>
                                                <th>Assignee</th>
                                                <th>Priority</th>
                                                <th>STATUS</th>
                                                <th>Created at</th>
                                                <th></th>
                                            </tr>
                                            </thead>

                                            <tbody>

                                            @foreach($tickets as $ticket)
                                                <tr>


                                                    <td>{{$ticket->subject}}</td>

                                                    <td>{{\App\User::all()->where("id","=",$ticket->user_id)->last()->name}}</td>
                                                    <td>{{\App\User::all()->where("id","=",$ticket->assignee)->last()->name}}</td>

                                                    <td>{{\App\Priority::all()->where("priority_id",'=',$ticket->priority_id)->first()->title}}</td>
                                                    @if($ticket->status ==0)
                                                        <td><span
                                                                class="icon icon-circle s-12  mr-2 text-danger"></span>Closed
                                                        </td>
                                                    @elseif($ticket->status ==1)
                                                        <td><span
                                                                class="icon icon-circle s-12  mr-2 text-success"></span>Open
                                                        </td>
                                                    @endif
                                                    <td>
                                                            <span
                                                                class="r-3 badge badge-success ">{{$ticket->created_at}}</span>
                                                    </td>

                                                    <td>
                                                        <a href="{{route("tickets.details",$ticket->id)}}"
                                                           title="See details"><i class="icon-eye mr-3"></i></a>
                                                        @if($ticket->user_id == \Illuminate\Support\Facades\Auth::id())
                                                            <a href="{{route("tickets.modify",["id"=>$ticket->id])}}"
                                                               title="modify ticket"><i class="icon-pencil"></i></a>
                                                        @endif
                                                    </td>
                                                </tr>


                                            @endforeach
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


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
