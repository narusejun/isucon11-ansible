FROM alpine

ADD id_ecdsa /root/.ssh/id_ecdsa

RUN chmod 700 /root/.ssh && \
    chmod 600 /root/.ssh/id_ecdsa && \
    apk --no-cache add openssh

ENTRYPOINT ["ssh"]
