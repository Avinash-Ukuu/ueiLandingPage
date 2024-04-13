@extends('cms.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                {{-- <h1 class="m-0">Enquiries</h1> --}}
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Enquiries</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Enquires</h3>
            </div>
            <!-- /.card-header -->
            <div class="table-responsive">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Message</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <!-- /.card -->
@endsection
@section('footerScript')
    <script>

        $(document).ready(function() {

            console.log('sdkhaklsda');
            $('#example1').DataTable({
                "responsive": true,
                "processing": true,
                "serverSide": true,
                ajax: "{{ route('enquiryList') }}",
                order: [],
                sorting: true,
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'Index',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name',
                        name: 'name',
                    },
                    {
                        data: 'email',
                        name: 'email',
                    },
                    {
                        data: 'number',
                        name: 'number',
                    },
                    {
                        data: 'message',
                        name: 'message',
                    },
                    {
                        data: 'date',
                        name: 'date',
                    },
                ]
            });
        });
    </script>
@endsection
