<?php
	class Button extends KButton
	{
		public function __construct( array $attributes = [] ) {
			parent::__construct( $attributes );
			$this->setType('button');
		}

	}