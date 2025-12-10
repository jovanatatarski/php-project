# Tea Shop (Prodavnica Čajeva)

Welcome to the **Tea Shop**, a simple PHP web application for browsing and ordering organic teas.

## 📖 About the Project

This project is a web presentation for a tea shop that allows users to:
- Browse tea varieties (Chamomile, Green Tea, Hibiscus...).
- CHeck out the history of the shop.
- Order products via an online form.
- Use administrative functionalities (CRUD operations on the database).

## 🚀 Features

- **Home Page (`index.php`)**: Displays popular teas and basic information.
- **About Us (`onama.php`)**: Company history and list of available tea types.
- **Order (`poruci.php`)**:
  - Form for ordering new products.
  - Display of the best-selling tea from the database.
  - Automatic addition, update, and deletion of database records (backend logic demonstration).

## 🛠️ Technologies

- **Frontend**: HTML5, CSS3
- **Backend**: PHP (Object-Oriented & Procedural)
- **Database**: MySQL

## ⚙️ Installation and Setup

To run this project on your local machine:

1. **Prerequisites**: Install [XAMPP](https://www.apachefriends.org/) or [WAMP](https://www.wampserver.com/) server.
2. **Clone**: Download or clone this repository into your `htdocs` folder.
3. **Database**:
   - Create a new database named `prodavnica`.
   - Import the `SQL` structure (or create a table `cajevi` with columns: `broj`, `naziv`, `proizvodjac`, `cena`).
4. **Run**:
   - Open your browser and go to `http://localhost/php-project-main/php-project-main/`.

## 📂 Database Structure

Table `cajevi` (teas):
- `broj` (ID)
- `naziv` (Name - String)
- `proizvodjac` (Manufacturer - String)
- `cena` (Price - Decimal/String)

## 📝 Author

This project was created for learning purposes and to demonstrate PHP skills.
