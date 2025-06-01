@extends('admin.main')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Új termék hozzáadása</a>
    <table class="table">
        <thead>
            <tr>
                <th>Név</th>
                <th>Leírás</th>
                <th>Ár</th>
                <th>Akció</th>
                <th>Kép</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{!! $product->description !!}</td>
                    <td>{{ $product->price }}</td>
                    @if ($product->discountPrice)
                        <td>{{ $product->discountPrice }}</td>
                    @else
                        <td>Nincs akciós ár</td>
                    @endif
                    <td>
                        @if ($product->image)
                            <img src="{{ asset('assets/images/gallery/product/' . $product->image) }}" alt="{{ $product->name }}"
                                style="max-width: 100px; max-height: 100px;">
                        @else
                            Nincs kép
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning">Szerkesztés</a>
                    <td>
                        <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="d-inline">
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
