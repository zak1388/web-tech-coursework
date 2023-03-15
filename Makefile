php-runtime=php

run:
	$(php-runtime) -S localhost:8000 -t $(shell realpath src)
