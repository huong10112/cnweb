</html><?php include 'header.php'; ?>
<?php include 'products.php'; ?>
<!-- Kết nối Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Kết nối Bootstrap Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
<main class="container my-5">
    <!-- Nút Thêm mới -->
    <div class="d-flex justify-content-start mb-3">
        <a href="#" class="btn btn-success">+ Thêm mới</a>
    </div>
    <table class="table table-hover">
        <thead class="table-light">
            <tr>
                <th>Sản phẩm</th>
                <th>Giá thành</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= htmlspecialchars($product['name']) ?></td>
                    <td><?= htmlspecialchars($product['price']) ?></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-pencil"></i> <!-- Icon sửa -->
                        </a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-trash"></i> <!-- Icon xóa -->
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include 'footer.php'; ?>. 