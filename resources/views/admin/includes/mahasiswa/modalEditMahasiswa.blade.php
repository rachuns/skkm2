<!-- Modal Tambah Mahasiswa -->
<div class="modal fade" id="modalEditMahasiswa-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    @if (session('sukses'))
                        <div class="alert alert-success">
                            {{ session('sukses') }}
                        </div>
                    @endif

                    <form action="{{ route('daftarkan_mahasiswa') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-person-badge"></i>
                                </span>
                                <input type="text" name="nama_lengkap"
                                    class="form-control @error('nama_lengkap') is-invalid @enderror"
                                    value="{{ $item->nama_lengkap }}" placeholder="Isi dengan nama lengkap">
                                @error('nama_lengkap')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-chevron-double-right"></i>
                                </span>
                                <select name="gender" class="form-control" required>
                                    <option value="{{ $item->gender }}">{{ $item->gender }}</option>
                                    <option value="laki-laki" @if (old('gender') == 'Laki-Laki') selected @endif>
                                        Laki-Laki</option>
                                    <option value="perempuan" @if (old('gender') == 'Perempuan') selected @endif>
                                        Perempuan</option>
                                </select>
                                @error('gender')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Jenjang</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-chevron-double-right"></i>
                                </span>
                                <select name="jenjang" class="form-control" required>
                                    <option value="{{$item->jenjang}}">{{$item->jenjang}}</option>
                                    <option value="S1" @if (old('jenjang') == 'S1') selected @endif>
                                        S1</option>
                                    <option value="D3" @if (old('jenjang') == 'D3') selected @endif>
                                        D3</option>
                                </select>
                                @error('jenjang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Semester</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-chevron-double-right"></i>
                                </span>
                                <select name="semester" class="form-control" required>
                                    <option value="1" @if (old('semester') == '1') selected @endif>
                                        1</option>
                                    <option value="2" @if (old('semester') == '2') selected @endif>
                                        2</option>
                                    <option value="3" @if (old('semester') == '3') selected @endif>
                                        3</option>
                                    <option value="4" @if (old('semester') == '4') selected @endif>
                                        4</option>
                                    <option value="5" @if (old('semester') == '5') selected @endif>
                                        5</option>
                                    <option value="6" @if (old('semester') == '6') selected @endif>
                                        6</option>
                                    <option value="7" @if (old('semester') == '7') selected @endif>
                                        7</option>
                                    <option value="8" @if (old('semester') == '8') selected @endif>
                                        8</option>
                                </select>
                                @error('semester')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Pembimbing DPP</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-chevron-double-right"></i>
                                </span>
                                <select name="dpp" class="form-control" required>
                                    <option value="{{$item->id}}">{{$item->nama_lengkap}}</option>
                                    <option value="">Pilih Pembimbing</option>
                                    @foreach ($mhs as $mhs)
                                    <option value="{{$mhs->id}}" @if (old('dpp') == $mhs->id) selected @endif>
                                        {{$mhs->nama_lengkap}}</option>
                                    @endforeach
                                </select>
                                @error('jenjang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Email</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" placeholder="Isi dengan email yang valid">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">NIM</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-person-lock"></i>
                                </span>
                                <input type="text" name="nim"
                                    class="form-control @error('nim') is-invalid @enderror"
                                    value="{{ old('nim') }}" placeholder="Isi dengan NIM yang valid">
                                @error('nim')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-key"></i>
                                </span>
                                <input class="input100 form-control @error('password') is-invalid @enderror"
                                    value="{{ old('password') }}" name="password" type="password"
                                    placeholder="Tambahkan password">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer mt-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                    class="bi bi-chevron-left"></i> Kembali</button>
                            <button type="submit" class="btn btn-success"><i class="bi bi-check2"></i>
                                Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
