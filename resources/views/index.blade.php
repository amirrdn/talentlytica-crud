@extends('template')

@section('content')
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-sm-12">
                @if (\Session::has('messages'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('messages') !!}</li>
                        </ul>
                    </div>
                @endif
                <div class="mb-3">
                    <a href="{{route('create-participant')}}" class="btn btn-sm btn-primary float-end">Tambah</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" rowspan="2">#</th>
                            <th scope="col" rowspan="2">Nama</th>
                            <th scope="col" rowspan="2">Email</th>
                            <th scope="col" colspan="4" class="text-center">Nilai</th>
                            <th scope="col" rowspan="2" class="text-center">Action</th>
                        </tr>
                        <tr>
                            <th>X</th>
                            <th>Y</th>
                            <th>Z</th>
                            <th>W</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($indexpart as $index => $b)
                        <tr>
                            <th scope="row">{{$indexpart->firstItem() + $index}}</th>
                            <td>{{$b->name}}</td>
                            <td>{{$b->email}}</td>
                            <td>{{$b->mark_x}}</td>
                            <td>{{$b->mark_y}}</td>
                            <td>{{$b->mark_z}}</td>
                            <td>{{$b->mark_w}}</td>
                            <td class="text-center">
                                <a href="{{route('report-participant', $b->id)}}">Lihat Laporan</a>
                                <a href="{{route('view-participant', $b->id)}}">Ubah Data</a>
                                <a href="{{route('delete-participant', $b->id)}}" onclick="return confirm('Are you sure?')">Hapus</a>
                            </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
                <div class="float-end">
                    {!! $indexpart->appends(['sort' => 'name'])->links() !!}
                    Halaman : {{ $indexpart->currentPage() }} <br/>
                    Jumlah Data : {{ $indexpart->total() }} <br/>
                    Data Per Halaman : {{ $indexpart->perPage() }} <br/>
                </div>
            </div>
        </div>
    </div>
@endsection