FROM alpine
RUN apk add --update --no-cache openssh 
RUN ssh-keygen -A 
RUN sed -i s/#PermitRootLogin.*/PermitRootLogin\ yes/ /etc/ssh/sshd_config
RUN echo "root:dm" | chpasswd
EXPOSE 22
CMD ["/usr/sbin/sshd","-D"]

