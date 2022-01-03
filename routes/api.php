<?php

use App\Http\Controllers\ChapterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ImageCourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\MyCourseController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::apiResource('mentors', MentorController::class);
Route::apiResource('courses', CourseController::class);
Route::apiResource('chapters', ChapterController::class);
Route::apiResource('lessons', LessonController::class);
Route::apiResource('image-courses', ImageCourseController::class);
Route::apiResource('my-courses', MyCourseController::class);
Route::apiResource('reviews', ReviewController::class);