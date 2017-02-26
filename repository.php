<?php

if (function_exists("GetEntityManager") && class_exists('MyPost')):

function postRepository() {
	return GetEntityManager()->getRepository('MyPost');
}


endif;


if (function_exists("GetEntityManager") && class_exists('MyUser')):

function userRepository() {
	return GetEntityManager()->getRepository('MyUser');
}

endif;
