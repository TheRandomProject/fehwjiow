@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-md-4 col-sm-1 mb-3">
            <div class="card admin-dashboard shadow bg-info text-white">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 col-md-4">
                            <div class="card-icon">
                                <i class="fal fa-journal-whills"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <p class="card-number">{{count($books)}}</p>
                            <p class="card-title">Book</p>
                        </div>
                    </div>
                    <hr>
                    <a href="{{route('admin.books.index')}}">View</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-1 mb-3">
            <div class="card admin-dashboard shadow bg-secondary text-white">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 col-md-4">
                            <div class="card-icon">
                                <i class="fal fa-reply"></i>                           </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <p class="card-number">{{count($borroweds)}}</p>
                            <p class="card-title">Borrowed</p>
                        </div>
                    </div>
                    <hr>
                    <a href="#">View</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-1 mb-3">
            <div class="card admin-dashboard shadow bg-success text-white">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 col-md-4">
                            <div class="card-icon">
                                <i class="fal fa-users-class"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <p class="card-number">{{count($students)}}</p>
                            <p class="card-title">Student</p>
                        </div>
                    </div>
                    <hr>
                    <a href="#">View</a>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-primary float-right">Create</button><br><br>
            <table class="table table-bordered table-responsive-sm">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Quantity</th>
                    <th>Genre</th>
                    <th>Published</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered table-responsive-sm">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Student</th>
                    <th>Book</th>
                    <th>Due Date</th>
                    <th>Date Taken</th>
                    <th>Request</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered table-responsive-sm">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
        </div>
    </div>
</div>


<script>

</script>
@endsection