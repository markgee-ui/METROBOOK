
# MetroBook - Online Bus Booking System

**MetroBook** is a PHP-based web application designed to simplify the process of booking bus tickets in Nairobi. It eliminates the need to physically queue at bus terminals, allowing users to conveniently reserve seats online via their devices.

---

## 🚀 Problem Solved

In Nairobi, commuters often face the inconvenience of long queues and uncertainty when trying to book public transport. MetroBook addresses this problem by:

- Enabling users to **book bus tickets online**.
- Providing real-time availability of seats.
- Reducing physical congestion at booking points.
- Allowing commuters to plan their trips with ease and efficiency.

---

## 🛠️ Built With

- **PHP** - Core backend scripting language
- **HTML/CSS** - For structuring and styling the UI
- **MySQL** - Database for storing bookings, users, and bus schedules
- **XAMPP / LAMP** - For running PHP and MySQL locally

---

## 📁 Project Structure

```

MetroBook/
│
├── index.php               # Main entry point of the app
├── booking.php             # Booking form and logic
├── register.php               # List of available buses
├── login.php             # Booking confirmation page
├── db.php                  # Database connection file
├── assets/                 # CSS, JS, Images
└── README.md               # Project documentation

````

---

## 🔧 Installation & Setup

1. **Clone or Download the Project**
   ```bash
   git clone https://markgee-ui/METROBOOK
````

2. **Move the Folder to Your Web Server Directory**

   * For XAMPP, move it to: `C:\xampp\htdocs\metrobook`

3. **Start Your Server**

   * Launch Apache and MySQL via the XAMPP Control Panel.

4. **Create the Database**

   * Go to `http://localhost/phpmyadmin`
   * Create a new database (e.g., `metrobook`)
   * Import the provided SQL file (if included): `metrobook.sql`

5. **Configure the Database Connection**

   * Edit `db.php` and update your database name, user, and password.

6. **Run the App**

   * Open your browser and visit:

     ```
     http://localhost/metrobook/index.php
     ```

---

## 🧪 Features

* View available buses and schedules.
* Book a seat instantly from any device.
* Get booking confirmation.
* Prevent double booking via real-time validation.
* Clean, mobile-friendly interface.
* print ticket.

---

## 💡 Future Improvements

* Integrate payments module.
* Add bus tracking via GPS.
* Email or SMS ticket delivery.

---

## 📬 Contact

**Developer**: Mark Ngugi
**Email**: \[[your-email@example.com](mailto:ngugimark93@gmail.com)]
**Location**: Nairobi, Kenya

---

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).

```

---

Let me know if you'd like to include the actual database schema, screenshots, or instructions for deployment on a live server.
```
