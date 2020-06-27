@extends("layouts.sidebar")
@section("container")

<div class="container-fluid animatedParent animateOnce">
    <div class="animated fadeInUpShort">
        <div class="row my-3">
            <div class="col-md-7  offset-md-2">
                <form action="{{route('register')}}" method="post">
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

                            @if(session("error"))

                                <div class="alert alert-danger">{{session("error")}}</div>

                            @endif
                            <div class="form-row">
                                <div class="col-md-8">
                                    <div class="form-group m-0">
                                        <label for="name" class="col-form-label s-12">USER NAME</label>
                                        <input id="name" name="user_name" placeholder="Enter User Name" class="form-control r-0 light s-12 " type="text">
                                    </div>

                                    <br/>
                                    <div class="form-row">
                                        <div class="form-group col-6 m-0">
                                            <label for="email" class="col-form-label s-12"><i class="icon-envelope-o mr-2"></i>Email</label>
                                            <input id="email" name="user_email" placeholder="user@email.com" class="form-control r-0 light s-12 " type="text">
                                        </div>

                                        <div class="form-group col-6 m-0">
                                            <label for="phone" class="col-form-label s-12"><i class="icon-phone mr-2"></i>Phone</label>
                                            <input id="phone" placeholder="optional" class="form-control r-0 light s-12 " type="text">
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-3 offset-md-1">
                                    <input hidden id="file" name="file"/>
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
                                    <select name="user_role" class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="inlineFormCustomSelectPref">
                                        <option selected value="0">Choose...</option>
                                        @foreach($roles as $role)
                                        <option value="{{$role->role_id}}">{{$role->title}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <!-- <a href="#" class="btn btn-primary bg-primary btn-sm mt-2">Add New Guardian</a> -->
                        </div>
                        <hr>
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary btn-lg"><i class="icon-save mr-2"></i>Save Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
</div>



@endsection()
