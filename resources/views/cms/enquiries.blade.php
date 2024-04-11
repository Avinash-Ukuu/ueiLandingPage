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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Message</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($enquiries as $enquiry)
                                <tr>
                                    <td>{{ ucwords($enquiry->name) }}</td>
                                    <td>{{ $enquiry->email }}</td>
                                    <td>{{ $enquiry->number }}</td>
                                    <td>{{ $enquiry->message }}</td>
                                    <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $enquiry->created_at)->format('d/M/Y') }}
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <!-- /.card -->
@endsection
@section('footerScripts')
    <script>
        $(document).ready(function() {

            $('#example1').DataTable({
                "columns": [{
                        "name": "Name"
                    },
                    {
                        "name": "Email"
                    },
                    {
                        "name": "Number"
                    },
                    {
                        "name": "Message"
                    },
                    {
                        "name": "Date",
                        "type": "date",
                        "orderDataType": "dom-text",
                        "targets": 3 // Index of the "Date" column
                    },

                ]
            });
        });
    </script>
@endsection
