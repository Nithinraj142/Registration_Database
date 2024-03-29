
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

  **Access the PHP Script:**
   - Place the PHP script (`test.php`) inside the `htdocs/code` directory of your XAMPP directory.
   - Open your web browser and navigate to `http://localhost/code/test.php` to run the script.

#### PHP Version Information

To check the PHP version and enabled extensions, follow these steps:

   - Start the Apache server if it is not already running.
   - Open your web browser and enter the following URL:
     ```
     http://localhost/code/test.php
     ```
   - This will execute the `test.php` script on your local server and display the PHP version and enabled extensions.

By following these instructions, users can easily run the provided PHP script (`test.php`) on their local XAMPP server and check the PHP version and enabled extensions.

4. **Database Configuration:**

   - Open your web browser and navigate to `http://localhost/code/test.php`.
   - Create a new database named `registration_nr`.
   - Import the `registration.sql` file located in the `database` directory of this project to create the necessary table structure.

5. **Configure the database connection:**

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
  
#### Technologies Used

- PHP
- MySQL
- Bootstrap 5

#### Note

- Ensure that your XAMPP server is running and accessible from your local environment.
- This system does not include authentication or validation of user inputs. It is meant for demonstration purposes and should be extended with proper validation and security measures before use in production environments.
---



### Screenshots 

<img width="506" alt="Screenshot 2024-01-30 180145" src="https://github.com/Nithinraj142/Registration_Database/assets/135819260/7b099886-5a4a-413b-b6e3-48861c650deb">
<img width="500" alt="Screenshot 2024-01-30 180232" src="https://github.com/Nithinraj142/Registration_Database/assets/135819260/5c9673e4-8d29-4a6b-a37a-3cbd7c8e9cbf">
<img width="887" alt="Screenshot 2024-01-30 180301" src="https://github.com/Nithinraj142/Registration_Database/assets/135819260/b1982b59-5e5a-4489-af19-ccaa35c023ae">
<img width="904" alt="Screenshot 2024-01-30 180322" src="https://github.com/Nithinraj142/Registration_Database/assets/135819260/3631bdd9-4729-43a0-adcc-49d16ca4792c">
<img width="433" alt="Screenshot 2024-01-30 180357" src="https://github.com/Nithinraj142/Registration_Database/assets/135819260/8fa0156d-4ca9-42dd-9ad3-045bb960dc94">
<img width="350" alt="Screenshot 2024-01-30 180451" src="https://github.com/Nithinraj142/Registration_Database/assets/135819260/9d8f48df-f41d-4404-87cd-cb1be85a2675">


### MP4



https://github.com/Nithinraj142/Registration_Database/assets/135819260/cd13060b-375a-40de-a8b4-e0d56c3d3432







