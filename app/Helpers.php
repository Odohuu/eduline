<?php



function logo_link()
{
    return $img = Image::make('public/images/eduline-logo.png');
}

function set_active($path, $active = "active")
{
    return Request::is($path) ? $active : '';
}

function delete_form($routeParams, $label = 'Delete')
{
	$form = Form::open(['method' => 'DELETE', 'route' => $routeParams]);

	$form .= Form::submit($label, ['class' => 'btn btn-danger']);

	return $form .= Form::close;
}

// {!! Form::model($photo, ['method'=>'DELETE', 'action' => ['PhotosController@destroy', $photo->id]]) !!}
//         <div class="form-group">
//             {!! Form::submit('Устгах', ['class'=>'btn btn-danger ']) !!}
//         </div>
//     {!! Form::close() !!}