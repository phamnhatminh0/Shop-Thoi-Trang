<div class="chitiet_product-details">
    <div class="chitiet_product-image">
        <img src="{{ $sangpham->Anh }}" alt="Product Image">
    </div>
    <div class="chitiet_product-info">
        <h1>{{ $sangpham->TenSP }}</h1>
        <p class="chitiet_price">{{ $sangpham->Gia }} VND</p>
        <p class="chitiet_description">{{ $sangpham->MoTa }}</p>
        <p class="chitiet_quantity">Số lượng: {{ $sangpham->SoLuong }}</p>
        <p class="chitiet_promotion-price">Giá khuyến mãi: {{ $sangpham->GiaKM }} VND</p>
        <p class="chitiet_category">Danh mục: {{ $sangpham->TenDM }}</p>
        <p class="chitiet_brand">Thương hiệu:{{ $sangpham->tenTH }}</p>
        <button class="chitiet_add-to-cart">Thêm vào giỏ hàng</button>
    </div>
</div>
