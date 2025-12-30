<!-- Modal Edit Lomba -->
<div class="modal fade" id="modalEditKegiatan-{{ $kegiatan->kegiatan_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Lomba</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <form  action="{{ route('kegiatan.update' , $kegiatan->kegiatan_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12 mb-1">
                            <label class="form-label">Nama Kegiatan</label>
                            <input type="text" name="nm_kegiatan"
                                class="form-control  @error('nm_kegiatan') is-invalid @enderror" value="{{ $kegiatan->nm_kegiatan }}">
                            @error('nm_kegiatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group col-12 mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Jenis Kegiatan</label>
                            </div>
                            <select name="jenis_kegiatan" id="jenis_kegiatan" class="form-control @error('jenis_kegiatan') is-invalid @enderror">
                                <option value="{{$kegiatan->jenis_id}}">{{ $kegiatan->nm_jenis }}</option>
                                <option value="">Pilih Jenis Kegiatan</option>
                                @foreach($jenis as $jns)
                                <option value="{{$jns->jenis_id}}" @if (old('jenis_id') == $jns->jenis_id) selected @endif>{{$jns->nm_jenis}}</option>
                                @endforeach
                            </select>
                            @error('jenis_kegiatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
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
</div>
