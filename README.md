# Animal Crossing Social Portal
## SQL Vulnerability Demonstration & Digital Forensics Lab

---

## Overview

The **Animal Crossing Social Portal** is a web-based application backed by an SQL database, designed as a fictional, Animal Crossing–inspired social platform where villagers share posts, updates, and activity logs.

Beneath the playful theme, the application functions as a **technical security and digital forensics lab**. It intentionally includes SQL-related vulnerabilities to demonstrate how real-world systems—such as warehouse, logistics, and internal operational platforms—can be attacked, investigated, and secured.

This repository represents a **controlled learning environment** that demonstrates the full application security lifecycle:

- Insecure system design  
- Attack simulation  
- Digital forensic investigation  
- Secure remediation and validation  

---

## Project Purpose

This project demonstrates practical, transferable skills applicable to **warehouse systems and enterprise environments**, including:

- SQL-backed web application architecture  
- Common database attack techniques  
- Digital forensic analysis of application and database activity  
- Incident response and remediation workflows  
- Secure coding and system hardening  

All vulnerabilities are **intentional** and implemented **solely for educational and defensive security purposes**.

---

## Scenario Description

The application simulates a **social and activity logging system** used on a fictional Animal Crossing island. Users can:

- Share island updates and announcements  
- Post daily activity notes  
- Communicate schedules and events  

While the interface and narrative are Animal Crossing–themed, the **data flow, access controls, and logging behavior mirror real internal systems**, such as warehouse communication portals, operational dashboards, and employee activity logs.

---

## User Roles

The application includes multiple roles to simulate real-world access separation:

- **Villager** — Standard user access  
- **Island Representative** — Moderation and coordination privileges  
- **Administrator** — Full system and database access  

These roles parallel common warehouse and enterprise role models (employee, supervisor, administrator).

---

## Technology Stack

- **Frontend:** HTML, CSS  
- **Backend:** PHP / Python / Node.js  
- **Database:** MySQL / MariaDB  
- **Environment:** Localhost (lab-only deployment)  

Optional components:

- Application-level event logging  
- Database query logging  

---

## Application Architecture

The application follows a standard web architecture:

- Client-side forms collect user input  
- Backend logic processes requests and executes SQL queries  
- The database stores user accounts, roles, and social posts  

Early versions intentionally use **insecure SQL queries** to demonstrate vulnerabilities commonly found in internal operational systems.

---

## Database Design

Key database tables include:

### `users`
- Villager and staff credentials  
- Role assignments  

### `posts`
- Social messages and island updates  

### `logs`
- Authentication events  
- Application and system activity  

During the vulnerable phase, the database is intentionally configured with:

- Insufficient input validation  
- Weak access controls  
- Excessive database privileges  

---

## Demonstrated Vulnerabilities

The following vulnerabilities are intentionally implemented and documented:

### SQL Injection
- Authentication bypass  
- Unauthorized data extraction  

### Weak Authentication Controls
- Insecure password storage  
- Poor credential handling  

### Insufficient Input Validation
- Unsanitized user input  

### Excessive Database Privileges
- Overly permissive database access  

These vulnerabilities directly reflect issues found in **real warehouse and enterprise systems**.

---

## Attack Simulation

Simulated attacks are conducted in a controlled lab environment to demonstrate:

- Authentication bypass  
- Unauthorized access to user and activity data  
- Privilege escalation  

The attack phase focuses on observing **how much forensic evidence is generated** during exploitation.

---

## Digital Forensic Analysis

Forensic analysis focuses on reconstructing attacker activity using available logs and database artifacts.

### Analysis Activities

- Review of application logs  
- Review of database query logs  
- Identification of anomalous authentication behavior  

### Forensic Findings

- Timeline reconstruction of unauthorized access  
- Identification of compromised accounts  
- Documentation of logging and monitoring gaps  

These techniques mirror **warehouse system investigations**, including internal misuse and credential abuse scenarios.

---

## Impact Assessment

The simulated attacks demonstrate risks commonly faced by operational systems:

- **Confidentiality:** Exposure of user and activity data  
- **Integrity:** Unauthorized modification of records  
- **Availability:** Potential disruption of internal platforms  

---

## Remediation and Hardening

Following forensic analysis, the application is secured using industry-standard controls:

- Parameterized SQL queries  
- Secure password hashing  
- Role-based access control  
- Input validation and sanitization  
- Improved logging and monitoring  

---

## Validation

Post-remediation testing confirms that:

- SQL injection attempts are no longer effective  
- Unauthorized access is blocked  
- Improved forensic artifacts are generated during suspicious activity  

---

## Ethical Notice

This project is intended for **educational and defensive security purposes only**.

The intentionally vulnerable version **must not** be deployed in production or exposed to the public internet.

---

## Local Setup (Lab Environment)

1. Clone the repository  
2. Configure database credentials  
3. Import the provided SQL schema  
4. Run the application locally using XAMPP, Docker, or equivalent tools  

---

## Skills Demonstrated

- SQL database design  
- Web application security testing  
- Digital forensic investigation  
- Incident response methodology  
- Secure application development  
- Transferable security skills applicable to warehouse and operational systems  

---

## Live Demo
- [nookbook.com](https://raw.githack.com/kokonutzlabs/Animal-Crossing-Social-Portal/main/part1_setup/index/nook-book2.html)


---

## License

This project is provided for **educational use only**.



