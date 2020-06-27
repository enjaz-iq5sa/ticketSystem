@extends("layouts.sidebar")

@section("container")
    <!-- Content Section -->
    <div class="page has-sidebar-left height-full">
        <div class="container-fluid relative animatedParent animateOnce p-lg-5">
            <div class="row mb-5">
                <div class="col-md-8">
                    <div class="pt-2 pb-lg-5 relative">
                        <h3>
                            Dashboard Overview
                        </h3>
                    </div>
                    <div class="row">

                        <div class="col-md-4 my-3">
                            <div class="d-flex">
                                <i class="icon icon-building mr-3 r-3" style="font-size: 60px"></i>

                                <div>
                                    <h6 class="mt-0 mb-1">Company</h6>
                                    <h5 class="mt-1 text-dark-heading">Enjaz Co</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 my-3">
                            <div class="d-flex">
                                <img class="mr-3 r-3 circle" src="assets/img/dummy/u12.png" alt="" width="50"
                                     height="50">
                                <div>
                                    <h6 class="mt-0 mb-1">Administrator</h6>
                                    <div class="mt-1 text-dark-heading">{{$users[0]->name}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card pt-2 pb-2 my-4">
                <div class="card-header white no-b pl-5 pr-5 pt-4 d-flex justify-content-between ">
                    <h4>Your Team <span class="badge badge-warning badge-pill s-12">{{$users->count()}} Members</span>
                    </h4>

                </div>
                <div class="card-body p-5">
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr class="no-b">
                                <th class="w-25"><h4>E-mail</h4></th>
                                <th><h4>Role</h4></th>
                            </tr>
                            @foreach($users as $user)

                                <tr class="no-b">
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->title}}</td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection()
