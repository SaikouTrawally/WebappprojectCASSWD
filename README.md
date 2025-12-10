# WebappprojectCASSWD
Web application with MySQL for SSWD assignment 

# Gym Logger – Server-Side Web Development Project

This project is a simple **PHP + MySQL web application** that allows users to record and view workout entries. It was created as part of the **Server-Side Web Development (SSWD)** module in TU Dublin.

## 🏋️‍♂️ Project Overview
The application provides:
- A form to **add workout entries**  
- A page to **display all workouts from the database**  
- Options to **add, view, and delete entries**  
- A **clean navigation bar** for easy movement between pages  
- A simple login table (name + email)

All entries are stored in a **MySQL database** and displayed using **PHP server-side rendering**.

## 📂 Technologies Used
- **PHP** (backend)
- **MySQL / MariaDB** (database)
- **HTML & CSS**  
- **MySQL Workbench**  
- **GitHub for version control**

## 📌 Database Structure
The project uses two main tables:

### **workout_entries**
| Field | Type | Description |
|-------|------|-------------|
| id | INT | Primary key |
| workout_type | VARCHAR(255) | Type of workout |
| duration | INT | Minutes |
| calories | INT | Estimated calories burned |
| date | DATE | Date of workout |

### **login**
| Field | Type | Description |
|-------|------|-------------|
| id | INT | Primary key |
| name | VARCHAR(255) | User name |
| email | VARCHAR(255) | User email |

## 🚀 How to Run the Project
1. Clone the repository:
   ```bash
   git clone <your-repo-link>
