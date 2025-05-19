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
                    <!-- Főcím és Leírás -->
                    <div class="form-section">
                        <h5>Alapadatok</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="title">Főcím</label>
                                    <input type="text" name="title" class="form-control"
                                        value="{{ old('title', $blog->title ?? '') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="cover_image">Fő borítókép</label>
                                <div class="input-group">
                                    <div class="custom-file col-sm-6">
                                        <input name="cover_image" type="file" class="custom-file-input" id="cover_image">
                                        <label class="custom-file-label" for="cover_image">Fájl kiválasztása</label>
                                    </div>
                                </div>

                                @if (isset($blog) && $blog->cover_image)
                                    <div class="mt-2">
                                        <img id="cover-image-preview"
                                            src="{{ asset('/assets/images/gallery/blog/' . $blog->cover_image) }}"
                                            alt="Blog kép" width="200">
                                    </div>
                                @else
                                    <div class="mt-2">
                                        <img id="cover-image-preview" src="#" alt="Előnézet" style="display: none;"
                                            width="200">
                                    </div>
                                @endif
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="enable_quote">
                                    <input type="checkbox" id="enable_quote" name="enable_quote"
                                        {{ old('enable_quote') ? 'checked' : '' }}>
                                    Szeretnék idézetet hozzáadni
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="quote-section" style="display: none;">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="quote">Idézet</label>
                                    <textarea placeholder="Nem kötelező kitölteni" class="form-control" id="quote" name="quote">{{ old('quote', $blog->quote ?? '') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="quote_author">Idéző neve</label>
                                    <input placeholder="Nem kötelező kitölteni" type="text" class="form-control"
                                        id="quote_author" name="quote_author"
                                        value="{{ old('quote_author', $blog->quote_author ?? '') }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="quote_title">Idéző titulusa</label>
                                    <input placeholder="Nem kötelező kitölteni" type="text" class="form-control"
                                        id="quote_title" name="quote_title"
                                        value="{{ old('quote_title', $blog->quote_title ?? '') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="enable_subtitle">
                                    <input type="checkbox" id="enable_subtitle" name="enable_subtitle"
                                        {{ old('enable_subtitle') ? 'checked' : '' }}>
                                    Szeretnék alcímet hozzáadni
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="subtitle-section" style="display: none;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="second_main_title">Alcím</label>
                                    <input placeholder="Nem kötelező kitölteni" type="text" name="second_main_title"
                                        class="form-control"
                                        value="{{ old('second_main_title', $blog->second_main_title ?? '') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label for="second_cover_image">Alcím részhez kép</label>
                            <div class="input-group">
                                <div class="custom-file col-sm-6">
                                    <input name="second_cover_image" type="file" class="custom-file-input"
                                        id="second_cover_image">
                                    <label class="custom-file-label" for="second_cover_image">Fájl kiválasztása</label>
                                </div>
                            </div>

                            @if (isset($blog) && $blog->second_cover_image)
                                <div class="mt-2">
                                    <img id="second_cover-image-preview"
                                        src="{{ asset('/assets/images/gallery/blog/' . $blog->second_cover_image) }}"
                                        alt="Blog kép" width="200">
                                </div>
                            @else
                                <div class="mt-2">
                                    <img id="second_cover-image-preview" src="#" alt="Előnézet"
                                        style="display: none;" width="200">
                                </div>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="second_content">Alcím szövege</label>
                                    <textarea placeholder="Nem kötelező kitölteni" class="form-control" id="second_content" name="second_content">{{ old('second_content', $blog->second_content ?? '') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="quote">Záró szöveg</label>
                                <textarea placeholder="Nem kötelező kitölteni" class="form-control" id="end_content" name="end_content">{{ old('end_content', $blog->end_content ?? '') }}</textarea>
                            </div>
                        </div>
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
    <script>
        document.getElementById('cover_image').addEventListener('change', function(event) {
            const [file] = event.target.files;
            if (file) {
                const preview = document.getElementById('cover-image-preview');
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
            }
        });
        document.getElementById('second_cover_image').addEventListener('change', function(event) {
            const [file] = event.target.files;
            if (file) {
                const preview = document.getElementById('second_cover-image-preview');
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const enableQuoteCheckbox = document.getElementById('enable_quote');
            const enableSubtitleCheckbox = document.getElementById('enable_subtitle');

            const quoteSection = document.getElementById('quote-section');
            const subtitleSection = document.getElementById('subtitle-section');

            // Megjelenítés beállítása az oldal betöltésekor (ha checked volt)
            if (enableQuoteCheckbox.checked) quoteSection.style.display = 'block';
            if (enableSubtitleCheckbox.checked) subtitleSection.style.display = 'block';

            // Eseményfigyelő a pipálásra
            enableQuoteCheckbox.addEventListener('change', function() {
                quoteSection.style.display = this.checked ? 'block' : 'none';
            });

            enableSubtitleCheckbox.addEventListener('change', function() {
                subtitleSection.style.display = this.checked ? 'block' : 'none';
            });
        });
    </script>
@endsection
