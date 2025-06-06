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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Karbantartás</h4>
                    </div>
                    <div class="card-body d-flex gap-2">
                        @if (app()->isDownForMaintenance())
                            <form method="POST" action="{{ url('/admin/maintenance/off') }}">
                                @csrf
                                <button type="submit" class="btn btn-success">Karbantartás kikapcsolása</button>
                            </form>
                        @else
                            <form method="POST" action="{{ url('/admin/maintenance/on') }}">
                                @csrf
                                <button type="submit" class="btn btn-warning">Karbantartás bekapcsolása</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
