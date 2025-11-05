<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compléter mon profil - EduBenin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #0351BC;
            --primary-light: #4a7fd4;
            --primary-dark: #023a8a;
            --white: #ffffff;
            --light-gray: #f8fafc;
            --medium-gray: #e2e8f0;
            --dark-gray: #64748b;
            --text-dark: #1e293b;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #2a819b 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            padding: 0;
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('{{ asset('images/image_4.webp') }}');
            background-size: cover;

        }

        /* Navigation Styles */
        .sidebar {
            width: 280px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            border-right: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .sidebar-header {
            padding: 30px 25px;
            border-bottom: 1px solid var(--medium-gray);
            text-align: center;
        }

        .platform-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-bottom: 15px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: bold;
            font-size: 18px;
        }

        .platform-name {
            font-size: 22px;
            font-weight: 700;
            color: var(--primary-color);
        }

        .platform-tagline {
            font-size: 12px;
            color: var(--dark-gray);
            margin-bottom: 20px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 15px;
            background: var(--light-gray);
            border-radius: 12px;
            margin-top: 15px;
        }

        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: var(--primary-color);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 16px;
        }

        .user-details h4 {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-dark);
        }

        .user-details p {
            font-size: 12px;
            color: var(--dark-gray);
        }

        .sidebar-stats {
            padding: 20px 25px;
            border-bottom: 1px solid var(--medium-gray);
        }

        .stat-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }

        .stat-item:last-child {
            margin-bottom: 0;
        }

        .stat-label {
            font-size: 13px;
            color: var(--dark-gray);
        }

        .stat-value {
            font-size: 14px;
            font-weight: 600;
            color: var(--primary-color);
        }

        .sidebar-menu {
            padding: 20px 0;
        }

        .menu-item {
            padding: 15px 25px;
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            color: var(--dark-gray);
            text-decoration: none;
        }

        .menu-item:hover,
        .menu-item.active {
            background: var(--primary-light);
            color: var(--white);
            border-right: 3px solid var(--primary-color);
        }

        .menu-item i {
            width: 20px;
            text-align: center;
            font-size: 16px;
        }

        .menu-text {
            font-size: 14px;
            font-weight: 500;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: 280px;
            padding: 30px;
            min-height: 100vh;
        }

        .profile-edit-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .profile-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
            color: var(--white);
            padding: 30px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .profile-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
        }

        .profile-header h1 {
            font-size: 28px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            position: relative;
            z-index: 1;
        }

        .profile-header p {
            font-size: 14px;
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }

        /* Profile Banner */
        .profile-banner {
            background: var(--white);
            border-radius: 15px;
            padding: 25px;
            margin: 25px 40px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            border-left: 4px solid var(--primary-color);
        }

        .profile-banner-content {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .profile-banner-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
            color: var(--white);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .profile-banner-text {
            flex: 1;
        }

        .profile-banner-text h3 {
            color: var(--primary-color);
            margin-bottom: 8px;
            font-size: 18px;
        }

        .profile-banner-text p {
            color: var(--dark-gray);
            margin-bottom: 15px;
            font-size: 14px;
        }

        .progress-bar {
            background: var(--medium-gray);
            border-radius: 10px;
            height: 12px;
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .progress-bar-fill {
            background: linear-gradient(90deg, var(--success) 0%, #4caf50 100%);
            height: 100%;
            border-radius: 10px;
            transition: width 0.5s ease;
            position: relative;
            overflow: hidden;
        }

        .progress-bar-fill::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% {
                left: -100%;
            }

            100% {
                left: 100%;
            }
        }

        .progress-text {
            text-align: center;
            font-size: 12px;
            color: var(--dark-gray);
            margin-top: 8px;
            font-weight: 500;
        }

        /* Form Styles */
        .profile-form {
            padding: 0 40px 40px;
        }

        .form-section {
            margin-bottom: 25px;
            padding: 25px;
            border: 1px solid var(--medium-gray);
            border-radius: 16px;
            background: var(--white);
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .form-section:hover {
            border-color: var(--primary-light);
            box-shadow: 0 6px 20px rgba(3, 81, 188, 0.1);
        }

        .form-section h2 {
            color: var(--primary-color);
            margin-bottom: 20px;
            font-size: 18px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
        }

        .form-section h2 i {
            font-size: 18px;
            width: 24px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text-dark);
            font-size: 14px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid var(--medium-gray);
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: var(--white);
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(3, 81, 188, 0.1);
        }

        .radio-group {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 12px;
            margin-top: 8px;
        }

        .radio-option {
            position: relative;
        }

        .radio-option input {
            position: absolute;
            opacity: 0;
        }

        .radio-label {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 16px 12px;
            border: 2px solid var(--medium-gray);
            border-radius: 10px;
            background: var(--white);
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
        }

        .radio-label:hover {
            border-color: var(--primary-light);
        }

        .radio-option input:checked+.radio-label {
            border-color: var(--primary-color);
            background: var(--primary-color);
            color: var(--white);
            box-shadow: 0 4px 12px rgba(3, 81, 188, 0.2);
        }

        .radio-icon {
            font-size: 20px;
            margin-bottom: 8px;
        }

        .radio-text {
            font-weight: 500;
            font-size: 13px;
        }

        .file-upload {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .file-upload-label {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 16px;
            border: 2px dashed var(--medium-gray);
            border-radius: 10px;
            background: var(--white);
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            justify-content: center;
            font-size: 14px;
        }

        .file-upload-label:hover {
            border-color: var(--primary-color);
            background: var(--light-gray);
        }

        .file-upload-label i {
            color: var(--primary-color);
            font-size: 18px;
        }

        .current-photo {
            margin-top: 12px;
            text-align: center;
        }

        .current-photo img {
            border: 2px solid var(--primary-color);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 10px;
        }

        .form-actions {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid var(--medium-gray);
        }

        .btn-submit {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
            color: var(--white);
            padding: 14px 32px;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(3, 81, 188, 0.3);
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(3, 81, 188, 0.4);
        }

        .btn-cancel {
            background: var(--white);
            color: var(--dark-gray);
            padding: 14px 32px;
            border: 2px solid var(--medium-gray);
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            font-size: 15px;
        }

        .btn-cancel:hover {
            background: var(--light-gray);
            border-color: var(--dark-gray);
            transform: translateY(-2px);
        }

        .error {
            color: var(--danger);
            font-size: 12px;
            margin-top: 6px;
            display: block;
            font-weight: 500;
        }

        .success-message {
            background: var(--success);
            color: var(--white);
            padding: 12px 16px;
            border-radius: 10px;
            margin: 20px 40px;
            text-align: center;
            font-weight: 500;
            font-size: 14px;
        }

        @media (max-width: 1024px) {
            .sidebar {
                width: 250px;
            }

            .main-content {
                margin-left: 250px;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
                padding: 20px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-actions {
                flex-direction: column;
            }

            .radio-group {
                grid-template-columns: 1fr;
            }

            .profile-header,
            .profile-form {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
         <a href="{{ route('dashboardUser') }}" style="text-decoration: none;">
    <div class="platform-logo" style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
        <div class="logo-icon" style="background-color: #3948c9; color: white; padding: 10px; border-radius: 6px; font-weight: bold;">
            EB
        </div>
        <div class="platform-name" style="font-size: 1.2em; font-weight: bold; color: #333;">
            EduBenin
        </div>
    </div>
</a>

            <div class="platform-tagline">Votre plateforme éducative au Bénin</div>

            <div class="user-info">
                <div class="user-avatar">
                    {{ strtoupper(substr($user->firstname, 0, 1) . substr($user->lastname, 0, 1)) }}
                </div>
                <div class="user-details">
                    <h4>{{ $user->firstname }} {{ $user->lastname }}</h4>
                    <p>
                        @if ($user->role_id == 3)
                            Tuteur
                        @elseif($user->role_id == 2)
                            Étudiant
                        @else
                            Administrateur
                        @endif
                    </p>
                </div>
            </div>
        </div>

        <div class="sidebar-stats">
            <div class="stat-item">
                <span class="stat-label">Profil complété</span>
                <span class="stat-value">{{ $profileCompletion }}%</span>
            </div>



            <div
                style="margin: 20px 0; padding: 15px; border-radius: 8px; text-align: center; font-family: Arial, sans-serif;">
                @if ($profileCompletion < 100)
                    <div
                        style="background-color: #f8d7da; color: #721c24; padding: 12px 20px; border-radius: 8px; margin-bottom: 10px;">
                        Profil invalide : complétez toutes vos informations !
                    </div>

                @else
                    <div
                        style="background-color: #d4edda; color: #155724; padding: 12px 20px; border-radius: 8px; margin-bottom: 10px;">
                        Profil complet !
                    </div>

                @endif
            </div>


        </div>

        <div class="sidebar-menu">
            <a href="{{ route('dashboardUser') }}" class="menu-item">
                <i class="fas fa-home"></i>
                <span class="menu-text">Tableau de bord</span>
            </a>
            <a href="#" class="menu-item active">
                <i class="fas fa-user-edit"></i>
                <span class="menu-text">Mon profil</span>
            </a>
            
            <a href="#" class="menu-item">
                <i class="fas fa-question-circle"></i>
                <span class="menu-text">Aide & Support</span>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="profile-edit-container">
            <div class="profile-header">
                <h1><i class="fas fa-user-edit"></i> Compléter mon profil</h1>
                <p>Optimisez votre expérience en complétant vos informations</p>
            </div>

            <!-- Profile Completion Banner -->
            <div class="profile-banner">
                <div class="profile-banner-content">
                    <div class="profile-banner-icon">
                        <i class="fas fa-user-edit"></i>
                    </div>
                    <div class="profile-banner-text">
                        <h3>Complétez votre profil</h3>
                        <p>Votre profil est complété à {{ $profileCompletion }}%. Ajoutez plus d'informations pour
                            améliorer votre visibilité.</p>
                        <div class="progress-bar">
                            <div class="progress-bar-fill" style="width: {{ $profileCompletion }}%;"></div>
                        </div>
                        <div class="progress-text">{{ $profileCompletion }}% complété</div>
                    </div>
                </div>
            </div>

            @if (session('success'))
                <div class="success-message">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('CompleterProfilUser.update') }}" method="POST" enctype="multipart/form-data"
                class="profile-form">
                @csrf

                <div class="form-section">
                    <h2><i class="fas fa-user"></i> Informations personnelles</h2>

                    <div class="form-grid">
                        <div class="form-group">
                            <label for="firstname">Prénom *</label>
                            <input type="text" id="firstname" name="firstname"
                                value="{{ old('firstname', $user->firstname) }}" required>
                            @error('firstname')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="lastname">Nom *</label>
                            <input type="text" id="lastname" name="lastname"
                                value="{{ old('lastname', $user->lastname) }}" required>
                            @error('lastname')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email"
                                value="{{ old('email', $user->email) }}" required>
                            @error('email')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="telephone">Téléphone *</label>
                            <input type="tel" id="telephone" name="telephone"
                                value="{{ old('telephone', $user->telephone) }}" required>
                            @error('telephone')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="birthdate">Date de naissance *</label>
                            <input type="date" id="birthdate" name="birthdate"
                                value="{{ old('birthdate', $user->birthdate) }}" required>
                            @error('birthdate')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="city">Ville *</label>
                            <select id="city" name="city" required>
                                <option value="">Sélectionnez votre ville</option>
                                <option value="Cotonou" {{ old('city', $user->city) == 'Cotonou' ? 'selected' : '' }}>
                                    Cotonou</option>
                                <option value="Porto-Novo"
                                    {{ old('city', $user->city) == 'Porto-Novo' ? 'selected' : '' }}>Porto-Novo
                                </option>
                                <option value="Parakou" {{ old('city', $user->city) == 'Parakou' ? 'selected' : '' }}>
                                    Parakou</option>
                                <option value="Abomey-Calavi"
                                    {{ old('city', $user->city) == 'Abomey-Calavi' ? 'selected' : '' }}>Abomey-Calavi
                                </option>
                            </select>
                            @error('city')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="bio">Biographie</label>
                        <textarea id="bio" name="bio" rows="3" placeholder="Présentez-vous brièvement...">{{ old('bio', $user->bio) }}</textarea>
                        @error('bio')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="photo">Photo de profil</label>
                        <div class="file-upload">
                            <label for="photo" class="file-upload-label">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span>Choisir une photo...</span>
                            </label>
                            <input type="file" id="photo" name="photo" accept="image/*"
                                style="display: none;">
                        </div>
                        @if ($user->photo_path)
                            <div class="current-photo">
                                <img src="{{ Storage::url($user->photo_path) }}" alt="Photo actuelle">
                            </div>
                        @endif
                        @error('photo')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                @if ($user->role_id == 3)
                    <div class="form-section">
                        <h2><i class="fas fa-graduation-cap"></i> Informations professionnelles</h2>

                        <div class="form-group">
                            <label for="qualifications">Qualifications *</label>
                            <textarea id="qualifications" name="qualifications" rows="2" placeholder="Diplômes, certifications..."
                                required>{{ old('qualifications', $user->qualifications) }}</textarea>
                            @error('qualifications')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="subjects">Matières enseignées *</label>
                            <input type="text" id="subjects" name="subjects"
                                value="{{ old('subjects', $user->subjects) }}"
                                placeholder="Ex: Maths, Physique, Anglais..." required>
                            @error('subjects')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="rate_per_hour">Tarif horaire (FCFA) *</label>
                            <input type="number" id="rate_per_hour" name="rate_per_hour"
                                value="{{ old('rate_per_hour', $user->rate_per_hour) }}" min="0"
                                step="500" placeholder="5000" required>
                            @error('rate_per_hour')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                @endif

                @if ($user->role_id == 2)
                    <div class="form-section">
                        <h2><i class="fas fa-book-open"></i> Préférences d'apprentissage</h2>

                        <div class="form-group">
                            <label>Type de cours préféré *</label>
                            <div class="radio-group">
                                <div class="radio-option">
                                    <input type="radio" id="online" name="learning_preference" value="En_ligne"
                                        {{ old('learning_preference', $user->learning_preference) == 'En_ligne' ? 'checked' : '' }}
                                        required>
                                    <label for="online" class="radio-label">
                                        <i class="fas fa-laptop radio-icon"></i>
                                        <span class="radio-text">En ligne</span>
                                    </label>
                                </div>
                                <div class="radio-option">
                                    <input type="radio" id="presential" name="learning_preference"
                                        value="présentiel"
                                        {{ old('learning_preference', $user->learning_preference) == 'présentiel' ? 'checked' : '' }}
                                        required>
                                    <label for="presential" class="radio-label">
                                        <i class="fas fa-user-friends radio-icon"></i>
                                        <span class="radio-text">Présentiel</span>
                                    </label>
                                </div>
                                <div class="radio-option">
                                    <input type="radio" id="hybrid" name="learning_preference" value="hybrid"
                                        {{ old('learning_preference', $user->learning_preference) == 'hybrid' ? 'checked' : '' }}
                                        required>
                                    <label for="hybrid" class="radio-label">
                                        <i class="fas fa-blender-phone radio-icon"></i>
                                        <span class="radio-text">Hybride</span>
                                    </label>
                                </div>
                            </div>
                            @error('learning_preference')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="learning_history">Historique d'apprentissage</label>
                            <textarea id="learning_history" name="learning_history" rows="3"
                                placeholder="Parcours, difficultés, objectifs...">{{ old('learning_history', $user->learning_history) }}</textarea>
                            @error('learning_history')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                @endif

                <div class="form-actions">
                    <button type="submit" class="btn-submit">
                        <i class="fas fa-save"></i>
                        Enregistrer les modifications
                    </button>
                    <a href="{{ route('dashboardUser') }}" class="btn-cancel">
                        <i class="fas fa-times"></i>
                        Annuler
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('photo').addEventListener('change', function(e) {
            const label = this.previousElementSibling;
            if (this.files.length > 0) {
                label.querySelector('span').textContent = this.files[0].name;
            } else {
                label.querySelector('span').textContent = 'Choisir une photo...';
            }
        });
    </script>
</body>

</html>
