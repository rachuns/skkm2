<!-- Modal Tambah Jenis Kegiatan -->
<div class="modal fade" id="modalTambahFakultas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Fakultas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form class="row g-3" action="{{route('fakultas.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="col-12 mb-1">
                            <label class="form-label">Nama Fakultas</label>
                            <input type="text" name="nm_fakultas"
                                class="form-control  @error('nm_fakultas') is-invalid @enderror" value="{{ old('nm_fakultas') }}">
                            @error('nm_fakultas')
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
