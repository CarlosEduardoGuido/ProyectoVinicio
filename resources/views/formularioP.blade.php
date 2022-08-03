@extends('dasboard')

@section('contenido')
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <div class="col-sm-12 col-xl-12">
         <div class="bg-light rounded h-100 p-4">
        <h1>Agregar un Nuevo Producto</h1>
    <br>
    <form action="{{route('salvarProductos')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">NOMBRE</span>
              <input type="text" class="form-control" aria-describedby="basic-addon1" name="name" id="name">
        </div>
        @error('name')
         <small>*{{$message}}</small>
         @enderror
        <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">DESCRIPCION</span>
               <input type="text" class="form-control" aria-describedby="basic-addon1" name="slug"  id="slug">
        </div>
        @error('slug')
         <small>*{{$message}}</small>
         @enderror
        <div class="input-group mb-3">
             <span class="input-group-text" id="basic-addon1">PRECIO</span>
            <input type="number" class="form-control" aria-describedby="basic-addon1" name="price"  id="price" >
               </div>
               @error('price')
         <small>*{{$message}}</small>
         @enderror
               <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Imagen</span>
                                <input type="file" class="form-control" aria-describedby="basic-addon1"  name="image_path"  onchange="return fileValidation()"id="image_path" >
                            </div>
                            @error('image_path')
         <small>*{{$message}}</small>
         @enderror
         <br>
             <input class="btn btn-primary" type="submit" value="Agregar">
    </form>
    <br>
                            <a href="{{route('productos')}}"><button class="btn btn-primary">REGRESAR</button></a><br>
   

</body>
<script >

	const $name =document.querySelector("#name");
	const patronName = /[a-zA-Z]+/;
		$name.addEventListener("keydown", event => {
			if (patronName.test(event.key)) {
				document.getElementById('name').style.border = "1px solid #00cc00";
			} else {
				if (event.keyCode == 8 || event.keyCode == 32) {} else {
					event.preventDefault();
				}
			}
		});
	
		const $slug =document.querySelector("#slug");
		const patronslug = /[a-zA-Z]+/;
	
		$slug.addEventListener("keydown", event => {
			if (patronslug.test(event.key)) {
				document.getElementById('slug').style.border = "1px solid #00cc00";
			} else {
				if (event.keyCode == 8 || event.keyCode == 32) {} else {
					event.preventDefault();
				}
			}
		});
		const $price =document.querySelector("#price");
		const patronprice = /[/^\d*\.?\d*$/]+/;
	
		$price.addEventListener("keydown", event => {
			if (patronprice.test(event.key)) {
				document.getElementById('price').style.border = "1px solid #00cc00";
			} else {
				if (event.keyCode == 8 || event.keyCode == 32) {} else {
					event.preventDefault();
				}
			}
		});
        
        function fileValidation() {
            var fileInput =
                document.getElementById('image_path');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
                alert('Formato invalido');
                fileInput.value = '';
                return false;
           
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        
	</script>
</html>

@endsection

