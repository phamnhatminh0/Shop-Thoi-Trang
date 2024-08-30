<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Xóa Tài Khoản</title>
</head>

<body class="bg-light">

    <section class="container py-4">
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Xóa Tài Khoản
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Khi tài khoản của bạn bị xóa, tất cả tài nguyên và dữ liệu của nó sẽ bị xóa vĩnh viễn. Trước khi xóa tài
                khoản của bạn, vui lòng tải xuống bất kỳ dữ liệu hoặc thông tin nào mà bạn muốn giữ lại.
            </p>
        </header>

        <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#confirmUserDeletionModal">
            Xóa Tài Khoản
        </button>

        <!-- Modal -->
        <div class="modal fade" id="confirmUserDeletionModal" tabindex="-1"
            aria-labelledby="confirmUserDeletionModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmUserDeletionModalLabel">Bạn có chắc chắn muốn xóa tài khoản
                            của mình?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Khi tài khoản của bạn bị xóa, tất cả tài nguyên và dữ liệu của nó sẽ bị xóa vĩnh viễn. Vui lòng
                        nhập mật khẩu của bạn để xác nhận bạn muốn xóa tài khoản của mình vĩnh viễn.
                        <form method="post" action="{{ route('profile.destroy') }}" class="p-3">
                            @csrf
                            @method('delete')

                            <div class="mb-3">
                                <label for="password" class="form-label sr-only">Mật khẩu</label>
                                <input type="password" id="password" name="password" class="form-control"
                                    placeholder="Mật khẩu" required>
                                @if ($errors->userDeletion->has('password'))
                                    <div class="text-danger mt-2">{{ $errors->userDeletion->first('password') }}</div>
                                @endif
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-secondary me-2"
                                    data-bs-dismiss="modal">Hủy</button>
                                <button type="submit" class="btn btn-danger">Xóa Tài Khoản</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
