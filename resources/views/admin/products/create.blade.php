@extends('admin.main')
@section('content')
    <section class="section">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Termék adatai</h4>
            </div>

            <form method="POST" id="product" class="form-horizontal form-bordered"
                action="{{ isset($product) ? route('admin.products.update', $product->id) : route('admin.products.store') }}"
                enctype="multipart/form-data">
                @csrf
                @if (isset($product))
                    @method('PUT')
                @endif

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Megnevezés</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ old('name', $product->name ?? '') }}">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="description">Leírás</label>
                                <textarea class="form-control" id="description" name="description" required>{{ old('description', $product->description ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="detailed_description">Részletes leírás</label>
                                <textarea class="form-control" id="detailed_description" name="detailed_description">{{ old('detailed_description', $product->detailed_description ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="price">Rendes ár</label>
                                <input required type="number" class="form-control" id="price" name="price"
                                    value="{{ old('price', $product->price ?? '') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="discountPrice">Akciós ár</label>
                                <input type="number" placeholder="Üresen hagyható" class="form-control" id="discountPrice"
                                    name="discountPrice" value="{{ old('discountPrice', $product->discountPrice ?? '') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="image">Kép</label>
                        <div class="input-group">
                            <div class="custom-file col-sm-6">
                                <input name="image" type="file" class="custom-file-input" id="image">
                                <label class="custom-file-label" for="image">Fájl kiválasztása</label>
                            </div>
                        </div>
                        {{-- ... --}}
                        @if (isset($product) && $product->image)
                            <div class="mt-2" id="image-preview-container">
                                <img id="image-preview" src="{{ asset('/assets/images/gallery/product/' . $product->image) }}"
                                    alt="Termékkép" width="200">
                                <button type="button" class="btn btn-danger btn-sm ms-2" id="delete-image-btn">Kép
                                    törlése</button>
                            </div>
                            <input type="hidden" name="delete_image" id="delete-image" value="0">
                        @else
                            <div class="mt-2" id="image-preview-container">
                                <img id="image-preview" src="#" alt="Előnézet" style="display: none;" width="200">
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Mentés</button>
                        <button onclick="location='{{ route('admin.products.index') }}'" type="button"
                            class="btn btn-light-secondary me-1 mb-1">Vissza</button>
                    </div>
                </div>
            </form>

        </div>
    </section>
    <script>
        document.getElementById('image').addEventListener('change', function(event) {
            const [file] = event.target.files;
            if (file) {
                const preview = document.getElementById('image-preview');
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
                // Ha új képet választ, ne töröljük a régit
                const deleteInput = document.getElementById('delete-image');
                if (deleteInput) deleteInput.value = 0;
            }
        });

        const deleteBtn = document.getElementById('delete-image-btn');
        if (deleteBtn) {
            deleteBtn.addEventListener('click', function() {
                // Elrejtjük a képet
                document.getElementById('image-preview').style.display = 'none';
                // Beállítjuk, hogy törölni kell
                document.getElementById('delete-image').value = 1;
                // Opcionálisan a gombot is elrejtheted:
                deleteBtn.style.display = 'none';
            });
        }
    </script>
@endsection
