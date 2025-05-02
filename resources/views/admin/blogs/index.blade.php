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
                <th>URL-Cím</th>
                <th>Leírás</th>
                <th>Idézet szövege</th>
                <th>Idézet szerzője és titulusa</th>
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
                    <td>{{ $blog->slug }}</td>
                    <td>{!! $blog->content !!}</td>
                    <td>{!! $blog->quote !!}</td>
                    <td>{{ $blog->quote_author }}, {{ $blog->quote_title }}</td>
                    <td>{{ $blog->cover_image }}</td>
                    <td>{{ $blog->is_published }}</td>
                    <td>{{ $blog->views }}</td>
                    <td>{{ $blog->updated_at->format('F d. H:i') }}</td>
                    <td>  <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-warning">Szerkesztés</a></td>
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
