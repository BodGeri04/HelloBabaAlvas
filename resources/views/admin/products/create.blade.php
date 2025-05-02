@extends('admin.main')
@section('content')
    <section class="section">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
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
                                <label for="name">Név</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ old('name', $product->name ?? '') }}">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="description">Leírás</label>
                                <input required type="text" class="form-control" id="description" name="description"
                                    value="{{ old('description', $product->description ?? '') }}">
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
                        @if (isset($product) && $product->image)
                            <div class="mt-2">
                                <img id="image-preview" src="{{ asset('/assets/images/gallery/' . $product->image) }}"
                                    alt="Termékkép" width="200">
                            </div>
                        @else
                            <div class="mt-2">
                                <img id="image-preview" src="#" alt="Előnézet" style="display: none;" width="200">
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Mentés</button>
                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Törlés</button>
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
            }
        });
    </script>
@endsection
