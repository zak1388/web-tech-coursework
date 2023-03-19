php-runtime=php
PORT=8000
PHASE=1

run:
	open "localhost:$(PORT)"
	$(php-runtime) -S localhost:$(PORT) -t $(shell realpath src)

zip:
	$(shell cd src/; zip -r ../zkadri-phase$(PHASE) .)

clean:
	rm zkadri-phase*.zip
