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
                <h2> <a href="{{route('create.product')}}">Add Post</a> </h2>
            </div>
            <div class="card-body">
                <form action="{{route('store.product')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="form-group">
                            <input name="title" placeholder="Add Title" id="edtor-title" class="form-control" required>
                        </div>
                        <!-- end title -->
                        <div class="col-md-8">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Add Description</label>
                                        <textarea name="description" cols="10" rows="30" id="summernote"
                                            class="form-control" required></textarea>
                                    </div>
                                </div>

                            </div>
                            {{-- end row --}}
                        </div>

                        <div class="col-md-4">
                            <div class="row">
                                <div class="extra-field">
                                    <h4>Add Extra Field</h4>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" name="price" placeholder="Price"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        {{-- END PRICE --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" name="offer" placeholder="Offer Price"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        {{-- END OFFER --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="number" name="quantity" placeholder="Quantity"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        {{-- END OFFER --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="tags" placeholder="Tags" id="input-tags"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        {{-- END TAGS --}}
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{-- <label for="ProductCategory">Category</label> --}}
                                                <select class="form-control" name="cat_id">
                                                    <option value="">Select a category</option>
                                                    @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>

                                                    @foreach (App\Models\backend\ProductCategory::orderBy('name',
                                                    'asc')->where('parent_id', $category->id)->get() as $sub_category)
                                                    <option value="{{ $sub_category->id }}"> -> {{
                                                        $sub_category->name }}
                                                    </option>

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
                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- =====Mutliple Image Form with Preview===== -->
                                    <div class="insert-img">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label id="upload-img" for="avatar">Insert Featured</label>
                                                    <input type="file" name="image" id="images" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <img class="img-sm img-center my-1"
                                                    src="{{asset('backend/img/avatars/upload.png')}}" alt="upload">
                                            </div>

                                            <div class="col-md-12">
                                                <div class="imgPreview img-center"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end image preview -->
                                </div>
                                <button type="submit" class="btn btn-lg btn-primary">Publish Post</button>
                            </div>

                        </div>
                        {{-- End row --}}

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
