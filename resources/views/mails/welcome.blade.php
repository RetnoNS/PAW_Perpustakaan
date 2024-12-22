<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Email</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>hallo ini email dari perpus</h1>
    {{-- <div class="container mt-5">
        <h1 class="text-center">Kirim Email</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('send.email') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan alamat email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subjek</label>
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Masukkan subjek email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea name="message" id="message" rows="5" class="form-control" placeholder="Tulis pesan Anda di sini" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Kirim Email</button>
                </form>
            </div>
        </div>
    </div> --}}
</body>
</html>
