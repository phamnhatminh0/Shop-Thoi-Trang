<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cập Nhật Mật Khẩu</title>
</head>

<body class="bg-light">

    <section class="container py-4">
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Cập Nhật Mật Khẩu
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Đảm bảo tài khoản của bạn đang sử dụng mật khẩu dài và ngẫu nhiên để giữ an toàn.
            </p>
        </header>

        <form method="post" action="{{ route('password.update') }}" class="mt-4">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="update_password_current_password" class="form-label">Mật Khẩu Hiện Tại</label>
                <input id="update_password_current_password" name="current_password" type="password"
                    class="form-control" autocomplete="current-password">
                @if ($errors->updatePassword->has('current_password'))
                    <div class="text-danger mt-2">{{ $errors->updatePassword->first('current_password') }}</div>
                @endif
            </div>

            <div class="mb-3">
                <label for="update_password_password" class="form-label">Mật Khẩu Mới</label>
                <input id="update_password_password" name="password" type="password" class="form-control"
                    autocomplete="new-password">
                @if ($errors->updatePassword->has('password'))
                    <div class="text-danger mt-2">{{ $errors->updatePassword->first('password') }}</div>
                @endif
            </div>

            <div class="mb-3">
                <label for="update_password_password_confirmation" class="form-label">Xác Nhận Mật Khẩu</label>
                <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                    class="form-control" autocomplete="new-password">
                @if ($errors->updatePassword->has('password_confirmation'))
                    <div class="text-danger mt-2">{{ $errors->updatePassword->first('password_confirmation') }}</div>
                @endif
            </div>

            <div class="d-flex align-items-center gap-4">
                <button type="submit" class="btn btn-primary">Lưu</button>

                @if (session('status') === 'password-updated')
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-0" id="password-updated-message">Đã lưu.</p>
                @endif
            </div>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Tự động ẩn thông báo sau 2 giây
        document.addEventListener('DOMContentLoaded', function() {
            const message = document.getElementById('password-updated-message');
            if (message) {
                setTimeout(() => {
                    message.style.display = 'none';
                }, 2000);
            }
        });
    </script>
</body>

</html>
