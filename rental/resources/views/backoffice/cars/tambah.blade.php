@extends('backoffice.layouts.main')
@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">
                        {{-- {{ $menu }} --}}
                    </h4>
                    <form class="" action="{{ route('daftar_mobil.store') }}" enctype="multipart/form-data"
                        method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama Mobil <code>*</code></label>
                            <input type="text" class="form-control" name="nama" value="{{ old('nama') }}" required
                                placeholder=" Contoh Avanza" required />
                            <small class="text-danger">{{ $errors->first('nama') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Gambar Armda (700px * 500px) <code>*</code></label>
                            <input type="file" class="form-control" name="foto" value="{{ old('foto') }}"
                                placeholder="Gambar" required />
                            <small class="text-danger">{{ $errors->first('foto') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Merk <code>*</code></label>
                            <input type="text" class="form-control" name="merk" value="{{ old('merk') }}" required
                                placeholder=" Contoh Toyota" required />
                            <small class="text-danger">{{ $errors->first('merk') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Model</label>
                            <input type="text" class="form-control" name="model" value="{{ old('model') }}" required
                                placeholder=" Contoh Matic" required />
                            <small class="text-danger">{{ $errors->first('model') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea id="elm1" name="deskripsi"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Submit
                            </button>
                            <a href="{{ route('armada.index') }}" type="reset"
                                class="btn btn-secondary waves-effect m-l-5">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
