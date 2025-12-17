@extends('layouts.adminLayout')

@section('content')


<style>
    :root {
        --primary-color: #3a86ff;
        --primary-dark: #2a76ef;
        --secondary-color: #8338ec;
        --success-color: #06d6a0;
        --warning-color: #f8961e;
        --danger-color: #ef476f;
        --light-color: #f8fafc;
        --dark-color: #1e293b;
        --gray-color: #64748b;
        --border-color: #e2e8f0;
        --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        --shadow-hover: 0 15px 40px rgba(0, 0, 0, 0.15);
        --transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        --radius: 15px;
        --radius-sm: 10px;
    }

    .admin-container {
        display: flex;
        min-height: 100vh;
    }

    .main-content {
        flex: 1;
        padding: 30px;
        background: linear-gradient(135deg, #f5f7fa 0%, #e4edf5 100%);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    /* Header */
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 1px solid var(--border-color);
    }

    .header h2 {
        color: var(--dark-color);
        font-size: 28px;
        font-weight: 800;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .header h2 i {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 32px;
    }

    .header-actions .btn {
        padding: 10px 20px;
        border-radius: 8px;
        border: none;
        font-weight: 600;
        font-size: 14px;
        cursor: pointer;
        transition: var(--transition);
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
    }

    .header-actions .btn-secondary {
        background: linear-gradient(135deg, #64748b, #475569);
        color: white;
        box-shadow: 0 4px 15px rgba(100, 116, 139, 0.2);
    }

    .header-actions .btn-secondary:hover {
        background: linear-gradient(135deg, #475569, #334155);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(100, 116, 139, 0.3);
    }

    /* Container principal réduit */
    .details-container {
        max-width: 1200px;
        margin: 0 auto;
        width: 100%;
        flex: 1;
    }

    /* Alertes */
    .alert {
        border-radius: var(--radius-sm);
        border: none;
        box-shadow: var(--shadow);
        margin-bottom: 25px;
        padding: 15px 20px;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
    }

    .alert-success {
        background: linear-gradient(135deg, #06d6a0, #4cc9f0);
        color: white;
    }

    .alert-danger {
        background: linear-gradient(135deg, #ef476f, #ff6b6b);
        color: white;
    }

    .alert i {
        font-size: 18px;
    }

    /* Profile Card */
    .profile-card {
        background: white;
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        overflow: hidden;
        margin-bottom: 20px;
    }

    .profile-header {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        padding: 25px;
        text-align: center;
        color: white;
        position: relative;
    }

    .profile-avatar {
        margin-bottom: 15px;
    }

    .avatar-img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 4px solid rgba(255, 255, 255, 0.3);
        object-fit: cover;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }

    .avatar-placeholder {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        border: 4px solid rgba(255, 255, 255, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 36px;
        font-weight: 800;
        color: white;
        margin: 0 auto;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }

    .profile-title h3 {
        margin: 0;
        font-size: 22px;
        font-weight: 800;
        margin-bottom: 5px;
    }

    .profile-title p {
        margin: 0;
        opacity: 0.9;
        font-size: 14px;
    }

    .profile-badges {
        padding: 15px;
        background: var(--light-color);
        display: flex;
        gap: 8px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .badge {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 700;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        letter-spacing: 0.3px;
    }

    .status-active {
        background: rgba(6, 214, 160, 0.1);
        color: #06d6a0;
        border: 1px solid rgba(6, 214, 160, 0.3);
    }

    .status-inactive {
        background: rgba(239, 71, 111, 0.1);
        color: #ef476f;
        border: 1px solid rgba(239, 71, 111, 0.3);
    }

    .status-validated {
        background: rgba(58, 134, 255, 0.1);
        color: #3a86ff;
        border: 1px solid rgba(58, 134, 255, 0.3);
    }

    .status-pending {
        background: rgba(248, 150, 30, 0.1);
        color: #f8961e;
        border: 1px solid rgba(248, 150, 30, 0.3);
    }

    .badge i.fa-circle {
        font-size: 6px;
    }

    .profile-info {
        padding: 20px;
    }

    .info-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 0;
        border-bottom: 1px solid var(--border-color);
    }

    .info-item:last-child {
        border-bottom: none;
    }

    .info-icon {
        width: 36px;
        height: 36px;
        border-radius: 8px;
        background: var(--light-color);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        font-size: 16px;
        flex-shrink: 0;
    }

    .info-content {
        flex: 1;
    }

    .info-content small {
        display: block;
        color: var(--gray-color);
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.3px;
        margin-bottom: 2px;
    }

    .info-content strong {
        display: block;
        color: var(--dark-color);
        font-size: 14px;
        font-weight: 700;
        line-height: 1.4;
    }

    .info-content small:last-child {
        font-size: 10px;
        color: #94a3b8;
        text-transform: none;
        margin-top: 1px;
    }

    /* Actions Card */
    .actions-card {
        background: white;
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        padding: 20px;
        margin-bottom: 20px;
    }

    .actions-card h4 {
        margin: 0 0 15px 0;
        font-size: 16px;
        font-weight: 700;
        color: var(--dark-color);
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .actions-card h4 i {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 18px;
    }

    .actions-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .action-btn {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 15px 10px;
        border-radius: var(--radius-sm);
        border: none;
        cursor: pointer;
        transition: var(--transition);
        text-decoration: none;
        text-align: center;
        min-height: 70px;
    }

    .action-btn i {
        font-size: 18px;
        margin-bottom: 8px;
    }

    .action-btn span {
        font-size: 12px;
        font-weight: 600;
        line-height: 1.2;
    }

    .btn-edit {
        background: linear-gradient(135deg, #f8961e, #f4c542);
        color: white;
    }

    .btn-edit:hover {
        background: linear-gradient(135deg, #e6891e, #e6b842);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(248, 150, 30, 0.3);
    }

    .btn-validate {
        background: linear-gradient(135deg, #06d6a0, #4cc9f0);
        color: white;
    }

    .btn-validate:hover {
        background: linear-gradient(135deg, #05c190, #3bb8e0);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(6, 214, 160, 0.3);
    }

    .btn-success {
        background: linear-gradient(135deg, #06d6a0, #4cc9f0);
        color: white;
    }

    .btn-success:hover {
        background: linear-gradient(135deg, #05c190, #3bb8e0);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(6, 214, 160, 0.3);
    }

    .btn-warning {
        background: linear-gradient(135deg, #f8961e, #f4c542);
        color: white;
    }

    .btn-warning:hover {
        background: linear-gradient(135deg, #e6891e, #e6b842);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(248, 150, 30, 0.3);
    }

    .btn-delete {
        background: linear-gradient(135deg, #ef476f, #ff6b6b);
        color: white;
    }

    .btn-delete:hover {
        background: linear-gradient(135deg, #de3f65, #ee6161);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(239, 71, 111, 0.3);
    }

    /* Section Cards */
    .section-card {
        background: white;
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        margin-bottom: 20px;
        overflow: hidden;
    }

    .section-header {
        background: var(--light-color);
        padding: 18px 20px;
        border-bottom: 2px solid var(--border-color);
    }

    .section-header h3 {
        margin: 0;
        font-size: 16px;
        font-weight: 700;
        color: var(--dark-color);
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .section-header h3 i {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 18px;
    }

    .section-body {
        padding: 20px;
    }

    .section-body p {
        margin: 0;
        color: var(--dark-color);
        line-height: 1.6;
        font-size: 14px;
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 25px;
        color: var(--gray-color);
    }

    .empty-state i {
        font-size: 36px;
        color: var(--border-color);
        margin-bottom: 10px;
        display: block;
    }

    .empty-state p {
        margin: 0;
        font-style: italic;
        font-size: 14px;
    }

    /* Préférences Grid */
    .preferences-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
        margin-bottom: 20px;
    }

    .preference-card {
        background: var(--light-color);
        border-radius: var(--radius-sm);
        padding: 18px;
        display: flex;
        align-items: center;
        gap: 15px;
        transition: var(--transition);
        border: 1px solid transparent;
    }

    .preference-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border-color: var(--primary-color);
    }

    .preference-icon {
        width: 45px;
        height: 45px;
        border-radius: 10px;
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
    }

    .preference-content {
        flex: 1;
    }

    .preference-content small {
        display: block;
        color: var(--gray-color);
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.3px;
        margin-bottom: 5px;
    }

    .preference-content strong {
        display: block;
        color: var(--dark-color);
        font-size: 15px;
        font-weight: 700;
        line-height: 1.3;
    }

    .rating {
        display: flex;
        align-items: center;
        gap: 3px;
        margin-top: 5px;
    }

    .rating .fa-star {
        color: #e2e8f0;
        font-size: 14px;
    }

    .rating .fa-star.active {
        color: #f4c542;
    }

    .rating-score {
        margin-left: 8px;
        font-weight: 700;
        color: var(--dark-color);
        font-size: 13px;
    }

    .history-section {
        padding-top: 15px;
        border-top: 1px solid var(--border-color);
    }

    .history-section h5 {
        font-size: 15px;
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .history-section h5 i {
        color: var(--primary-color);
    }

    .history-section p {
        font-size: 14px;
        color: var(--gray-color);
        line-height: 1.5;
    }

    /* Notifications Grid */
    .notifications-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
    }

    .notification-card {
        background: var(--light-color);
        border-radius: var(--radius-sm);
        padding: 18px;
        display: flex;
        align-items: center;
        gap: 15px;
        border: 2px solid transparent;
        transition: var(--transition);
    }

    .notification-card.active {
        border-color: #06d6a0;
        background: rgba(6, 214, 160, 0.05);
    }

    .notification-card.inactive {
        border-color: #e2e8f0;
        opacity: 0.7;
    }

    .notification-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .notification-icon {
        width: 45px;
        height: 45px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
    }

    .notification-card.active .notification-icon {
        background: rgba(6, 214, 160, 0.1);
        color: #06d6a0;
    }

    .notification-card.inactive .notification-icon {
        background: rgba(226, 232, 240, 0.5);
        color: var(--gray-color);
    }

    .notification-content {
        flex: 1;
    }

    .notification-content strong {
        display: block;
        color: var(--dark-color);
        font-size: 15px;
        font-weight: 700;
        margin-bottom: 3px;
    }

    .notification-content p {
        margin: 0;
        color: var(--gray-color);
        font-size: 13px;
    }

    .notification-status {
        font-size: 18px;
    }

    .notification-card.active .notification-status {
        color: #06d6a0;
    }

    .notification-card.inactive .notification-status {
        color: var(--gray-color);
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .details-container {
            max-width: 100%;
        }
    }

    @media (max-width: 992px) {
        .main-content {
            padding: 20px;
        }

        .header {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }

        .header-actions {
            width: 100%;
        }

        .header-actions .btn {
            width: 100%;
            justify-content: center;
        }

        .actions-grid {
            grid-template-columns: 1fr;
        }

        .preferences-grid,
        .notifications-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .header h2 {
            font-size: 24px;
        }

        .profile-title h3 {
            font-size: 20px;
        }

        .avatar-img, .avatar-placeholder {
            width: 80px;
            height: 80px;
            font-size: 28px;
        }

        .action-btn {
            padding: 12px 8px;
            min-height: 60px;
        }

        .action-btn i {
            font-size: 16px;
            margin-bottom: 6px;
        }

        .action-btn span {
            font-size: 11px;
        }
    }

    @media (max-width: 576px) {
        .profile-header {
            padding: 20px;
        }

        .section-body {
            padding: 15px;
        }

        .info-icon {
            width: 32px;
            height: 32px;
            font-size: 14px;
        }

        .info-content strong {
            font-size: 13px;
        }

        .empty-state {
            padding: 20px;
        }

        .empty-state i {
            font-size: 30px;
        }

        .preference-card,
        .notification-card {
            flex-direction: column;
            text-align: center;
            gap: 10px;
            padding: 15px;
        }

        .preference-icon,
        .notification-icon {
            width: 50px;
            height: 50px;
            font-size: 22px;
        }
    }
</style>

<div class="admin-container">
    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <h2>
                <i class="fas fa-user-graduate"></i>
                Détails de l'Apprenant
            </h2>
            <div class="header-actions">
                <a href="{{ route('apprenants.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Retour
                </a>
            </div>
        </div>

        <!-- Alertes -->
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-circle me-2"></i>
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="details-container">
            <div class="row">
                <!-- Colonne gauche : Profil -->
                <div class="col-lg-4">
                    <!-- Carte de profil -->
                    <div class="profile-card">
                        <div class="profile-header">
                            <div class="profile-avatar">
                                @if($apprenant->photo_path)
                                    <img src="{{ asset('storage/' . $apprenant->photo_path) }}"
                                         alt="{{ $apprenant->firstname }}" class="avatar-img">
                                @else
                                    <div class="avatar-placeholder">
                                        {{ strtoupper(substr($apprenant->firstname, 0, 1) . substr($apprenant->lastname, 0, 1)) }}
                                    </div>
                                @endif
                            </div>
                            <div class="profile-title">
                                <h3>{{ $apprenant->firstname }} {{ $apprenant->lastname }}</h3>
                                <p class="text-muted">{{ $apprenant->email }}</p>
                            </div>
                        </div>

                        <div class="profile-badges">
                            @if($apprenant->is_active)
                                <span class="badge status-active">
                                    <i class="fas fa-circle"></i> Actif
                                </span>
                            @else
                                <span class="badge status-inactive">
                                    <i class="fas fa-circle"></i> Inactif
                                </span>
                            @endif

                            @if($apprenant->is_valid)
                                <span class="badge status-validated">
                                    <i class="fas fa-check-circle"></i> Validé
                                </span>
                            @else
                                <span class="badge status-pending">
                                    <i class="fas fa-clock"></i> En attente
                                </span>
                            @endif
                        </div>

                        <div class="profile-info">
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-id-card"></i>
                                </div>
                                <div class="info-content">
                                    <small>ID</small>
                                    <strong>#{{ $apprenant->id }}</strong>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info-content">
                                    <small>Téléphone</small>
                                    <strong>{{ $apprenant->telephone ?? 'Non renseigné' }}</strong>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info-content">
                                    <small>Ville</small>
                                    <strong>{{ $apprenant->city }}</strong>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div class="info-content">
                                    <small>Inscrit le</small>
                                    <strong>{{ $apprenant->created_at->format('d/m/Y') }}</strong>
                                    <small>{{ $apprenant->created_at->format('H:i') }}</small>
                                </div>
                            </div>

                            @if($apprenant->last_login)
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-sign-in-alt"></i>
                                </div>
                                <div class="info-content">
                                    <small>Dernière connexion</small>
                                    <strong>{{ \Carbon\Carbon::parse($apprenant->last_login)->format('d/m/Y') }}</strong>
                                    <small>{{ \Carbon\Carbon::parse($apprenant->last_login)->format('H:i') }}</small>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Actions rapides -->

<style>
    .actions-grid {
    display: flex;
    gap: 15px;
}

.actions-grid > a,
.actions-grid > form {
    flex: 0 0 50%;
}

.actions-grid form button,
.actions-grid > a {
    width: 100%;
}

/* Style bouton */
.action-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 12px;
    border-radius: 10px;
    font-weight: 600;
    text-decoration: none;
    border: none;
    cursor: pointer;
}


</style>


                    <div class="actions-card">
                        <h4><i class="fas fa-cogs"></i> Actions</h4>
                        <div class="actions-grid">
                            <a href="{{ route('apprenants.edit', $apprenant->id) }}" class="action-btn btn-edit">
                                <i class="fas fa-edit"></i>
                                <span>Modifier</span>
                            </a>

                            <form action="{{ route('apprenants.toggle-status', $apprenant->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit"
    class="action-btn {{ $apprenant->is_active ? 'btn-danger' : 'btn-success' }}"
    onclick="return confirm('{{ $apprenant->is_active ? 'Désactiver' : 'Activer' }} cet apprenant ?')">
    <i class="fas fa-power-off"></i>
    <span class="btn-text">
        {{ $apprenant->is_active ? 'Désactiver' : 'Activer' }}
    </span>
</button>

                            </form>

                        </div>
                    </div>
                </div>

                <!-- Colonne droite : Détails -->
                <div class="col-lg-8">
                    <!-- Section Biographie -->
                    <div class="section-card">
                        <div class="section-header">
                            <h3><i class="fas fa-user-circle"></i> Biographie</h3>
                        </div>
                        <div class="section-body">
                            @if($apprenant->bio)
                                <p>{{ $apprenant->bio }}</p>
                            @else
                                <div class="empty-state">
                                    <i class="fas fa-user-circle"></i>
                                    <p>Aucune biographie disponible</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Section Préférences -->
                    <div class="section-card">
                        <div class="section-header">
                            <h3><i class="fas fa-graduation-cap"></i> Préférences d'apprentissage</h3>
                        </div>
                        <div class="section-body">
                            <div class="preferences-grid">
                                <div class="preference-card">
                                    <div class="preference-icon">
                                        <i class="fas fa-laptop"></i>
                                    </div>
                                    <div class="preference-content">
                                        <small>Mode d'apprentissage</small>
                                        <strong>
                                            @if($apprenant->learning_preference == 'online')
                                                En ligne
                                            @elseif($apprenant->learning_preference == 'in_person')
                                                En présentiel
                                            @elseif($apprenant->learning_preference == 'hybrid')
                                                Hybride
                                            @else
                                                Non spécifié
                                            @endif
                                        </strong>
                                    </div>
                                </div>

                                <div class="preference-card">
                                    <div class="preference-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div class="preference-content">
                                        <small>Score de satisfaction</small>
                                        <div class="rating">
                                            @if($apprenant->satisfaction_score)
                                                @for($i = 1; $i <= 5; $i++)
                                                    <i class="fas fa-star {{ $i <= $apprenant->satisfaction_score ? 'active' : '' }}"></i>
                                                @endfor
                                                <span class="rating-score">{{ $apprenant->satisfaction_score }}/5</span>
                                            @else
                                                <span class="text-muted">Non évalué</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if($apprenant->learning_history)
                            <div class="history-section mt-4">
                                <h5><i class="fas fa-history"></i> Historique d'apprentissage</h5>
                                <p class="mt-2">{{ $apprenant->learning_history }}</p>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Section Notifications -->
                    <div class="section-card">
                        <div class="section-header">
                            <h3><i class="fas fa-bell"></i> Préférences de notification</h3>
                        </div>
                        <div class="section-body">
                            <div class="notifications-grid">
                                <div class="notification-card {{ $apprenant->notify_email ? 'active' : 'inactive' }}">
                                    <div class="notification-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="notification-content">
                                        <strong>Notifications par email</strong>
                                        <p>{{ $apprenant->notify_email ? 'Activées' : 'Désactivées' }}</p>
                                    </div>
                                    <div class="notification-status">
                                        <i class="fas fa-{{ $apprenant->notify_email ? 'check' : 'times' }}"></i>
                                    </div>
                                </div>

                                <div class="notification-card {{ $apprenant->notify_push ? 'active' : 'inactive' }}">
                                    <div class="notification-icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <div class="notification-content">
                                        <strong>Notifications push</strong>
                                        <p>{{ $apprenant->notify_push ? 'Activées' : 'Désactivées' }}</p>
                                    </div>
                                    <div class="notification-status">
                                        <i class="fas fa-{{ $apprenant->notify_push ? 'check' : 'times' }}"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function confirmDelete() {
        return confirm('Êtes-vous sûr de vouloir supprimer cet apprenant ? Cette action est irréversible.');
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Animation d'entrée pour les cartes
        const cards = document.querySelectorAll('.profile-card, .actions-card, .section-card');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';

            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 100);
        });

        // Animation des badges au survol
        const badges = document.querySelectorAll('.badge');
        badges.forEach(badge => {
            badge.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05)';
            });

            badge.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });

        // Animation des boutons d'action
        const actionBtns = document.querySelectorAll('.action-btn');
        actionBtns.forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px)';
            });

            btn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Animation des cartes au survol
        const preferenceCards = document.querySelectorAll('.preference-card, .notification-card');
        preferenceCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Confirmation pour le bouton de validation
        const validateBtn = document.querySelector('.btn-validate');
        if (validateBtn) {
            validateBtn.addEventListener('click', function(e) {
                if (!confirm('Êtes-vous sûr de vouloir valider cet apprenant ?')) {
                    e.preventDefault();
                }
            });
        }
    });
</script>
@endsection
