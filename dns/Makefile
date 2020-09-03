OCTODNS=docker run -ti --rm --volume $(PWD):/workdir octodns --config-file dns.yaml

.PHONY: sync
sync: image
	$(OCTODNS) $(OPTS)

.PHONY: apply
apply: image
	$(OCTODNS) --doit

.PHONY: image
image:
	docker build --quiet --tag octodns .
