<div class="container pt-3 pb-3">

    <div class="d-flex row row-cols-lg-3 row-cols-md-2 row-cols-1 g-3">
        @foreach ($data as $prod)
        <div class="col">
            <div class="ms-card">
                <div class="img-container">
                    <img class="default-img" src="{{ Vite::asset('resources/img/' . $prod['frontImage']) }}" alt="image">
                    <img class="hover-img" src="{{ Vite::asset('resources/img/' . $prod['backImage']) }}" alt="image hover">
    
                    <span class="d-flex heart-btn">&hearts;</span>
                    <div class="tag fw-bold">
                        @php
                            $discount = 0;
                        @endphp

                            @for ($i = count($prod['badges']) - 1; $i >= 0; $i--)
                                @if ($prod['badges'][$i]['type'] === 'discount')
                                    @php
                                        $discount = -(int) $prod['badges'][$i]['value'];
                                    @endphp
                                    <span class="sale-tag">{{ $prod['badges'][$i]['value'] }}</span>
                                @endif
                                @if ($prod['badges'][$i]['type'] === 'tag')
                                    <span class="sustainability-tag">{{ $prod['badges'][$i]['value'] }}</span>   
                                @endif
                            @endfor              
                    </div>
                </div>
                <div class="d-flex description flex-column p-1">
                    <span class="brand-text">{{ $prod['brand'] }}</span>
                    <span class="des-text fw-bold">{{ $prod['name'] }}</span>
                    <div class="price-section">
                        <span class="after-discount fw-bold">
                            @if ($discount > 0)
                                    {{ $prod['price'] - round($prod['price'] * ($discount / 100), 2) }} €
                            @else
                                    {{ $prod['price'] }} €
                            @endif
                        </span>

                        @if ($discount > 0)
                                <span class="before-discount">
                                    {{ $prod['price'] }} €
                                </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
        @endforeach
    </div>


</div>