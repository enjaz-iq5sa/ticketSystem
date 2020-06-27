@extends("layouts.sidebar")

@section("container")


    <div class="page has-sidebar-left">

        <div class="container-fluid animatedParent animateOnce">
            <div class="animated fadeInUpShort my-3">
                <div class="row">

                    <div class="col-md-9">
                        <div class="card b-0 r-0 shadow">

                            <form method="post" action="{{route("tickets.modify",$ticket->id)}}">
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

                                {{csrf_field()}}
                                <div class="form-row mt-1 p-1">
                                    <div class="form-group col-6 m-0">
                                        <label for="subject" class="col-form-label s-12"><i
                                                class="icon-subject mr-2"></i>Subject</label>
                                        <input id="subject" placeholder="Subject"
                                               class="form-control r-0 light s-12 " value="{{$ticket->subject}}"
                                               name="subject" type="text" required>
                                    </div>


                                    <div class="form-group col-6 ">
                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref"> <i
                                                class="icon-merge_type mr-2"></i> Select ticket Priority</label>
                                        <select name="priority_id"
                                                class="custom-select my-1 mr-sm-2 form-control r-0 light s-12"
                                                id="inlineFormCustomSelectPref" required>

                                            @foreach($priority as $p)
                                                @if($ticket->priority_id == $p->priority_id)

                                                    <option value="{{$ticket->priority_id}}"
                                                            selected>
                                                        {{$p->title}}
                                                    </option>

                                                @else
                                                    <option value="{{$p->priority_id}}">{{$p->title}}</option>

                                                @endif
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <br/>

                                <textarea name="description" class="editor" placeholder="Write Something..."
                                          rows="17" required>{{$ticket->description}}</textarea>
                                <div class="b-b"></div>

                                <div class="form-row p-1">
                                    <div class="form-group col-6">
                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref"> <i
                                                class="icon-supervisor_account mr-2"></i> Assignee</label>
                                        <select name="assignee"
                                                class="custom-select my-1 mr-sm-2 form-control r-0 light s-12"
                                                id="inlineFormCustomSelectPref" required>
                                            @foreach($users as $user)
                                                @if($ticket->assignee == $user->id )
                                                    <option selected value="{{$user->id}}">{{$user->name}}
                                                        (
                                                        {{\App\users_roles::all()->where("role_id","=",$user->role_id)->first()->title}}
                                                        )
                                                    </option>
                                                @else
                                                    <option value="{{$user->id}}">{{$user->name}}
                                                        (
                                                        {{\App\users_roles::all()->where("role_id","=",$user->role_id)->first()->title}}
                                                        )
                                                    </option>

                                                @endif
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group col-6 ">
                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref"> <i
                                                class="icon-supervisor_account mr-2"></i> Status</label>
                                        <select name="status"
                                                class="custom-select my-1 mr-sm-2 form-control r-0 light s-12"
                                                id="inlineFormCustomSelectPref" required>
                                            @foreach($status as $index => $s)
                                                @if($ticket->status == $index)
                                                <option selected value="{{$index}}">{{$s}}</option>
                                                @else
                                                    <option value="{{$index}}">{{$s}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="card-footer">

                                    <button class="btn btn-primary l-s-1 s-12 text-uppercase">
                                        Update
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection
