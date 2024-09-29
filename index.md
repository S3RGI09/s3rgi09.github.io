# S3RGI09

Welcome to my personal page! I'm **S3RGI09**, a cybersecurity enthusiast with a passion for programming. Here you'll find information about my work and projects, as well as some useful scripts I've developed in Python.

## About Me

I am a software developer with experience in cybersecurity. I enjoy exploring new technologies and learning how to protect systems against threats. My areas of interest include security analysis, automated scripting, and creating useful tools to enhance cybersecurity.

## Cybersecurity Projects

Below are some basic scripts I've created in Python:

### 1. Port Scanner

This is a simple port scanner that checks if a specific port is open on an IP address.

```python
import socket

def scan_ports(ip, ports):
    for port in ports:
        sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        sock.settimeout(1)
        result = sock.connect_ex((ip, port))
        if result == 0:
            print(f"Port {port} is open.")
        else:
            print(f"Port {port} is closed.")
        sock.close()

if __name__ == "__main__":
    ip_to_scan = input("Enter the IP address to scan: ")
    ports_to_scan = [21, 22, 80, 443]  # FTP, SSH, HTTP, HTTPS
    scan_ports(ip_to_scan, ports_to_scan)
```
### 2. Script to Send POST Requests

This script allows you to send POST requests to a website and display the response.

```import requests

def send_post_request(url, data):
    response = requests.post(url, data=data)
    print(f"Response status code: {response.status_code}")
    print(f"Server response: {response.text}")

if __name__ == "__main__":
    url = input("Enter the URL to send the POST request to: ")
    data = {'key1': 'value1', 'key2': 'value2'}  # Change keys and values as needed
    send_post_request(url, data)
```
## Contact

If you want to contact me you can do so through [Telegram](https://t.me/abdogie)
