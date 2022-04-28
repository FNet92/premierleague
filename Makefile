build:
	docker buildx build --platform linux/arm64 -t premierleague/master -f ./docker/Dockerfile .

.PHONY: build
