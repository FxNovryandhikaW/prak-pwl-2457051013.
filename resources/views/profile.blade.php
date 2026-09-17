<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Minecraft</title>
    <style>
        * {
            box-sizing: border-box;
        } 
        body {
            font-family: "Courier New", monospace;
            display: flex;
            justify-content: center;
            height: 100vh;
            margin: 0;
            color: #fff;
            background-color: #87ceeb;
            background-image:
                linear-gradient(135deg, rgba(255,255,255,.2) 25%, transparent 25%),
                linear-gradient(315deg, rgba(255,255,255,.15) 25%, transparent 25%),
                linear-gradient(to bottom, #75b9df 0 58%, #5b963d 58% 72%, #4b7f2f 72%);
            background-size: 48px 48px, 48px 48px, 100% 100%;
        }
        .card {
            background: #4b4b4b;
            padding: 22px;
            border: 4px solid #1e1e1e;
            border-top-color: #8b8b8b;
            border-left-color: #8b8b8b;
            box-shadow: 8px 8px 0 rgba(0,0,0,.45);
            width: 340px;
            text-align: center;
        }
        .card h1 {
            margin: 0 0 18px;
            font-size: 22px;
            letter-spacing: 1px;
            text-shadow: 3px 3px #222;
        }
        .avatar {
            width: 100px;
            height: 100px;
            border: 4px solid #1e1e1e;
            margin: 0 auto 20px auto;
            background: #7c4a28;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: inset 0 0 0 8px #b8753f;
        }
        .avatar svg {
            width: 60px;
            height: 60px;
            fill: #f2c18d;
        }
        .info-box {
            background-color: #313131;
            padding: 12px;
            margin: 12px 0;
            border: 3px solid #171717;
            border-top-color: #707070;
            border-left-color: #707070;
            font-weight: bold;
            color: #fff;
            text-align: left;
            text-shadow: 2px 2px #000;
        }
        .info-box span {
            color: #7ee35b;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>✦ PLAYER PROFILE ✦</h1>
        <div class="avatar">
            <svg viewBox="0 0 24 24">
                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
            </svg>
        </div>

        <div class="info-box">Nama: <span>{{ $nama }}</span></div>
        <div class="info-box">NPM: <span>{{ $npm }}</span></div>
        <div class="info-box">Kelas: <span>{{ $kelas }}</span></div>
    </div>

</body>
</html>
