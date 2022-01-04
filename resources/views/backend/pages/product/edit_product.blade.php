@php
// Main Categories
$categories = DB::table('product_categories')->orderBy('name', 'asc')->where('parent_id', NULL)->get();
// Sub Categories
// @foreach($categories as $category){
// return $category->id;
// }
// $subCategories = DB::table('product_categories')->orderBy('name', 'asc')->where('parent_id', $category->id)->get();

$Brands = DB::table('product_brands')->orderBy('name', 'asc')->get()
@endphp
@extends('backend.layout.main')

@section('content')
<div class=" row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header title">
                <h2>Update Post</h2>
            </div>
            <div class="card-body">
                <form action="{{route('update.product', $product->id)}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="form-group">
                            <input name="title" value="{{ $product->title }}" id="edtor-title" class="form-control"
                                required>
                        </div>
                        <!-- end title -->
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Edit Description</label>
                                        <textarea name="description" cols="5" rows="5" id="summernote"
                                            class="form-control" required>{!! $product->description !!}</textarea>
                                    </div>
                                </div>
                            </div>
                            {{-- end row --}}
                        </div>

                        <div class="col-md-4">
                            <div class="row">
                                <div class="extra-field">
                                    <h4>Edit Extra Field</h4>
                                </div>
                                <div class="col-md-12">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" name="price" value="{{$product->price}}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        {{-- END PRICE --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" name="offer" value="{{$product->offer}}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        {{-- END OFFER --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" name="quantity" value="{{$product->quantity}}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        {{-- END OFFER --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="tags" value="{{$product->tags}}"
                                                    id="input-tags" class="form-control">
                                            </div>
                                        </div>
                                        {{-- END TAGS --}}
                                    </div>
                                    {{-- <option value="{{ $BlogCategory->id }}" {{ old('cat_id', $blog->cat_id) ==
                                        $BlogCategory->id ? 'selected' : '' }}>{{ $BlogCategory->name }}
                                    </option> --}}

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{-- <label for="ProductCategory">Category</label> --}}
                                                <select class="form-control" name="cat_id">
                                                    <option value="">Select a category</option>
                                                    @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" {{ $category->id ==
                                                        $product->cat_id ? 'selected' : '' }}>{{ $category->name }}
                                                    </option>

                                                    @foreach (App\Models\backend\ProductCategory::orderBy('name',
                                                    'asc')->where('parent_id', $category->id)->get() as $sub_category)
                                                    <option value="{{ $sub_category->id }}" {{ $sub_category->id ==
                                                        $product->cat_id ? 'selected': '' }}> -> {{
                                                        $sub_category->name
                                                        }}</option>
                                                    {{-- <option value="{{ $sub_category->id }}"> -> {{
                                                        $sub_category->name }}
                                                    </option>

                                                    <option value="{{ $sub_category->id }}" {{ $sub_category->id ==
                                                        $product->category->id ? 'selected': '' }}> ------> {{
                                                        $sub_category->name }}</option> --}}

                                                    @endforeach

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="form-control" name="brand_id">
                                                    <option value="">Select a Brand</option>
                                                    @foreach ($Brands as $brand)
                                                    <option value="{{ $brand->id }}" {{ $brand->id == $product->brand_id
                                                        ? 'selected' : '' }}>{{ $brand->name }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- =====Mutliple Image Form with Preview===== -->
                                <div class="insert-img">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label id="upload-img" for="image">Edit Featured</label>
                                                <input type="file" name="image" id="images"
                                                    placeholder="{{asset('images/'.$product->image)}}"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <img class="img-sm img-center my-1"
                                                src="{{asset('images/'.$product->image)}}" alt="upload">
                                        </div>

                                        <div class="col-md-12">
                                            <div class="imgPreview img-center"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end image preview -->
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary">Update Post</button>
                        </div>

                    </div>
                    {{-- End row --}}
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
