@extends('layouts.welcomeLayout')

@section('content')
    <!-- Toast Container -->
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="successToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    <span id="toastMessage"></span>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-lg border-0 rounded-3">
                        <div class="card-header bg-primary text-white py-4 rounded-top-3">
                            <h2 class="text-center mb-0">{{ __('Rejoindre EduBenin Tutorat') }}</h2>
                        </div>

                        <div class="card-body p-5">
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" id="registerForm">
                                @csrf

                                <div class="row g-4">
                                    <!-- Prénom -->
                                    <div class="col-md-6">
                                        <label for="firstname" class="form-label fw-semibold">{{ __('Prénom') }} <span class="text-danger">*</span></label>
                                        <input id="firstname" type="text" class="form-control form-control-lg @error('firstname') is-invalid @enderror"
                                               name="firstname" value="{{ old('firstname') }}" required autocomplete="given-name" autofocus
                                               placeholder="Votre prénom">
                                        @error('firstname')
                                        <div class="invalid-feedback d-block">
                                            <i class="bi bi-exclamation-circle me-1"></i>{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <!-- Nom -->
                                    <div class="col-md-6">
                                        <label for="lastname" class="form-label fw-semibold">{{ __('Nom') }} <span class="text-danger">*</span></label>
                                        <input id="lastname" type="text" class="form-control form-control-lg @error('lastname') is-invalid @enderror"
                                               name="lastname" value="{{ old('lastname') }}" required autocomplete="family-name"
                                               placeholder="Votre nom">
                                        @error('lastname')
                                        <div class="invalid-feedback d-block">
                                            <i class="bi bi-exclamation-circle me-1"></i>{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="col-12">
                                        <label for="email" class="form-label fw-semibold">{{ __('Adresse Email') }} <span class="text-danger">*</span></label>
                                        <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                               name="email" value="{{ old('email') }}" required autocomplete="email"
                                               placeholder="exemple@email.com">
                                        @error('email')
                                        <div class="invalid-feedback d-block">
                                            <i class="bi bi-exclamation-circle me-1"></i>{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <!-- Téléphone et Date de naissance -->
                                    <div class="col-md-6">
                                        <label for="telephone" class="form-label fw-semibold">{{ __('Téléphone') }}</label>
                                        <input id="telephone" type="text" class="form-control form-control-lg @error('telephone') is-invalid @enderror"
                                               name="telephone" value="{{ old('telephone') }}" autocomplete="tel"
                                               placeholder="+229 XX XX XX XX">
                                        @error('telephone')
                                        <div class="invalid-feedback d-block">
                                            <i class="bi bi-exclamation-circle me-1"></i>{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="birthdate" class="form-label fw-semibold">{{ __('Date de naissance') }} <span class="text-danger">*</span></label>
                                        <input id="birthdate" type="date" class="form-control form-control-lg @error('birthdate') is-invalid @enderror"
                                               name="birthdate" value="{{ old('birthdate') }}" required>
                                        @error('birthdate')
                                        <div class="invalid-feedback d-block">
                                            <i class="bi bi-exclamation-circle me-1"></i>{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <!-- Rôle -->
                                    <div class="col-12">
                                        <label for="role_id" class="form-label fw-semibold">{{ __('Je souhaite') }} <span class="text-danger">*</span></label>
                                        <select id="role_id" class="form-select form-select-lg @error('role_id') is-invalid @enderror" name="role_id" required>
                                            <option value="">-- Choisir votre profil --</option>
                                            @foreach($roles as $role)
                                                <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>
                                                    {{ $role->name === 'etudiant' ? '🧑‍🎓 Trouver un tuteur' : '👨‍🏫 Devenir tuteur' }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('role_id')
                                        <div class="invalid-feedback d-block">
                                            <i class="bi bi-exclamation-circle me-1"></i>{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <!-- Photo -->
                                    <div class="col-12">
                                        <label for="photo_path" class="form-label fw-semibold">{{ __('Photo de profil') }}</label>
                                        <input id="photo_path" type="file" class="form-control form-control-lg @error('photo_path') is-invalid @enderror"
                                               name="photo_path" accept="image/jpeg,image/png,image/jpg,image/gif">
                                        @error('photo_path')
                                        <div class="invalid-feedback d-block">
                                            <i class="bi bi-exclamation-circle me-1"></i>{{ $message }}
                                        </div>
                                        @enderror
                                        <div class="form-text">
                                            <i class="bi bi-info-circle me-1"></i>
                                            Formats acceptés: JPEG, PNG, JPG, GIF. Taille maximale: 2MB
                                        </div>
                                    </div>

                                    <!-- Mot de passe -->
                                    <div class="col-md-6">
                                        <label for="password" class="form-label fw-semibold">{{ __('Mot de passe') }} <span class="text-danger">*</span></label>
                                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="new-password"
                                               placeholder="Votre mot de passe">
                                        @error('password')
                                        <div class="invalid-feedback d-block">
                                            <i class="bi bi-exclamation-circle me-1"></i>{{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <!-- Confirmation mot de passe -->
                                    <div class="col-md-6">
                                        <label for="password-confirm" class="form-label fw-semibold">{{ __('Confirmer le mot de passe') }} <span class="text-danger">*</span></label>
                                        <input id="password-confirm" type="password" class="form-control form-control-lg"
                                               name="password_confirmation" required autocomplete="new-password"
                                               placeholder="Confirmer votre mot de passe">
                                    </div>
                                </div>

                                <div class="d-grid gap-2 mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg py-3">
                                        <i class="bi bi-person-plus me-2"></i>{{ __('Créer mon compte') }}
                                    </button>
                                </div>

                                <div class="text-center mt-4">
                                    <p class="mb-0">
                                        {{ __('Déjà inscrit?') }}
                                        <a href="{{ route('login') }}" class="text-decoration-none fw-semibold">
                                            {{ __('Se connecter') }}
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script pour gérer les toasts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Vérifier s'il y a un message de succès en session
            @if(session('success'))
            showToast('{{ session('success') }}');
            @endif

            // Vérifier s'il y a des erreurs de validation
            @if($errors->any())
            // Vous pouvez aussi afficher un toast d'erreur si vous voulez
            // showErrorToast('Veuillez corriger les erreurs dans le formulaire.');
            @endif

            // Fonction pour afficher le toast de succès
            function showToast(message) {
                const toastElement = document.getElementById('successToast');
                const toastMessage = document.getElementById('toastMessage');
                const toast = new bootstrap.Toast(toastElement);

                toastMessage.textContent = message;
                toast.show();
            }

            // Fonction pour afficher un toast d'erreur (optionnel)
            function showErrorToast(message) {
                // Créer un toast d'erreur dynamiquement
                const toastContainer = document.querySelector('.toast-container');
                const toastId = 'errorToast-' + Date.now();

                const errorToast = document.createElement('div');
                errorToast.id = toastId;
                errorToast.className = 'toast align-items-center text-white bg-danger border-0';
                errorToast.setAttribute('role', 'alert');
                errorToast.setAttribute('aria-live', 'assertive');
                errorToast.setAttribute('aria-atomic', 'true');

                errorToast.innerHTML = `
                    <div class="d-flex">
                        <div class="toast-body">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            ${message}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                `;

                toastContainer.appendChild(errorToast);
                const toast = new bootstrap.Toast(errorToast);
                toast.show();

                // Supprimer le toast du DOM après sa fermeture
                errorToast.addEventListener('hidden.bs.toast', function() {
                    errorToast.remove();
                });
            }

            // Gestion de la soumission du formulaire (optionnel - pour confirmation)
            const form = document.getElementById('registerForm');
            form.addEventListener('submit', function() {
                // Vous pouvez ajouter un indicateur de chargement ici si vous voulez
                const submitButton = this.querySelector('button[type="submit"]');
                submitButton.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Création du compte...';
                submitButton.disabled = true;
            });
        });
    </script>

    <style>
        .toast {
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .bg-success {
            background: linear-gradient(135deg, #28a745, #20c997) !important;
        }

        .bg-danger {
            background: linear-gradient(135deg, #dc3545, #fd7e14) !important;
        }

        .toast-body {
            font-weight: 500;
        }
    </style>
@endsection
