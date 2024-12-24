<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Alumni Poliban</title>
    <link rel="stylesheet" href="{{ asset('css/front.css') }}">
</head>

<body>

    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1>Selamat Datang di Sistem Informasi Alumni Poliban</h1>
        <p>Temukan informasi tentang alumni Politeknik Negeri Banjarmasin dan perjalanan karir mereka setelah lulus.</p>
    </div>

    <!-- Alumni Data -->
    <div class="alumni-container">
        @if($alumnis->isEmpty())
    <p>Belum ada data alumni yang tersedia.</p>
    @else
        @foreach($alumnis as $alumni)
            <div class="alumni-card">
                <img src="storage/{{ $alumni->gambar }}" alt="Alumni 1" class="alumni-img">
                <h3>{{ $alumni->nama }}</h3>
                <p>Angkatan: {{ $alumni->tahun_lulus }}</p>
                <p>Jurusan: {{ $alumni->jurusan->nama_jurusan }}</p>
                <p class="alumni-job">{{ $alumni->pekerjaan }} di {{ $alumni->tempat_bekerja_sekarang }}</p>
                <p class="alumni-description">{{ $alumni->deskripsi_singkat }}</p>
            </div>
        @endforeach
    @endif


    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Politeknik Negeri Banjarmasin. All Rights Reserved.</p>
    </footer>
</body>

</html>