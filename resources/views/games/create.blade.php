@extends('layouts.default')

@section('title')
    @parent
    | Thêm mới trò chơi
@endsection

@push('styles')

@endpush


@section('content')
<div class="p-4" style="min-height: 800px;">
    <h3 class="text-primary-emphasis mb-2 fw-bold ps-2">Thêm mới trò chơi</h3>
    <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            Title:
            <input type="text" name="title" class="form-control">
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            Cover art:
            <input type="file" name="cover_art" class="form-control">
            @error('cover_art')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            Developer:
            <input type="text" name="developer" class="form-control">
            @error('developer')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            Release year:
            <input type="text" name="release_year" class="form-control">
            @error('release_year')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            Genre:
            <input type="text" name="genre" class="form-control">
            @error('genre')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-success">Thêm mới</button>
        </div>
    </form>
</div>
@endsection


@push('scripts')

@endpush
