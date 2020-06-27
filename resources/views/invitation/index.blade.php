@extends("layouts.app")
@section("container")

    <div class="container-fluid animatedParent animateOnce">
        <div class="animated fadeInUpShort">
            <div class="row my-3">
                <div class="col-md-7  offset-md-2">
                    <form action="{{route('invitation',[$invitation->id])}}" method="post">
                        {{csrf_field()}}
                        <div class="card no-b  no-r">
                            <div class="card-body">
                                <h5 class="card-title">User information</h5>
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


                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="form-group m-0">
                                            <label for="name" class="col-form-label s-12">USER NAME</label>
                                            <input id="name" disabled value="{{$invitation->name}}"  class="form-control r-0 light s-12 " type="text">
                                        </div>

                                        <br/>
                                        <div class="form-row">
                                            <div class="form-group col-6 m-0">
                                                <label for="email" class="col-form-label s-12"><i class="icon-envelope-o mr-2"></i>Email</label>
                                                <input value="{{$invitation->sentTo}}" disabled id="email" placeholder="user@email.com" class="form-control r-0 light s-12 " type="text">
                                            </div>

                                            <div class="form-group col-6 m-0">
                                                <label for="phone" class="col-form-label s-12"><i class="icon-phone mr-2"></i>Phone</label>
                                                <input id="phone" placeholder="optional" disabled class="form-control r-0 light s-12 " type="text">
                                            </div>
                                        </div>


                                        <br/>
                                        <div class="form-row">

                                            <div class="form-group col-12 m-0">
                                                <label for="password" class="col-form-label s-12"><i class="icon-key2 mr-2"></i>Password</label>
                                                <input id="password" name="password" placeholder="Enter your password"  class="form-control r-0 light s-12 " type="password">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3 offset-md-1">
                                        <input hidden id="file"/>
                                        <div class="dropzone dropzone-file-area pt-4 pb-4" id="fileUpload">
                                            <div class="dz-default dz-message">
                                                <span>Drop A passport size image of user</span>
                                                <div>You can also click to open file browser</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>
                            <hr>

                            <div class="card-body">
                                <h5 class="card-title">USER / ROLE</h5>
                                <div class="form-row">
                                    <div class="form-group col-5 m-0">
                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select A Role</label>
                                        <select disabled name="user_role" class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="inlineFormCustomSelectPref">
                                            <option selected disabled>{{\App\users_roles::where("role_id","=",$invitation->role_id)->first()->title}}</option>



                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <button type="submit" class="btn btn-success btn-lg"><i class="icon-save mr-2"></i>Accept invitation</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection()
