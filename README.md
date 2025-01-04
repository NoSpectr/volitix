# VoliTix - Volleyball Online Ticket Sales Information System

VoliTix is a web-based ticket management application designed specifically for volleyball tournaments. It streamlines the process of managing matches, handling ticket sales, and organizing user roles such as administrators and attendees, all within a user-friendly and secure system. With features like real-time payment updates, detailed event tracking, and intuitive dashboards, VoliTix offers an efficient solution for both organizers and fans to enhance their tournament experience.

[![My Skills](https://skillicons.dev/icons?i=laravel,php,vite,bootstrap,mysql,vscode,windows)](https://skillicons.dev)
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
  - Integration with secure payment.
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

---

## Screenshots

### Admin Panel:
#### 1. Dashboard  
![image](https://github.com/user-attachments/assets/2c3b3593-a3e4-4f99-857e-5132f39f2242)
 
*The main dashboard showing system statistics.*  

#### 2. Match Scheduling  
![image](https://github.com/user-attachments/assets/59da56e2-332b-4dae-98c8-e345ac1685f2)


*The interface for creating and updating match schedules.*  

#### 3. Revenue Monitoring  
![Revenue Analytics](https://github.com/user-attachments/assets/6576347b-33a7-4adc-90ca-ba69ef711970)

*Detailed revenue analytics for ticket sales.*  

#### 4. User Management  
![User Management](https://github.com/user-attachments/assets/6c96c182-6e35-4598-a8e1-00d8e8c78973)

*Manage users, including their roles and permissions.*  

---

### User Panel:
#### 1. Home Page  
![image](https://github.com/user-attachments/assets/501d2e0b-8488-4d3d-8148-ef58006ff038)
*Browse upcoming volleyball matches and purchase tickets.*  

#### 2. Match Details  
![image](https://github.com/user-attachments/assets/d3555c61-d465-4c32-8382-eed42dd37759)
*Detailed information about selected matches, including ticket availability.*  

#### 3. Ticket Booking  
![image](https://github.com/user-attachments/assets/c2f0c06f-53d8-4500-92d9-9e43cdb06045)
*Book tickets and review your order summary.*  

#### 4. Payment  
![image](https://github.com/user-attachments/assets/0d0143a1-0ca5-4828-9366-5db27e90a581)
*Secure payment for completing ticket purchases.*  

#### 4. Ticket List  
![image](https://github.com/user-attachments/assets/bb7af96e-1b28-43ae-b18a-37ed0c754ef1)
*List of tickets that have been purchased*  

#### 6. User Profile  
![image](https://github.com/user-attachments/assets/e9f95187-ccd9-40ff-a0c0-1f8c7a576144)
*Manage your profile and view order history.*  

---

## License

This project is licensed under the [MIT License](https://github.com/NoSpectr/volitix/blob/main/LICENSE).

---

Feel free to explore and enhance VoliTix! For any queries, contact us via the Issues section.
