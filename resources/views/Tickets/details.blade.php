@extends("layouts.sidebar")

@section("container")


    <div class="page has-sidebar-left">

        <div class="container-fluid animatedParent animateOnce">
            <header class="my-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <h1 class="s-24">
                                <i class="icon-pages"></i>
                                Ticket details
                            </h1>
                        </div>
                    </div>
                </div>
            </header>
            <div class="container">
                <div class="invoice white shadow">


                    <div class="p-5">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <i class="w-80px mb-4 icon icon-ticket" style="font-size: 53px;"></i>

                                <div class="float-right">

                                    <h4>Ticket #{{$ticket->id}}</h4><br>
                                    <table>
                                        <tr>
                                            <td class="font-weight-normal">Date:</td>
                                            <td>{{$ticket->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-normal">Updated at:</td>
                                            <td>{{$ticket->updated_at}}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-normal">Status: &nbsp; &nbsp; &nbsp;</td>
                                            <td>

                                                @if($ticket->status ==0)
                                                    <span
                                                        class="icon icon-circle s-12  mr-2 text-danger"></span>{{$status}}
                                                @elseif($ticket->status ==1)
                                                    <span
                                                        class="icon icon-circle s-12  mr-2 text-success"></span>{{$status}}

                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-normal">Assignee:</td>
                                            <td>{{\App\User::all()->where("id","=",$ticket->assignee)->first()->name}}</td>
                                        </tr>

                                        <tr>
                                            <td class="font-weight-normal">Priority</td>
                                            <td>{{$priority->title}}</td>
                                        </tr>
                                    </table>

                                </div>

                            </div>
                            <!-- /.col -->
                        </div>

                        <!-- info row -->
                        <div class="row my-3 ">
                            <div class="col-sm-4">
                                From
                                <address>
                                    <strong>{{$user->name}}</strong><br>
                                    Role
                                    : {{\App\users_roles::all()->where("role_id","=",$user->role_id)->first()->title}}
                                    <br>
                                    Phone: Null<br>
                                    Email: {{$user->email}}
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                To
                                <address>

                                    @php($assignee_to = \App\User::all()->where("id","=",$ticket->assignee)->first())


                                    <strong>{{\App\User::all()->where("id","=",$ticket->assignee)->first()->name}}</strong><br>
                                    Role
                                    : {{ \App\users_roles::all()->where("role_id","=",$assignee_to->role_id)->first()->title}}
                                    <br>
                                    Phone: Null<br>
                                    Email: {{\App\User::all()->where("id","=",$ticket->assignee)->first()->email}}
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->


                        <!-- Table row -->
                        <div class="row my-3">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header white">
                                        <i class="icon icon-text-width"></i>

                                        <h6>Description</h6>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="card-body p-5">
                                        {!! $ticket->description !!}
                                    </div>
                                    <!-- /.card-body p-5 -->
                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.col -->


                        </div>
                        <!-- /.row -->


                    </div>

                    <div class="card-footer bg-light">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        @if(session("status"))

                            <div class="alert alert-success">{{session("status")}}</div>

                    @endif
                    <!-- Chat button -->
                        <form method="post"
                              action="{{route("comment.submit",["user_id"=>$user->id,"ticket_id"=>$ticket->id])}}">
                            {{csrf_field()}}
                            <div class="input-group">
                                <button type="button" class="btn btn-outline-secondary b-0 mr-2"><i
                                        class="icon-image"></i></button>
                                <button type="button" class="btn btn-outline-secondary b-0 mr-2"><i
                                        class="icon-face-glasses"></i></button>
                                <input class="form-control" name="content" placeholder="Type your comment..." type="text">

                                <span class="input-group-btn ml-2">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </span>
                            </div>
                        </form>
                    </div>

                    <!--Message Start-->

                    @if($comments->count() !=0)

                    <h6 class="ml-4 mt-4">Comments</h6>
                    @endif
                    @foreach($comments as $comment)
                    <div class="card b-0  m-2">
                        <div class="card-body">
                            <div data-toggle="collapse" data-target="#message2" >
                                <div class="media">
                                    <div class="avatar avatar-md mr-3 mt-1 float-left">
                                        <span class="avatar-letter avatar-letter-a  avatar-md circle"></span>
                                    </div>

{{--                                    <img class="d-flex mr-3 height-50" src="assets/img/dummy/u3.png"--}}
{{--                                         alt="Generic placeholder image">--}}
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1 font-weight-normal">{{$comment->name}}</h6>
                                        <span>{{$comment->email}}</span>
                                        <br>
                                        <small>{{$comment->created_at}}</small>
                                        <div class="collapse my-3 show" id="message2">
                                            <div>
                                                <!-- Comment content-->

                                                {{$comment->content}}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    <!--Message End-->
                </div>
            </div>
        </div>
    </div>







@endsection
