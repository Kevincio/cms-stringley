@extends('stringley::stringleyTemplate')

@section('content')
<div class="container" style="padding-top: 50px;">
	<div class="row">
		<div class="col-md-12">

			<!-- LEFT Column START -->

			<div class="panel panel-default panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Users</h3>
				</div>
				<div class="panel-body">
					<h4>User Management</h4>
					<p>You can add additonal users to your PurchaseSeal account to grant them access to one or more of your sites. To add a user click the {{ HTML::linkRoute('merchantManageUsersAdd', 'Add New User') }} link at the bottom.</p>

					@if (Session::has('success_message'))
					<div class="alert alert-success"><span class="glyphicon glyphicon-ok-sign"></span>
						{{Session::get('success_message')}}
					</div>
					@elseif (Session::has('error_message'))
					<div class="alert alert-error"><span class="glyphicon glyphicon-exclamation-sign"></span>
						{{Session::get('error_message')}}
					</div>
					@endif
				</div>
				<table class="table">
					<tr><th>Forename</th><th>Surname</th><th>Email</th><th>Created On</th><th style="width: 100px;">&nbsp;</th></tr>
					@foreach ($UserList as $User)
					<tr>
						<td>{{ucwords(strtolower($User->first_name))}}</td>
						<td>{{ucwords(strtolower($User->surname))}}</td>
						<td>{{$User->email}}</td>
						<td>{{$User->created_at}}</td>
						<td>
							<div class="btn-group">
								{{ HTML::linkRoute('merchantManageUsersEdit', 'Edit User', array($User->id), array('class'=>'btn btn-default btn-xs')) }}
							</div>
						</td>
					</tr>
					@endforeach
				</table>
				<div class="panel-body text-center">
					{{ $UserList->links() }}
				</div>
				<div class="panel-footer">{{ HTML::linkRoute('merchantManageUsersAdd', 'Add New User') }}</div>
			</div>

			<!-- LEFT Column END -->

		</div>
		<div class="col-md-3">

			<!-- Right Column START -->



			<!-- RIGHT Column END -->

		</div>
	</div>
</div>

@stop