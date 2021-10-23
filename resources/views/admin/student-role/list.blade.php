@extends('admin.newlayout.layout')
@section('title')
    Student Roles
@endsection
@section('page')

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Student Role
                    </div>
                    <div class="card-body">
                        <div>
                            <form action="{{ url('/admin/user/role/store') }}" class="form" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Role Name" value="{{ isset($studentRole) ? $studentRole->name : '' }}" required />
                                            <input type="hidden" name="role_id"  value="{{ isset($studentRole) ? $studentRole->id : '' }}" class="form-control" placeholder="Role Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Display Name</label>
                                            <input type="text" name="display_name" class="form-control" value="{{ isset($studentRole) ? $studentRole->display_name : '' }}" placeholder="Role Display Name" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Validity (Days)</label>
                                            <input type="number" min="1" name="validity" value="{{ isset($studentRole) ? $studentRole->validity : '' }}" class="form-control" placeholder="Validity" />
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success" value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <div class="row" style="margin-top: 15px">
        <!-- <div class="container-fluid"> -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Role lists
                    </div>
                    <div class="card-body">
                    <div class="row">
                    <div class="col-md-12">

                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Display Name</th>
                                        <th>Validity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->display_name }}</td>
                                        <td>{{ $role->validity }}</td>
                                        <td>

                                            <a href="/admin/user/role/edit/{{ $role->id }}" class="btn btn-success btn-sm"><span class="fas fa-edit"></span></a>
{{--                                            <a href="/admin/user/role/delete/{{ $role->id }}" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span></a>--}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                <!-- </div> -->
            </div>
        </div>
@endsection
