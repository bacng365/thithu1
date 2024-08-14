@extends('layouts.default')

@section('title')
    @parent
    | Chỉnh sửa trò chơi
@endsection

@push('styles')

@endpush


@section('content')
<div class="p-4" style="min-height: 800px;">
    <h3 class="text-primary-emphasis mb-2 fw-bold ps-2">Chỉnh sửa trò chơi</h3>
    <form action="{{ route('games.update', $game) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            Title:
            <input type="text" name="title" class="form-control" value="{{ $game->title }}">
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            Cover art:
            <br><img src="{{ Storage::url($game->cover_art) }}" alt="" width="100px">
            <input type="file" name="cover_art" class="form-control">
        </div>
        <div class="mb-3">
            Developer:
            <input type="text" name="developer" class="form-control" value="{{ $game->developer }}">
            @error('developer')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            Release year:
            <input type="text" name="release_year" class="form-control" value="{{ $game->release_year }}">
            @error('release_year')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            Genre:
            <input type="text" name="genre" class="form-control" value="{{ $game->genre }}">
            @error('genre')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-warning">Cập nhật</button>
        </div>
    </form>
</div>
@endsection


@push('scripts')

@endpush
