php-runtime=php
PORT=8000

run:
	open "localhost:$(PORT)"
	$(php-runtime) -S localhost:$(PORT) -t $(shell realpath src)
