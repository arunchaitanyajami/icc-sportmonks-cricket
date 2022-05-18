<?php

namespace ICC\Sportmonks\Cricket;

interface Endpoint {
	public function getById( int $id );

	public function getAll( $args = [] );
}
