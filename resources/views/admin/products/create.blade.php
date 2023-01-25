@extends('layouts.master')
@section('content')
<div>
<form action="{{ isset($pro)? route('product.update',$pro->id):route('product.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-3">
          <input type="text" name="name" placeholder="Product Name" value="{{isset($pro)? $pro->name :'' }}">
        </div>

        <div class="col-3">
           <input type="number" name="price" placeholder="Product Price" value="{{isset($pro)? $pro->price :''}}">
        </div>

        <div class="col-3">
           <input type="number" name="discount" placeholder="Product Discount" value="{{isset($pro)? $pro->price :''}}">
        </div>

        <div class="col-3">
           <input type="text" name="quantity_in_hand"  placeholder="quantity_in_hand" value="{{isset($pro)? $pro->quantity_in_hand :''}}">
        </div>
   </div>
   <br>
   <br>

    <textarea type="text" class="editor" name="description" placeholder="Product Description" >
        {!! isset($pro)? $pro-> description:'' !!}
    </textarea>
    <br>
  <div class="row">
    <div class="col-4">
        <select  required name="category_id" >
            <option value="{{ 'null' }}">Select Category</option>
            @foreach ($category as $cat)
            <option value="  {{$cat->id}}">{{$cat->name}}</option>
             @endforeach
            </select>
    </div>

    <div class="col-4">
        <input type="file" src="" name="image" width="50" >
    </div>

    <div class="col-4">
        <input type="submit" name="Update">
    </div>
  </div>






    <script src="/assets/build/ckeditor.js"></script>
		<script>ClassicEditor
				.create( document.querySelector( '.editor' ), {

					licenseKey: '',



				} )
				.then( editor => {
					window.editor = editor;




				} )
				.catch( error => {
					console.error( 'Oops, something went wrong!' );
					console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
					console.warn( 'Build id: fgydboej4r6a-4hihq9u9eqyi' );
					console.error( error );
				} );
		</script>
</form>
</div>
@endsection
