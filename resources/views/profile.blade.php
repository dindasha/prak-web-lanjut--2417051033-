<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profile</title>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
           background: linear-gradient(135deg, #f5f5f0 0%, #ebebe6 50%, #e0e0d8 100%);
        }

        .card {
            background-color: #ffffff;
            width: 550px;
            padding: 50px 40px;
            border-radius: 35px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            margin: 0 auto 30px auto;
            border-radius: 50%;
            overflow: hidden;
        }

        .profile-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-info p {
            font-size: 1.4rem;
            color: #2c2c2c;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .profile-info p:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="profile-img">
            <img src="{{ asset('assets/img/' . $foto) }}" alt="Foto Profile">
        </div>
        
        <div class="profile-info">
            <p><span>{{ $nama }}</span></p>
            <p><span>{{ $kelas }}</span></p>
            <p><span>{{ $npm }}</span></p>
        </div>
    </div>

</body>
</html>