# WebappprojectCASSWD
Web application with MySQL for SSWD assignment 

# Gym Logger – Server-Side Web Development Project

This project is a simple **PHP + MySQL web application** that allows users to record and view workout entries. It was created as part of the **Server-Side Web Development (SSWD)** module in TU Dublin.

##  Project Overview
The application provides:
- A form to **add workout entries**  
- A page to **display all workouts from the database**  
- Options to **add, view, and delete entries**  
- A **clean navigation bar** for easy movement between pages  
- A simple login table (name + email)

All entries are stored in a **MySQL database** and displayed using **PHP server-side rendering**.

## Technologies Used
- **PHP** (backend)
- **MySQL / MariaDB** (database)
- **HTML & CSS**  
- **MySQL Workbench**  
- **GitHub for version control**

##  Database Structure
The project uses two main tables:

### **workout_entries**
workout_entries
This table stores each workout that gets added to the system.
It includes:

id – the unique ID for each entry
workout_type – the type of workout (e.g., running, weights, cycling)
duration – how long the workout lasted (in minutes)
calories – an estimate of calories burned
date – the date the workout was done

### **login**
login

This is a small table used for storing basic user details.
It has:

name – the user’s name
email – the user’s email address (must be unique)

##  How to Run the Project
1. Clone the repository:
   ```bash
   git clone <your-repo-link>

   Once cloned, navigate to the project directory and run the following command:
    php -S localhost:8000   
