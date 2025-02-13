<nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
    <ul id="siteNav" class="site-nav medium center hidearrow" style="font-family: 'Roboto', sans-serif;">
        <li class="lvl1 parent megamenu"><a href="#">Loại Baby Three <i class="anm anm-angle-down-l"></i></a>
            <div class="megamenu style1">
                <ul class="grid mmWrapper">
                    <li class="grid__item large-up--one-whole">
                        <ul class="grid">
                            @foreach ($typecategories as  $typecategory)
                                <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">{{ $typecategory['name'] }}</a>
                                    <ul class="subLinks">
                                        @foreach ($typecategory['data_categories'] as $data_category)
                                            <li class="lvl-2" style="display: flex">
                                                <a href="" class="site-nav lvl-2">
                                                    {{ $data_category->name }}
                                                    {{-- <span class="lbl nm_label1">New</span> --}}
                                                </a>
                                                <a class="swatch medium rounded">
                                                    {{-- <img  src="{{ $data_category->img }}" alt="{{ $data_category->img }}"> --}}
                                                    <img style="width: 30px ; height: 30px;margin-left:5px" src="{{ $data_category->img }}" alt="{{ $data_category->img }}">
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </li>
        <li class="lvl1 parent megamenu"><a href="#">Box Baby Three <i class="anm anm-angle-down-l"></i></a>
            <div class="megamenu style4">
                <ul class="grid grid--uniform mmWrapper">

                    <li class="grid__item lvl-1 col-md-12 col-lg-12"><a href="#" class="site-nav lvl-1">Tất cả các loại Box trên thị trường</a>
                        <ul class="subLinks">
                            @php
                                $status_1 = '<span class="lbl nm_label3">Hot</span>';
                                $status_2 = '<span class="lbl nm_label1">New</span>';
                                $status_3 = '<span class="lbl nm_label2">Sale</span>';
                            @endphp
                            @foreach ($productlistnotsell as $product_not_sell)
                                    <li class="lvl-2 swatch medium rounded">
                                        <img style="width: 50px ; height: 50px;" class="rounded" src="{{ $data_category->img }}" alt="{{ $data_category->img }}">
                                        <a style="font-size: large" href="shop-left-sidebar.html" class="site-nav lvl-2">{{ $product_not_sell->name }}</a>
                                    </li>
                            @endforeach
                            <hr>
                            <li class="lvl-2"><a href="shop-left-sidebar.html" class="site-nav lvl-2">Tất cả box</a></li>
                        </ul>
                    </li>

                </ul>
              </div>
        </li>

    </ul>
</nav>
