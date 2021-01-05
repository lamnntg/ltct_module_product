<div class="quickview-content">
    <h2 id="name_product">{{$product->name}}</h2>
    <div class="quickview-ratting-review">
        <div class="quickview-ratting-wrap">
            <div class="quickview-ratting">
                <i class="yellow fa fa-star"></i>
                <i class="yellow fa fa-star"></i>
                <i class="yellow fa fa-star"></i>
                <i class="yellow fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <a href="#"> (1 customer review)</a>
        </div>
    </div>
    <h3>{{$product->price}} $</h3>
    <div class="quickview-peragraph">
        <p>{{$product->productDetail->information}}</p>
    </div>
    <br>
    <div class="quantity">
        <!-- Input Order -->
        <div class="input-group">
            <input type="number" name="countProduct" class="input-number"  data-min="1" data-max="1000" value="1">
        </div>
        <!--/ End Input Order -->
    </div>
    <div class="add-to-cart">
        <a href="{{route('product.addToCart', $product->id)}}" class="btn">Add to cart</a>
    </div>
    <div class="default-social">
        <h4 class="share-now">Share:</h4>
        <ul>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
</div>