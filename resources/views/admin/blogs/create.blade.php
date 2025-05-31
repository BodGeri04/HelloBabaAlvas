@extends('admin.main')
@section('content')
    {{-- Hibaüzenetek --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="section">
        <div class="row">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ isset($blog) ? 'Blog szerkesztése' : 'Új blog létrehozása' }}</h4>
                    </div>

                    <form method="POST" class="form-horizontal form-bordered"
                        action="{{ isset($blog) ? route('admin.blogs.update', $blog->id) : route('admin.blogs.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @if (isset($blog))
                            @method('PUT')
                        @endif

                        <div class="card-body">
                            {{-- Alapadatok --}}
                            <h5>Alapadatok</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="title">Főcím</label>
                                    <input type="text" name="title" class="form-control"
                                        value="{{ old('title', $blog->title ?? '') }}">
                                </div>
                            </div>

                            {{-- Borítókép --}}
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="cover_image">Fő borítókép</label>
                                    <div class="input-group">
                                        <div class="custom-file col-sm-6">
                                            <input name="cover_image" type="file" class="custom-file-input"
                                                id="cover_image">
                                            <label class="custom-file-label" for="cover_image">Fájl kiválasztása</label>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <img id="cover-image-preview"
                                            src="{{ isset($blog) && $blog->cover_image ? asset('/assets/images/gallery/blog/' . $blog->cover_image) : '#' }}"
                                            alt="Borítókép" width="200"
                                            style="{{ isset($blog) && $blog->cover_image ? '' : 'display: none;' }}">
                                    </div>
                                </div>
                            </div>

                            {{-- Leírás --}}
                            <div class="row">
                                <div class="col-md-7 form-group">
                                    <label for="content">Leírás</label>
                                    <textarea class="form-control" id="content" name="content" required>{{ old('content', $blog->content ?? '') }}</textarea>
                                </div>
                            </div>

                            {{-- Publikálás --}}
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label>
                                        <input type="checkbox" id="is_published" name="is_published"
                                            {{ old('is_published', $blog->is_published ?? false) ? 'checked' : '' }}>
                                        Publikálás
                                    </label>
                                </div>
                            </div>

                            {{-- Létrehozás dátuma --}}
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="created_at">Létrehozás dátuma</label>
                                    <input type="date" name="created_at" class="form-control"
                                        value="{{ old('created_at', isset($blog->created_at) ? $blog->created_at->format('Y-m-d') : '') }}">
                                </div>
                            </div>

                            {{-- Idézet szekció kapcsoló --}}
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label>
                                        <input type="checkbox" id="enable_quote" name="enable_quote"
                                            {{ old('enable_quote') ? 'checked' : '' }}>
                                        Szeretnék idézetet hozzáadni
                                    </label>
                                </div>
                            </div>

                            {{-- Idézet szekció --}}
                            <div id="quote-section" style="display: none;">
                                <div class="row">
                                    <div class="col-md-7 form-group">
                                        <label for="quote">Idézet</label>
                                        <textarea class="form-control" id="quote" name="quote" placeholder="Nem kötelező">{{ old('quote', $blog->quote ?? '') }}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="quote_author">Idéző neve</label>
                                        <input type="text" class="form-control" id="quote_author" name="quote_author"
                                            placeholder="Nem kötelező"
                                            value="{{ old('quote_author', $blog->quote_author ?? '') }}">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="quote_title">Idéző titulusa</label>
                                        <input type="text" class="form-control" id="quote_title" name="quote_title"
                                            placeholder="Nem kötelező"
                                            value="{{ old('quote_title', $blog->quote_title ?? '') }}">
                                    </div>
                                </div>
                            </div>

                            {{-- Alcím kapcsoló --}}
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label>
                                        <input type="checkbox" id="enable_subtitle" name="enable_subtitle"
                                            {{ old('enable_subtitle') ? 'checked' : '' }}>
                                        Szeretnék alcímet hozzáadni
                                    </label>
                                </div>
                            </div>

                            {{-- Alcím szekció --}}
                            <div id="subtitle-section" style="display: none;">
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="second_main_title">Alcím</label>
                                        <input type="text" name="second_main_title" class="form-control"
                                            placeholder="Nem kötelező"
                                            value="{{ old('second_main_title', $blog->second_main_title ?? '') }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="second_cover_image">Alcím kép</label>
                                        <div class="input-group">
                                            <div class="custom-file col-sm-6">
                                                <input name="second_cover_image" type="file" class="custom-file-input"
                                                    id="second_cover_image">
                                                <label class="custom-file-label" for="second_cover_image">Fájl
                                                    kiválasztása</label>
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <img id="second_cover-image-preview"
                                                src="{{ isset($blog) && $blog->second_cover_image ? asset('/assets/images/gallery/blog/' . $blog->second_cover_image) : '#' }}"
                                                alt="Alcím kép" width="200"
                                                style="{{ isset($blog) && $blog->second_cover_image ? '' : 'display: none;' }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-7 form-group">
                                        <label for="second_content">Alcím szövege</label>
                                        <textarea class="form-control" id="second_content" name="second_content" placeholder="Nem kötelező">{{ old('second_content', $blog->second_content ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            {{-- Záró szöveg --}}
                            <div class="row">
                                <div class="col-md-7 form-group">
                                    <label for="end_content">Záró szöveg</label>
                                    <textarea class="form-control" id="end_content" name="end_content" placeholder="Nem kötelező">{{ old('end_content', $blog->end_content ?? '') }}</textarea>
                                </div>
                            </div>

                            {{-- Címkék --}}
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="tags">Tag-ek</label>
                                    <input type="text" name="tags" class="form-control"
                                        value="{{ old('tags', isset($blog->tags) ? implode(', ', $blog->tags) : '') }}">
                                </div>
                            </div>

                            {{-- Social média linkek --}}
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="tags">Linkek</label>
                                    <!-- Social link inputok -->
                                    <input class="form-control" type="url" name="facebook_link"
                                        placeholder="Facebook link"
                                        value="{{ old('facebook_link', $blog->social_share_link['facebook'] ?? '') }}">
                                    <input class="form-control" type="url" name="instagram_link"
                                        placeholder="Instagram link"
                                        value="{{ old('instagram_link', $blog->social_share_link['instagram'] ?? '') }}">
                                    <input class="form-control" type="url" name="tiktok_link"
                                        placeholder="TikTok link"
                                        value="{{ old('tiktok_link', $blog->social_share_link['tiktok'] ?? '') }}">
                                </div>
                            </div>

                            {{-- Gombok --}}
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Mentés</button>
                                <button onclick="location='{{ route('admin.blogs.index') }}'" type="button"
                                    class="btn btn-light-secondary me-1 mb-1">Vissza</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-center">
                <div class="w-100 text-center">
                    <img src="{{ asset('assets/images/gallery/segedlet.jpeg') }}" alt="Frontend előnézet"
                        class="img-fluid rounded shadow">
                    <p class="mt-2 text-muted">Felhasználói oldal előnézete</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const coverInput = document.getElementById('cover_image');
            const coverPreview = document.getElementById('cover-image-preview');
            const secondCoverInput = document.getElementById('second_cover_image');
            const secondCoverPreview = document.getElementById('second_cover-image-preview');

            const enableQuoteCheckbox = document.getElementById('enable_quote');
            const enableSubtitleCheckbox = document.getElementById('enable_subtitle');
            const quoteSection = document.getElementById('quote-section');
            const subtitleSection = document.getElementById('subtitle-section');

            // Borítókép előnézet
            coverInput.addEventListener('change', (e) => {
                const [file] = e.target.files;
                if (file) {
                    coverPreview.src = URL.createObjectURL(file);
                    coverPreview.style.display = 'block';
                }
            });
            secondCoverInput.addEventListener('change', (e) => {
                const [file] = e.target.files;
                if (file) {
                    secondCoverPreview.src = URL.createObjectURL(file);
                    secondCoverPreview.style.display = 'block';
                }
            });

            // Szekciók mutatása
            const toggleSection = (checkbox, section) => {
                section.style.display = checkbox.checked ? 'block' : 'none';
            };
            toggleSection(enableQuoteCheckbox, quoteSection);
            toggleSection(enableSubtitleCheckbox, subtitleSection);

            enableQuoteCheckbox.addEventListener('change', () => toggleSection(enableQuoteCheckbox, quoteSection));
            enableSubtitleCheckbox.addEventListener('change', () => toggleSection(enableSubtitleCheckbox,
                subtitleSection));
        });
    </script>
@endsection
