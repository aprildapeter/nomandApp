@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspasing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Travel</th>
                                <th>User</th>
                                <th>Visa</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $count = 1 @endphp
                            @forelse ($items as $row)
                            <tr>
                                <td>{{$count++}}</td>
                                <td>{{ $row->travel_package->title }}</td>
                                <td>{{ $row->user->name }}</td>
                                <td>${{ $row->additional_visa }}</td>
                                <td>${{ $row->transaction_total }}</td>
                                <td>{{ $row->transaction_status }}</td>
                                <td>
                                    <a href="{{ route('transaction.show', $row->id) }}" class="btn btn-primary">
                                    <i class="fa fa-eye"></i></a>
                                    <a href="{{ route('transaction.edit', $row->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i></a>
                                    <form action="{{ route('transaction.destroy', $row->id) }}" method="POST" class="d-inline">
                                    @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr> 
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">Data kosong !!!</td>
                            </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
