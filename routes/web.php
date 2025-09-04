<?php

use Illuminate\Support\Facades\Route;

// Archive routes using Statamic 5 native routing
// Teachers routes  
Route::statamic('teachers/{teacher}/{year}/{month}', 'teachers.archive');
Route::statamic('teachers/{teacher}/{year}', 'teachers.archive');

// Students routes
Route::statamic('students/{student}/{year}/{month}', 'students.archive');
Route::statamic('students/{student}/{year}', 'students.archive');

// Subjects routes
Route::statamic('subjects/{subject}/{year}/{month}', 'subjects.archive');
Route::statamic('subjects/{subject}/{year}', 'subjects.archive');
