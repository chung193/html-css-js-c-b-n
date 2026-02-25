<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký thành viên</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="form-dang-ky">
        <h2>Đăng Ký</h2>
        
        <form id="registrationForm" action="{{ route('member.register') }}" method="POST">
            @csrf 

            <div class="input-group">
                <label for="fullname">Họ và tên:</label>
                <input type="text" id="fullname" name="fullname" placeholder="Nhập họ tên của bạn" required value="{{ old('fullname') }}">
                @error('fullname') <small style="color:red">{{ $message }}</small> @enderror
            </div>

            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="example@gmail.com" required value="{{ old('email') }}">
                @error('email') <small style="color:red">{{ $message }}</small> @enderror
            </div>

            <div class="input-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required>
                @error('password') <small style="color:red">{{ $message }}</small> @enderror
            </div>

            <div class="gender-group">
                <label>Giới tính:</label>
                <input type="radio" name="gioitinh" value="nam" id="male" {{ old('gioitinh') == 'nam' ? 'checked' : '' }}> 
                <label for="male" class="label-inline">Nam</label>
                
                <input type="radio" name="gioitinh" value="nu" id="female" {{ old('gioitinh') == 'nu' ? 'checked' : '' }}> 
                <label for="female" class="label-inline">Nữ</label>
                
                @error('gioitinh') <br><small style="color:red">{{ $message }}</small> @enderror
            </div>

            <button type="submit" id="btnSubmit">Đăng Ký Ngay</button>
        </form>

        @if(session('success'))
            <div style="margin-top:15px; color: green; text-align: center; font-weight: bold;">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>