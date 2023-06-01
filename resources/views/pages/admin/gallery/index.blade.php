@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Gallery Travel</h1>
            <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fas-plus fas-sm text-white">Tambah Gallery Travel</i>
            </a>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspasing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Travel</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $count = 1 @endphp
                            @forelse ($items as $row)
                            <tr>
                                <td>{{$count++}}</td>
                                <td>{{ $row->travel_package->title }}</td>
                                <td><img src="{{ Storage::url( $row->image ) }}" alt="" width="150px" class="img-thumbnail"/></td>
                                <td>
                                    <a href="{{ route('gallery.edit', $row->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i></a>
                                    <form action="{{ route('gallery.destroy', $row->id) }}" method="POST" class="d-inline">
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
