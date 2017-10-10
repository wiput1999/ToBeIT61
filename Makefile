build:
	docker build -t tobeit .

run:
	docker-compose -f docker-stack-dev.yml up