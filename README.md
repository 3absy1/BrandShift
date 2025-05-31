# BrandShift BackEnd Project

This is a Laravel-based blog API application featuring:

- User and Admin roles
- API authentication using Laravel Sanctum
- CRUD operations for Posts
- Authorization for resource actions
- Structured API responses using Laravel API Resources
- Postman collection included for testing

---

## 🧰 Requirements

- PHP >= 8.1
- Composer
- MySQL or any compatible DB
- Laravel 10+
- Node.js (for frontend, if needed)

---

## 🚀 Setup Instructions

1. **Clone the repository:**

```bash
git clone https://github.com/your-username/brandshift-api.git
cd brandshift-api


    Install dependencies:

composer install

    Set up environment:

cp .env.example .env
php artisan key:generate

    Set your database in .env:

DB_DATABASE=your_db_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

    Run migrations and seeders:

php artisan migrate --seed

    Run the server:

php artisan serve

👤 Admin Login

You can log in as an admin with these credentials:

Email: admin@example.com
Password: password

There are also two regular users:

Email: user1@example.com
Password: password

Email: user2@example.com
Password: password

📬 Postman Collection

You can find the Postman collection in the root directory:

🛡 Roles & Permissions

This app includes a basic role field in the users table:

    admin – Full access

    user – Limited to own post operations

You can expand this using Gates or Policies.

📝 Notes

    Passwords are hashed automatically

    API returns standardized JSON using Laravel Resource Collections

    Auth routes use Sanctum tokens, not sessions

    📫 Contact

For support or contributions, reach out to yossfeabdaslm123@gmail.com.


---

Let me know if you'd like me to generate a sample Postman collection for you as well (or include the download structure)!

