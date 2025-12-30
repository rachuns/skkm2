<!-- Modal Tambah Lomba -->
<div class="modal fade" id="modalTambahTingkat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Tingkat Kegiatan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form class="row g-3" action="{{route('tingkat.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12 mb-1">
                            <label class="form-label">Nama Tingkat Kegiatan</label>
                            <input type="text" name="nm_tingkat"
                                class="form-control  @error('nm_tingkat') is-invalid @enderror" value="{{ old('nm_tingkat') }}">
                            @error('nm_tingkat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group col-12 mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Jenis Kegiatan</label>
                            </div>
                            <select name="jenis_id" class="form-control @error('jenis_id') is-invalid @enderror">
                                <option value="">Pilih Jenis Kegiatan</option>
                                    @foreach($jenis as $jns)
                                <option value="{{$jns->jenis_id}}" @if (old('jenis_id') == '{{$jns->jenis_id}}') selected @endif>{{$jns->nm_jenis}}</option>
                                    @endforeach
                            </select>
                            @error('jenis_id')
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
