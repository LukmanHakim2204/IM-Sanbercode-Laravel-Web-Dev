@extends('header.master', ['title' => 'Data Cast'])
@push('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css" />
@endpush


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Halaman Data Cast</h1>
                    </div>

                </div>
                <div class="text-end">
                    <a href="{{ route('cast.create') }}" class="btn btn-sm btn-primary">TAMBAH DATA</a>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Halaman Data Tabel</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($casts as $cast)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $cast->name }}</td>
                                    <td>{{ $cast->age }}</td>
                                    <td>
                                        <div class="d-flex ml-3">
                                            <a href="{{ route('cast.show', ['cast_id' => $cast->id]) }}"
                                                class="btn btn-sm btn-secondary mr-2">Detail</a>
                                            <a href="{{ route('cast.edit', ['cast_id' => $cast->id]) }}"
                                                class="btn btn-sm btn-success mr-2">Update</a>
                                            <form action="{{ route('cast.destroy', ['cast_id' => $cast->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger mr-2">Delete</button>
                                            </form>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </div>


    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div> <!-- /.content -->
@endsection

@push('scripts')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js ') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable();
        });
    </script>
@endpush
