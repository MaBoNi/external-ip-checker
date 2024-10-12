![GitHub License](https://img.shields.io/github/license/maboni/external-ip-checker?style=for-the-badge)

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



## Files Explained

- **docker-compose.yml** – Defines the container service for easy deployment.
- **Dockerfile** – Specifies the base image and setup for the PHP application.
- **src/index.php** – Contains the PHP script that returns the client IP and logs the request details.

## Technologies Used
- **PHP** – Core scripting language for IP logging.
- **Docker** – Containerization to run the application in a consistent environment.
- **Apache** – Integrated with PHP for a lightweight web server.

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

