# Warehouse Social Portal  
## SQL Vulnerability Demonstration, Forensic Analysis, and Remediation Lab

---

## Overview

This project is a **web-based application backed by an SQL database**, designed to simulate an internal communication and logging portal used in a **warehouse or production environment**.

The application intentionally contains **SQL-related security vulnerabilities** to demonstrate how insecure database interactions can be exploited, how those attacks impact system data, and how **digital forensic analysis** can be used to investigate, document, and remediate security incidents.

This repository represents a **controlled security lab** and demonstrates the **full security lifecycle**:
- insecure design
- attack simulation
- forensic investigation
- secure remediation and validation

---

## Project Purpose

The purpose of this project is to demonstrate practical knowledge of:

- SQL-backed web application architecture
- Common database attack techniques
- Web application forensic investigation
- Incident response and remediation
- Secure coding and system hardening

All vulnerabilities are **intentional** and implemented solely for **educational and defensive security purposes**.

---

## Scenario Description

The application simulates an **internal social and operational logging system** used by warehouse personnel to:

- share updates
- communicate shift information
- record operational notes

The system handles data that would be considered **sensitive** in a real production or warehouse environment.

### User Roles
- **Employee**
- **Supervisor**
- **Administrator**

Each role has different access levels to application features and stored data.

---

## Technology Stack

- **Frontend:** HTML, CSS  
- **Backend:** PHP / Python / Node.js  
- **Database:** MySQL / MariaDB  
- **Environment:** Localhost (lab-only deployment)

Optional components:
- Application-level logging
- Database query logging

---

## Application Architecture

The application follows a standard web architecture:

- Client-side HTML forms submit user input
- Backend logic processes requests and interacts with the SQL database
- The database stores user credentials, roles, and internal messages

Initial versions of the application intentionally use **insecure database queries** to demonstrate real-world vulnerabilities.

---

## Database Design

Key database tables include:

### `users`
- Stores user credentials
- Role assignments

### `posts`
- Internal messages
- Operational notes

### `logs`
- Authentication events
- Application activity

During the vulnerable phase, the database is intentionally configured with:
- insufficient input validation
- weak access controls
- excessive database privileges

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

These vulnerabilities reflect **common issues in poorly secured internal applications**.

---

## Attack Simulation

Simulated attacks are conducted in a controlled lab environment to demonstrate:

- Bypassing authentication mechanisms
- Extracting unauthorized data
- Privilege escalation

The goal of the attack phase is to observe system behavior and identify what **forensic evidence** is generated during exploitation.

---

## Forensic Analysis

Digital forensic analysis focuses on reconstructing unauthorized activity using available evidence.

### Analysis Activities
- Review of application logs
- Review of database query logs
- Identification of anomalous authentication events

### Forensic Findings
- Timeline reconstruction of unauthorized access
- Identification of compromised accounts
- Documentation of logging and monitoring gaps

This phase highlights the importance of **visibility and auditability** in production systems.

---

## Impact Assessment

The simulated attacks demonstrate potential risks to:

- **Confidentiality:** Exposure of employee and operational data  
- **Integrity:** Unauthorized modification of stored information  
- **Availability:** Potential disruption of internal systems  

All impacts are evaluated within the context of a warehouse or production environment.

---

## Remediation and Hardening

Following forensic analysis, the application is secured using industry-standard practices:

- Parameterized SQL queries
- Secure password hashing
- Role-based access control
- Input validation and sanitization
- Improved logging and monitoring

---

## Validation

Post-remediation testing confirms that:

- SQL injection attempts are no longer effective
- Unauthorized access is prevented
- Improved forensic evidence is generated during suspicious activity

---

## Ethical Notice

This project is intended for **educational and defensive security purposes only**.

The vulnerable version of this application **must not** be deployed in a production environment or exposed to the public internet.

---

## Local Setup (Lab Environment)

1. Clone the repository  
2. Configure database credentials  
3. Import the provided SQL schema  
4. Run the application locally using XAMPP, Docker, or an equivalent tool  

---

## Skills Demonstrated

- SQL database design
- Web application security testing
- Digital forensic investigation
- Incident response methodology
- Secure application development

---

## License

This project is provided for **educational use only**.
