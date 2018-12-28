<?php

namespace PMVC\App\WP;

use PMVC\Action;
use PMVC\MappingBuilder;

$b = new MappingBuilder();

${_INIT_CONFIG}[_CLASS] = 'WpAdmin';
${_INIT_CONFIG}[_INIT_BUILDER] = $b;

class WpAdmin extends Action {

}
