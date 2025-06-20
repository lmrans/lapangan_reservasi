<form action="{{ isset($akun) ? route('akun.update', $akun->id) : route('akun.store') }}" method="POST">
    @csrf
    @if(isset($akun)) @method('PUT') @endif

    <label>Nama:</label>
    <input type="text" name="name" value="{{ $akun->name ?? old('name') }}" class="form-control" required>

    <label>Email:</label>
    <input type="email" name="email" value="{{ $akun->email ?? old('email') }}" class="form-control" required>

    @if(!isset($akun))
    <label>Password:</label>
    <input type="password" name="password" class="form-control" required>
    @endif

    <label>Role:</label>
    <select name="role" class="form-control" required>
        <option value="user" {{ (old('role', $akun->role ?? '') == 'user') ? 'selected' : '' }}>User</option>
        <option value="petugas" {{ (old('role', $akun->role ?? '') == 'petugas') ? 'selected' : '' }}>Petugas</option>
    </select>

    <button class="btn btn-success mt-3">Simpan</button>
</form>
