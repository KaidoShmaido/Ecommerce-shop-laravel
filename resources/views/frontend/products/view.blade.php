@extends('layouts.front')
@section('title',$products->name)
@section('content')


        <div class="py-3 mb-4 shadow-sm bg-info   border-top">
            <div class="container">
                <h6 class="mb-8">Collection /{{$products->category->name}} /{{$products->name}}</h6>
            </div>
        </div>
            <div class="container">
              <div class="card-shodow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 border-right">
                            <img src="{{asset('assets/uploads/products/'.$products->image)}}"  class="w-100" alt="">
                        </div>
                        <div class="col-md-8">
                               <h2 class="mb-0">
                                {{$products->name}}
                                @if ($products->trending=='1')
                                    <label style="font-size:16px" class="float-end badge bg-danger trending_tag">Trending</label>
                                @endif
                               </h2>
                               <hr>
                               <label class="me-3">Orginal Price : <s>{{$products->original_price}}$</s></label>
                               <label class="fw-bold">Selling Price : {{$products->selling_price}}$</label>
                               <p class="mt-3">
                                 {!! $products ->small_description !!}
                               </p>
                               <hr>
                               @if ($products->quantity >0)
                                   <label class="badge bg-success">In stock</label>
                                @else
                                   <label class="badge bg-danger">Out of Stock</label>
                               @endif

                               <div class="row mt-2">
                                    <div class="col-md-2">
                                        <div class="col-md-">
                                            <label for="quantity">Quantity</label>
                                                <div class="input-group text-center mb-3">
                                                    <button class="input-group-text minus-btn">-</button>
                                                    <input type="text" name="quantity " value="1" class="form-control qty-input">
                                                    <button class="input-group-text plus-btn">+</button>
                                                </div>    
                                        </div>

                                    </div>
                                    <div class="col-md-10">
                                        <br>
                                        <button type="button" class="btn btn-success me-3 float-start">add to cart  <i class="fa fa-shopping-cart"></i></button>
                                        <button type="button" class="btn btn-primary me-3 float-start">add to Whishlist <i class="fa fa-heart"></i></button>

                                    </div>
                               </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
@endsection

@section("scripts")
<script>
  $(document).ready(function(){
    $('.plus-btn').click(function(e){
        e.preventDefault();
    });
  });
</script>

@endsection

