@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">لیست کامنت‌ها</h1>
    <a href="{{ route('comments.create') }}" class="btn btn-primary mb-3">ایجاد کامنت جدید</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>کاربر</th>
                <th>پست</th>
                <th>محتوا</th>
                <th>تاریخ ایجاد</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comments as $comment)
            <tr>
                <td>{{ $comment->id }}</td>
                <td>{{ $comment->user->name }}</td>
                <td>{{ $comment->post->title }}</td>
                <td>{{ $comment->content }}</td>
                <td>{{ $comment->created_at->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-sm btn-warning">ویرایش</a>
                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="d-inline">
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
