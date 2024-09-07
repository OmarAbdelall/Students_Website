# Student Website:
This is website which keeps students from all over the world in touch to achieve the highest benefits. 
In other words, if there is a student who wants to solve a question in Math, and he is looking for another student in the same major or faculty in order to share this question with him, 
so they can discuss and share their knowledge easily


## Features

* **User Authentication**: Allows users to sign up and log in to their accounts.<br>
* **Project Management**: Users can post new projects or questions and view their submissions.<br>
* **Profile Management**: Users can view and update their profile information.<br>
* **Project Joining**: Users can join available projects.<br>
* **Chat Functionality**: Provides separate chat pages for communication with project owners and fellow students.<br>

## File Structure

- **HTML Files**:
  - `index.html`: The homepage with navigation links.
  - `signup.html`: Sign-up page for new users.
  - `signin.html`: Sign-in page for returning users.
  - `postpageadvanced.html`: Page for posting new projects or questions.
  - `profile.html`: User profile page.
  - `view.php`: Page for viewing posted projects or questions.
  - `join.html`: Page for joining projects.
  - `chatownerpage.html`: Chat page for communication with project owners.
  - `chatengineerpage.html`: Chat page for communication with engineers/students.
  - `main.html`: Main page with navigation buttons to various sections of the application.

- **CSS Files**:
  - `signup.css`: Styles for the sign-up page.
  - `signin.css`: Styles for the sign-in page.
  - `postpagecss.css`: Styles for the post page.
  - `profilepagecss.css`: Styles for the profile page.
  - `chatpagecss.css`: Styles for chat pages.
  - `joinpagecss.css`: Styles for the join projects page.
  - `mainpagecss.css`: Styles for the main page.
  - `logincss.css`: Styles for the login page.

- **PHP Files**:
  - `db.php`: Handles database operations for user sign-ups.
  - `db_conn.php`: Connects to the photo database.
  - `login.php`: Processes user login and authentication.

## Setup Instructions

1. **Database Setup**:
   - Create a MySQL database named `SignUp` with the necessary tables.
   - Update the `db.php` and `db_conn.php` files with your database credentials if needed.

2. **File Deployment**:
   - Upload all HTML, CSS, and PHP files to your web server's root directory or configure your server to point to the project directory.

## Usage

1. **Sign Up**: Visit `signup.html` to create a new user account.
2. **Log In**: Access `signin.html` to log in with your existing credentials.
3. **Post a Project**: Go to `postpageadvanced.html` to submit new projects or questions.
4. **View Projects**: Navigate to `view.php` to review your posted content.
5. **Join Projects**: Use `join.html` to explore and join available projects.
6. **Manage Profile**: Edit your profile information through `profile.html`.
7. **Chat**: Use `chatownerpage.html` and `chatengineerpage.html` for communication with project owners and other users.

## Notes

- Ensure your server supports PHP and is configured to connect to a MySQL database.
- Modify file paths and database credentials as necessary to match your server environment.
