<div class="col-sm-6">
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        {{ Form::text('name',null, ['class' => 'form-control', 'id' => 'name', 'required']) }}
        <div class="invalid-feedback">
            Nama tidak boleh kosong !
        </div>
    </div>
    <div class="mb-3">
        <label for="mark_x" class="form-label">Nilai X</label>
        {{ Form::number('mark_x',null, ['class' => 'form-control', 'id' => 'mark_x', 'required', 'placeholder' => 'input Nilai X']) }}
        <div class="invalid-feedback">
            Nilai X tidak boleh kosong !
        </div>
    </div>
    <div class="mb-3">
        <label for="mark_z" class="form-label">Nilai Z</label>
        {{ Form::number('mark_z',null, ['class' => 'form-control', 'id' => 'mark_z', 'required', 'placeholder' => 'input Nilai Z']) }}
        <div class="invalid-feedback">
            Nilai Z tidak boleh kosong !
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        {{ Form::email('email',null, ['class' => 'form-control', 'id' => 'email', 'required', 'placeholder' => 'input Nilai Email']) }}
        <div class="invalid-feedback">
            Email tidak boleh kosong !
        </div>
    </div>
    <div class="mb-3">
        <label for="mark_y" class="form-label">Nilai Y</label>
        {{ Form::number('mark_y',null, ['class' => 'form-control', 'id' => 'mark_y', 'required', 'placeholder' => 'input Nilai Y']) }}
        <div class="invalid-feedback">
            Nilai Y tidak boleh kosong !
        </div>
    </div>
    <div class="mb-3">
        <label for="mark_w" class="form-label">Nilai W</label>
        {{ Form::number('mark_w',null, ['class' => 'form-control', 'id' => 'mark_w', 'required', 'placeholder' => 'input Nilai W']) }}
        <div class="invalid-feedback">
            Nilai W tidak boleh kosong !
        </div>
    </div>
</div>
<div class="mb-3">
    <button class="btn btn-sm btn-primary float-end ms-1" type="submit" >Simpan</button>
    <a href="{{route('index-participant')}}" class="btn btn-sm btn-warning float-end ">Batal</a>
</div>