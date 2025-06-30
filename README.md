# SPUP eBulletin

SPUP eBulletin is a modern web application for managing and viewing digital memos and announcements for the SPUP community. It features a responsive UI, image attachments, user authentication, and a clean dashboard experience.

---

## 🚀 Installation & Setup

### Requirements
- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL or compatible database

### 1. Clone the repository
```bash
git clone <your-repo-url>
cd <your-repo-directory>
```

### 2. Install PHP dependencies
```bash
composer install
```

### 3. Install JavaScript dependencies
```bash
npm install
```

### 4. Copy and configure environment variables
```bash
cp .env.example .env
# Edit .env and set your database and app settings
```

### 5. Generate application key
```bash
php artisan key:generate
```

### 6. Run migrations and seeders (optional)
```bash
php artisan migrate --seed
```

### 7. Build frontend assets
```bash
npm run build
# For development, use: npm run dev
```

### 8. Start the development server
```bash
php artisan serve
```

Visit [http://localhost:8000](http://localhost:8000) in your browser.

---

## 📝 Features

- **Dashboard:** View a list or grid of the latest memos/announcements with author, date, and status.
- **Memo Details:** Click a memo to view its full content, author info, and any image attachments in a modal.
- **Image Attachments:** Click on an image to view it in a modal, scaled to fit your screen.
- **Responsive Design:** Works on both desktop and mobile devices.
- **User Authentication:** Login/register to access personalized features (if enabled).
- **Profile Management:** Update your profile information and avatar.
- **Status Badges:** Visual indicators for new and published memos.
- **Modern UI Components:** Cards, badges, avatars, dropdown menus, dialogs, and more.
- **Accessibility:** Keyboard navigation and accessible components.
- **Security:** Uses Laravel Sanctum for authentication and DOMPurify for safe HTML rendering.

---

## 🛠️ Packages & Technologies Used

### Backend (Laravel)
- **laravel/framework**: Main backend framework.
- **inertiajs/inertia-laravel**: Server-side Inertia.js adapter for Laravel.
- **laravel/sanctum**: API authentication.
- **filament/filament**: (If admin panel is used) Admin panel and resource management.
- **bezhansalleh/filament-shield**: Role and permission management for Filament.
- **devaslanphp/filament-avatar**: Avatar support for Filament.
- **kreait/laravel-firebase**: Firebase integration (for notifications, if enabled).
- **laravel-notification-channels/fcm**: Firebase Cloud Messaging for push notifications.
- **tightenco/ziggy**: Exposes Laravel routes to JavaScript.

### Frontend (React + Inertia.js)
- **@inertiajs/react**: Inertia.js React adapter for SPA-like navigation.
- **react, react-dom**: Core React libraries.
- **@heroicons/react**: Beautiful SVG icons.
- **@radix-ui/react-*:** (avatar, dialog, dropdown-menu, scroll-area, etc.) for accessible, headless UI primitives.
- **date-fns**: Date formatting and manipulation.
- **clsx, class-variance-authority**: Utility libraries for conditional class names and variant management.
- **dompurify**: Securely render HTML content.
- **html-react-parser**: Parse and render HTML in React.
- **lucide-react**: Additional icon set.
- **axios**: HTTP client for API requests.

### Styling
- **tailwindcss**: Utility-first CSS framework.
- **@tailwindcss/forms**: Better form element styling.
- **tailwindcss-animate**: Animations for Tailwind.
- **tailwind-merge**: Utility for merging Tailwind classes.

### Build Tools
- **vite**: Fast frontend build tool.
- **laravel-vite-plugin**: Integrates Vite with Laravel.

---

## 📚 How the App Works

- **Dashboard:** Shows memos in a grid (desktop) or list (mobile). Each memo displays title, author, date, and a status badge.
- **Memo Details:** Clicking a memo opens a dialog with full content, author info, and attachments.
- **Image Modal:** Clicking an image opens it in a modal, scaled to fit the screen (using `<img>` with `object-contain`).
- **Profile:** Users can update their name, email, and avatar.
- **Authentication:** Register, login, and manage your account securely.
- **Admin Panel:** (If enabled) Manage users, memos, and permissions via Filament.

---

## 🧩 Folder Structure

- `resources/js/Pages/`: Main React pages (Dashboard, Profile, Auth, etc.)
- `resources/js/Components/`: Reusable UI components (Card, Badge, Dialog, etc.)
- `resources/js/Layouts/`: Layout components for authenticated/guest users.
- `resources/css/`: Tailwind and custom CSS.
- `routes/`: Laravel route definitions.
- `app/`: Laravel backend logic (controllers, models, etc.)

---

## 🛡️ Security

- All user input is validated server-side.
- HTML content is sanitized with DOMPurify.
- Authentication is handled via Laravel Sanctum.
- Permissions and roles (if enabled) are managed with Filament Shield.

---

## 🤝 Contributing

Pull requests are welcome! Please open an issue first to discuss what you would like to change.

---

## 📄 License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).
