
# 🌊 NovaCraft Studio - Phase 2

Site web dynamique pour une agence de solutions digitales, développé en PHP et MySQL.

## 📋 Description

Application web avec système d'authentification complet permettant aux utilisateurs de s'inscrire, se connecter, gérer leur profil et envoyer des messages de contact.

## ✨ Fonctionnalités

- 🔐 **Inscription** : Création de compte avec validation
- 🔑 **Connexion** : Authentification sécurisée
- 👤 **Profil** : Page profil utilisateur personnalisée
- 🚪 **Déconnexion** : Déconnexion sécurisée
- 📧 **Contact** : Formulaire de contact avec validation
- 🔒 **Sécurité** : Mots de passe hashés et requêtes préparées

## 🚀 Installation

### Prérequis
- PHP 7.4+
- MySQL 5.7+
- Apache avec mod_rewrite

### Étapes

1. **Cloner le projet**
```bash
git clone https://github.com/BOUCHAIB-EL-HAIDI/S3_B2_NovaCraft_Phase_2.git
cd S3_B2_NovaCraft_Phase_2
```

2. **Créer la base de données**
```bash
mysql -u root -p < schema.sql
```

3. **Configurer la connexion**

Modifier `connection.php` :
```php
$host = 'localhost';
$user = 'root';
$password = 'votre_mot_de_passe';
$database = 'novacraft';
```

4. **Démarrer le serveur**

Placez le projet dans `htdocs` (XAMPP) ou `www` (WAMP)

Accédez à : `http://localhost/S3_B2_NovaCraft_Phase_2/public`

## 🗄️ Base de Données

### Table `users`
- `id` : Identifiant unique
- `name` : Nom d'utilisateur
- `email` : Email (unique)
- `password` : Mot de passe hashé
- `created_at` : Date de création

### Table `contacts`
- `id` : Identifiant unique
- `name` : Nom de l'expéditeur
- `email` : Email
- `message` : Message
- `created_at` : Date d'envoi

## 📁 Structure

```
S3_B2_NovaCraft_Phase_2/
├── Controllers/       # Logique de l'application
├── Views/            # Pages HTML/PHP
├── Partials/         # Header et Footer
├── Data/             # Fichiers JSON
├── public/           # Point d'entrée (index.php)
├── connection.php    # Connexion MySQL
├── functions.php     # Router et fonctions
└── schema.sql        # Structure de la base de données
```

## 🔒 Sécurité

- ✅ Mots de passe hashés avec `password_hash()`
- ✅ Requêtes SQL préparées (protection injection SQL)
- ✅ Validation des entrées utilisateur
- ✅ Sessions PHP sécurisées

## 📝 Règles de Validation

### Inscription
- **Username** : 2+ caractères (lettres, chiffres, _, -)
- **Email** : Format email valide
- **Password** : 8+ caractères avec lettres, chiffres et caractères spéciaux (@$!%*#?&)

## 🧪 Test

1. Créer un compte : `/signup`
2. Se connecter : `/login`
3. Voir le profil : `/profile`
4. Se déconnecter : cliquer sur "Déconnexion"
5. Envoyer un message : `/contact`

## 👨‍💻 Auteur

**BOUCHAIB EL HAIDI**

Formation : Développeur Web et Web Mobile - Phase 2

## 📅 Date

Décembre 2024