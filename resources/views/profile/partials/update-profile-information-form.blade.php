<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cập Nhật Thông Tin Hồ Sơ</title>
</head>

<body class="bg-light">

    <section class="container py-4">
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Thông Tin Hồ Sơ
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Cập nhật thông tin hồ sơ và địa chỉ email của tài khoản của bạn.
            </p>
        </header>

        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}" class="mt-4">
            @csrf
            @method('patch')

            <div class="mb-3">
                <label for="name" class="form-label">Tên</label>
                <input id="name" name="name" type="text" class="form-control"
                    value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                @if ($errors->has('name'))
                    <div class="text-danger mt-2">{{ $errors->first('name') }}</div>
                @endif
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" name="email" type="email" class="form-control"
                    value="{{ old('email', $user->email) }}" required autocomplete="username">
                @if ($errors->has('email'))
                    <div class="text-danger mt-2">{{ $errors->first('email') }}</div>
                @endif

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                            Địa chỉ email của bạn chưa được xác minh.
                            <button form="send-verification" class="btn btn-link p-0 m-0 align-baseline">Nhấn vào đây để
                                gửi lại email xác minh.</button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-success">
                                Một liên kết xác minh mới đã được gửi đến địa chỉ email của bạn.
                            </p>
                        @endif
                    </div>
                @endif
            </div>

            <div class="d-flex align-items-center gap-4">
                <button type="submit" class="btn btn-primary">Lưu</button>

                @if (session('status') === 'profile-updated')
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-0" id="profile-updated-message">Đã lưu.</p>
                @endif
            </div>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Tự động ẩn thông báo sau 2 giây
        document.addEventListener('DOMContentLoaded', function() {
            const message = document.getElementById('profile-updated-message');
            if (message) {
                setTimeout(() => {
                    message.style.display = 'none';
                }, 2000);
            }
        });
    </script>
</body>

</html>
