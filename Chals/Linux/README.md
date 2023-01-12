Root Creds:
    root:DockerRoot?

Default User Creds
    pi-linux:PiLinux!

# Write docker command to start container 
## PHP buttons to start and stop/remove container

docker build -t ubuntu-ctf .

docker run -p 2200:22 -d --rm ubuntu-ctf
