FROM alpine

RUN apk --no-cache add go npm git make && \
    git clone https://github.com/kaz/pprotein.git /opt/pprotein && \
	cd /opt/pprotein/view && \
	npm i && \
	npm run build && \
	cd /opt/pprotein && \
    export GOPATH=$HOME/go && \
    export PATH=$GOPATH/bin:$PATH && \
	make build

FROM alpine

COPY --from=0 /opt/pprotein/pprotein /usr/local/bin/pprotein

EXPOSE 9000

WORKDIR /opt/pprotein
ENTRYPOINT ["pprotein"]
