@extends('admin.main')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">Új blog írása</a>
    <table class="table">
        <thead>
            <tr>
                <th>Cím</th>
                <th>Leírás</th>
                @php
                    $hasQuote = $blogs->contains(function ($blog) {
                        return !empty($blog->quote);
                    });
                @endphp
                @if ($hasQuote)
                    <th>Idézet szövege</th>
                    <th>Idézet szerzője és titulusa</th>
                @endif
                <th>Kép</th>
                <th>Publikált</th>
                <th>Megtekintések</th>
                <th>Utoljára frissítve</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
                    <td>{!! \Illuminate\Support\Str::limit(strip_tags($blog->content), 400, '...') !!}</td>
                    @if ($hasQuote)
                        <td>{!! $blog->quote !!}</td>
                        <td>{{ $blog->quote_author }}, {{ $blog->quote_title }}</td>
                    @endif
                    <td>
                        @if ($blog->cover_image)
                            <img src="{{ asset('assets/images/gallery/blog/' . $blog->cover_image) }}"
                                alt="{{ $blog->title }}" style="max-width: 100px; max-height: 100px;">
                        @else
                            Nincs kép
                        @endif
                    </td>
                    <td>{{ $blog->is_published ? 'Igen' : 'Nem' }}</td>
                    <td>{{ $blog->views }}</td>
                    <td>{{ $blog->updated_at->format('F d. H:i') }}</td>
                    <td> <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-warning">Szerkesztés</a></td>
                    <td>
                        <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Biztos törölni akarod?')">Törlés</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
