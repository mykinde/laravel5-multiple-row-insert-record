<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Multiple Insert Using Checkboxes</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
</head>
<body>
	

	@if (session('status'))
	<div class="alert alert-success">
		{{ session('status') }}
		<button type="button" class="close" data-dismiss="alert">x</button>
	</div>
	@endif
	<a href="{{ url('input') }}">Input Marks</a>
	<div class="container" style="margin-top: 10px;">
		<div class="row">
			
			<div class="col-md-4">
				<form method="POST" action="{{ route('multiple_row') }}" enctype="multipart/form-data">
				{!! csrf_field() !!}
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Chk</th>
							<th>S.N</th>
							<th>Subject</th>
						</tr>
					</thead>
					<tbody>
						@php($i=1)
						@foreach($subjects->take(5) as $subject)
						<tr>
							<td><input type="radio" name="subject_id" value="{{$subject->id}}"></td>
							<td>{{$i}}</td>
							<td>{{$subject->title}}</td>
						</tr>
						@php($i++)
						@endforeach
					</tbody> 
				</table>
			</div>
			<div class="col-md-4">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Chk</th>
							<th>S.N</th>
							<th>Class</th>
						</tr>
					</thead>
					<tbody>
						@php($i=1)
						@foreach($dclasses->take(5) as $dclass)
						<tr>
							<td><input type="radio" name="class_id" value="{{$dclass->id}}"></td>
							<td>{{$i}}</td>
							<td>{{$dclass->name}}</td>
						</tr>
						@php($i++)
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="col-md-4">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Chk</td>
							<th>S.N</th>
							<th>Students</th>
						</tr>
					</thead>
					<tbody>
						@php($i=1)
						@foreach($students->take(6) as $student)
						<tr>
							<td><input type="checkbox" name="student_id[]" value="{{$student->id}}"></td>
							<td>{{$i}}</td>
							<td>{{$student->name}}</td>
						</tr>
						@php($i++)
						@endforeach
					</tbody>
				</table>
				{{ $students->links() }}
				<div class="form-group">
					<button class="btn btn-primary btn-sm">
						Insert
					</button>
				</div>
				</form>
			</div>
        </div>


        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Chk</td>
                    <th>S.N</th>
                    <th>Students</th>
                    <th>Classes</th>
                    <th>Subjects</th>
                </tr>
            </thead>
            <tbody>
                @php($i=1)
                @foreach($std_sbjs->take(5) as $std_sbj)
                <tr>
                    
                    <td></td>
                    <td>{{$i}}</td>
                    <td>{{$std_sbj->student_id}}</td>
                    <td>{{$std_sbj->class_id}}</td>
                    <td>{{$std_sbj->subject_id}}</td>
                </tr>
                @php($i++)
                @endforeach
            </tbody>
        </table>
        
	</div>

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" /></script>
</body>
</html>