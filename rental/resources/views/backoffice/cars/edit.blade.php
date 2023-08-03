@extends('backoffice.layouts.main')
@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">{{ $menu }}</h4>
                    <form class="" action="{{ route('daftar_mobil.update', Crypt::encryptString($data->id)) }}"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Nama Mobil</label>
                            <input type="text" class="form-control" name="nama" value="{{ $data->nama }}" required
                                placeholder="Contoh Avanza" />
                            <small class="text-danger">{{ $errors->first('nama') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto" value="{{ old('foto') }}"
                                placeholder="Foto" />
                            <input type="hidden" name="file_old" value="{{ $data->foto }}">
                            <?php if($data->foto){ ?>
                            <img src="{{ asset('files/armada/' . $data->foto) }}" alt="" width="100px;"
                                class="rounded avatar-md">
                            <?php } ?>
                            <small class="text-danger">{{ $errors->first('foto') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Merk</label>
                            <input type="text" class="form-control" name="merk" value="{{ $data->merk }}" required
                                placeholder="Contoh Matic" />
                            <small class="text-danger">{{ $errors->first('merk') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Model</label>
                            <input type="text" class="form-control" name="model" value="{{ $data->model }}"
                                placeholder="Contoh Matic" />
                            <small class="text-danger">{{ $errors->first('model') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Layanan <code>*</code></label>
                            <input type="text" class="form-control" name="layanan" value="{{ $data->layanan }}"
                                placeholder="Contoh Matic" />
                            <small class="text-danger">{{ $errors->first('layanan') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea id="elm1" name="deskripsi">{{ $data->deskripsi }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="status" value="aktif"
                                    {{ $data->aktif == 1 ? 'checked' : '' }} id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Aktif</label>
                            </div>
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
    <div class="card-body">
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Foto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="{{ URL::asset('files/armada/' . $data->image) }}" width="100%" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
