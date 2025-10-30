@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">لیست پست‌ها</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">ایجاد پست جدید</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>عنوان</th>
                <th>کاربر</th>
                <th>تعداد کامنت‌ها</th>
                <th>تاریخ ایجاد</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->user->name }}</td>
                <td>{{ $post->comments->count() }}</td>
                <td>{{ $post->created_at->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">ویرایش</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('آیا مطمئن هستید؟')">حذف</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
