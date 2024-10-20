![Build Status](https://img.shields.io/github/actions/workflow/status/maboni/external-ip-checker/docker-publish.yml?branch=main&style=for-the-badge)
![License](https://img.shields.io/github/license/maboni/external-ip-checker?style=for-the-badge)
![Repo Size](https://img.shields.io/github/repo-size/maboni/external-ip-checker?style=for-the-badge)

[![Docker Hub](https://img.shields.io/badge/Docker%20Hub-external--ip--checker-blue?logo=docker&style=for-the-badge)](https://hub.docker.com/r/maboni82/external-ip-checker) [![Docker Pulls](https://img.shields.io/docker/pulls/maboni82/external-ip-checker?style=for-the-badge)](https://hub.docker.com/r/maboni82/external-ip-checker)

A lightweight PHP-based Docker container that allows any server to check and log its own external IP address. Ideal for monitoring, IP verification, and network diagnostics. This application returns the caller’s IP address and logs essential request data, including user agent, language, and timestamp.

## Features
- **Simple IP Checker** – Easily retrieve the external IP address of any client accessing the app.
- **Detailed Logging** – Logs IP, user agent, request method, query string, and language data.
- **Dockerized Setup** – Quick to deploy and run in a containerized environment.

## Getting Started

### Prerequisites
- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

### Installation
1. **Clone the repository**:
    ```bash
    git clone https://github.com/maboni/external-ip-checker.git
    cd external-ip-checker
    ```

2. **Build and run the Docker container**:
    ```bash
    docker-compose up -d
    ```

3. Your PHP application is now accessible at `http://localhost:8080`. Any server accessing this URL will receive its own external IP in response.

### Exposing with Nginx Proxy Manager
If you are using [![Nginx Proxy Manager](https://img.shields.io/badge/Nginx_Proxy_Manager-GitHub-blue?logo=github)](https://github.com/NginxProxyManager/nginx-proxy-manager), you can easily configure it to point to this app, using `http://<your-server-ip>:8080`.

## Usage
When you navigate to `http://localhost:8080`, the app will return your IP address. Additionally, it will log details such as the timestamp, IP, user agent, and language to `visitors.log` in the container.

### Example Log Entry
```markdown
2024-10-13 00:02:02 external-ip-checker  | 192.168.65.1 - - [12/Oct/2024:22:02:02 +0000] "GET / HTTP/1.1" 200 241 "-" "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.0.1 Safari/605.1.15
```

## Demo
Access a live demo of this service at [https://ip.bondit.dk](https://ip.bondit.dk)

## Files Explained

- **docker-compose.yml** – Defines the container service for easy deployment.
- **Dockerfile** – Specifies the base image and setup for the PHP application.
- **src/index.php** – Contains the PHP script that returns the client IP and logs the request details.

## Technologies Used
- **PHP** – Core scripting language for IP logging.
- **Docker** – Containerization to run the application in a consistent environment.
- **Apache** – Integrated with PHP for a lightweight web server.

## Docker Hub Repository
You can pull the Docker image directly from Docker Hub:
(https://hub.docker.com/r/maboni82/external-ip-checker)



## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Acknowledgments
- Inspired by the need to simplify external IP monitoring.
- Built with love and efficiency for quick deployment.

## Contributing
Contributions are welcome! Feel free to open an issue or submit a pull request.

## Repobeats Analytics
---

![Alt](https://repobeats.axiom.co/api/embed/4e177c97e503f06689509cc82f8d59f8c3c5f62d.svg "Repobeats analytics image")

---

