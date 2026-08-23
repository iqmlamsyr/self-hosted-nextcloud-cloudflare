# Self-Hosted Nextcloud with Cloudflare Tunnel

A self-hosted cloud storage project built using Nextcloud on an Ubuntu Server virtual machine and securely exposed to the Internet using Cloudflare Tunnel.

## 📌 Project Overview

This project demonstrates how to deploy a self-hosted cloud storage platform using:

- Ubuntu Server
- VMware
- Apache Web Server
- PHP
- MariaDB
- Nextcloud
- Cloudflare DNS
- Cloudflare Tunnel

The Nextcloud server runs inside a VMware virtual machine and is made publicly accessible through a Cloudflare Tunnel without directly exposing the server to the Internet.

## 🏗️ Architecture

```text
                    Internet
                       │
                       ▼
              ┌─────────────────┐
              │    Cloudflare   │
              │  DNS + Tunnel   │
              └────────┬────────┘
                       │
                Secure Tunnel
                       │
                       ▼
              ┌─────────────────┐
              │  Ubuntu Server  │
              │   VMware VM     │
              ├─────────────────┤
              │   cloudflared   │
              │       ↓         │
              │     Apache      │
              │       ↓         │
              │    Nextcloud    │
              │       ↓         │
              │    MariaDB      │
              └─────────────────┘
🌐 Deployment

The application is accessible through:

https://cloud.iqmalamsyarcloud.xyz

The server itself runs on a private VMware network and does not require traditional port forwarding.

🔐 Security

The project uses:

Cloudflare Tunnel for secure remote access
HTTPS for encrypted web traffic
Nextcloud trusted domain configuration
MariaDB authentication
No direct exposure of the Ubuntu server through port forwarding
⚙️ Main Components
Server

Ubuntu Server running inside VMware.

Web Application

Apache and PHP to serve the Nextcloud application.

for Database,
MariaDB stores Nextcloud application data and configuration.

Remote Access

Cloudflare Tunnel connects the private Ubuntu server to Cloudflare, allowing users to access Nextcloud through the public domain.

🧠 Challenges & Troubleshooting

During deployment, several practical issues were encountered and resolved, including:

Nextcloud Trusted Domain

When accessing Nextcloud through the Cloudflare hostname, Nextcloud initially rejected the request as an untrusted domain.

The trusted_domains configuration was updated to include the public hostname.

DNS / Nameserver Configuration

The domain was registered separately and then configured to use Cloudflare nameservers. DNS propagation and domain activation were verified before configuring the tunnel.

Database Configuration

MariaDB was configured as the database backend for Nextcloud. The environment uses MariaDB-specific administration rather than relying on MySQL-only utilities.

Service Availability

Apache, MariaDB and cloudflared were configured as system services so that the environment can automatically recover after an Ubuntu reboot.

📚 What I Learned

Through this project, I gained practical experience with:

Linux server administration
Web server deployment
Database configuration
Virtualization
DNS and domain management
Cloudflare Tunnel
HTTPS and secure remote access
Troubleshooting server and application configuration

👨‍💻 Project Purpose

This project was developed as a personal portfolio project to demonstrate practical skills in computer networking, Linux server administration, web services, and secure remote access.
