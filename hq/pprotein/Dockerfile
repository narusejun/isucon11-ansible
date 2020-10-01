FROM alpine

RUN apk add --no-cache go npm git make && \
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

RUN apk add --no-cache graphviz

EXPOSE 9000

WORKDIR /opt/pprotein
ENTRYPOINT ["pprotein"]
