@extends('template')
@section('content')
<?php
    $intelegensi    = ($participantarr->mark_x * 40 / 100 + $participantarr->mark_y * 60 / 100) / 2;
    $numarical      = ($participantarr->mark_z * 30 / 100 + $participantarr->mark_w * 70 / 100) / 2;

?>
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-sm-12">
                    <div class="mb-3">
                        <a href="{{route('index-participant')}}" class="btn btn-sm btn-primary float-end">Kembali</a>
                    </div>
                    <div style="clear:both;" class="pb-3"></div>
                    <div class="mb-3 row">
                        <div class="col-sm-4">
                            <table class="table table-detail">
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{$participantarr->name}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{$participantarr->email}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Aspek</th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                </tr>
                            </thead>
                            <tr>
                                <th>Aspek Intelegensi {{round($intelegensi)}}</th>
                                @if(round($intelegensi) < 2)
                                    <td> <img src="{{asset('image/accepted.png')}}" /></td>
                                @else
                                    <td></td>
                                @endif
                                @if(round($intelegensi) < 3)
                                    <td> <img src="{{asset('image/accepted.png')}}" /></td>
                                @else
                                    <td></td>
                                @endif
                                @if(round($intelegensi) < 4)
                                    <td> <img src="{{asset('image/accepted.png')}}" /></td>
                                @else
                                    <td></td>
                                @endif

                                @if(round($intelegensi) < 5)
                                    <td> <img src="{{asset('/image/accepted.png')}}" /></td>
                                @else
                                    <td></td>
                                @endif
                                @if(round($intelegensi) > 5 || round($intelegensi) == 5)
                                    <td> <img src="{{asset('image/accepted.png')}}" /></td>
                                @else
                                    <td></td>
                                @endif
                            </tr>
                            <tr>
                                <th>Aspek Numerical Ability</th>
                                @if(round($numarical) < 2)
                                    <td> <img src="{{asset('image/accepted.png')}}" /></td>
                                @else
                                    <td></td>
                                @endif
                                @if(round($numarical) < 3)
                                    <td> <img src="{{asset('image/accepted.png')}}" /></td>
                                @else
                                    <td></td>
                                @endif
                                @if(round($numarical) < 4)
                                    <td> <img src="{{asset('image/accepted.png')}}" /></td>
                                @else
                                    <td></td>
                                @endif

                                @if(round($numarical) < 5)
                                    <td> <img src="{{asset('/image/accepted.png')}}" /></td>
                                @else
                                    <td></td>
                                @endif
                                @if(round($numarical) > 5 || round($numarical) == 5)
                                    <td> <img src="{{asset('image/accepted.png')}}" /></td>
                                @else
                                    <td></td>
                                @endif
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection