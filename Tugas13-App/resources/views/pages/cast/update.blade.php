@extends('header.master', ['title' => ' Update Data Cast'])

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Data Cast</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Cast</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Data Cast</h3>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <!-- form start -->
                            <form action="{{ route('cast.update', $cast->id) }}" method="POST">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name </label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ old('name', $cast->name) }}" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input type="text" name="age" class="form-control"
                                            value="{{ old('age', $cast->age) }}" placeholder="enter your age">
                                    </div>
                                    <div class="form-group">
                                        <label>Bio</label>
                                        <textarea name="bio" class="form-control" cols="30" rows="10" placeholder="Enter your bio">{{ old('bio', $cast->bio) }}</textarea>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
