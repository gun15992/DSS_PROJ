@extends('layouts.titlebar')

@section('title', 'DSS Login')

@vite('resources/js/app.js')

<link rel="icon" type="image/x-icon" href="logo.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">

<style>
    * {
        font-family: "Noto Sans Thai", sans-serif;
    }
</style>

<div class="container mt-5" style="text-align:center;">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <p style="text-align:center;">
                        <img src="logo.png" width="54" height="54" class="img-fluid" style="margin-right:10px;"> DSS Login
                    </p>
                    <form id="loginForm">
                        <div class="mb-4">
                            <label for="username" class="form-label visually-hidden">Username</label>
                            <input type="text" id="username" class="form-control" placeholder="ชื่อผู้ใช้งาน" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label visually-hidden">Password</label>
                            <input type="password" id="password" class="form-control" placeholder="รหัสผ่าน" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">เข้าสู่ระบบ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>