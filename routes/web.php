<?php

use App\Http\Resources\CommentResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/users/{posts_limit}', function () {
    return UserResource::collection(User::where('is_active', true)->orderBy('created_at', 'desc')->get());
});

Route::get('/comments/{user_id}', function ($userId) {
    return CommentResource::collection(\App\Models\Comment::with(['author', 'post'])->orderBy('created_at', 'desc')->get());
});
