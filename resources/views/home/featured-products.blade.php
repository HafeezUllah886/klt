<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Featured
            Products</span></h2>
    <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 px-xl-5">

        @foreach ($featuredProducts as $product)
            <div class="col pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden" style="width: 100%; ">
                        <!-- Set your preferred dimensions -->

                        <img class="img-fluid img-responsive w-100" style="max-height: 200px" src="{{ asset('storage/' . $product->thumb) }}"
                            alt="Product Image">

                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square"
                                href="{{ route('product.details', ['productId' => $product->id]) }}"><i
                                    class="fa fa-info-circle"></i>

                            </a>
                            <form id="add_to_cart_form" action="{{ url('add_cart', $product->id) }}" method="POST">
                                @csrf
                                <a href="#" class="btn btn-outline-dark btn-square"
                                    onclick="document.getElementById('add_to_cart_form').submit(); return false;">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>

                            </form>

                        </div>
                    </div>
                    <div class="text-center p-2">
                        <a class="card-title h6 text-dark" href="{{ route('product.details', ['productId' => $product->id]) }}">
                            {{ $product->product_name }}
                        </a>
                        <div class=" card-textd-flex align-items-center justify-content-center">
                            <p class="card-text">PKR {{ number_format($product->price) }} 
                            <span class="card-text text-muted"> - <del> {{ number_format($product->discount_price) }}</del></span>
                            </p>
                           
                        </div>
                         
                    </div>
                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus btn-sm" type="button">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control form-control-sm bg-white border-0 text-center p-0" value="1" placeholder="Enter quantity" name="quantity">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus btn-sm" type="button">
                                    <small><i class="fa fa-plus"></i></small>
                                </button>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Add</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center mt-4">
        <a href="{{ url('featured/products') }}" class="btn btn-primary btn-lg">See All Products</a>
    </div>
</div>
