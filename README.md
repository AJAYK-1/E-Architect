# 🏛️ E-Architect

**E-Architect** is an online architecture service platform built using **PHP**, **HTML**, **CSS**, and **JavaScript**. The platform connects users with architects, allowing users to request architectural plans and enabling architects to upload and share the plans directly through the system.

## 📌 Features

- 🧑‍💼 **User Registration and Login**  
  Users and architects can sign up and securely log in to the platform.

- 📄 **Plan Request System**  
  Users can request custom architectural plans with specific requirements.

- 🏗️ **Plan Upload by Architects**  
  Architects receive requests and upload the requested plans for the users.

- 📁 **Plan Management**  
  Users can view and download the plans assigned to them. Architects can manage uploaded plans.

- ✉️ **Notification System**  
  Users receive updates when a plan is uploaded or updated.

## 🛠️ Technologies Used

- **Frontend:**  
  - HTML  
  - CSS  
  - JavaScript

- **Backend:**  
  - PHP 

- **Database:**  
  - MySQL


## 🚀 Getting Started

### Prerequisites

- XAMPP / LAMP / WAMP or any web server with PHP and MySQL
- Web browser (Chrome, Firefox, etc.)

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/e-architect.git
   ```

2. Move the project to your web server's root directory:
   - For XAMPP, it’s usually `htdocs/`

3. Import the SQL database:
   - Open **phpMyAdmin**
   - Create a new database named `earchitect`
   - Import the `earchitect.sql` file from the project directory 

4. Configure database connection:
   - Open `config/db.php` or similar file
   - Update the credentials (hostname, username, password, database name)

5. Start the server and visit:
   ```
   http://localhost/e-architect/
   ```

## 📂 Project Structure

```
e-architect/
├── assets/           # CSS, JS, images
├── index.php         # Homepage
└── ...
```


## ✨ Future Enhancements

- Add in-app chat between users and architects
- Email notifications
- Admin dashboard for platform management
- File size and format validations

## 🤝 Contributing

Contributions, feedback, and suggestions are welcome! Feel free to fork this repo and submit a pull request.

** This is the first ever project I devleoped...**
