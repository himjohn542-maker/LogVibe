<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogVibe – Log it. Share it. Feel the vibe.</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --deep-night: #0F172A;
            --vibe-purple: #7C3AED;
            --soft-lavender: #A78BFA;
            --vibe-pink: #F472B6;
            --light-lilac: #EDE9FE;
            --clean-white: #F8FAFC;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--deep-night);
            color: var(--clean-white);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ========== NAVBAR ========== */
        .navbar-logvibe {
            background-color: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(124, 58, 237, 0.25);
            padding: 0.85rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            font-weight: 700;
            font-size: 1.45rem;
            color: var(--clean-white) !important;
            text-decoration: none;
        }

        .logo-icon {
            width: 36px;
            height: 36px;
            background: linear-gradient(135deg, var(--vibe-purple), var(--soft-lavender));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .logo-icon::before {
            content: "";
            width: 18px;
            height: 12px;
            border: 2.5px solid white;
            border-radius: 3px 3px 0 0;
            border-bottom: none;
            position: absolute;
            top: 9px;
        }

        .logo-icon::after {
            content: "";
            width: 0;
            height: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-top: 7px solid white;
            position: absolute;
            bottom: 7px;
            left: 50%;
            transform: translateX(-50%);
        }

        .nav-link-logvibe {
            color: rgba(248, 250, 252, 0.75) !important;
            font-weight: 500;
            font-size: 0.95rem;
            margin-left: 0.5rem;
            transition: color 0.2s ease;
        }

        .nav-link-logvibe:hover,
        .nav-link-logvibe.active {
            color: var(--soft-lavender) !important;
        }

        .btn-create {
            background: linear-gradient(135deg, var(--vibe-purple));
            border: none;
            color: white;
            font-weight: 600;
            padding: 0.45rem 1.1rem;
            border-radius: 50px;
            font-size: 0.9rem;
            transition: all 0.25s ease;
        }

        .btn-create:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(124, 58, 237, 0.4);
            color: white;
        }
        .btn-create:after {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(124, 58, 237, 0.4);
            color: white;
        }

        /* ========== MAIN CONTENT ========== */
        .main-content {
            flex: 1;
            width: 100%;
        }

        /* ========== FOOTER ========== */
        .footer-logvibe {
            background-color: rgba(15, 23, 42, 0.9);
            border-top: 1px solid rgba(124, 58, 237, 0.2);
            padding: 2.5rem 0 1.5rem;
            margin-top: auto;
        }

        .footer-brand {
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--clean-white);
            margin-bottom: 0.5rem;
        }

        .footer-tagline {
            color: rgba(248, 250, 252, 0.55);
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
        }

        .footer-links a {
            color: rgba(248, 250, 252, 0.65);
            text-decoration: none;
            font-size: 0.9rem;
            margin-right: 1.5rem;
            transition: color 0.2s ease;
        }

        .footer-links a:hover {
            color: var(--soft-lavender);
        }

        .footer-bottom {
            border-top: 1px solid rgba(124, 58, 237, 0.15);
            margin-top: 1.75rem;
            padding-top: 1.25rem;
            font-size: 0.85rem;
            color: rgba(248, 250, 252, 0.45);
        }

        /* Responsive tweaks */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background-color: var(--deep-night);
                padding: 1rem;
                border-radius: 12px;
                margin-top: 0.75rem;
                border: 1px solid rgba(124, 58, 237, 0.2);
            }
        }
        /* ========== HERO SECTION ========== */
.hero-section {
    background-color: #0F172A;
    height: 85vh;
    display: flex;
    align-items: center;
    color: #F8FAFC;
}

.hero-title {
    font-size: 2.8rem;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 1rem;
}

.hero-text {
    font-size: 1.1rem;
    color: #A78BFA;
    margin-bottom: 2rem;
    max-width: 400px;
}

.hero-btn {
    background-color: var(--vibe-purple);
    color: white;
    padding: 12px 28px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    display: inline-block;
    border: none;
}

.hero-btn:hover {
    opacity: 0.9;
    color: white;
}

/* Post Card */
.hero-card {
    background-color: #1E293B;
    border: 1px solid #7C3AED;
    border-radius: 16px;
    padding: 20px;
    max-width: 360px;
    margin-left: auto;
}

.card-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
}

.avatar {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #7C3AED, #A78BFA);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 14px;
}

.time {
    font-size: 13px;
    color: #94A3B8;
}

.card-text {
    font-size: 15px;
    margin-bottom: 12px;
}

.card-image {
    width: 100%;
    border-radius: 12px;
    display: block;
}

/* Mobile */
@media (max-width: 991px) {
    .hero-section {
        height: auto;
        padding: 60px 0;
        text-align: center;
    }

    .hero-title {
        font-size: 2.2rem;
    }

    .hero-card {
        margin: 40px auto 0;
    }
}

/* REGISTERATION PAGE STYLING */

/* ========== REGISTER PAGE ========== */
.register-page {
    min-height: 100vh;
    background-color: #0F172A;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.register-container {
    display: flex;
    width: 100%;
    max-width: 1000px;
    background-color: #1E293B;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

/* Left Side */
.register-left {
    width: 45%;
    background: linear-gradient(135deg, #7C3AED, #A78BFA, #F472B6);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px;
}

.left-content h1 {
    color: white;
    font-size: 2.2rem;
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 15px;
}

.left-content p {
    color: rgba(255, 255, 255, 0.9);
    font-size: 1.05rem;
    line-height: 1.6;
}

/* Right Side */
.register-right {
    width: 55%;
    padding: 50px 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.form-box {
    width: 100%;
    max-width: 380px;
}

.form-box h2 {
    color: #F8FAFC;
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 8px;
}

.form-subtitle {
    color: #94A3B8;
    margin-bottom: 30px;
    font-size: 0.95rem;
}

.form-row {
    display: flex;
    gap: 15px;
}

.form-group {
    margin-bottom: 18px;
    flex: 1;
}

.form-group label {
    display: block;
    color: #E2E8F0;
    font-size: 0.9rem;
    margin-bottom: 6px;
    font-weight: 500;
}

.form-group input {
    width: 100%;
    padding: 12px 14px;
    background-color: #0F172A;
    border: 1px solid #334155;
    border-radius: 10px;
    color: #F8FAFC;
    font-size: 0.95rem;
    outline: none;
    transition: border-color 0.2s;
}

.form-group input:focus {
    border-color: #7C3AED;
}

.form-group input::placeholder {
    color: #64748B;
}

.btn-register {
    width: 100%;
    padding: 14px;
    background: linear-gradient(135deg, #7C3AED, #F472B6);
    border: none;
    border-radius: 10px;
    color: white;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    margin-top: 10px;
    transition: opacity 0.2s;
}

.btn-register:hover {
    opacity: 0.9;
}

.login-link {
    text-align: center;
    margin-top: 25px;
    color: #94A3B8;
    font-size: 0.9rem;
}

.login-link a {
    color: #A78BFA;
    text-decoration: none;
    font-weight: 500;
}

.login-link a:hover {
    text-decoration: underline;
}

/* Mobile */
@media (max-width: 768px) {
    .register-container {
        flex-direction: column;
    }

    .register-left,
    .register-right {
        width: 100%;
    }

    .register-left {
        padding: 40px 30px;
        text-align: center;
    }

    .register-right {
        padding: 40px 25px;
    }

    .form-row {
        flex-direction: column;
        gap: 0;
    }
}

/* LOGIN PAGE STYLES */

/* ========== LOGIN PAGE ========== */
.login-page {
    min-height: 100vh;
    background-color: #0F172A;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.login-container {
    display: flex;
    width: 100%;
    max-width: 1000px;
    background-color: #1E293B;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

/* Left Side */
.login-left {
    width: 45%;
    background: linear-gradient(135deg, #7C3AED, #A78BFA, #F472B6);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px;
}

.left-content h1 {
    color: white;
    font-size: 2.2rem;
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 15px;
}

.left-content p {
    color: rgba(255, 255, 255, 0.9);
    font-size: 1.05rem;
    line-height: 1.6;
}

/* Right Side */
.login-right {
    width: 55%;
    padding: 50px 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.form-box {
    width: 100%;
    max-width: 380px;
}

.form-box h2 {
    color: #F8FAFC;
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 8px;
}

.form-subtitle {
    color: #94A3B8;
    margin-bottom: 30px;
    font-size: 0.95rem;
}

.form-group {
    margin-bottom: 18px;
}

.form-group label {
    display: block;
    color: #E2E8F0;
    font-size: 0.9rem;
    margin-bottom: 6px;
    font-weight: 500;
}

.form-group input {
    width: 100%;
    padding: 12px 14px;
    background-color: #0F172A;
    border: 1px solid #334155;
    border-radius: 10px;
    color: #F8FAFC;
    font-size: 0.95rem;
    outline: none;
    transition: border-color 0.2s;
}

.form-group input:focus {
    border-color: #7C3AED;
}

.form-group input::placeholder {
    color: #64748B;
}

.forgot-password {
    text-align: right;
    margin-bottom: 20px;
}

.forgot-password a {
    color: #A78BFA;
    font-size: 0.9rem;
    text-decoration: none;
}

.forgot-password a:hover {
    text-decoration: underline;
}

.btn-login {
    width: 100%;
    padding: 14px;
    background: linear-gradient(135deg, #7C3AED, #F472B6);
    border: none;
    border-radius: 10px;
    color: white;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: opacity 0.2s;
}

.btn-login:hover {
    opacity: 0.9;
}

.register-link {
    text-align: center;
    margin-top: 25px;
    color: #94A3B8;
    font-size: 0.9rem;
}

.register-link a {
    color: #A78BFA;
    text-decoration: none;
    font-weight: 500;
}

.register-link a:hover {
    text-decoration: underline;
}

/* Mobile */
@media (max-width: 768px) {
    .login-container {
        flex-direction: column;
    }

    .login-left,
    .login-right {
        width: 100%;
    }

    .login-left {
        padding: 40px 30px;
        text-align: center;
    }

    .login-right {
        padding: 40px 25px;
    }
}

/* ========== LOGOUT BUTTON ========== */
.btn-logout {
    background-color: transparent;
    border: 1px solid #7C3AED;
    color: #A78BFA;
    padding: 6px 16px;
    border-radius: 8px;
    font-size: 0.9rem;
    font-weight: 500;
    transition: all 0.2s ease;
}

.btn-logout:hover {
    background-color: #7C3AED;
    color: white;
    border-color: #7C3AED;
}

/* PROFILE STLYLE SECTION */

/* ========== PROFILE PAGE ========== */
.profile-page {
    background-color: #0F172A;
    min-height: 100vh;
    padding: 40px 0 60px;
    color: #F8FAFC;
}

/* Profile Header */
.profile-header {
    background-color: #1E293B;
    border: 1px solid #334155;
    border-radius: 16px;
    padding: 30px;
    display: flex;
    gap: 25px;
    align-items: center;
    margin-bottom: 40px;
}

.profile-avatar {
    width: 100px;
    height: 100px;
    background: linear-gradient(135deg, #7C3AED, #A78BFA);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    font-weight: 700;
    color: white;
    flex-shrink: 0;
}

.profile-name {
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 4px;
}

.profile-email {
    color: #94A3B8;
    font-size: 0.95rem;
    margin-bottom: 10px;
}

.profile-bio {
    color: #CBD5E1;
    font-size: 1rem;
    margin-bottom: 12px;
    max-width: 500px;
}

.profile-meta {
    color: #94A3B8;
    font-size: 0.9rem;
    margin-bottom: 18px;
    display: flex;
    gap: 8px;
}

.btn-edit-profile {
    display: inline-block;
    background-color: transparent;
    border: 1px solid #7C3AED;
    color: #A78BFA;
    padding: 8px 18px;
    border-radius: 8px;
    font-size: 0.9rem;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.2s ease;
}

.btn-edit-profile:hover {
    background-color: #7C3AED;
    color: white;
}

/* Posts Section */
.section-title {
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 20px;
    color: #E2E8F0;
}

.post-card {
    background-color: #1E293B;
    border: 1px solid #334155;
    border-radius: 14px;
    padding: 20px;
    margin-bottom: 16px;
}

.post-header {
    margin-bottom: 12px;
}

.post-user {
    display: flex;
    align-items: center;
    gap: 12px;
}

.post-avatar {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #7C3AED, #A78BFA);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    font-size: 0.9rem;
}

.post-time {
    font-size: 0.85rem;
    color: #94A3B8;
}

.post-content {
    color: #E2E8F0;
    font-size: 0.95rem;
    line-height: 1.6;
}

/* Mobile */
@media (max-width: 768px) {
    .profile-header {
        flex-direction: column;
        text-align: center;
    }

    .profile-meta {
        justify-content: center;
    }
}

/* HR STYLE */

.hr-about {
        width: 100px;
        height: 2px;
        background-color: var(--soft-lavender);
        border: none;
        margin: 30px auto;
}

/* ========== EDIT PROFILE PAGE ========== */
.edit-profile-page {
    background-color: #0F172A;
    min-height: 100vh;
    padding: 50px 0;
    color: #F8FAFC;
}

.edit-box {
    max-width: 560px;
    margin: 0 auto;
    background-color: #1E293B;
    border: 1px solid #334155;
    border-radius: 16px;
    padding: 35px;
}

.page-title {
    font-size: 1.7rem;
    font-weight: 700;
    margin-bottom: 6px;
}

.page-subtitle {
    color: #94A3B8;
    font-size: 0.95rem;
    margin-bottom: 30px;
}

.form-row {
    display: flex;
    gap: 15px;
}

.form-group {
    margin-bottom: 18px;
    flex: 1;
}

.form-group label {
    display: block;
    color: #E2E8F0;
    font-size: 0.9rem;
    margin-bottom: 6px;
    font-weight: 500;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 12px 14px;
    background-color: #0F172A;
    border: 1px solid #334155;
    border-radius: 10px;
    color: #F8FAFC;
    font-size: 0.95rem;
    outline: none;
    transition: border-color 0.2s;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: #7C3AED;
}

.form-group textarea {
    resize: vertical;
    min-height: 100px;
}

.section-divider {
    border: none;
    border-top: 1px solid #334155;
    margin: 30px 0 20px;
}

.section-title {
    font-size: 1.15rem;
    font-weight: 600;
    margin-bottom: 4px;
}

.section-note {
    color: #94A3B8;
    font-size: 0.85rem;
    margin-bottom: 20px;
}

.form-actions {
    display: flex;
    gap: 12px;
    margin-top: 25px;
}

.btn-save {
    background-color: #7C3AED;
    color: white;
    border: none;
    padding: 12px 24px;
    border-radius: 10px;
    font-weight: 600;
    font-size: 0.95rem;
    cursor: pointer;
    transition: background-color 0.2s;
}

.btn-save:hover {
    background-color: #6D28D9;
}

.btn-cancel {
    background-color: transparent;
    color: #94A3B8;
    border: 1px solid #334155;
    padding: 12px 24px;
    border-radius: 10px;
    font-weight: 500;
    font-size: 0.95rem;
    text-decoration: none;
    display: inline-block;
    transition: all 0.2s;
}

.btn-cancel:hover {
    border-color: #64748B;
    color: #E2E8F0;
}

/* Mobile */
@media (max-width: 576px) {
    .form-row {
        flex-direction: column;
        gap: 0;
    }

    .edit-box {
        padding: 25px 20px;
    }

    .form-actions {
        flex-direction: column;
    }

    /* FEED STYLE */
    .feed-section {
    padding: 40px 0;
    min-height: 80vh;
    background-color: #0F172A;
    color: #F8FAFC;
}

.feed-title {
    text-align: center;
    margin-bottom: 30px;
    font-size: 1.8rem;
}

.post-card {
    background-color: #1E293B;
    border: 1px solid #334155;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 16px;
}

.post-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.post-time {
    color: #94A3B8;
    font-size: 0.85rem;
}

.post-content {
    font-size: 1rem;
    line-height: 1.6;
    color: #E2E8F0;
}

.no-posts {
    text-align: center;
    color: #94A3B8;
    margin-top: 40px;
}

/* CREATE STYLE */
.create-post-page {
    min-height: 100vh;
    background-color: #0F172A;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px 20px;
}

.create-box {
    width: 100%;
    max-width: 580px;
    background-color: #1E293B;
    border: 1px solid #334155;
    border-radius: 12px;
    padding: 32px;
}

.create-box h1 {
    font-size: 1.5rem;
    color: #F8FAFC;
    margin-bottom: 6px;
}

.subtitle {
    color: #94A3B8;
    font-size: 0.95rem;
    margin-bottom: 28px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    color: #E2E8F0;
    font-size: 0.9rem;
    margin-bottom: 6px;
    font-weight: 500;
}

.form-group input[type="text"],
.form-group textarea,
.form-group input[type="file"] {
    width: 100%;
    padding: 12px 14px;
    background-color: #0F172A;
    border: 1px solid #334155;
    border-radius: 8px;
    color: #F8FAFC;
    font-size: 0.95rem;
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #7C3AED;
}

.form-group textarea {
    resize: vertical;
}

.btn-submit {
    width: 100%;
    background-color: #7C3AED;
    color: white;
    border: none;
    padding: 13px;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    margin-top: 10px;
}

.btn-submit:hover {
    background-color: #6D28D9;
}
}
    </style>
</head>
<body>

    <!-- ========== GUEST NAVBAR ========== -->
    @guest
    <nav class="navbar navbar-expand-lg navbar-logvibe">
        <div class="container">
            <a class="navbar-brand" href="/">
                <div class="logo-icon"></div>
                <span>Log<span style="color: var(--soft-lavender)">Vibe</span></span>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link nav-link-logvibe active" href="{{ route('showRegisterPage') }}">Feed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-logvibe" href="{{ route('showRegisterPage') }}">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-logvibe" href="{{ route('showRegisterPage') }}">Profile</a>
                    </li>
                    
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a href="{{route('showRegisterPage')}}" class="btn btn-create">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @endguest

    <!-- ========== AUTH NAVBAR ========== -->
    @auth

    <nav class="navbar navbar-expand-lg navbar-logvibe">
        <div class="container">
            <a class="navbar-brand" href="/">
                <div class="logo-icon"></div>
                <span>Log<span style="color: var(--soft-lavender)">Vibe</span></span>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link nav-link-logvibe active" href="{{ route('homePage') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-logvibe" href="{{ route('post.index') }}">Feed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-logvibe" href="/explore">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-logvibe" href="{{ route('profile.index') }}">Profile</a>
                    </li>
                    <form method="POST" action="{{ route('logout.user') }}">
                        @csrf
                        <li class="nav-item">
                            <button class="btn btn-logout" type="submit">
                                Logout
                            </button>
                        </li>
                    </form>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a href="{{route('post.create')}}" class="btn btn-create">+ Create</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @endauth

    <!-- ========== MAIN CONTENT AREA ========== -->
    <main class="main-content">
        
        {{ $slot }}
    </main>

    <!-- ========== FOOTER ========== -->
    <footer class="footer-logvibe">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="footer-brand">Log<span style="color: var(--soft-lavender)">Vibe</span></div>
                    <p class="footer-tagline">Log it. Share it. Feel the vibe.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="footer-links">
                        <a href="/about">About</a>
                        <a href="/privacy">Privacy</a>
                        <a href="/terms">Terms</a>
                        <a href="/contact">Contact</a>
                        <a href="/help">Help</a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom text-center text-md-start">
                &copy; 2026 LogVibe. All rights reserved. Made with good vibes.
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>