@extends('layouts.default')

@section('title')
    @parent
    | Danh sách trò chơi
@endsection

@push('styles')
@endpush


@section('content')
    <div class="p-4" style="min-height: 800px;">
        <h3 class="text-primary-emphasis mb-2 fw-bold ps-2">Danh sách trò chơi</h3>
        <div class="text-end">
            <a href="{{ route('games.create') }}" class="btn btn-primary">Thêm mới</a>
        </div>
        <table class="table table-bordered align-middle text-center mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Cover art</th>
                    <th scope="col">Developer</th>
                    <th scope="col">Release year</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($games as $key => $game)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $game->title }}</td>
                        <td>
                            <img src="{{ Storage::url($game->cover_art) }}" alt="" width="100px">
                        </td>
                        <td>{{ $game->developer }}</td>
                        <td>{{ $game->release_year }}</td>
                        <td>{{ $game->genre }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('games.edit', $game) }}" class="btn btn-warning me-1">Sửa</a>
                                <form action="{{ route('games.destroy', $game) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                        onclick="confirm('Bạn có chắc chắn muốn xóa sản phẩm không?')">Xóa</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


@push('scripts')
@endpush
