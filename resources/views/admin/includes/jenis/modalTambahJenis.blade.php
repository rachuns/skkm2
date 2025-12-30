<!-- Modal Tambah Jenis Kegiatan -->
<div class="modal fade" id="modalTambahJenis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Jenis</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form class="row g-3" action="{{route('jenis.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="col-12 mb-1">
                            <label class="form-label">Nama Jenis</label>
                            <input type="text" name="nm_jenis"
                                class="form-control  @error('nm_jenis') is-invalid @enderror" value="{{ old('nm_jenis') }}">
                            @error('nm_jenis')
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
