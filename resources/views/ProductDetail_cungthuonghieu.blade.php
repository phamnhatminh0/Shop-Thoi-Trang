@foreach ($sangphamCungthuonghieu as $h)
    <div class="pro">
        <a href="{{ url('/chitietsangpham', $h->MaSP) }}">
            <img src="{{ $h->Anh }}" alt="">
            <div class="des">
                <span>{{ $h->tenTH }}</span>
                <h5>{{ $h->TenSP }}</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>{{ $h->Gia }} VND</h4>
            </div>
            <a href=""><i class="fal fa-shopping-cart cart"></i></a>
        </a>
    </div>
@endforeach
