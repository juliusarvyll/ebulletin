# SPUP eBulletin

SPUP eBulletin is a web application for managing and viewing digital memos and announcements for the SPUP community. Users can view the latest memos, see attachments, and get updates in a modern, responsive interface.

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

## 📝 How the App Works
- **Dashboard:** View a list or grid of the latest memos/announcements.
- **Memo Details:** Click a memo to view its full content and any image attachments.
- **Image Attachments:** Click on an image to view it in a modal, scaled to fit your screen.
- **Responsive Design:** Works on both desktop and mobile devices.
- **User Authentication:** Login/register to access personalized features (if enabled).
