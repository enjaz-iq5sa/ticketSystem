@extends('layouts.app')

@section('sidebar')

    <aside class="main-sidebar fixed shadow2 bg-dark no-b theme-dark p-3">
        <section class="sidebar">
            <div class="mt-5 pt-5 pb-5 ml-3">
                <figure class="avatar-letter avatar-letter-{{\Illuminate\Support\Str::lower(\Illuminate\Support\Str::substr(\Illuminate\Support\Facades\Auth::user()->name,0,1))}}  avatar-md circle  dropdown">


                </figure>
            </div>
            <ul class="sidebar-menu">
                <li class="treeview"><a href="{{route("home")}}">
                        <span>Dashboard</span> <i
                            class="icon icon-dashboard2 pull-right"></i>
                    </a>

                </li>
                <li class="treeview"><a href="#">
                        <span>Tickets</span>
                        <span class="badge r-3 badge-primary pink pull-right">{{\App\Tickets::all()->count()}}</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route("tickets")}}"><i class="icon icon-circle-o"></i>All Tickets</a></li>
                        <li><a href="{{route("ticket.add")}}"><i class="icon icon-add"></i>Add
                                New </a>
                        </li>
                        @foreach($priorities = \App\Priority::all() as $priority)
                        <li><a href="{{route("ticketsByPriority",[$priority->priority_id])}}"><i class="icon icon-circle-o"></i>{{$priority->title}}</a></li>

                        @endforeach

                    </ul>
                </li>

                @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
                <li class="treeview"><a href="#">
                        Users<i class="icon icon-angle-left  pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{route("users.list")}}"><i class="icon icon-circle-o"></i>All Users</a>
                        </li>
                        <li><a href="{{route('register')}}"><i class="icon icon-add"></i>Add User</a>
                        </li>
                        <li><a href="{{route("profile")}}"><i class="icon icon-user"></i>User Profile </a>
                        </li>
                    </ul>
                </li>

                @endif
                <li class="treeview"><a href="{{route("logout")}}">

                        <span>Sign-out</span> <i
                            class="icon icon-sign-out pull-right"></i>
                    </a>

                </li>


            </ul>
        </section>
    </aside>
@endsection()
