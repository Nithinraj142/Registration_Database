
# User Registration Management System

This project is a simple User Registration Management System implemented using PHP and MySQL. It allows users to register their information and view all registered users. Additionally, it provides functionality to delete registered users.

## Installation

### Prerequisites

Before you begin, ensure you have the following installed on your system:

- [XAMPP](https://www.apachefriends.org/index.html): XAMPP is a free and open-source cross-platform web server solution stack package developed by Apache Friends. It includes Apache HTTP server, MySQL database, and interpreters for scripts written in the PHP and Perl programming languages.

### Steps

1. **Download and Install XAMPP:**

   - Download the appropriate version of XAMPP for your operating system from the [official website](https://www.apachefriends.org/index.html).
   - Follow the installation instructions provided for your specific operating system.

2. **Start XAMPP Control Panel:**

   - After installation, open the XAMPP Control Panel.
   - Start the Apache and MySQL services by clicking on the "Start" buttons next to them.

3. **Set up the project:**

   - Clone or download this project repository to your local machine.

4. **Database Configuration:**

   - Open your web browser and navigate to ``.
   - Create a new database named `registration_nr`.
   - Import the `registration.sql` file located in the `database` directory of this project to create the necessary table structure.

5. **Configure the database connection:**

   - Open `index.php` in the root directory of the project.
   - Update the `$servername`, `$username`, and `$password` variables to match your MySQL server credentials.

## Usage

1. **Run the application:**

   - Open your web browser.
   - Enter the following URL in the address bar: `http://localhost/code/test.php`.
   - You should now see the registration form and a list of registered users.

2. **Register a new user:**

   - Fill out the registration form with your name, email, and date of birth.
   - Click on the "Register" button.

3. **View registered users:**

   - Scroll down to see a list of all registered users.
   - Each user entry displays their name, email, and date of birth.

4. **Delete a user:**

   - Next to each user entry, there is a "Delete" button.
   - Click on the "Delete" button to remove the respective user from the database.

## Deployment

Once you have completed the installation steps and configured the project, you can access the application by navigating to the following URL in your web browser:

```
http://localhost/code/test.php
```

This URL corresponds to the location where you have deployed the project on your local server. Replace `/code/test.php` with the actual path to your `test.php` file relative to the root directory of your web server.

---
#### Credentials Used

- **Database Connection:**
  - Username: `root`
  - Password: `'Nithinraj'` 
  - These credentials are used to establish a connection to the MySQL database server running locally on your machine through XAMPP.
  
#### Technologies Used

- PHP
- MySQL
- Bootstrap 5

#### Note

- Ensure that your XAMPP server is running and accessible from your local environment.
- This system does not include authentication or validation of user inputs. It is meant for demonstration purposes and should be extended with proper validation and security measures before use in production environments.
---

Make sure to replace `"path/to/your/project"` with the actual path to your project directory relative to the `localhost` URL. Additionally, include the `registration.sql` file in the repository so that users can easily set up the database.
