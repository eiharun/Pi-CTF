FROM ubuntu:latest

RUN apt-get update && apt-get install -y \
    net-tools \
    openssh-server \
    zip unzip \
    ucommon-utils \
    grep \ 
    nano \
    git

RUN mkdir /var/run/sshd
RUN echo 'root:DockerRoot?' | chpasswd
RUN useradd pi-linux -d /home/pi-linux -s /bin/bash -m && \
echo "pi-linux:PiLinux!" | chpasswd


# Generate new host keys
COPY ssh_host_rsa_key_docker /etc/ssh/ssh_host_rsa_key
COPY ssh_host_rsa_key_docker.pub /etc/ssh/ssh_host_rsa_key.pub
RUN service ssh --full-restart

# SSH login fix. Otherwise user is kicked off after login
RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd

ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile

EXPOSE 22
CMD ["/usr/sbin/sshd", "-D"]

USER pi-linux
WORKDIR /home/pi-linux

#RUN command to clone github repo with linux challenges
RUN cd /home/pi-linux && git clone https://github.com/eiharun/Pi-CTF.git
RUN cp -a /home/pi-linux/Pi-CTF/Chals/Linux/. /home/pi-linux
RUN rm -rvf /home/pi-linux/Pi-CTF 
RUN rm -r /home/pi-linux/*.md
USER root
RUN apt-get remove git -y
USER pi-linux