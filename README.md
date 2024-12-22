# SKIPATMA

## Description

**SKIPATMA** is a web application built with **CodeIgniter 4** for the efficient registration of new students. This application streamlines the enrollment process, making it easy for students to register and for administrators to manage student data.

## Features

- User-friendly registration form
- Admin dashboard for managing student registrations
- Email notifications for successful registrations
- Secure data handling and storage
- Responsive design for both mobile and desktop users

## Installation

Follow these steps to install SKIPATMA:

1. Clone the repository:
   ```bash
   git clone https://github.com/rheatkhs/skipatma.git
   ```
2. Navigate to the project directory:
   ```bash
   cd skipatma
   ```
3. Install Composer dependencies:
   ```bash
   composer install
   ```

4. Set up your environment:
   - Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update the `.env` file with your database and application settings.

5. Run the migrations:
   ```bash
   php spark migrate
   ```

## Usage

To start the application, use the built-in server:

```bash
php spark serve
```

Open your browser and navigate to `http://localhost:8080` to access the application.

## Configuration

You'll need to configure the database connection and other settings in the `.env` file. Example:

```
database.default.hostname = localhost
database.default.database = your_database_name
database.default.username = your_database_user
database.default.password = your_database_password
database.default.DBDriver = MySQLi
```

## Contributing

We welcome contributions! Please follow these steps:

1. Fork the repository.
2. Create your feature branch:
   ```bash
   git checkout -b feature/YourFeature
   ```
3. Commit your changes:
   ```bash
   git commit -m 'Add some feature'
   ```
4. Push to the branch:
   ```bash
   git push origin feature/YourFeature
   ```
5. Open a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgements

- [CodeIgniter 4](https://codeigniter4.github.io/userguide/) for the framework
- [Bootstrap](https://getbootstrap.com/) for responsive design
- Any other resources or libraries you wish to acknowledge

## Contact

Rhea Takahashi - [rheatkhs@gmail.com](mailto:rheatkhs@gmail.com)

Project Link: [https://github.com/rheatkhs/skipatma]