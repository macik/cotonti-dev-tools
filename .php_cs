<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
	->files()
	->name('*.php')
	->exclude('datas')
	->exclude('lib')
//	->in(__DIR__.'/system')
	->in(__DIR__)
;

return Symfony\CS\Config\Config::create()
	->setUsingCache(true)
	->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
	// adding more filters to use
	->fixers(array('multiline_array_trailing_comma','phpdoc_params','remove_leading_slash_use','ordered_use','concat_with_spaces','align_equals','align_double_arrow','ternary_spaces','standardize_not_equal','spaces_cast'))
	// exlude some filters to meet Cotonti specific:
	//  - `eof_ending` as we can not use it on Windows machines
	//  - `linefeed` as we use git to control CRLF on diferent platforms
	//  - `indentation` as we still using tabs for it
	//  - `braces` as it use spaces for identation
	->fixers(array('-linefeed', '-indentation','-eof_ending','-braces'))
	->finder($finder)
;