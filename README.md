# Devanno Andhika - Personal Portfolio 🚀

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Alpine.js](https://img.shields.io/badge/Alpine.js-2D3441?style=for-the-badge&logo=alpine.js&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)

A modern, responsive, and dynamic full-stack personal portfolio website built to showcase my projects, educational background, and skills as a Software Engineering Enthusiast. 

## ✨ Features

- **Dynamic Content:** Education history and Portfolio projects are fetched directly from a MySQL database, making it easy to update without touching the code.
- **Functional Contact Form:** A fully working contact form that securely validates and stores visitor messages directly into the database.
- **Responsive Design:** Mobile-first approach using Tailwind CSS, ensuring the website looks great on desktops, tablets, and smartphones.
- **Smooth Animations:** Integrated with Alpine.js for seamless interactive UI elements, including an animated mobile sidebar and scroll-triggered transitions.
- **Modular Components:** Clean and maintainable Laravel Blade components (Layout, Navbar, Footer).

## 🛠️ Tech Stack

- **Backend:** Laravel (PHP)
- **Frontend:** Blade Templating, Tailwind CSS, Alpine.js
- **Database:** MySQL
- **Tooling:** Vite, Composer, NPM

## 🚀 Getting Started

If you want to run this project locally on your machine, follow these steps:

### Prerequisites
Make sure you have the following installed:
- PHP (>= 8.1)
- Composer
- Node.js & NPM
- MySQL (e.g., via Laragon, XAMPP, or DBngin)

### Installation Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/devannoap31/portfolio-laravel.git
   
   cd portfolio-laravel
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```Bash
   npm install
   ```
4. **Environment Setup**<br>
Copy the `.env.example` file and rename it to `.env`.
   ```bash
   cp .env.example .env
   ```

5. **Generate Application Key**
   ```Bash
   php artisan key:generate
   ```

6. **Database Configuration**<br>
Open the `.env` file and update your database credentials:
   ```Code snippet
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```

7. **Run Migrations**<br>
Generate the required tables (contacts, educations, projects, etc.) in your database:
   ```Bash
   php artisan migrate
   ```
   (Note: You can manually populate the `educations` and `projects` tables using your preferred SQL client, or create a seeder).

8. **Build Frontend Assets**<br>
Compile the Tailwind CSS and Alpine.js files:
   ```Bash
   npm run dev
   ```

9. **Start the Local Server**<br>
Open a new terminal tab and run:
   ```Bash
   php artisan serve
   ```

10. **Visit the App**<br>
Open your browser and navigate to `http://localhost:8000`.

## 👨‍💻 About the Author
Devanno Andhika Putra Software Engineering Technology Student at Politeknik Indonusa Surakarta. Passionate about Full-Stack Web Development and Artificial Intelligence.

Feel free to reach out to me via the Contact section on the website!

---
Built with ❤️ using Laravel