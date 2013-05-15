<?php
function one_col($atts, $content = null){
	extract(shortcode_atts( array(
		'last' => 'no',
		'first' => 'no'
	), $atts));
	
	if ( $last == 'yes') {
		$position = 'last';
	} else if($first == 'yes') {
		$position = 'first';
	} else {
		$position = 'foo';
	}
	
	return '<div class="onecol ' . $position . '">' . do_shortcode( $content) . '</div>';
}
add_shortcode('one_col', 'one_col');

function two_col($atts, $content = null){
	extract(shortcode_atts( array(
		'last' => '',
		'first' => ''
	), $atts));
	
	if ( $last == 'yes') {
		$position = 'last';
	} else if($first == 'yes') {
		$position = 'first';
	} else {
		$position = '';
	}
	
	return '<div class="twocol ' . $position . '">' . do_shortcode( $content) . '</div>';
}
add_shortcode('two_col', 'two_col');

function three_col($atts, $content = null){
	extract(shortcode_atts( array(
		'last' => '',
		'first' => ''
	), $atts));
	
	if ( $last == 'yes') {
		$position = 'last';
	} else if($first == 'yes') {
		$position = 'first';
	} else {
		$position = '';
	}
	
	return '<div class="threecol ' . $position . '">' . do_shortcode( $content) . '</div>';
}
add_shortcode('three_col', 'three_col');

function four_col($atts, $content = null){
	extract(shortcode_atts( array(
		'last' => '',
		'first' => ''
	), $atts));
	
	if ( $last == 'yes') {
		$position = 'last';
	} else if($first == 'yes') {
		$position = 'first';
	} else {
		$position = '';
	}
	
	return '<div class="fourcol ' . $position . '">' . do_shortcode( $content) . '</div>';
}
add_shortcode('four_col', 'four_col');

function five_col($atts, $content = null){
	extract(shortcode_atts( array(
		'last' => '',
		'first' => ''
	), $atts));
	
	if ( $last == 'yes') {
		$position = 'last';
	} else if($first == 'yes') {
		$position = 'first';
	} else {
		$position = '';
	}
	
	return '<div class="fivecol ' . $position . '">' . do_shortcode( $content) . '</div>';
}
add_shortcode('five_col', 'five_col');

function six_col($atts, $content = null){
	extract(shortcode_atts( array(
		'last' => '',
		'first' => ''
	), $atts));
	
	if ( $last == 'yes') {
		$position = 'last';
	} else if($first == 'yes') {
		$position = 'first';
	} else {
		$position = '';
	}
	
	return '<div class="sixcol ' . $position . '">' . do_shortcode( $content) . '</div>';
}
add_shortcode('six_col', 'six_col');

function seven_col($atts, $content = null){
	extract(shortcode_atts( array(
		'last' => '',
		'first' => ''
	), $atts));
	
	if ( $last == 'yes') {
		$position = 'last';
	} else if($first == 'yes') {
		$position = 'first';
	} else {
		$position = '';
	}
	
	return '<div class="seven_col ' . $position . '">' . do_shortcode( $content) . '</div>';
}
add_shortcode('seven_col', 'seven_col');

function eight_col($atts, $content = null){
	extract(shortcode_atts( array(
		'last' => '',
		'first' => ''
	), $atts));
	
	if ( $last == 'yes') {
		$position = 'last';
	} else if($first == 'yes') {
		$position = 'first';
	} else {
		$position = '';
	}
	
	return '<div class="eightcol ' . $position . '">' . do_shortcode( $content) . '</div>';
}
add_shortcode('eight_col', 'eight_col');

function nine_col($atts, $content = null){
	extract(shortcode_atts( array(
		'last' => '',
		'first' => ''
	), $atts));
	
	if ( $last == 'yes') {
		$position = 'last';
	} else if($first == 'yes') {
		$position = 'first';
	} else {
		$position = '';
	}
	
	return '<div class="ninecol ' . $position . '">' . do_shortcode( $content) . '</div>';
}
add_shortcode('nine_col', 'nine_col');

function ten_col($atts, $content = null){
	extract(shortcode_atts( array(
		'last' => '',
		'first' => ''
	), $atts));
	
	if ( $last == 'yes') {
		$position = 'last';
	} else if($first == 'yes') {
		$position = 'first';
	} else {
		$position = '';
	}
	
	return '<div class="tencol ' . $position . '">' . do_shortcode( $content) . '</div>';
}
add_shortcode('ten_col', 'ten_col');

function eleven_col($atts, $content = null){
	extract(shortcode_atts( array(
		'last' => '',
		'first' => ''
	), $atts));
	
	if ( $last == 'yes') {
		$position = 'last';
	} else if($first == 'yes') {
		$position = 'first';
	} else {
		$position = '';
	}
	
	return '<div class="elevencol ' . $position . '">' . do_shortcode( $content) . '</div>';
}
add_shortcode('eleven_col', 'eleven_col');

// Creates shortcode [twelve_col clear='yes/no' first='no' last='no']
function twelve_col($atts, $content = null){
	extract(shortcode_atts( array(
		'last' => 'no',
		'first' => 'no',
		'clear' => 'no'
	), $atts));
	if ($clear == 'yes') {
		$clearit = 'clearfix';
	} else {
		$clearit = '';
	}
	if ( $last == 'yes') {
		$position = 'last';
	} else if($first == 'yes') {
		$position = 'first';
	} else {
		$position = '';
	}
	if ($clearit == 'clear'){
		return '<div class="twelvecol '.$clearit.' ' . $position . '">' . do_shortcode( $content) . '</div>';
	} else {
		return '<div class="twelvecol ' . $position . '">' . do_shortcode( $content) . '</div>';	
	}
	
}
add_shortcode('twelve_col', 'twelve_col');
