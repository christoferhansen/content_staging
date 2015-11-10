<?php
namespace Me\Istiak\Content\Staging\Interfaces;

interface Observer {
	public function update( Observable $observable );
}
