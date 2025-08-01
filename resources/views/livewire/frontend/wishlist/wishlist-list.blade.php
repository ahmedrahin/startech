
<main class="main wishlist-page" style="margin-bottom: 40px;">
    <!-- Start of Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="page-title mb-0">Wishlist</h1>
        </div>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav mb-10">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="demo1.html">Home</a></li>
                <li>Wishlist</li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->

    <!-- Start of PageContent -->
    <div class="page-content">
        <div class="container">
            <h3 class="wishlist-title">My wishlist - ({{ $wishlistItems->count() }})</h3>
             @if (!$wishlistItems->isEmpty())
                <table class="shop-table wishlist-table mb-10">
                    <thead>
                        <tr>
                            <th class="product-name"><span>Product</span></th>
                            <th></th>
                            <th class="product-price text-center"><span>Price</span></th>
                            <th class="product-stock-status text-center"><span>Stock Status</span></th>
                            <th class="wishlist-action text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wishlistItems as $item)
                            <tr>
                                <td class="product-thumbnail">
                                    <div class="p-relative">
                                        <a href="{{ route('product-details', $item->product->slug) }}">
                                            <figure>
                                                <img src="{{ asset($item->product->thumb_image) }}" alt="product" width="300" height="338">
                                            </figure>
                                        </a>
                                        <button type="submit" class="btn btn-close" wire:click="removeFromWishlist({{ $item->id }})"><i class="fas fa-times"></i></button>
                                    </div>
                                </td>
                                <td class="product-name">
                                    <a href="{{ route('product-details', $item->product->slug) }}">
                                        {{ $item->product->name }}
                                    </a>
                                </td>
                                <td class="product-price text-center">
                                    <ins class="new-price">
                                        {{ $item->product->offer_price }}৳
                                        @if ($item->product->discount_option == 2 || $item->product->discount_option == 3)
                                            <del class="text-danger opacity-80">
                                                {{ $item->product->base_price }}৳
                                            </del>
                                        @endif
                                    </ins>
                                </td>
                                <td class="product-stock-status text-center">
                                    @if ($item->product->quantity > 0)
                                        <span class="badge bg-success">In Stock</span>
                                    @elseif($item->product->quantity < 10 && $item->product->quantity > 0)
                                        <span class="badge bg-warning">Limited Stock</span>
                                    @else
                                        <span class="badge bg-danger">Out of Stock</span>
                                    @endif
                                </td>
                                <td class="wishlist-action text-end">
                                    @if( $item->product->quantity > 0 )
                                        <button type="button" class="btn btn-dark btn-rounded btn-sm ml-lg-2 btn-cart quickview" data-bs-toggle="modal" data-bs-target="#quick-view"
                                        data-product-id="{{ $item->product->id }}">Add to cart</button>
                                    @else
                                        <button type="button" class="btn btn-dark btn-rounded btn-sm ml-lg-2 btn-cart stock-out" disabled>Out of stock</button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-danger w-100 mb-4">No product found in your wishlist.</div>
            @endif
        </div>
    </div>
    <!-- End of PageContent -->
</main>
