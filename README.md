# Pack Fans Unite

A Green Bay Packers-themed fan website built with PHP and MySQL, featuring user accounts and a personal bookmark manager.

## Features
- **User accounts** — registration, login/logout, and session-based authentication
- **Forgot password** — looks up a user's stored credentials by email and sends them a reminder
- **Bookmark manager (logged-in users only)** — full CRUD functionality:
  - Add a new bookmark (title, URL, comment)
  - View all bookmarks in a paginated table
  - Search bookmarks by title, URL, or comment
  - Update or delete existing bookmarks
- **Contact page** and a **related links page** (Packers news/resources)
- **Custom themed design** — Packers green and gold styling shared across all pages via common header/footer includes

## Tech
PHP (procedural, `mysqli` extension), MySQL, HTML/CSS

## Project structure
- `Home/` — landing page, login, register, logout, forgot password, related links
- `bookmark/` — add, view, search, update, and delete bookmark records
- `contact/` — contact page
- `includes/` — shared header and footer
- `mysqli_connect.php` — database connection config (see setup below)

## How to run
1. Set up a local server environment (e.g. XAMPP or MAMP) with PHP and MySQL
2. Create a MySQL database with `users` and `bookmark` tables
3. Copy `mysqli_connect.php` and fill in your own `DB_USER`, `DB_PASSWORD`, and `DB_NAME` — **never commit real database credentials**
4. Place the project folder in your server's root directory and navigate to it in your browser
