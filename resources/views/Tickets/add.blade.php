@extends("layouts.sidebar")

@section("container")


    <div class="page has-sidebar-left">

        <div class="container-fluid animatedParent animateOnce">
            <div class="animated fadeInUpShort my-3">
                <div class="row">

                    <div class="col-md-9">
                        <div class="card b-0 r-0 shadow">

                            <form method="post" action="{{route("ticket.submit")}}">
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
                                    <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                                <div class="form-row mt-1 p-1">
                                    <div class="form-group col-6 m-0">
                                        <label for="subject" class="col-form-label s-12"><i
                                                class="icon-subject mr-2"></i>Subject</label>
                                        <input id="subject" placeholder="Subject"
                                               class="form-control r-0 light s-12 " name="subject" type="text" required>
                                    </div>


                                    <div class="form-group col-6 ">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref"> <i class="icon-merge_type mr-2"></i> Select ticket Priority</label>
                                            <select name="priority_id" class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="inlineFormCustomSelectPref" required>
                                                <option selected>Chose...</option>
                                                @foreach($priority as $p)
                                                <option value="{{$p->priority_id}}">{{$p->title}}</option>
                                                @endforeach
                                            </select>
                                    </div>

                                </div>

                                <br/>

                                <textarea name="description" class="editor" placeholder="Write Something..."
                                          rows="17" required></textarea>
                                <div class="b-b"></div>

                                <div class="form-group col-6 ">
                                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref"> <i class="icon-supervisor_account mr-2"></i> Assignee</label>
                                    <select name="assignee" class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="inlineFormCustomSelectPref" required>
                                        @foreach($users as $user)
                                         <option value="{{$user->id}}" selected>{{$user->name}} ( {{\App\users_roles::all()->where("role_id","=",$user->role_id)->first()->title}} )</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="card-footer">

                                    <button class="btn btn-primary l-s-1 s-12 text-uppercase">
                                        Submit
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
