<?php



function logo_link()
{
    return $img = Image::make('public/images/eduline-logo.png');
}

function set_active($path, $active = "active")
{
    return Request::is($path) ? $active : '';
}

function delete_form($routeParams, $photo_id )
{
	$form = Form::open(['method' => 'DELETE', 'route' => [$routeParams, $photo_id]]);

	$form .= Form::submit('Устгах', ['class' => 'btn btn-danger']);

	return $form .= Form::close();
}
