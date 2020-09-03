FROM alpine

ADD id_rsa /root/.ssh/id_rsa

RUN chmod 700 /root/.ssh && \
    chmod 600 /root/.ssh/id_rsa && \
    apk --no-cache add openssh

ENTRYPOINT ["ssh"]
