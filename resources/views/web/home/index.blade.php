@extends('web.layouts.master')
@section('content')
    <!-- Start Product Area -->
    <div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Danh sách sản phẩm</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">   
                    <div class="product-info">
                        <div class="nav-main">
                            <!-- Tab Nav -->
                            {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                               @foreach($categories as $category)
                                   <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="{{strtolower('#'.$category->name)}}" role="tab">{{$category->name}}</a></li>
                               @endforeach
                            </ul> --}}
                            <!--/ End Tab Nav -->
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <!-- Start Single Tab -->
                            <div class="tab-pane fade show active" id="man" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            
                                                            <img class="default-img" src="{{$product->images->first()->url}}" alt="#">
                                                            <img class="hover-img" src="{{$product->images->last()->url}}" alt="#">
                                                        </a>
                                                        <div class="button-head">
                                                            <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" type="button" href="#" class="show_modal" data-id="{{$product->id}}"><i class=" ti-eye" ></i><span>Quick Shop</span></a>
                                                                <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                                <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                            </div>
                                                            <div class="product-action-2">
                                                                <a title="Add to cart" href="{{route('product.addToCart', $product->id)}}">Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                    <h3><a data-toggle="modal" data-target="#exampleModal" title="Quick View" type="button" href="#" class="show_modal" data-id="{{$product->id}}">{{$product->name}}</a></h3>
                                                        <div class="product-price">
                                                            <span>{{$product->price}} $</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center" id="link-paginate">
                                <style>
                                    .pagination {
                                        display: flex;
                                    }
                                </style>
                                {{ $products->appends(request()->query())->links() }}
                            </div>
                            
                            <!--/ End Single Tab -->
                            <!-- Start Single Tab -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- End Product Area -->

    <!-- Start Shop Services Area -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Free shiping</h4>
                        <p>Orders over $100</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Free Return</h4>
                        <p>Within 30 days returns</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Sucure Payment</h4>
                        <p>100% secure payment</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Best Peice</h4>
                        <p>Guaranteed price</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services Area -->
      <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <!-- Product Slider -->
                            <div class="product-gallery">
                                <div class="quickview-slider-active">
                                    <div class="single-slider">
                                        <img class="single-slider-img" src="https://picsum.photos/569/528?random=1" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img class="single-slider-img" src="https://picsum.photos/569/528?random=2" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img class="single-slider-img" src="https://picsum.photos/569/528?random=3" alt="#">
                                    </div>
                                    <div class="single-slider">
                                        <img class="single-slider-img" src="https://picsum.photos/569/528?random=4" alt="#">
                                    </div>
                                </div>
                            </div>
                            <!-- End Product slider -->
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                           <div id="product-detail">
                               {{-- product detail ajax --}}
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Modal end -->
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(".show_modal").click(function() {
            let idTarget = $(this).data('id');   
            console.log(idTarget);
            renderForm(idTarget);
            slider = $(".single-slider-img").attr({
                "src" : 'https://picsum.photos/569/528?random=' + idTarget,
            });
        });
    });

    function renderForm(product_id) {
        $.ajax({
            url: "{{route('product.renderdetail')}}",
            type:'GET',
            data: {
                product_id: product_id
            },
            success:function (result){
                console.log(result);
                $('#product-detail').html(result.propertyForm);
            }
        });
    }
   

</script>
@endpush