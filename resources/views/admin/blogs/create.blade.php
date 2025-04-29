@extends('admin.main')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Blog adatai</h4>
            </div>

            <form method="POST" id="blog" class="form-horizontal form-bordered"
                action="{{ isset($blog) ? route('admin.blogs.update', $blog->id) : route('admin.blogs.store') }}"
                enctype="multipart/form-data">
                @csrf
                @if (isset($blog))
                    @method('PUT')
                @endif

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="title">Cím</label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ old('title', $blog->title ?? '') }}">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="content">Leírás</label>
                                <textarea required type="text" class="form-control" id="content" name="content">{{ old('content', $blog->content ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="is_published">Publikálás</label>
                                <input type="checkbox" class="form-control" id="is_published" name="is_published"
                                    {{ old('is_published', $blog->is_published ?? false) ? 'checked' : '' }}>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="created_at">Létrehozás dátuma (Ha üres, akkor a mai dátum lesz)</label>
                                <input type="date" name="created_at" class="form-control"
                                    value="{{ old('created_at', isset($blog->created_at) ? $blog->created_at->format('Y-m-d') : '') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="cover_image">Kép</label>
                        <div class="input-group">
                            <div class="custom-file col-sm-6">
                                <input name="cover_image" type="file" class="custom-file-input" id="cover_image">
                                <label class="custom-file-label" for="cover_image">Fájl kiválasztása</label>
                            </div>
                        </div>
                        @if (isset($blog) && $blog->cover_image)
                            <div class="mt-2">
                                <img src="{{ asset('/assets/images/gallery/blog/' . $blog->cover_image) }}" alt="Blog kép"
                                    width="100">
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Mentés</button>
                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Törlés</button>
                        <button onclick="location='{{ route('admin.blogs.index') }}'" type="button"
                            class="btn btn-light-secondary me-1 mb-1">Vissza</button>
                    </div>
                </div>
            </form>

        </div>
    </section>

@endsection
