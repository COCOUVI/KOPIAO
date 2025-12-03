@extends('layouts.adminLayout')

@section('content')
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <i class="fas fa-graduation-cap"></i>
                <h1>EduConnect Admin</h1>
            </div>
            <ul class="menu">
                <li class="menu-item">
                    <a href="#" class="active">
                        <i class="fas fa-home"></i>
                        <span>Tableau de Bord</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#">
                        <i class="fas fa-users"></i>
                        <span>Utilisateurs</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span>Professeurs</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#">
                        <i class="fas fa-user-graduate"></i>
                        <span>Étudiants</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#">
                        <i class="fas fa-book"></i>
                        <span>Cours</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Réservations</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <span>Paramètres</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <div class="header">
                <h2>Tableau de Bord Admin</h2>
                <div class="user-info">
                    <div class="user-avatar">AD</div>
                    <div class="user-details">
                        <h4>Admin EduConnect</h4>
                        <p>Administrateur Principal</p>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="stats-cards">
                <div class="stat-card">
                    <div class="stat-info">
                        <h3>Utilisateurs Totaux</h3>
                        <div class="number">12,548</div>
                    </div>
                    <div class="stat-icon blue">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-info">
                        <h3>Professeurs</h3>
                        <div class="number">2,347</div>
                    </div>
                    <div class="stat-icon green">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-info">
                        <h3>Étudiants</h3>
                        <div class="number">10,201</div>
                    </div>
                    <div class="stat-icon orange">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-info">
                        <h3>Cours Actifs</h3>
                        <div class="number">856</div>
                    </div>
                    <div class="stat-icon red">
                        <i class="fas fa-book"></i>
                    </div>
                </div>
            </div>

            <!-- Professeurs à Vérifier -->
            <div class="content-section">
                <div class="section-header">
                    <h3>Professeurs en Attente de Vérification</h3>
                    <div class="section-actions">
                        <button class="btn btn-outline" id="filterBtn">
                            <i class="fas fa-filter"></i> Filtrer
                        </button>
                        <button class="btn btn-primary" id="exportBtn">
                            <i class="fas fa-download"></i> Exporter
                        </button>
                    </div>
                </div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Professeur</th>
                                <th>Spécialité</th>
                                <th>Expérience</th>
                                <th>Date d'inscription</th>
                                <th>Statut</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody id="pendingTeachersTable">
                            <tr>
                                <td>
                                    <div class="user-cell">
                                        <div class="user-avatar-small">MD</div>
                                        <div>
                                            <div>Marie Dubois</div>
                                            <div style="font-size: 12px; color: var(--text-light);">marie.dubois@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td>Mathématiques</td>
                                <td>5 ans</td>
                                <td>15/03/2024</td>
                                <td><span class="status pending">En attente</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn approve" title="Approuver">
                                            <i class="fas fa-check"></i>
                                        </button>
                                        <button class="action-btn reject" title="Rejeter">
                                            <i class="fas fa-times"></i>
                                        </button>
                                        <button class="action-btn view-details" title="Voir détails">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user-cell">
                                        <div class="user-avatar-small">PL</div>
                                        <div>
                                            <div>Pierre Lambert</div>
                                            <div style="font-size: 12px; color: var(--text-light);">pierre.lambert@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td>Physique</td>
                                <td>8 ans</td>
                                <td>12/03/2024</td>
                                <td><span class="status pending">En attente</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn approve" title="Approuver">
                                            <i class="fas fa-check"></i>
                                        </button>
                                        <button class="action-btn reject" title="Rejeter">
                                            <i class="fas fa-times"></i>
                                        </button>
                                        <button class="action-btn view-details" title="Voir détails">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user-cell">
                                        <div class="user-avatar-small">SC</div>
                                        <div>
                                            <div>Sophie Chen</div>
                                            <div style="font-size: 12px; color: var(--text-light);">sophie.chen@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td>Chimie</td>
                                <td>6 ans</td>
                                <td>10/03/2024</td>
                                <td><span class="status pending">En attente</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn approve" title="Approuver">
                                            <i class="fas fa-check"></i>
                                        </button>
                                        <button class="action-btn reject" title="Rejeter">
                                            <i class="fas fa-times"></i>
                                        </button>
                                        <button class="action-btn view-details" title="Voir détails">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

           <!-- Professeurs Vérifiés -->
<div class="content-section">
    <div class="section-header">
        <h3>Professeurs Vérifiés</h3>
        <div class="section-actions">
            <button class="btn btn-outline" id="searchBtn">
                <i class="fas fa-search"></i> Rechercher
            </button>
        </div>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Professeur</th>
                    <th>Spécialité</th>
                    <th>Expérience</th>
                    <th>Date d'inscription</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="verifiedTeachersTable">
                <tr>
                    <td>
                        <div class="user-cell">
                            <div class="user-avatar-small">TM</div>
                            <div>
                                <div>Thomas Martin</div>
                                <div style="font-size: 12px; color: var(--text-light);">thomas.martin@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td>Informatique</td>
                    <td>10 ans</td>
                    <td>10/12/2011</td>
                    <td><span class="badge blue"><i class="fas fa-certificate"></i> Professeur Certifié</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="action-btn remove-badge" title="Retirer le badge">
                                <i class="fas fa-times"></i>
                            </button>
                            <button class="action-btn view-profile" title="Voir profil">
                                <i class="fas fa-external-link-alt"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="user-cell">
                            <div class="user-avatar-small">JG</div>
                            <div>
                                <div>Julie Garcia</div>
                                <div style="font-size: 12px; color: var(--text-light);">julie.garcia@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td>Anglais</td>
                    <td>4 ans</td>
                    <td>10/11/2025</td>
                    <td><span class="badge blue"><i class="fas fa-certificate"></i> Professeur Certifié</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="action-btn remove-badge" title="Retirer le badge">
                                <i class="fas fa-times"></i>
                            </button>
                            <button class="action-btn view-profile" title="Voir profil">
                                <i class="fas fa-external-link-alt"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
            <!-- Charts Section -->
            <div class="charts">
                <div class="chart-container">
                    <div class="section-header">
                        <h3>Activité des Utilisateurs</h3>
                    </div>
                    <div class="chart-wrapper">
                        <canvas id="userActivityChart"></canvas>
                    </div>
                </div>
                <div class="chart-container">
                    <div class="section-header">
                        <h3>Répartition par Matière</h3>
                    </div>
                    <div class="chart-wrapper">
                        <canvas id="subjectDistributionChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter Modal -->
    <div class="modal" id="filterModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Filtrer les professeurs</h3>
                <button class="close-modal">&times;</button>
            </div>
            <div class="filter-options">
                <div class="filter-group">
                    <label for="specialtyFilter">Spécialité</label>
                    <select id="specialtyFilter">
                        <option value="">Toutes les spécialités</option>
                        <option value="Mathématiques">Mathématiques</option>
                        <option value="Physique">Physique</option>
                        <option value="Chimie">Chimie</option>
                        <option value="Informatique">Informatique</option>
                        <option value="Anglais">Anglais</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label for="experienceFilter">Expérience minimale</label>
                    <select id="experienceFilter">
                        <option value="0">Tous</option>
                        <option value="1">1 an</option>
                        <option value="3">3 ans</option>
                        <option value="5">5 ans</option>
                        <option value="10">10 ans</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label for="dateFilter">Date d'inscription</label>
                    <input type="date" id="dateFilter">
                </div>
            </div>
            <div class="modal-actions">
                <button class="btn btn-outline" id="resetFilters">Réinitialiser</button>
                <button class="btn btn-primary" id="applyFilters">Appliquer</button>
            </div>
        </div>
    </div>

    <!-- Notification -->
    <div class="notification" id="notification"></div>

    <script>
        // Données pour les graphiques
        const userActivityData = {
            labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'],
            datasets: [
                {
                    label: 'Nouveaux utilisateurs',
                    data: [120, 150, 180, 200, 220, 250, 280, 260, 240, 230, 210, 190],
                    borderColor: '#1a73e8',
                    backgroundColor: 'rgba(26, 115, 232, 0.1)',
                    tension: 0.4,
                    fill: true
                },
                {
                    label: 'Cours réservés',
                    data: [80, 100, 120, 150, 180, 200, 220, 210, 190, 170, 150, 130],
                    borderColor: '#4caf50',
                    backgroundColor: 'rgba(76, 175, 80, 0.1)',
                    tension: 0.4,
                    fill: true
                }
            ]
        };

        const subjectDistributionData = {
            labels: ['Mathématiques', 'Physique', 'Chimie', 'Informatique', 'Anglais', 'Français', 'Histoire'],
            datasets: [{
                data: [25, 15, 12, 20, 18, 6, 4],
                backgroundColor: [
                    '#1a73e8', '#4caf50', '#ff9800', '#9c27b0', '#f44336', '#607d8b', '#795548'
                ],
                borderWidth: 1
            }]
        };

        // Initialisation des graphiques
        document.addEventListener('DOMContentLoaded', function() {
            // Graphique d'activité des utilisateurs
            const userActivityCtx = document.getElementById('userActivityChart').getContext('2d');
            const userActivityChart = new Chart(userActivityCtx, {
                type: 'line',
                data: userActivityData,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Graphique de répartition par matière
            const subjectDistributionCtx = document.getElementById('subjectDistributionChart').getContext('2d');
            const subjectDistributionChart = new Chart(subjectDistributionCtx, {
                type: 'doughnut',
                data: subjectDistributionData,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });
// Gestion des boutons d'approbation (délégué d'événement)
document.addEventListener('click', function(e) {
    // Boutons d'approbation dans les deux tables
    if (e.target.closest('.action-btn.approve')) {
        const row = e.target.closest('tr');
        const name = row.querySelector('.user-cell div:first-child').textContent;

        // Mettre à jour le statut
        const statusCell = row.querySelector('.status');
        statusCell.textContent = 'Approuvé';
        statusCell.className = 'status approved';

        // Ajouter le badge
        const badgeCell = document.createElement('td');
        badgeCell.innerHTML = '<span class="badge blue"><i class="fas fa-certificate"></i> Professeur Certifié</span>';

        // Remplacer la colonne Actions
        const actionsCell = document.createElement('td');
        actionsCell.innerHTML = `
            <div class="action-buttons">
                <button class="action-btn remove-badge" title="Retirer le badge">
                    <i class="fas fa-times"></i>
                </button>
                <button class="action-btn view-profile" title="Voir profil">
                    <i class="fas fa-external-link-alt"></i>
                </button>
            </div>
        `;

        row.replaceChild(badgeCell, row.cells[4]);
        row.replaceChild(actionsCell, row.cells[5]);

        // Ajouter à la table des professeurs vérifiés
        const verifiedTable = document.getElementById('verifiedTeachersTable');
        verifiedTable.appendChild(row);

        // Afficher une notification
        showNotification(`Le professeur ${name} a été approuvé et a reçu le badge de certification !`, 'success');

        // Mettre à jour les statistiques
        updateStats();
    }

    // Boutons de retrait de badge
    if (e.target.closest('.remove-badge')) {
        const row = e.target.closest('tr');
        const name = row.querySelector('.user-cell div:first-child').textContent;

        if (confirm(`Êtes-vous sûr de vouloir retirer le badge de certification à ${name} ?`)) {
            // Remplacer le badge par le statut "En attente"
            const statusCell = document.createElement('td');
            statusCell.innerHTML = '<span class="status pending">En attente</span>';

            // Remplacer les actions
            const actionsCell = document.createElement('td');
            actionsCell.innerHTML = `
                <div class="action-buttons">
                    <button class="action-btn approve" title="Approuver">
                        <i class="fas fa-check"></i>
                    </button>
                    <button class="action-btn reject" title="Rejeter">
                        <i class="fas fa-times"></i>
                    </button>
                    <button class="action-btn view-details" title="Voir détails">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            `;

            row.replaceChild(statusCell, row.cells[4]);
            row.replaceChild(actionsCell, row.cells[5]);

            // Déplacer vers la table d'attente
            const pendingTable = document.getElementById('pendingTeachersTable');
            pendingTable.appendChild(row);

            // Afficher une notification
            showNotification(`Le badge de certification a été retiré à ${name}.`, 'warning');

            // Mettre à jour les statistiques
            updateStats();
        }
    }

    // Boutons de rejet
    if (e.target.closest('.action-btn.reject')) {
        const row = e.target.closest('tr');
        const name = row.querySelector('.user-cell div:first-child').textContent;

        if (confirm(`Êtes-vous sûr de vouloir rejeter la candidature de ${name} ?`)) {
            row.style.opacity = '0.5';
            setTimeout(() => {
                row.remove();
                showNotification(`La candidature de ${name} a été rejetée.`, 'danger');
                updateStats();
            }, 500);
        }
    }
});

            // Gestion du bouton de filtre
            const filterBtn = document.getElementById('filterBtn');
            const filterModal = document.getElementById('filterModal');
            const closeModal = document.querySelector('.close-modal');

            filterBtn.addEventListener('click', function() {
                filterModal.style.display = 'flex';
            });

            closeModal.addEventListener('click', function() {
                filterModal.style.display = 'none';
            });

            // Appliquer les filtres
            const applyFiltersBtn = document.getElementById('applyFilters');
            applyFiltersBtn.addEventListener('click', function() {
                const specialty = document.getElementById('specialtyFilter').value;
                const experience = document.getElementById('experienceFilter').value;
                const date = document.getElementById('dateFilter').value;

                // Ici, vous implémenteriez la logique de filtrage réelle
                // Pour cet exemple, nous allons simplement afficher un message
                showNotification(`Filtres appliqués: ${specialty || 'Toutes spécialités'}, ${experience || 'Toute expérience'}, ${date || 'Toutes dates'}`, 'primary');
                filterModal.style.display = 'none';
            });

            // Réinitialiser les filtres
            const resetFiltersBtn = document.getElementById('resetFilters');
            resetFiltersBtn.addEventListener('click', function() {
                document.getElementById('specialtyFilter').value = '';
                document.getElementById('experienceFilter').value = '0';
                document.getElementById('dateFilter').value = '';
            });

            // Bouton d'export
            const exportBtn = document.getElementById('exportBtn');
            exportBtn.addEventListener('click', function() {
                showNotification('Export des données en cours...', 'primary');
                // Simulation d'export
                setTimeout(() => {
                    showNotification('Données exportées avec succès!', 'success');
                }, 1500);
            });

            // Bouton de recherche
            const searchBtn = document.getElementById('searchBtn');
            searchBtn.addEventListener('click', function() {
                const searchTerm = prompt('Entrez le nom du professeur à rechercher:');
                if (searchTerm) {
                    showNotification(`Recherche de "${searchTerm}" en cours...`, 'primary');
                    // Simulation de recherche
                    setTimeout(() => {
                        showNotification(`Résultats pour "${searchTerm}" affichés.`, 'success');
                    }, 1000);
                }
            });

            // Boutons de modification
            document.addEventListener('click', function(e) {
                if (e.target.closest('.edit-teacher')) {
                    const row = e.target.closest('tr');
                    const name = row.querySelector('.user-cell div:first-child').textContent;
                    showNotification(`Modification du profil de ${name}`, 'primary');
                }

                if (e.target.closest('.view-profile')) {
                    const row = e.target.closest('tr');
                    const name = row.querySelector('.user-cell div:first-child').textContent;
                    showNotification(`Ouverture du profil de ${name}`, 'primary');
                }

                if (e.target.closest('.view-details')) {
                    const row = e.target.closest('tr');
                    const name = row.querySelector('.user-cell div:first-child').textContent;
                    showNotification(`Affichage des détails de ${name}`, 'primary');
                }
            });

            // Fonction pour afficher les notifications
            function showNotification(message, type) {
                const notification = document.getElementById('notification');
                notification.textContent = message;
                notification.style.background = type === 'success' ? 'var(--success)' :
                                              type === 'danger' ? 'var(--danger)' : 'var(--primary)';
                notification.style.display = 'block';

                setTimeout(() => {
                    notification.style.display = 'none';
                }, 3000);
            }

            // Fonction pour mettre à jour les statistiques
            function updateStats() {
                const pendingCount = document.querySelectorAll('#pendingTeachersTable tr').length;
                const verifiedCount = document.querySelectorAll('#verifiedTeachersTable tr').length;

                // Mettre à jour les cartes de statistiques (simulation)
                document.querySelectorAll('.stat-card .number')[1].textContent = verifiedCount + 2345;

                showNotification(`Statistiques mises à jour: ${pendingCount} en attente, ${verifiedCount} vérifiés`, 'primary');
            }
        });

        // Gestion des boutons de retrait de badge
document.addEventListener('click', function(e) {
    if (e.target.closest('.remove-badge')) {
        const row = e.target.closest('tr');
        const name = row.querySelector('.user-cell div:first-child').textContent;

        if (confirm(`Êtes-vous sûr de vouloir retirer le badge de certification à ${name} ?`)) {
            // Remplacer le badge par le statut "En attente"
            const statusCell = document.createElement('td');
            statusCell.innerHTML = '<span class="status pending">En attente</span>';

            // Remplacer les actions
            const actionsCell = document.createElement('td');
            actionsCell.innerHTML = `
                <div class="action-buttons">
                    <button class="action-btn approve" title="Approuver">
                        <i class="fas fa-check"></i>
                    </button>
                    <button class="action-btn reject" title="Rejeter">
                        <i class="fas fa-times"></i>
                    </button>
                    <button class="action-btn view-details" title="Voir détails">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            `;

            row.replaceChild(statusCell, row.cells[4]);
            row.replaceChild(actionsCell, row.cells[5]);

            // Déplacer vers la table d'attente
            const pendingTable = document.getElementById('pendingTeachersTable');
            pendingTable.appendChild(row);

            // Afficher une notification
            showNotification(`Le badge de certification a été retiré à ${name}.`, 'warning');

            // Mettre à jour les statistiques
            updateStats();
        }
    }
});

// Gestion de la navigation du menu
document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour montrer une section et cacher les autres
    function showSection(sectionName) {
        // Cacher toutes les sections de contenu
        const allSections = document.querySelectorAll('.content-section');
        allSections.forEach(section => {
            section.style.display = 'none';
        });

        // Afficher la section demandée
        if (sectionName === 'dashboard') {
            // Le dashboard est déjà visible par défaut
            document.querySelector('.main-content').style.display = 'block';
        } else if (sectionName === 'settings') {
            // Créer ou afficher la section paramètres
            showSettingsSection();
        }
    }

    // Fonction pour afficher la section paramètres
    function showSettingsSection() {
        let settingsSection = document.getElementById('settingsSection');

        // Si la section n'existe pas, la créer
        if (!settingsSection) {
            settingsSection = document.createElement('div');
            settingsSection.id = 'settingsSection';
            settingsSection.className = 'content-section';
            settingsSection.innerHTML = `
                <div class="section-header">
                    <h3><i class="fas fa-cog"></i> Paramètres de la Plateforme</h3>
                </div>

                <div class="settings-grid">
                    <div class="settings-card">
                        <h4><i class="fas fa-sliders-h"></i> Généraux</h4>
                        <div class="setting-item">
                            <label>Nom de la plateforme</label>
                            <input type="text" id="platformName" value="EduConnect" class="setting-input">
                        </div>
                        <div class="setting-item">
                            <label>Email de contact</label>
                            <input type="email" id="contactEmail" value="contact@educonnect.com" class="setting-input">
                        </div>
                        <div class="setting-item">
                            <label>Mode maintenance</label>
                            <label class="switch">
                                <input type="checkbox" id="maintenanceMode">
                                <span class="slider"></span>
                            </label>
                        </div>
                    </div>

                    <div class="settings-card">
                        <h4><i class="fas fa-chalkboard-teacher"></i> Professeurs</h4>
                        <div class="setting-item">
                            <label>Approbation auto</label>
                            <label class="switch">
                                <input type="checkbox" id="autoApprove">
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="setting-item">
                            <label>Expérience minimum (ans)</label>
                            <input type="number" id="minExperience" value="2" min="0" class="setting-input">
                        </div>
                        <div class="setting-item">
                            <label>Commission (%)</label>
                            <input type="number" id="commissionRate" value="15" min="0" max="50" class="setting-input">
                        </div>
                    </div>

                    <div class="settings-card">
                        <h4><i class="fas fa-bell"></i> Notifications</h4>
                        <div class="setting-item">
                            <label>Notifications email</label>
                            <label class="switch">
                                <input type="checkbox" id="emailNotif" checked>
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="setting-item">
                            <label>Alertes nouveaux profs</label>
                            <label class="switch">
                                <input type="checkbox" id="newTeacherAlert" checked>
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="setting-item">
                            <label>Rapports hebdomadaires</label>
                            <label class="switch">
                                <input type="checkbox" id="weeklyReports">
                                <span class="slider"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="settings-actions">
                    <button class="btn btn-outline" id="resetSettings">
                        <i class="fas fa-undo"></i> Réinitialiser
                    </button>
                    <button class="btn btn-primary" id="saveSettings">
                        <i class="fas fa-save"></i> Sauvegarder
                    </button>
                </div>
            `;

            // Ajouter la section après les autres sections
            const mainContent = document.querySelector('.main-content');
            mainContent.appendChild(settingsSection);

            // Charger les paramètres sauvegardés
            loadSettings();

            // Ajouter les écouteurs d'événements
            document.getElementById('saveSettings').addEventListener('click', saveSettings);
            document.getElementById('resetSettings').addEventListener('click', resetSettings);
        }

        // Cacher le contenu principal du dashboard
        document.querySelector('.header').style.display = 'none';
        document.querySelector('.stats-cards').style.display = 'none';
        document.querySelectorAll('.content-section').forEach(section => {
            if (section.id !== 'settingsSection') {
                section.style.display = 'none';
            }
        });

        // Afficher la section paramètres
        settingsSection.style.display = 'block';
    }

    // Fonction pour sauvegarder les paramètres
    function saveSettings() {
        const settings = {
            platformName: document.getElementById('platformName').value,
            contactEmail: document.getElementById('contactEmail').value,
            maintenanceMode: document.getElementById('maintenanceMode').checked,
            autoApprove: document.getElementById('autoApprove').checked,
            minExperience: parseInt(document.getElementById('minExperience').value),
            commissionRate: parseFloat(document.getElementById('commissionRate').value),
            emailNotif: document.getElementById('emailNotif').checked,
            newTeacherAlert: document.getElementById('newTeacherAlert').checked,
            weeklyReports: document.getElementById('weeklyReports').checked
        };

        localStorage.setItem('educonnectSettings', JSON.stringify(settings));
        showNotification('✅ Paramètres sauvegardés avec succès !', 'success');
    }

    // Fonction pour charger les paramètres
    function loadSettings() {
        const saved = localStorage.getItem('educonnectSettings');
        if (saved) {
            const settings = JSON.parse(saved);

            if (document.getElementById('platformName')) {
                document.getElementById('platformName').value = settings.platformName || 'EduConnect';
                document.getElementById('contactEmail').value = settings.contactEmail || 'contact@educonnect.com';
                document.getElementById('maintenanceMode').checked = settings.maintenanceMode || false;
                document.getElementById('autoApprove').checked = settings.autoApprove || false;
                document.getElementById('minExperience').value = settings.minExperience || 2;
                document.getElementById('commissionRate').value = settings.commissionRate || 15;
                document.getElementById('emailNotif').checked = settings.emailNotif !== false;
                document.getElementById('newTeacherAlert').checked = settings.newTeacherAlert !== false;
                document.getElementById('weeklyReports').checked = settings.weeklyReports || false;
            }
        }
    }

    // Fonction pour réinitialiser les paramètres
    function resetSettings() {
        if (confirm('Êtes-vous sûr de vouloir réinitialiser tous les paramètres ?')) {
            if (document.getElementById('platformName')) {
                document.getElementById('platformName').value = 'EduConnect';
                document.getElementById('contactEmail').value = 'contact@educonnect.com';
                document.getElementById('maintenanceMode').checked = false;
                document.getElementById('autoApprove').checked = false;
                document.getElementById('minExperience').value = 2;
                document.getElementById('commissionRate').value = 15;
                document.getElementById('emailNotif').checked = true;
                document.getElementById('newTeacherAlert').checked = true;
                document.getElementById('weeklyReports').checked = false;
            }
            localStorage.removeItem('educonnectSettings');
            showNotification('🔄 Paramètres réinitialisés', 'warning');
        }
    }

    // Gestion du clic sur Paramètres dans le menu
    document.querySelector('a[href="#"] .fa-cog').closest('a').addEventListener('click', function(e) {
        e.preventDefault();
        showSettingsSection();

        // Mettre à jour le menu actif
        document.querySelectorAll('.menu-item a').forEach(link => {
            link.classList.remove('active');
        });
        this.classList.add('active');
    });

    // Gestion du clic sur Dashboard dans le menu
    document.querySelector('a[href="#"] .fa-home').closest('a').addEventListener('click', function(e) {
        e.preventDefault();

        // Afficher le contenu principal du dashboard
        document.querySelector('.header').style.display = 'flex';
        document.querySelector('.stats-cards').style.display = 'grid';
        document.querySelectorAll('.content-section').forEach(section => {
            if (section.id === 'settingsSection') {
                section.style.display = 'none';
            } else {
                section.style.display = 'block';
            }
        });

        // Mettre à jour le menu actif
        document.querySelectorAll('.menu-item a').forEach(link => {
            link.classList.remove('active');
        });
        this.classList.add('active');
    });
});

// Données des utilisateurs (simulation)
const usersData = [
    {
        id: 1,
        nom: "Martin",
        prenom: "Thomas",
        email: "thomas.martin@email.com",
        type: "Professeur",
        specialite: "Informatique",
        dateInscription: "2024-01-15",
        statut: "Actif",
        avatar: "TM"
    },
    {
        id: 2,
        nom: "Garcia",
        prenom: "Julie",
        email: "julie.garcia@email.com",
        type: "Professeur",
        specialite: "Anglais",
        dateInscription: "2024-01-10",
        statut: "Actif",
        avatar: "JG"
    },
    {
        id: 3,
        nom: "Dubois",
        prenom: "Marie",
        email: "marie.dubois@email.com",
        type: "Étudiant",
        specialite: "-",
        dateInscription: "2024-02-01",
        statut: "Actif",
        avatar: "MD"
    },
    {
        id: 4,
        nom: "Lambert",
        prenom: "Pierre",
        email: "pierre.lambert@email.com",
        type: "Professeur",
        specialite: "Physique",
        dateInscription: "2024-01-20",
        statut: "En attente",
        avatar: "PL"
    },
    {
        id: 5,
        nom: "Chen",
        prenom: "Sophie",
        email: "sophie.chen@email.com",
        type: "Étudiant",
        specialite: "-",
        dateInscription: "2024-02-05",
        statut: "Actif",
        avatar: "SC"
    },
    {
        id: 6,
        nom: "Robert",
        prenom: "Jean",
        email: "jean.robert@email.com",
        type: "Professeur",
        specialite: "Mathématiques",
        dateInscription: "2024-01-08",
        statut: "Inactif",
        avatar: "JR"
    },
    {
        id: 7,
        nom: "Moreau",
        prenom: "Alice",
        email: "alice.moreau@email.com",
        type: "Étudiant",
        specialite: "-",
        dateInscription: "2024-02-10",
        statut: "Actif",
        avatar: "AM"
    },
    {
        id: 8,
        nom: "Petit",
        prenom: "David",
        email: "david.petit@email.com",
        type: "Professeur",
        specialite: "Chimie",
        dateInscription: "2024-01-25",
        statut: "Actif",
        avatar: "DP"
    }
];

// Fonction pour afficher les utilisateurs
function displayUsers(users = usersData) {
    const usersTable = document.getElementById('usersTable');
    if (!usersTable) return;

    usersTable.innerHTML = '';

    users.forEach(user => {
        const row = document.createElement('tr');

        // Déterminer la classe de statut
        let statusClass = '';
        let statusText = '';
        switch(user.statut) {
            case 'Actif':
                statusClass = 'status approved';
                statusText = 'Actif';
                break;
            case 'En attente':
                statusClass = 'status pending';
                statusText = 'En attente';
                break;
            case 'Inactif':
                statusClass = 'status rejected';
                statusText = 'Inactif';
                break;
            default:
                statusClass = 'status pending';
                statusText = user.statut;
        }

        row.innerHTML = `
            <td>
                <div class="user-cell">
                    <div class="user-avatar-small">${user.avatar}</div>
                    <div>
                        <div>${user.prenom} ${user.nom}</div>
                        <div style="font-size: 12px; color: var(--text-light);">${user.email}</div>
                    </div>
                </div>
            </td>
            <td>${user.type}</td>
            <td>${user.specialite}</td>
            <td>${formatDate(user.dateInscription)}</td>
            <td><span class="${statusClass}">${statusText}</span></td>
            <td>
                <div class="action-buttons">
                    <button class="action-btn view-user" title="Voir profil" data-id="${user.id}">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="action-btn edit-user" title="Modifier" data-id="${user.id}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="action-btn ${user.statut === 'Actif' ? 'deactivate-user' : 'activate-user'}"
                            title="${user.statut === 'Actif' ? 'Désactiver' : 'Activer'}"
                            data-id="${user.id}">
                        <i class="fas ${user.statut === 'Actif' ? 'fa-user-slash' : 'fa-user-check'}"></i>
                    </button>
                </div>
            </td>
        `;

        usersTable.appendChild(row);
    });

    // Ajouter les écouteurs d'événements
    attachUserEventListeners();
}

// Fonction pour formater la date
function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString('fr-FR');
}

// Fonction pour attacher les événements aux boutons utilisateurs
function attachUserEventListeners() {
    // Voir profil
    document.querySelectorAll('.view-user').forEach(btn => {
        btn.addEventListener('click', function() {
            const userId = this.getAttribute('data-id');
            const user = usersData.find(u => u.id == userId);
            showNotification(`Ouverture du profil de ${user.prenom} ${user.nom}`, 'primary');
        });
    });

    // Modifier utilisateur
    document.querySelectorAll('.edit-user').forEach(btn => {
        btn.addEventListener('click', function() {
            const userId = this.getAttribute('data-id');
            const user = usersData.find(u => u.id == userId);
            showNotification(`Modification de ${user.prenom} ${user.nom}`, 'primary');
        });
    });

    // Activer/Désactiver utilisateur
    document.querySelectorAll('.activate-user, .deactivate-user').forEach(btn => {
        btn.addEventListener('click', function() {
            const userId = this.getAttribute('data-id');
            const user = usersData.find(u => u.id == userId);
            const newStatus = user.statut === 'Actif' ? 'Inactif' : 'Actif';

            if (confirm(`Êtes-vous sûr de vouloir ${newStatus === 'Inactif' ? 'désactiver' : 'activer'} ${user.prenom} ${user.nom} ?`)) {
                user.statut = newStatus;
                displayUsers();
                showNotification(`Utilisateur ${newStatus === 'Inactif' ? 'désactivé' : 'activé'} avec succès`, 'success');
            }
        });
    });
}

// Fonction pour filtrer les utilisateurs
function filterUsers() {
    const typeFilter = document.getElementById('userTypeFilter').value;
    const statusFilter = document.getElementById('userStatusFilter').value;
    const searchTerm = document.getElementById('userSearch').value.toLowerCase();

    const filteredUsers = usersData.filter(user => {
        const matchesType = typeFilter === '' || user.type === typeFilter;
        const matchesStatus = statusFilter === '' || user.statut === statusFilter;
        const matchesSearch = searchTerm === '' ||
                            user.prenom.toLowerCase().includes(searchTerm) ||
                            user.nom.toLowerCase().includes(searchTerm) ||
                            user.email.toLowerCase().includes(searchTerm);

        return matchesType && matchesStatus && matchesSearch;
    });

    displayUsers(filteredUsers);
    document.getElementById('usersCount').textContent = filteredUsers.length;
}

// Fonction pour afficher la section utilisateurs
function showUsersSection() {
    // Cacher les autres sections
    document.querySelector('.header').style.display = 'none';
    document.querySelector('.stats-cards').style.display = 'none';
    document.querySelectorAll('.content-section').forEach(section => {
        section.style.display = 'none';
    });

    // Créer ou afficher la section utilisateurs
    let usersSection = document.getElementById('usersSection');

    if (!usersSection) {
        usersSection = document.createElement('div');
        usersSection.id = 'usersSection';
        usersSection.className = 'content-section';
        usersSection.innerHTML = `
            <div class="section-header">
                <h3><i class="fas fa-users"></i> Gestion des Utilisateurs</h3>
                <div class="section-actions">
                    <button class="btn btn-primary" id="exportUsers">
                        <i class="fas fa-download"></i> Exporter
                    </button>
                </div>
            </div>

            <!-- Filtres -->
            <div class="filters-bar">
                <div class="filter-group">
                    <input type="text" id="userSearch" placeholder="Rechercher un utilisateur..." class="filter-input">
                </div>
                <div class="filter-group">
                    <select id="userTypeFilter" class="filter-select">
                        <option value="">Tous les types</option>
                        <option value="Professeur">Professeur</option>
                        <option value="Étudiant">Étudiant</option>
                    </select>
                </div>
                <div class="filter-group">
                    <select id="userStatusFilter" class="filter-select">
                        <option value="">Tous les statuts</option>
                        <option value="Actif">Actif</option>
                        <option value="En attente">En attente</option>
                        <option value="Inactif">Inactif</option>
                    </select>
                </div>
                <div class="filter-group">
                    <button class="btn btn-outline" id="resetFilters">
                        <i class="fas fa-times"></i> Effacer
                    </button>
                </div>
            </div>

            <!-- Compteur -->
            <div class="users-count">
                <span id="usersCount">${usersData.length}</span> utilisateur(s) trouvé(s)
            </div>

            <!-- Tableau -->
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Utilisateur</th>
                            <th>Type</th>
                            <th>Spécialité</th>
                            <th>Date d'inscription</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="usersTable">
                    </tbody>
                </table>
            </div>
        `;

        document.querySelector('.main-content').appendChild(usersSection);

        // Ajouter les écouteurs d'événements pour les filtres
        document.getElementById('userSearch').addEventListener('input', filterUsers);
        document.getElementById('userTypeFilter').addEventListener('change', filterUsers);
        document.getElementById('userStatusFilter').addEventListener('change', filterUsers);
        document.getElementById('resetFilters').addEventListener('click', resetUserFilters);
        document.getElementById('exportUsers').addEventListener('click', exportUsers);

        // Afficher les utilisateurs
        displayUsers();
    }

    usersSection.style.display = 'block';
}

// Fonction pour réinitialiser les filtres
function resetUserFilters() {
    document.getElementById('userSearch').value = '';
    document.getElementById('userTypeFilter').value = '';
    document.getElementById('userStatusFilter').value = '';
    filterUsers();
}

// Fonction pour exporter les utilisateurs
function exportUsers() {
    showNotification('Export des utilisateurs en cours...', 'primary');
    setTimeout(() => {
        showNotification('Liste des utilisateurs exportée avec succès !', 'success');
    }, 1500);
}

// Ajouter au gestionnaire de navigation existant
document.addEventListener('DOMContentLoaded', function() {
    // ... votre code existant ...

    // Gestion du clic sur Utilisateurs dans le menu
    document.querySelector('a[href="#"] .fa-users').closest('a').addEventListener('click', function(e) {
        e.preventDefault();
        showUsersSection();

        // Mettre à jour le menu actif
        document.querySelectorAll('.menu-item a').forEach(link => {
            link.classList.remove('active');
        });
        this.classList.add('active');
    });
});

// Données des professeurs (extension des données utilisateurs)
const teachersData = [
    {
        id: 1,
        nom: "Martin",
        prenom: "Thomas",
        email: "thomas.martin@email.com",
        type: "Professeur",
        specialite: "Informatique",
        experience: "10 ans",
        dateInscription: "2024-01-15",
        statut: "Vérifié",
        note: "4.9/5",
        avatar: "TM",
        coursActifs: 12,
        elevesTotal: 145,
        tarifHoraire: "45€"
    },
    {
        id: 2,
        nom: "Garcia",
        prenom: "Julie",
        email: "julie.garcia@email.com",
        type: "Professeur",
        specialite: "Anglais",
        experience: "4 ans",
        dateInscription: "2024-01-10",
        statut: "Vérifié",
        note: "4.8/5",
        avatar: "JG",
        coursActifs: 8,
        elevesTotal: 89,
        tarifHoraire: "35€"
    },
    {
        id: 4,
        nom: "Lambert",
        prenom: "Pierre",
        email: "pierre.lambert@email.com",
        type: "Professeur",
        specialite: "Physique",
        experience: "8 ans",
        dateInscription: "2024-01-20",
        statut: "En attente",
        note: "-",
        avatar: "PL",
        coursActifs: 0,
        elevesTotal: 0,
        tarifHoraire: "40€"
    },
    {
        id: 6,
        nom: "Robert",
        prenom: "Jean",
        email: "jean.robert@email.com",
        type: "Professeur",
        specialite: "Mathématiques",
        experience: "15 ans",
        dateInscription: "2024-01-08",
        statut: "Vérifié",
        note: "4.7/5",
        avatar: "JR",
        coursActifs: 15,
        elevesTotal: 203,
        tarifHoraire: "50€"
    },
    {
        id: 8,
        nom: "Petit",
        prenom: "David",
        email: "david.petit@email.com",
        type: "Professeur",
        specialite: "Chimie",
        experience: "6 ans",
        dateInscription: "2024-01-25",
        statut: "Vérifié",
        note: "4.6/5",
        avatar: "DP",
        coursActifs: 6,
        elevesTotal: 67,
        tarifHoraire: "38€"
    },
    {
        id: 9,
        nom: "Leroy",
        prenom: "Catherine",
        email: "catherine.leroy@email.com",
        type: "Professeur",
        specialite: "Français",
        experience: "7 ans",
        dateInscription: "2024-02-12",
        statut: "En attente",
        note: "-",
        avatar: "CL",
        coursActifs: 0,
        elevesTotal: 0,
        tarifHoraire: "32€"
    },
    {
        id: 10,
        nom: "Morel",
        prenom: "Antoine",
        email: "antoine.morel@email.com",
        type: "Professeur",
        specialite: "Histoire",
        experience: "12 ans",
        dateInscription: "2024-02-08",
        statut: "Vérifié",
        note: "4.5/5",
        avatar: "AM",
        coursActifs: 9,
        elevesTotal: 112,
        tarifHoraire: "42€"
    }
];

// Fonction pour afficher les professeurs
function displayTeachers(teachers = teachersData) {
    const teachersTable = document.getElementById('teachersTable');
    if (!teachersTable) return;

    teachersTable.innerHTML = '';

    teachers.forEach(teacher => {
        const row = document.createElement('tr');

        // Déterminer la classe de statut et le badge
        let statusClass = '';
        let statusContent = '';

        if (teacher.statut === 'Vérifié') {
            statusClass = 'status approved';
            statusContent = `<span class="badge blue"><i class="fas fa-certificate"></i> Professeur Certifié</span>`;
        } else if (teacher.statut === 'En attente') {
            statusClass = 'status pending';
            statusContent = 'En attente de vérification';
        } else {
            statusClass = 'status rejected';
            statusContent = teacher.statut;
        }

        row.innerHTML = `
            <td>
                <div class="user-cell">
                    <div class="user-avatar-small">${teacher.avatar}</div>
                    <div>
                        <div>${teacher.prenom} ${teacher.nom}</div>
                        <div style="font-size: 12px; color: var(--text-light);">${teacher.email}</div>
                    </div>
                </div>
            </td>
            <td>${teacher.specialite}</td>
            <td>${teacher.experience}</td>
            <td>${teacher.note}</td>
            <td>${teacher.coursActifs}</td>
            <td>${teacher.elevesTotal}</td>
            <td>${statusContent}</td>
            <td>
                <div class="action-buttons">
                    ${teacher.statut === 'En attente' ? `
                        <button class="action-btn approve-teacher" title="Approuver" data-id="${teacher.id}">
                            <i class="fas fa-check"></i>
                        </button>
                        <button class="action-btn reject-teacher" title="Rejeter" data-id="${teacher.id}">
                            <i class="fas fa-times"></i>
                        </button>
                    ` : `
                        <button class="action-btn remove-badge" title="Retirer le badge" data-id="${teacher.id}">
                            <i class="fas fa-times"></i>
                        </button>
                    `}
                    <button class="action-btn view-teacher" title="Voir profil" data-id="${teacher.id}">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="action-btn edit-teacher" title="Modifier" data-id="${teacher.id}">
                        <i class="fas fa-edit"></i>
                    </button>
                </div>
            </td>
        `;

        teachersTable.appendChild(row);
    });

    // Ajouter les écouteurs d'événements
    attachTeacherEventListeners();
}

// Fonction pour attacher les événements aux boutons professeurs
function attachTeacherEventListeners() {
    // Approuver professeur
    document.querySelectorAll('.approve-teacher').forEach(btn => {
        btn.addEventListener('click', function() {
            const teacherId = this.getAttribute('data-id');
            const teacher = teachersData.find(t => t.id == teacherId);

            teacher.statut = 'Vérifié';
            teacher.note = "4.5/5"; // Note par défaut
            displayTeachers();
            showNotification(`✅ Professeur ${teacher.prenom} ${teacher.nom} approuvé avec succès !`, 'success');
        });
    });

    // Rejeter professeur
    document.querySelectorAll('.reject-teacher').forEach(btn => {
        btn.addEventListener('click', function() {
            const teacherId = this.getAttribute('data-id');
            const teacher = teachersData.find(t => t.id == teacherId);

            if (confirm(`Êtes-vous sûr de vouloir rejeter la candidature de ${teacher.prenom} ${teacher.nom} ?`)) {
                const index = teachersData.findIndex(t => t.id == teacherId);
                teachersData.splice(index, 1);
                displayTeachers();
                showNotification(`❌ Candidature de ${teacher.prenom} ${teacher.nom} rejetée`, 'danger');
            }
        });
    });

    // Retirer badge
    document.querySelectorAll('.remove-badge').forEach(btn => {
        btn.addEventListener('click', function() {
            const teacherId = this.getAttribute('data-id');
            const teacher = teachersData.find(t => t.id == teacherId);

            if (confirm(`Êtes-vous sûr de vouloir retirer le badge de certification à ${teacher.prenom} ${teacher.nom} ?`)) {
                teacher.statut = 'En attente';
                teacher.note = '-';
                displayTeachers();
                showNotification(`⚠️ Badge retiré à ${teacher.prenom} ${teacher.nom}`, 'warning');
            }
        });
    });

    // Voir profil
    document.querySelectorAll('.view-teacher').forEach(btn => {
        btn.addEventListener('click', function() {
            const teacherId = this.getAttribute('data-id');
            const teacher = teachersData.find(t => t.id == teacherId);
            showNotification(`👁️ Ouverture du profil de ${teacher.prenom} ${teacher.nom}`, 'primary');
        });
    });

    // Modifier professeur
    document.querySelectorAll('.edit-teacher').forEach(btn => {
        btn.addEventListener('click', function() {
            const teacherId = this.getAttribute('data-id');
            const teacher = teachersData.find(t => t.id == teacherId);
            showNotification(`✏️ Modification de ${teacher.prenom} ${teacher.nom}`, 'primary');
        });
    });
}

// Fonction pour filtrer les professeurs
function filterTeachers() {
    const specialtyFilter = document.getElementById('teacherSpecialtyFilter').value;
    const statusFilter = document.getElementById('teacherStatusFilter').value;
    const experienceFilter = document.getElementById('teacherExperienceFilter').value;
    const searchTerm = document.getElementById('teacherSearch').value.toLowerCase();

    const filteredTeachers = teachersData.filter(teacher => {
        const matchesSpecialty = specialtyFilter === '' || teacher.specialite === specialtyFilter;
        const matchesStatus = statusFilter === '' || teacher.statut === statusFilter;
        const matchesExperience = experienceFilter === '' || teacher.experience === experienceFilter;
        const matchesSearch = searchTerm === '' ||
                            teacher.prenom.toLowerCase().includes(searchTerm) ||
                            teacher.nom.toLowerCase().includes(searchTerm) ||
                            teacher.specialite.toLowerCase().includes(searchTerm);

        return matchesSpecialty && matchesStatus && matchesExperience && matchesSearch;
    });

    displayTeachers(filteredTeachers);
    updateTeachersStats(filteredTeachers);
}

// Fonction pour mettre à jour les statistiques des professeurs
function updateTeachersStats(teachers) {
    const totalTeachers = teachers.length;
    const verifiedTeachers = teachers.filter(t => t.statut === 'Vérifié').length;
    const pendingTeachers = teachers.filter(t => t.statut === 'En attente').length;

    document.getElementById('teachersCount').textContent = totalTeachers;
    document.getElementById('verifiedCount').textContent = verifiedTeachers;
    document.getElementById('pendingCount').textContent = pendingTeachers;
}

// Fonction pour afficher la section professeurs
function showTeachersSection() {
    // Cacher les autres sections
    document.querySelector('.header').style.display = 'none';
    document.querySelector('.stats-cards').style.display = 'none';
    document.querySelectorAll('.content-section').forEach(section => {
        section.style.display = 'none';
    });

    // Créer ou afficher la section professeurs
    let teachersSection = document.getElementById('teachersSection');

    if (!teachersSection) {
        teachersSection = document.createElement('div');
        teachersSection.id = 'teachersSection';
        teachersSection.className = 'content-section';
        teachersSection.innerHTML = `
            <div class="section-header">
                <h3><i class="fas fa-chalkboard-teacher"></i> Gestion des Professeurs</h3>
                <div class="section-actions">
                    <button class="btn btn-primary" id="exportTeachers">
                        <i class="fas fa-download"></i> Exporter
                    </button>
                </div>
            </div>

            <!-- Statistiques rapides -->
            <div class="teachers-stats">
                <div class="stat-item">
                    <div class="stat-number" id="teachersCount">${teachersData.length}</div>
                    <div class="stat-label">Total Professeurs</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number verified" id="verifiedCount">${teachersData.filter(t => t.statut === 'Vérifié').length}</div>
                    <div class="stat-label">Vérifiés</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number pending" id="pendingCount">${teachersData.filter(t => t.statut === 'En attente').length}</div>
                    <div class="stat-label">En attente</div>
                </div>
            </div>

            <!-- Filtres -->
            <div class="filters-bar">
                <div class="filter-group">
                    <input type="text" id="teacherSearch" placeholder="Rechercher un professeur..." class="filter-input">
                </div>
                <div class="filter-group">
                    <select id="teacherSpecialtyFilter" class="filter-select">
                        <option value="">Toutes spécialités</option>
                        <option value="Informatique">Informatique</option>
                        <option value="Anglais">Anglais</option>
                        <option value="Physique">Physique</option>
                        <option value="Mathématiques">Mathématiques</option>
                        <option value="Chimie">Chimie</option>
                        <option value="Français">Français</option>
                        <option value="Histoire">Histoire</option>
                    </select>
                </div>
                <div class="filter-group">
                    <select id="teacherStatusFilter" class="filter-select">
                        <option value="">Tous statuts</option>
                        <option value="Vérifié">Vérifié</option>
                        <option value="En attente">En attente</option>
                    </select>
                </div>
                <div class="filter-group">
                    <select id="teacherExperienceFilter" class="filter-select">
                        <option value="">Toute expérience</option>
                        <option value="4 ans">4 ans</option>
                        <option value="6 ans">6 ans</option>
                        <option value="7 ans">7 ans</option>
                        <option value="8 ans">8 ans</option>
                        <option value="10 ans">10 ans</option>
                        <option value="12 ans">12 ans</option>
                        <option value="15 ans">15 ans</option>
                    </select>
                </div>
                <div class="filter-group">
                    <button class="btn btn-outline" id="resetTeacherFilters">
                        <i class="fas fa-times"></i> Effacer
                    </button>
                </div>
            </div>

            <!-- Tableau -->
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Professeur</th>
                            <th>Spécialité</th>
                            <th>Expérience</th>
                            <th>Note</th>
                            <th>Cours actifs</th>
                            <th>Élèves total</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="teachersTable">
                    </tbody>
                </table>
            </div>
        `;

        document.querySelector('.main-content').appendChild(teachersSection);

        // Ajouter les écouteurs d'événements pour les filtres
        document.getElementById('teacherSearch').addEventListener('input', filterTeachers);
        document.getElementById('teacherSpecialtyFilter').addEventListener('change', filterTeachers);
        document.getElementById('teacherStatusFilter').addEventListener('change', filterTeachers);
        document.getElementById('teacherExperienceFilter').addEventListener('change', filterTeachers);
        document.getElementById('resetTeacherFilters').addEventListener('click', resetTeacherFilters);
        document.getElementById('exportTeachers').addEventListener('click', exportTeachers);

        // Afficher les professeurs
        displayTeachers();
        updateTeachersStats(teachersData);
    }

    teachersSection.style.display = 'block';
}

// Fonction pour réinitialiser les filtres professeurs
function resetTeacherFilters() {
    document.getElementById('teacherSearch').value = '';
    document.getElementById('teacherSpecialtyFilter').value = '';
    document.getElementById('teacherStatusFilter').value = '';
    document.getElementById('teacherExperienceFilter').value = '';
    filterTeachers();
}

// Fonction pour exporter les professeurs
function exportTeachers() {
    showNotification('Export des professeurs en cours...', 'primary');
    setTimeout(() => {
        showNotification('Liste des professeurs exportée avec succès !', 'success');
    }, 1500);
}

// Ajouter au gestionnaire de navigation existant
document.addEventListener('DOMContentLoaded', function() {
    // ... votre code existant ...

    // Gestion du clic sur Professeurs dans le menu
    document.querySelector('a[href="#"] .fa-chalkboard-teacher').closest('a').addEventListener('click', function(e) {
        e.preventDefault();
        showTeachersSection();

        // Mettre à jour le menu actif
        document.querySelectorAll('.menu-item a').forEach(link => {
            link.classList.remove('active');
        });
        this.classList.add('active');
    });
});

// Données des étudiants
const studentsData = [
    {
        id: 1,
        nom: "Dubois",
        prenom: "Marie",
        email: "marie.dubois@email.com",
        type: "Étudiant",
        niveau: "Licence 2",
        specialite: "Informatique",
        dateInscription: "2024-02-01",
        statut: "Actif",
        coursSuivis: 3,
        heuresTotal: 45,
        professeurPrincipal: "Thomas Martin",
        avatar: "MD"
    },
    {
        id: 2,
        nom: "Chen",
        prenom: "Sophie",
        email: "sophie.chen@email.com",
        type: "Étudiant",
        niveau: "Terminale",
        specialite: "Scientifique",
        dateInscription: "2024-02-05",
        statut: "Actif",
        coursSuivis: 2,
        heuresTotal: 32,
        professeurPrincipal: "Julie Garcia",
        avatar: "SC"
    },
    {
        id: 3,
        nom: "Moreau",
        prenom: "Alice",
        email: "alice.moreau@email.com",
        type: "Étudiant",
        niveau: "Master 1",
        specialite: "Physique",
        dateInscription: "2024-02-10",
        statut: "Actif",
        coursSuivis: 4,
        heuresTotal: 67,
        professeurPrincipal: "Pierre Lambert",
        avatar: "AM"
    },
    {
        id: 4,
        nom: "Bernard",
        prenom: "Lucas",
        email: "lucas.bernard@email.com",
        type: "Étudiant",
        niveau: "Licence 3",
        specialite: "Mathématiques",
        dateInscription: "2024-01-28",
        statut: "Actif",
        coursSuivis: 5,
        heuresTotal: 89,
        professeurPrincipal: "Jean Robert",
        avatar: "LB"
    },
    {
        id: 5,
        nom: "Roux",
        prenom: "Camille",
        email: "camille.roux@email.com",
        type: "Étudiant",
        niveau: "Seconde",
        specialite: "Général",
        dateInscription: "2024-02-15",
        statut: "Inactif",
        coursSuivis: 0,
        heuresTotal: 0,
        professeurPrincipal: "-",
        avatar: "CR"
    },
    {
        id: 6,
        nom: "Girard",
        prenom: "Hugo",
        email: "hugo.girard@email.com",
        type: "Étudiant",
        niveau: "Licence 1",
        specialite: "Chimie",
        dateInscription: "2024-02-08",
        statut: "Actif",
        coursSuivis: 3,
        heuresTotal: 38,
        professeurPrincipal: "David Petit",
        avatar: "HG"
    },
    {
        id: 7,
        nom: "Blanc",
        prenom: "Emma",
        email: "emma.blanc@email.com",
        type: "Étudiant",
        niveau: "Première",
        specialite: "Littéraire",
        dateInscription: "2024-02-12",
        statut: "Actif",
        coursSuivis: 2,
        heuresTotal: 28,
        professeurPrincipal: "Catherine Leroy",
        avatar: "EB"
    },
    {
        id: 8,
        nom: "Noel",
        prenom: "Nathan",
        email: "nathan.noel@email.com",
        type: "Étudiant",
        niveau: "Terminale",
        specialite: "Économique",
        dateInscription: "2024-02-18",
        statut: "En pause",
        coursSuivis: 1,
        heuresTotal: 15,
        professeurPrincipal: "Antoine Morel",
        avatar: "NN"
    },
    {
        id: 9,
        nom: "Perrin",
        prenom: "Léa",
        email: "lea.perrin@email.com",
        type: "Étudiant",
        niveau: "Master 2",
        specialite: "Histoire",
        dateInscription: "2024-01-30",
        statut: "Actif",
        coursSuivis: 6,
        heuresTotal: 112,
        professeurPrincipal: "Antoine Morel",
        avatar: "LP"
    },
    {
        id: 10,
        nom: "Clement",
        prenom: "Mathis",
        email: "mathis.clement@email.com",
        type: "Étudiant",
        niveau: "Licence 2",
        specialite: "Anglais",
        dateInscription: "2024-02-14",
        statut: "Actif",
        coursSuivis: 3,
        heuresTotal: 42,
        professeurPrincipal: "Julie Garcia",
        avatar: "MC"
    }
];

// Fonction pour afficher les étudiants
function displayStudents(students = studentsData) {
    const studentsTable = document.getElementById('studentsTable');
    if (!studentsTable) return;

    studentsTable.innerHTML = '';

    students.forEach(student => {
        const row = document.createElement('tr');

        // Déterminer la classe de statut
        let statusClass = '';
        let statusText = student.statut;

        switch(student.statut) {
            case 'Actif':
                statusClass = 'status approved';
                break;
            case 'Inactif':
                statusClass = 'status rejected';
                break;
            case 'En pause':
                statusClass = 'status pending';
                break;
            default:
                statusClass = 'status pending';
        }

        row.innerHTML = `
            <td>
                <div class="user-cell">
                    <div class="user-avatar-small">${student.avatar}</div>
                    <div>
                        <div>${student.prenom} ${student.nom}</div>
                        <div style="font-size: 12px; color: var(--text-light);">${student.email}</div>
                    </div>
                </div>
            </td>
            <td>${student.niveau}</td>
            <td>${student.specialite}</td>
            <td>${student.coursSuivis}</td>
            <td>${student.heuresTotal}h</td>
            <td>${student.professeurPrincipal}</td>
            <td><span class="${statusClass}">${statusText}</span></td>
            <td>
                <div class="action-buttons">
                    <button class="action-btn view-student" title="Voir profil" data-id="${student.id}">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="action-btn edit-student" title="Modifier" data-id="${student.id}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="action-btn ${student.statut === 'Actif' ? 'deactivate-student' : 'activate-student'}"
                            title="${student.statut === 'Actif' ? 'Désactiver' : 'Activer'}"
                            data-id="${student.id}">
                        <i class="fas ${student.statut === 'Actif' ? 'fa-user-slash' : 'fa-user-check'}"></i>
                    </button>
                    <button class="action-btn message-student" title="Envoyer un message" data-id="${student.id}">
                        <i class="fas fa-envelope"></i>
                    </button>
                </div>
            </td>
        `;

        studentsTable.appendChild(row);
    });

    // Ajouter les écouteurs d'événements
    attachStudentEventListeners();
}

// Fonction pour attacher les événements aux boutons étudiants
function attachStudentEventListeners() {
    // Voir profil étudiant
    document.querySelectorAll('.view-student').forEach(btn => {
        btn.addEventListener('click', function() {
            const studentId = this.getAttribute('data-id');
            const student = studentsData.find(s => s.id == studentId);
            showNotification(`👁️ Ouverture du profil de ${student.prenom} ${student.nom}`, 'primary');
        });
    });

    // Modifier étudiant
    document.querySelectorAll('.edit-student').forEach(btn => {
        btn.addEventListener('click', function() {
            const studentId = this.getAttribute('data-id');
            const student = studentsData.find(s => s.id == studentId);
            showNotification(`✏️ Modification de ${student.prenom} ${student.nom}`, 'primary');
        });
    });

    // Activer/Désactiver étudiant
    document.querySelectorAll('.activate-student, .deactivate-student').forEach(btn => {
        btn.addEventListener('click', function() {
            const studentId = this.getAttribute('data-id');
            const student = studentsData.find(s => s.id == studentId);
            const newStatus = student.statut === 'Actif' ? 'Inactif' : 'Actif';

            if (confirm(`Êtes-vous sûr de vouloir ${newStatus === 'Inactif' ? 'désactiver' : 'activer'} ${student.prenom} ${student.nom} ?`)) {
                student.statut = newStatus;
                displayStudents();
                showNotification(`✅ Étudiant ${newStatus === 'Inactif' ? 'désactivé' : 'activé'} avec succès`, 'success');
            }
        });
    });

    // Envoyer message
    document.querySelectorAll('.message-student').forEach(btn => {
        btn.addEventListener('click', function() {
            const studentId = this.getAttribute('data-id');
            const student = studentsData.find(s => s.id == studentId);
            const message = prompt(`Envoyer un message à ${student.prenom} ${student.nom} :`);

            if (message) {
                showNotification(`📧 Message envoyé à ${student.prenom} ${student.nom}`, 'success');
            }
        });
    });
}

// Fonction pour filtrer les étudiants
function filterStudents() {
    const niveauFilter = document.getElementById('studentLevelFilter').value;
    const specialiteFilter = document.getElementById('studentSpecialtyFilter').value;
    const statusFilter = document.getElementById('studentStatusFilter').value;
    const searchTerm = document.getElementById('studentSearch').value.toLowerCase();

    const filteredStudents = studentsData.filter(student => {
        const matchesNiveau = niveauFilter === '' || student.niveau === niveauFilter;
        const matchesSpecialite = specialiteFilter === '' || student.specialite === specialiteFilter;
        const matchesStatus = statusFilter === '' || student.statut === statusFilter;
        const matchesSearch = searchTerm === '' ||
                            student.prenom.toLowerCase().includes(searchTerm) ||
                            student.nom.toLowerCase().includes(searchTerm) ||
                            student.niveau.toLowerCase().includes(searchTerm) ||
                            student.specialite.toLowerCase().includes(searchTerm);

        return matchesNiveau && matchesSpecialite && matchesStatus && matchesSearch;
    });

    displayStudents(filteredStudents);
    updateStudentsStats(filteredStudents);
}

// Fonction pour mettre à jour les statistiques des étudiants
function updateStudentsStats(students) {
    const totalStudents = students.length;
    const activeStudents = students.filter(s => s.statut === 'Actif').length;
    const totalHours = students.reduce((sum, student) => sum + student.heuresTotal, 0);
    const totalCourses = students.reduce((sum, student) => sum + student.coursSuivis, 0);

    document.getElementById('studentsCount').textContent = totalStudents;
    document.getElementById('activeCount').textContent = activeStudents;
    document.getElementById('hoursCount').textContent = totalHours;
    document.getElementById('coursesCount').textContent = totalCourses;
}

// Fonction pour afficher la section étudiants
function showStudentsSection() {
    // Cacher les autres sections
    document.querySelector('.header').style.display = 'none';
    document.querySelector('.stats-cards').style.display = 'none';
    document.querySelectorAll('.content-section').forEach(section => {
        section.style.display = 'none';
    });

    // Créer ou afficher la section étudiants
    let studentsSection = document.getElementById('studentsSection');

    if (!studentsSection) {
        studentsSection = document.createElement('div');
        studentsSection.id = 'studentsSection';
        studentsSection.className = 'content-section';
        studentsSection.innerHTML = `
            <div class="section-header">
                <h3><i class="fas fa-user-graduate"></i> Gestion des Étudiants</h3>
                <div class="section-actions">
                    <button class="btn btn-primary" id="exportStudents">
                        <i class="fas fa-download"></i> Exporter
                    </button>
                    <button class="btn btn-outline" id="addStudent">
                        <i class="fas fa-plus"></i> Ajouter
                    </button>
                </div>
            </div>

            <!-- Statistiques rapides -->
            <div class="students-stats">
                <div class="stat-item">
                    <div class="stat-number" id="studentsCount">${studentsData.length}</div>
                    <div class="stat-label">Total Étudiants</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number active" id="activeCount">${studentsData.filter(s => s.statut === 'Actif').length}</div>
                    <div class="stat-label">Actifs</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" id="hoursCount">${studentsData.reduce((sum, s) => sum + s.heuresTotal, 0)}</div>
                    <div class="stat-label">Heures totales</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" id="coursesCount">${studentsData.reduce((sum, s) => sum + s.coursSuivis, 0)}</div>
                    <div class="stat-label">Cours suivis</div>
                </div>
            </div>

            <!-- Filtres -->
            <div class="filters-bar">
                <div class="filter-group">
                    <input type="text" id="studentSearch" placeholder="Rechercher un étudiant..." class="filter-input">
                </div>
                <div class="filter-group">
                    <select id="studentLevelFilter" class="filter-select">
                        <option value="">Tous niveaux</option>
                        <option value="Seconde">Seconde</option>
                        <option value="Première">Première</option>
                        <option value="Terminale">Terminale</option>
                        <option value="Licence 1">Licence 1</option>
                        <option value="Licence 2">Licence 2</option>
                        <option value="Licence 3">Licence 3</option>
                        <option value="Master 1">Master 1</option>
                        <option value="Master 2">Master 2</option>
                    </select>
                </div>
                <div class="filter-group">
                    <select id="studentSpecialtyFilter" class="filter-select">
                        <option value="">Toutes spécialités</option>
                        <option value="Informatique">Informatique</option>
                        <option value="Scientifique">Scientifique</option>
                        <option value="Physique">Physique</option>
                        <option value="Mathématiques">Mathématiques</option>
                        <option value="Chimie">Chimie</option>
                        <option value="Littéraire">Littéraire</option>
                        <option value="Histoire">Histoire</option>
                        <option value="Anglais">Anglais</option>
                        <option value="Économique">Économique</option>
                        <option value="Général">Général</option>
                    </select>
                </div>
                <div class="filter-group">
                    <select id="studentStatusFilter" class="filter-select">
                        <option value="">Tous statuts</option>
                        <option value="Actif">Actif</option>
                        <option value="Inactif">Inactif</option>
                        <option value="En pause">En pause</option>
                    </select>
                </div>
                <div class="filter-group">
                    <button class="btn btn-outline" id="resetStudentFilters">
                        <i class="fas fa-times"></i> Effacer
                    </button>
                </div>
            </div>

            <!-- Tableau -->
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Étudiant</th>
                            <th>Niveau</th>
                            <th>Spécialité</th>
                            <th>Cours suivis</th>
                            <th>Heures totales</th>
                            <th>Professeur principal</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="studentsTable">
                    </tbody>
                </table>
            </div>
        `;

        document.querySelector('.main-content').appendChild(studentsSection);

        // Ajouter les écouteurs d'événements pour les filtres
        document.getElementById('studentSearch').addEventListener('input', filterStudents);
        document.getElementById('studentLevelFilter').addEventListener('change', filterStudents);
        document.getElementById('studentSpecialtyFilter').addEventListener('change', filterStudents);
        document.getElementById('studentStatusFilter').addEventListener('change', filterStudents);
        document.getElementById('resetStudentFilters').addEventListener('click', resetStudentFilters);
        document.getElementById('exportStudents').addEventListener('click', exportStudentsData);
        document.getElementById('addStudent').addEventListener('click', addNewStudent);

        // Afficher les étudiants
        displayStudents();
        updateStudentsStats(studentsData);
    }

    studentsSection.style.display = 'block';
}

// Fonction pour réinitialiser les filtres étudiants
function resetStudentFilters() {
    document.getElementById('studentSearch').value = '';
    document.getElementById('studentLevelFilter').value = '';
    document.getElementById('studentSpecialtyFilter').value = '';
    document.getElementById('studentStatusFilter').value = '';
    filterStudents();
}

// Fonction pour exporter les étudiants
function exportStudentsData() {
    showNotification('Export des étudiants en cours...', 'primary');
    setTimeout(() => {
        showNotification('Liste des étudiants exportée avec succès !', 'success');
    }, 1500);
}

// Fonction pour ajouter un nouvel étudiant
function addNewStudent() {
    showNotification('🆕 Fonctionnalité d\'ajout d\'étudiant à implémenter', 'primary');
}

// Ajouter au gestionnaire de navigation existant
document.addEventListener('DOMContentLoaded', function() {
    // ... votre code existant ...

    // Gestion du clic sur Étudiants dans le menu
    document.querySelector('a[href="#"] .fa-user-graduate').closest('a').addEventListener('click', function(e) {
        e.preventDefault();
        showStudentsSection();

        // Mettre à jour le menu actif
        document.querySelectorAll('.menu-item a').forEach(link => {
            link.classList.remove('active');
        });
        this.classList.add('active');
    });
});
// Données des cours
const coursesData = [
    {
        id: 1,
        titre: "Introduction à la Programmation",
        professeur: "Thomas Martin",
        matiere: "Informatique",
        niveau: "Débutant",
        type: "En ligne",
        prix: "25€/h",
        elevesInscrits: 45,
        note: "4.9/5",
        statut: "Actif",
        dateCreation: "2024-01-10",
        duree: "20h",
        avatar: "TM"
    },
    {
        id: 2,
        titre: "Anglais Conversationnel",
        professeur: "Julie Garcia",
        matiere: "Anglais",
        niveau: "Intermédiaire",
        type: "Présentiel",
        prix: "35€/h",
        elevesInscrits: 32,
        note: "4.8/5",
        statut: "Actif",
        dateCreation: "2024-01-15",
        duree: "30h",
        avatar: "JG"
    },
    {
        id: 3,
        titre: "Physique Quantique Avancée",
        professeur: "Pierre Lambert",
        matiere: "Physique",
        niveau: "Avancé",
        type: "Hybride",
        prix: "40€/h",
        elevesInscrits: 18,
        note: "4.7/5",
        statut: "Actif",
        dateCreation: "2024-01-20",
        duree: "40h",
        avatar: "PL"
    },
    {
        id: 4,
        titre: "Algèbre Linéaire",
        professeur: "Jean Robert",
        matiere: "Mathématiques",
        niveau: "Intermédiaire",
        type: "En ligne",
        prix: "30€/h",
        elevesInscrits: 28,
        note: "4.6/5",
        statut: "Actif",
        dateCreation: "2024-01-25",
        duree: "25h",
        avatar: "JR"
    },
    {
        id: 5,
        titre: "Chimie Organique",
        professeur: "David Petit",
        matiere: "Chimie",
        niveau: "Avancé",
        type: "Présentiel",
        prix: "38€/h",
        elevesInscrits: 22,
        note: "4.5/5",
        statut: "En attente",
        dateCreation: "2024-02-01",
        duree: "35h",
        avatar: "DP"
    },
    {
        id: 6,
        titre: "Littérature Française",
        professeur: "Catherine Leroy",
        matiere: "Français",
        niveau: "Intermédiaire",
        type: "En ligne",
        prix: "32€/h",
        elevesInscrits: 15,
        note: "4.4/5",
        statut: "Actif",
        dateCreation: "2024-02-05",
        duree: "28h",
        avatar: "CL"
    },
    {
        id: 7,
        titre: "Histoire Moderne",
        professeur: "Antoine Morel",
        matiere: "Histoire",
        niveau: "Débutant",
        type: "Hybride",
        prix: "28€/h",
        elevesInscrits: 20,
        note: "4.3/5",
        statut: "Actif",
        dateCreation: "2024-02-10",
        duree: "22h",
        avatar: "AM"
    },
    {
        id: 8,
        titre: "Python pour Débutants",
        professeur: "Thomas Martin",
        matiere: "Informatique",
        niveau: "Débutant",
        type: "En ligne",
        prix: "27€/h",
        elevesInscrits: 38,
        note: "4.8/5",
        statut: "Actif",
        dateCreation: "2024-02-12",
        duree: "24h",
        avatar: "TM"
    },
    {
        id: 9,
        titre: "Préparation BAC Scientifique",
        professeur: "Jean Robert",
        matiere: "Mathématiques",
        niveau: "Avancé",
        type: "Présentiel",
        prix: "45€/h",
        elevesInscrits: 25,
        note: "4.9/5",
        statut: "Complet",
        dateCreation: "2024-02-08",
        duree: "50h",
        avatar: "JR"
    },
    {
        id: 10,
        titre: "Chimie Générale",
        professeur: "David Petit",
        matiere: "Chimie",
        niveau: "Intermédiaire",
        type: "En ligne",
        prix: "33€/h",
        elevesInscrits: 19,
        note: "4.6/5",
        statut: "Inactif",
        dateCreation: "2024-01-30",
        duree: "30h",
        avatar: "DP"
    }
];

// Fonction pour afficher les cours
function displayCourses(courses = coursesData) {
    const coursesTable = document.getElementById('coursesTable');
    if (!coursesTable) return;

    coursesTable.innerHTML = '';

    courses.forEach(course => {
        const row = document.createElement('tr');

        // Déterminer la classe de statut
        let statusClass = '';
        let statusText = course.statut;

        switch(course.statut) {
            case 'Actif':
                statusClass = 'status approved';
                break;
            case 'En attente':
                statusClass = 'status pending';
                break;
            case 'Complet':
                statusClass = 'status warning';
                statusText = '<i class="fas fa-users"></i> Complet';
                break;
            case 'Inactif':
                statusClass = 'status rejected';
                break;
            default:
                statusClass = 'status pending';
        }

        // Déterminer la classe du type de cours
        let typeClass = '';
        switch(course.type) {
            case 'En ligne':
                typeClass = 'badge blue';
                break;
            case 'Présentiel':
                typeClass = 'badge green';
                break;
            case 'Hybride':
                typeClass = 'badge orange';
                break;
        }

        row.innerHTML = `
            <td>
                <div class="course-info">
                    <div class="course-title">${course.titre}</div>
                    <div class="course-teacher">
                        <div class="user-avatar-xs">${course.avatar}</div>
                        ${course.professeur}
                    </div>
                </div>
            </td>
            <td>${course.matiere}</td>
            <td><span class="level-badge ${course.niveau.toLowerCase()}">${course.niveau}</span></td>
            <td><span class="${typeClass}">${course.type}</span></td>
            <td>${course.prix}</td>
            <td>
                <div class="students-count">
                    <i class="fas fa-users"></i>
                    ${course.elevesInscrits}
                </div>
            </td>
            <td>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    ${course.note}
                </div>
            </td>
            <td>${course.duree}</td>
            <td><span class="${statusClass}">${statusText}</span></td>
            <td>
                <div class="action-buttons">
                    <button class="action-btn view-course" title="Voir le cours" data-id="${course.id}">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="action-btn edit-course" title="Modifier" data-id="${course.id}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="action-btn ${course.statut === 'Actif' ? 'deactivate-course' : 'activate-course'}"
                            title="${course.statut === 'Actif' ? 'Désactiver' : 'Activer'}"
                            data-id="${course.id}">
                        <i class="fas ${course.statut === 'Actif' ? 'fa-pause' : 'fa-play'}"></i>
                    </button>
                    <button class="action-btn delete-course" title="Supprimer" data-id="${course.id}">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </td>
        `;

        coursesTable.appendChild(row);
    });

    // Ajouter les écouteurs d'événements
    attachCourseEventListeners();
}

// Fonction pour attacher les événements aux boutons cours
function attachCourseEventListeners() {
    // Voir cours
    document.querySelectorAll('.view-course').forEach(btn => {
        btn.addEventListener('click', function() {
            const courseId = this.getAttribute('data-id');
            const course = coursesData.find(c => c.id == courseId);
            showNotification(`👁️ Ouverture du cours: ${course.titre}`, 'primary');
        });
    });

    // Modifier cours
    document.querySelectorAll('.edit-course').forEach(btn => {
        btn.addEventListener('click', function() {
            const courseId = this.getAttribute('data-id');
            const course = coursesData.find(c => c.id == courseId);
            showNotification(`✏️ Modification du cours: ${course.titre}`, 'primary');
        });
    });

    // Activer/Désactiver cours
    document.querySelectorAll('.activate-course, .deactivate-course').forEach(btn => {
        btn.addEventListener('click', function() {
            const courseId = this.getAttribute('data-id');
            const course = coursesData.find(c => c.id == courseId);
            const newStatus = course.statut === 'Actif' ? 'Inactif' : 'Actif';

            if (confirm(`Êtes-vous sûr de vouloir ${newStatus === 'Inactif' ? 'désactiver' : 'activer'} le cours "${course.titre}" ?`)) {
                course.statut = newStatus;
                displayCourses();
                showNotification(`✅ Cours ${newStatus === 'Inactif' ? 'désactivé' : 'activé'} avec succès`, 'success');
            }
        });
    });

    // Supprimer cours
    document.querySelectorAll('.delete-course').forEach(btn => {
        btn.addEventListener('click', function() {
            const courseId = this.getAttribute('data-id');
            const course = coursesData.find(c => c.id == courseId);

            if (confirm(`Êtes-vous sûr de vouloir supprimer définitivement le cours "${course.titre}" ?`)) {
                const index = coursesData.findIndex(c => c.id == courseId);
                coursesData.splice(index, 1);
                displayCourses();
                updateCoursesStats(coursesData);
                showNotification(`🗑️ Cours "${course.titre}" supprimé`, 'danger');
            }
        });
    });
}

// Fonction pour filtrer les cours
function filterCourses() {
    const matiereFilter = document.getElementById('courseSubjectFilter').value;
    const niveauFilter = document.getElementById('courseLevelFilter').value;
    const typeFilter = document.getElementById('courseTypeFilter').value;
    const statutFilter = document.getElementById('courseStatusFilter').value;
    const searchTerm = document.getElementById('courseSearch').value.toLowerCase();

    const filteredCourses = coursesData.filter(course => {
        const matchesMatiere = matiereFilter === '' || course.matiere === matiereFilter;
        const matchesNiveau = niveauFilter === '' || course.niveau === niveauFilter;
        const matchesType = typeFilter === '' || course.type === typeFilter;
        const matchesStatut = statutFilter === '' || course.statut === statutFilter;
        const matchesSearch = searchTerm === '' ||
                            course.titre.toLowerCase().includes(searchTerm) ||
                            course.professeur.toLowerCase().includes(searchTerm) ||
                            course.matiere.toLowerCase().includes(searchTerm);

        return matchesMatiere && matchesNiveau && matchesType && matchesStatut && matchesSearch;
    });

    displayCourses(filteredCourses);
    updateCoursesStats(filteredCourses);
}

// Fonction pour mettre à jour les statistiques des cours
function updateCoursesStats(courses) {
    const totalCourses = courses.length;
    const activeCourses = courses.filter(c => c.statut === 'Actif').length;
    const totalStudents = courses.reduce((sum, course) => sum + course.elevesInscrits, 0);
    const totalRevenue = courses.reduce((sum, course) => {
        const prix = parseInt(course.prix);
        return sum + (prix * course.elevesInscrits);
    }, 0);

    document.getElementById('coursesCount').textContent = totalCourses;
    document.getElementById('activeCount').textContent = activeCourses;
    document.getElementById('studentsCount').textContent = totalStudents;
    document.getElementById('revenueCount').textContent = `${totalRevenue}€`;
}

// Fonction pour afficher la section cours
function showCoursesSection() {
    // Cacher les autres sections
    document.querySelector('.header').style.display = 'none';
    document.querySelector('.stats-cards').style.display = 'none';
    document.querySelectorAll('.content-section').forEach(section => {
        section.style.display = 'none';
    });

    // Créer ou afficher la section cours
    let coursesSection = document.getElementById('coursesSection');

    if (!coursesSection) {
        coursesSection = document.createElement('div');
        coursesSection.id = 'coursesSection';
        coursesSection.className = 'content-section';
        coursesSection.innerHTML = `
            <div class="section-header">
                <h3><i class="fas fa-book"></i> Gestion des Cours</h3>
                <div class="section-actions">
                    <button class="btn btn-primary" id="exportCourses">
                        <i class="fas fa-download"></i> Exporter
                    </button>
                    <button class="btn btn-outline" id="addCourse">
                        <i class="fas fa-plus"></i> Nouveau cours
                    </button>
                </div>
            </div>

            <!-- Statistiques rapides -->
            <div class="courses-stats">
                <div class="stat-item">
                    <div class="stat-number" id="coursesCount">${coursesData.length}</div>
                    <div class="stat-label">Total Cours</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number active" id="activeCount">${coursesData.filter(c => c.statut === 'Actif').length}</div>
                    <div class="stat-label">Cours Actifs</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" id="studentsCount">${coursesData.reduce((sum, c) => sum + c.elevesInscrits, 0)}</div>
                    <div class="stat-label">Élèves Total</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number revenue" id="revenueCount">${coursesData.reduce((sum, c) => sum + (parseInt(c.prix) * c.elevesInscrits), 0)}€</div>
                    <div class="stat-label">Revenu Estimé</div>
                </div>
            </div>

            <!-- Filtres -->
            <div class="filters-bar">
                <div class="filter-group">
                    <input type="text" id="courseSearch" placeholder="Rechercher un cours..." class="filter-input">
                </div>
                <div class="filter-group">
                    <select id="courseSubjectFilter" class="filter-select">
                        <option value="">Toutes matières</option>
                        <option value="Informatique">Informatique</option>
                        <option value="Anglais">Anglais</option>
                        <option value="Physique">Physique</option>
                        <option value="Mathématiques">Mathématiques</option>
                        <option value="Chimie">Chimie</option>
                        <option value="Français">Français</option>
                        <option value="Histoire">Histoire</option>
                    </select>
                </div>
                <div class="filter-group">
                    <select id="courseLevelFilter" class="filter-select">
                        <option value="">Tous niveaux</option>
                        <option value="Débutant">Débutant</option>
                        <option value="Intermédiaire">Intermédiaire</option>
                        <option value="Avancé">Avancé</option>
                    </select>
                </div>
                <div class="filter-group">
                    <select id="courseTypeFilter" class="filter-select">
                        <option value="">Tous types</option>
                        <option value="En ligne">En ligne</option>
                        <option value="Présentiel">Présentiel</option>
                        <option value="Hybride">Hybride</option>
                    </select>
                </div>
                <div class="filter-group">
                    <select id="courseStatusFilter" class="filter-select">
                        <option value="">Tous statuts</option>
                        <option value="Actif">Actif</option>
                        <option value="En attente">En attente</option>
                        <option value="Complet">Complet</option>
                        <option value="Inactif">Inactif</option>
                    </select>
                </div>
                <div class="filter-group">
                    <button class="btn btn-outline" id="resetCourseFilters">
                        <i class="fas fa-times"></i> Effacer
                    </button>
                </div>
            </div>

            <!-- Tableau -->
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Cours</th>
                            <th>Matière</th>
                            <th>Niveau</th>
                            <th>Type</th>
                            <th>Prix</th>
                            <th>Élèves</th>
                            <th>Note</th>
                            <th>Durée</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="coursesTable">
                    </tbody>
                </table>
            </div>
        `;

        document.querySelector('.main-content').appendChild(coursesSection);

        // Ajouter les écouteurs d'événements pour les filtres
        document.getElementById('courseSearch').addEventListener('input', filterCourses);
        document.getElementById('courseSubjectFilter').addEventListener('change', filterCourses);
        document.getElementById('courseLevelFilter').addEventListener('change', filterCourses);
        document.getElementById('courseTypeFilter').addEventListener('change', filterCourses);
        document.getElementById('courseStatusFilter').addEventListener('change', filterCourses);
        document.getElementById('resetCourseFilters').addEventListener('click', resetCourseFilters);
        document.getElementById('exportCourses').addEventListener('click', exportCoursesData);
        document.getElementById('addCourse').addEventListener('click', addNewCourse);

        // Afficher les cours
        displayCourses();
        updateCoursesStats(coursesData);
    }

    coursesSection.style.display = 'block';
}

// Fonction pour réinitialiser les filtres cours
function resetCourseFilters() {
    document.getElementById('courseSearch').value = '';
    document.getElementById('courseSubjectFilter').value = '';
    document.getElementById('courseLevelFilter').value = '';
    document.getElementById('courseTypeFilter').value = '';
    document.getElementById('courseStatusFilter').value = '';
    filterCourses();
}

// Fonction pour exporter les cours
function exportCoursesData() {
    showNotification('Export des cours en cours...', 'primary');
    setTimeout(() => {
        showNotification('Liste des cours exportée avec succès !', 'success');
    }, 1500);
}

// Fonction pour ajouter un nouveau cours
function addNewCourse() {
    showNotification('🆕 Fonctionnalité d\'ajout de cours à implémenter', 'primary');
}

// Ajouter au gestionnaire de navigation existant
document.addEventListener('DOMContentLoaded', function() {
    // ... votre code existant ...

    // Gestion du clic sur Cours dans le menu
    document.querySelector('a[href="#"] .fa-book').closest('a').addEventListener('click', function(e) {
        e.preventDefault();
        showCoursesSection();

        // Mettre à jour le menu actif
        document.querySelectorAll('.menu-item a').forEach(link => {
            link.classList.remove('active');
        });
        this.classList.add('active');
    });
});

// Données des réservations
const bookingsData = [
    {
        id: 1,
        eleve: "Marie Dubois",
        professeur: "Thomas Martin",
        cours: "Introduction à la Programmation",
        date: "2024-03-15",
        heure: "14:00",
        duree: "2h",
        type: "En ligne",
        statut: "Confirmée",
        prix: "50€",
        dateReservation: "2024-03-10",
        avatarEleve: "MD",
        avatarProf: "TM"
    },
    {
        id: 2,
        eleve: "Sophie Chen",
        professeur: "Julie Garcia",
        cours: "Anglais Conversationnel",
        date: "2024-03-16",
        heure: "10:30",
        duree: "1h",
        type: "Présentiel",
        statut: "Confirmée",
        prix: "35€",
        dateReservation: "2024-03-11",
        avatarEleve: "SC",
        avatarProf: "JG"
    },
    {
        id: 3,
        eleve: "Alice Moreau",
        professeur: "Pierre Lambert",
        cours: "Physique Quantique Avancée",
        date: "2024-03-17",
        heure: "16:00",
        duree: "2h",
        type: "Hybride",
        statut: "En attente",
        prix: "80€",
        dateReservation: "2024-03-12",
        avatarEleve: "AM",
        avatarProf: "PL"
    },
    {
        id: 4,
        eleve: "Lucas Bernard",
        professeur: "Jean Robert",
        cours: "Algèbre Linéaire",
        date: "2024-03-18",
        heure: "09:00",
        duree: "1h30",
        type: "En ligne",
        statut: "Confirmée",
        prix: "45€",
        dateReservation: "2024-03-13",
        avatarEleve: "LB",
        avatarProf: "JR"
    },
    {
        id: 5,
        eleve: "Hugo Girard",
        professeur: "David Petit",
        cours: "Chimie Organique",
        date: "2024-03-19",
        heure: "15:30",
        duree: "2h",
        type: "Présentiel",
        statut: "Annulée",
        prix: "76€",
        dateReservation: "2024-03-08",
        avatarEleve: "HG",
        avatarProf: "DP"
    },
    {
        id: 6,
        eleve: "Emma Blanc",
        professeur: "Catherine Leroy",
        cours: "Littérature Française",
        date: "2024-03-20",
        heure: "11:00",
        duree: "1h",
        type: "En ligne",
        statut: "Confirmée",
        prix: "32€",
        dateReservation: "2024-03-14",
        avatarEleve: "EB",
        avatarProf: "CL"
    },
    {
        id: 7,
        eleve: "Léa Perrin",
        professeur: "Antoine Morel",
        cours: "Histoire Moderne",
        date: "2024-03-21",
        heure: "13:30",
        duree: "1h30",
        type: "Hybride",
        statut: "En attente",
        prix: "42€",
        dateReservation: "2024-03-15",
        avatarEleve: "LP",
        avatarProf: "AM"
    },
    {
        id: 8,
        eleve: "Mathis Clement",
        professeur: "Julie Garcia",
        cours: "Anglais Conversationnel",
        date: "2024-03-22",
        heure: "17:00",
        duree: "1h",
        type: "En ligne",
        statut: "Confirmée",
        prix: "35€",
        dateReservation: "2024-03-16",
        avatarEleve: "MC",
        avatarProf: "JG"
    },
    {
        id: 9,
        eleve: "Camille Roux",
        professeur: "Thomas Martin",
        cours: "Python pour Débutants",
        date: "2024-03-23",
        heure: "14:30",
        duree: "2h",
        type: "En ligne",
        statut: "Terminée",
        prix: "54€",
        dateReservation: "2024-03-09",
        avatarEleve: "CR",
        avatarProf: "TM"
    },
    {
        id: 10,
        eleve: "Nathan Noel",
        professeur: "Jean Robert",
        cours: "Préparation BAC Scientifique",
        date: "2024-03-24",
        heure: "10:00",
        duree: "2h",
        type: "Présentiel",
        statut: "Confirmée",
        prix: "90€",
        dateReservation: "2024-03-17",
        avatarEleve: "NN",
        avatarProf: "JR"
    }
];

// Fonction pour afficher les réservations
function displayBookings(bookings = bookingsData) {
    const bookingsTable = document.getElementById('bookingsTable');
    if (!bookingsTable) return;

    bookingsTable.innerHTML = '';

    bookings.forEach(booking => {
        const row = document.createElement('tr');

        // Déterminer la classe de statut
        let statusClass = '';
        let statusText = booking.statut;

        switch(booking.statut) {
            case 'Confirmée':
                statusClass = 'status approved';
                break;
            case 'En attente':
                statusClass = 'status pending';
                break;
            case 'Annulée':
                statusClass = 'status rejected';
                break;
            case 'Terminée':
                statusClass = 'status completed';
                break;
            default:
                statusClass = 'status pending';
        }

        // Déterminer la classe du type
        let typeClass = '';
        switch(booking.type) {
            case 'En ligne':
                typeClass = 'badge blue';
                break;
            case 'Présentiel':
                typeClass = 'badge green';
                break;
            case 'Hybride':
                typeClass = 'badge orange';
                break;
        }

        row.innerHTML = `
            <td>
                <div class="booking-info">
                    <div class="booking-users">
                        <div class="user-pair">
                            <div class="user-avatar-xs">${booking.avatarEleve}</div>
                            <div class="user-avatar-xs">${booking.avatarProf}</div>
                        </div>
                        <div class="user-names">
                            <div class="student-name">${booking.eleve}</div>
                            <div class="teacher-name">${booking.professeur}</div>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <div class="course-name">${booking.cours}</div>
            </td>
            <td>
                <div class="datetime-info">
                    <div class="booking-date">${formatDisplayDate(booking.date)}</div>
                    <div class="booking-time">${booking.heure}</div>
                </div>
            </td>
            <td>${booking.duree}</td>
            <td><span class="${typeClass}">${booking.type}</span></td>
            <td>${booking.prix}</td>
            <td><span class="${statusClass}">${statusText}</span></td>
            <td>
                <div class="action-buttons">
                    ${booking.statut === 'En attente' ? `
                        <button class="action-btn confirm-booking" title="Confirmer" data-id="${booking.id}">
                            <i class="fas fa-check"></i>
                        </button>
                        <button class="action-btn cancel-booking" title="Refuser" data-id="${booking.id}">
                            <i class="fas fa-times"></i>
                        </button>
                    ` : ''}
                    ${booking.statut === 'Confirmée' ? `
                        <button class="action-btn complete-booking" title="Marquer comme terminée" data-id="${booking.id}">
                            <i class="fas fa-flag-checkered"></i>
                        </button>
                    ` : ''}
                    <button class="action-btn view-booking" title="Voir détails" data-id="${booking.id}">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="action-btn edit-booking" title="Modifier" data-id="${booking.id}">
                        <i class="fas fa-edit"></i>
                    </button>
                    ${booking.statut !== 'Terminée' && booking.statut !== 'Annulée' ? `
                        <button class="action-btn cancel-booking-main" title="Annuler" data-id="${booking.id}">
                            <i class="fas fa-ban"></i>
                        </button>
                    ` : ''}
                </div>
            </td>
        `;

        bookingsTable.appendChild(row);
    });

    // Ajouter les écouteurs d'événements
    attachBookingEventListeners();
}

// Fonction pour formater la date d'affichage
function formatDisplayDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString('fr-FR', {
        weekday: 'short',
        day: 'numeric',
        month: 'short'
    });
}

// Fonction pour attacher les événements aux boutons réservations
function attachBookingEventListeners() {
    // Confirmer réservation
    document.querySelectorAll('.confirm-booking').forEach(btn => {
        btn.addEventListener('click', function() {
            const bookingId = this.getAttribute('data-id');
            const booking = bookingsData.find(b => b.id == bookingId);

            booking.statut = 'Confirmée';
            displayBookings();
            showNotification(`✅ Réservation confirmée pour ${booking.eleve}`, 'success');
        });
    });

    // Refuser réservation
    document.querySelectorAll('.cancel-booking').forEach(btn => {
        btn.addEventListener('click', function() {
            const bookingId = this.getAttribute('data-id');
            const booking = bookingsData.find(b => b.id == bookingId);

            if (confirm(`Êtes-vous sûr de vouloir refuser la réservation de ${booking.eleve} ?`)) {
                booking.statut = 'Annulée';
                displayBookings();
                showNotification(`❌ Réservation refusée`, 'danger');
            }
        });
    });

    // Marquer comme terminée
    document.querySelectorAll('.complete-booking').forEach(btn => {
        btn.addEventListener('click', function() {
            const bookingId = this.getAttribute('data-id');
            const booking = bookingsData.find(b => b.id == bookingId);

            booking.statut = 'Terminée';
            displayBookings();
            showNotification(`🏁 Réservation marquée comme terminée`, 'success');
        });
    });

    // Annuler réservation (bouton principal)
    document.querySelectorAll('.cancel-booking-main').forEach(btn => {
        btn.addEventListener('click', function() {
            const bookingId = this.getAttribute('data-id');
            const booking = bookingsData.find(b => b.id == bookingId);

            if (confirm(`Êtes-vous sûr de vouloir annuler la réservation de ${booking.eleve} ?`)) {
                booking.statut = 'Annulée';
                displayBookings();
                showNotification(`🚫 Réservation annulée`, 'warning');
            }
        });
    });

    // Voir détails
    document.querySelectorAll('.view-booking').forEach(btn => {
        btn.addEventListener('click', function() {
            const bookingId = this.getAttribute('data-id');
            const booking = bookingsData.find(b => b.id == bookingId);
            showNotification(`👁️ Détails de la réservation: ${booking.eleve} - ${booking.cours}`, 'primary');
        });
    });

    // Modifier réservation
    document.querySelectorAll('.edit-booking').forEach(btn => {
        btn.addEventListener('click', function() {
            const bookingId = this.getAttribute('data-id');
            const booking = bookingsData.find(b => b.id == bookingId);
            showNotification(`✏️ Modification de la réservation: ${booking.eleve}`, 'primary');
        });
    });
}

// Fonction pour filtrer les réservations
function filterBookings() {
    const statutFilter = document.getElementById('bookingStatusFilter').value;
    const typeFilter = document.getElementById('bookingTypeFilter').value;
    const dateFilter = document.getElementById('bookingDateFilter').value;
    const searchTerm = document.getElementById('bookingSearch').value.toLowerCase();

    const filteredBookings = bookingsData.filter(booking => {
        const matchesStatut = statutFilter === '' || booking.statut === statutFilter;
        const matchesType = typeFilter === '' || booking.type === typeFilter;
        const matchesDate = dateFilter === '' || booking.date === dateFilter;
        const matchesSearch = searchTerm === '' ||
                            booking.eleve.toLowerCase().includes(searchTerm) ||
                            booking.professeur.toLowerCase().includes(searchTerm) ||
                            booking.cours.toLowerCase().includes(searchTerm);

        return matchesStatut && matchesType && matchesDate && matchesSearch;
    });

    displayBookings(filteredBookings);
    updateBookingsStats(filteredBookings);
}

// Fonction pour mettre à jour les statistiques des réservations
function updateBookingsStats(bookings) {
    const totalBookings = bookings.length;
    const confirmedBookings = bookings.filter(b => b.statut === 'Confirmée').length;
    const pendingBookings = bookings.filter(b => b.statut === 'En attente').length;
    const totalRevenue = bookings
        .filter(b => b.statut === 'Confirmée' || b.statut === 'Terminée')
        .reduce((sum, booking) => {
            const prix = parseInt(booking.prix);
            return sum + prix;
        }, 0);

    document.getElementById('bookingsCount').textContent = totalBookings;
    document.getElementById('confirmedCount').textContent = confirmedBookings;
    document.getElementById('pendingCount').textContent = pendingBookings;
    document.getElementById('revenueCount').textContent = `${totalRevenue}€`;
}

// Fonction pour afficher la section réservations
function showBookingsSection() {
    // Cacher les autres sections
    document.querySelector('.header').style.display = 'none';
    document.querySelector('.stats-cards').style.display = 'none';
    document.querySelectorAll('.content-section').forEach(section => {
        section.style.display = 'none';
    });

    // Créer ou afficher la section réservations
    let bookingsSection = document.getElementById('bookingsSection');

    if (!bookingsSection) {
        bookingsSection = document.createElement('div');
        bookingsSection.id = 'bookingsSection';
        bookingsSection.className = 'content-section';
        bookingsSection.innerHTML = `
            <div class="section-header">
                <h3><i class="fas fa-calendar-alt"></i> Gestion des Réservations</h3>
                <div class="section-actions">
                    <button class="btn btn-primary" id="exportBookings">
                        <i class="fas fa-download"></i> Exporter
                    </button>
                    <button class="btn btn-outline" id="addBooking">
                        <i class="fas fa-plus"></i> Nouvelle réservation
                    </button>
                </div>
            </div>

            <!-- Statistiques rapides -->
            <div class="bookings-stats">
                <div class="stat-item">
                    <div class="stat-number" id="bookingsCount">${bookingsData.length}</div>
                    <div class="stat-label">Total Réservations</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number confirmed" id="confirmedCount">${bookingsData.filter(b => b.statut === 'Confirmée').length}</div>
                    <div class="stat-label">Confirmées</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number pending" id="pendingCount">${bookingsData.filter(b => b.statut === 'En attente').length}</div>
                    <div class="stat-label">En attente</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number revenue" id="revenueCount">${bookingsData.filter(b => b.statut === 'Confirmée' || b.statut === 'Terminée').reduce((sum, b) => sum + parseInt(b.prix), 0)}€</div>
                    <div class="stat-label">Revenu Total</div>
                </div>
            </div>

            <!-- Filtres -->
            <div class="filters-bar">
                <div class="filter-group">
                    <input type="text" id="bookingSearch" placeholder="Rechercher une réservation..." class="filter-input">
                </div>
                <div class="filter-group">
                    <select id="bookingStatusFilter" class="filter-select">
                        <option value="">Tous statuts</option>
                        <option value="Confirmée">Confirmée</option>
                        <option value="En attente">En attente</option>
                        <option value="Annulée">Annulée</option>
                        <option value="Terminée">Terminée</option>
                    </select>
                </div>
                <div class="filter-group">
                    <select id="bookingTypeFilter" class="filter-select">
                        <option value="">Tous types</option>
                        <option value="En ligne">En ligne</option>
                        <option value="Présentiel">Présentiel</option>
                        <option value="Hybride">Hybride</option>
                    </select>
                </div>
                <div class="filter-group">
                    <input type="date" id="bookingDateFilter" class="filter-input">
                </div>
                <div class="filter-group">
                    <button class="btn btn-outline" id="resetBookingFilters">
                        <i class="fas fa-times"></i> Effacer
                    </button>
                </div>
            </div>

            <!-- Tableau -->
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Élève / Professeur</th>
                            <th>Cours</th>
                            <th>Date & Heure</th>
                            <th>Durée</th>
                            <th>Type</th>
                            <th>Prix</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="bookingsTable">
                    </tbody>
                </table>
            </div>
        `;

        document.querySelector('.main-content').appendChild(bookingsSection);

        // Ajouter les écouteurs d'événements pour les filtres
        document.getElementById('bookingSearch').addEventListener('input', filterBookings);
        document.getElementById('bookingStatusFilter').addEventListener('change', filterBookings);
        document.getElementById('bookingTypeFilter').addEventListener('change', filterBookings);
        document.getElementById('bookingDateFilter').addEventListener('change', filterBookings);
        document.getElementById('resetBookingFilters').addEventListener('click', resetBookingFilters);
        document.getElementById('exportBookings').addEventListener('click', exportBookingsData);
        document.getElementById('addBooking').addEventListener('click', addNewBooking);

        // Afficher les réservations
        displayBookings();
        updateBookingsStats(bookingsData);
    }

    bookingsSection.style.display = 'block';
}

// Fonction pour réinitialiser les filtres réservations
function resetBookingFilters() {
    document.getElementById('bookingSearch').value = '';
    document.getElementById('bookingStatusFilter').value = '';
    document.getElementById('bookingTypeFilter').value = '';
    document.getElementById('bookingDateFilter').value = '';
    filterBookings();
}

// Fonction pour exporter les réservations
function exportBookingsData() {
    showNotification('Export des réservations en cours...', 'primary');
    setTimeout(() => {
        showNotification('Liste des réservations exportée avec succès !', 'success');
    }, 1500);
}

// Fonction pour ajouter une nouvelle réservation
function addNewBooking() {
    showNotification('🆕 Fonctionnalité d\'ajout de réservation à implémenter', 'primary');
}

// Ajouter au gestionnaire de navigation existant
document.addEventListener('DOMContentLoaded', function() {
    // ... votre code existant ...

    // Gestion du clic sur Réservations dans le menu
    document.querySelector('a[href="#"] .fa-calendar-alt').closest('a').addEventListener('click', function(e) {
        e.preventDefault();
        showBookingsSection();

        // Mettre à jour le menu actif
        document.querySelectorAll('.menu-item a').forEach(link => {
            link.classList.remove('active');
        });
        this.classList.add('active');
    });
});
    </script>
</body>

@endsection
