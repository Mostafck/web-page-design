@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">لیست کاربران</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">ایجاد کاربر جدید</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>نام</th>
                <th>ایمیل</th>
                <th>تعداد پست‌ها</th>
                <th>تعداد کامنت‌ها</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->posts->count() }}</td>
                <td>{{ $user->comments->count() }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning">ویرایش</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
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
