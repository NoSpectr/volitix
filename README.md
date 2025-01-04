# VoliTix - Volleyball Online Ticket Sales Information System

VoliTix is a web-based ticket management application designed specifically for volleyball tournaments. It streamlines the process of managing matches, handling ticket sales, and organizing user roles such as administrators and attendees, all within a user-friendly and secure system. With features like real-time payment updates, detailed event tracking, and intuitive dashboards, VoliTix offers an efficient solution for both organizers and fans to enhance their tournament experience.

## Features

- **Dashboard**: 
  - Overview of key metrics and system statistics.
  
- **Match Management**:
  - List all upcoming matches.
  - Add, edit, or delete matches.

- **Ticket Sales Management**:
  - Monitor ticket sales.
  - Manage customer details and transactions.

- **User Management**:
  - Add, edit, and remove user roles.
  - Assign permissions for administrators, event organizers, and regular users.

- **Secure Payment System**:
  - Integration with secure payment gateways.
  - Multiple payment methods for convenience.

- **Responsive Design**:
  - Fully functional on both desktop and mobile devices.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript (with Bootstrap framework).
- **Backend**: PHP with Laravel framework.
- **Database**: MySQL.
- **Charts**: ApexCharts for data visualization.
- **Storage**: Laravel Storage for image and file handling.

## Getting Started

### Prerequisites

Ensure you have the following installed on your system:

- PHP (>=8.1)
- Composer
- Node.js and npm
- MySQL

### Installation

1. Clone this repository:
   ```bash
   git clone https://github.com/username/volitix.git
   cd volitix
   ```

2. Install dependencies:
   ```bash
   composer install
   npm install
   ```

3. Copy `.env.example` to `.env` and configure your environment variables:
   ```bash
   cp .env.example .env
   ```

4. Generate an application key:
   ```bash
   php artisan key:generate
   ```

5. Create a symbolic link for storage:
   ```bash
   php artisan storage:link
   ```

6. Build assets:
   ```bash
   npm run dev
   ```

7. Start the development server:
   ```bash
   php artisan serve
   ```

Access the application at `http://localhost:8000`.

## Screenshots

![Dashboard](path/to/dashboard-screenshot.png)
*The main dashboard showing system statistics.*

![Match Management](path/to/match-management-screenshot.png)
*The interface for managing matches.*

![Ticket Sales](path/to/ticket-sales-screenshot.png)
*An overview of ticket sales and transactions.*

## License

This project is licensed under the [MIT License](LICENSE).

---

Feel free to explore and enhance VoliTix! For any queries, contact us via the Issues section.
