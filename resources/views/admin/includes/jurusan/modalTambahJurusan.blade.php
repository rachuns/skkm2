<!-- Modal Tambah Jurusan Kegiatan -->
<div class="modal fade" id="modalTambahJurusan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Jurusan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form class="row g-3" action="{{route('jurusan.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="col-12 mb-1">
                            <label class="form-label">Nama Jurusan</label>
                            <input type="text" name="nm_jurusan"
                                class="form-control  @error('nm_jurusan') is-invalid @enderror" value="{{ old('nm_jurusan') }}">
                            @error('nm_jurusan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group col-12 mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Fakultas</label>
                            </div>
                            <select name="fakultas_id" class="form-control @error('fakultas_id') is-invalid @enderror">
                                <option value="">Pilih Fakultas</option>
                                    @foreach($fkt as $fkt)
                                <option value="{{$fkt->fakultas_id}}" @if (old('fakultas_id') == '{{$fkt->fakultas_id}}') selected @endif>{{$fkt->nm_fakultas}}</option>
                                    @endforeach
                            </select>
                            @error('fakultas_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer mt-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                            class="bi bi-chevron-left"></i> Kembali</button>
                    <button type="submit" class="btn btn-success"><i class="bi bi-check2"></i> Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
