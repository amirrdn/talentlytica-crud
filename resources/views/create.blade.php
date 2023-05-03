@extends('template')
@section('content')
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="pb-3 text-primary">Tambah Data</h3>
                {{ method_field('post') }}
                {!! Form::open(['autocomplete'=> 'off','method' => 'POST','route' => ['store-participant'], 'class'=> 'row g-3 submit-form needs-validation','role' => 'form', 'novalidate', 'enctype' => 'multipart/form-data'])  !!}
                {{ csrf_field() }}
                @include('form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
$.ajaxSetup({
   headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});
$(".submit-form").submit(function(e){
    e.preventDefault();
    let name    = $('input[name=name]').val();
    let email   = $('input[name=email]').val(); 
    let mark_x  = $('input[name=mark_x]').val();
    let mark_y  = $('input[name=mark_y]').val();
    let mark_z  = $('input[name=mark_z]').val();
    let mark_w  = $('input[name=mark_w]').val();

    $('.btn').attr('disabled', true);
    
    if(name === ''){
        $('input[name=name]').addClass('is-invalid')
        $('.btn').attr('disabled', false);
        return false;
    }else{
        $('input[name=name]').removeClass('is-invalid');
    }
    
    if(email === ''){
        $('input[name=email]').addClass('is-invalid')
        $('.btn').attr('disabled', false);
        return false;
    }else{
        $('input[name=email]').removeClass('is-invalid');
    }
    
    if(mark_x === ''){
        $('input[name=mark_x]').addClass('is-invalid')
        $('.btn').attr('disabled', false);
        return false;
    }else{
        $('input[name=mark_x]').removeClass('is-invalid');
    }
    
    if(mark_y === ''){
        $('input[name=mark_y]').addClass('is-invalid')
        $('.btn').attr('disabled', false);
        return false;
    }else{
        $('input[name=mark_y]').removeClass('is-invalid');
    }

    if(mark_z === ''){
        $('input[name=mark_z]').addClass('is-invalid')
        return false;
    }else{
        $('input[name=mark_z]').removeClass('is-invalid');
    }

    $.ajax({
    type:'POST',
    url:'/partipant-store',
    data: {
        name: name,
        email: email,
        mark_x: mark_x,
        mark_y: mark_y,
        mark_z: mark_z,
        mark_w: mark_w
    },
    success:function(data) {
        window.location.href = "{{ route('index-participant')}}";
    },
    
    error: function (msg) {
        console.log(msg);
        $('.btn').attr('disabled', false);
    var errors = msg.responseJSON;
    }
    });
});
</script>
@endpush