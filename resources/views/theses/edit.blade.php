<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>hiep</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
        <div class="container-fluid">
            <div class="h3">
                <a class="navbar-brand" style="color : black">Administration</a>
            </div>
        </div>
    </nav>
</header>
	<div style="width: 50%; margin-left:25%; margin-top: 20px; margin-bottom: 20px">
		<div class="modal-content">
			<form action="" method="post">
				<div class="modal-header">
					<h4 class="modal-title">Cập nhật đồ án sinh viên</h4>
					<a href=" {{route('theses.index')}} " type="button" class="close" >&times;</a>
				</div>
				<div class="modal-body">
                    <div class="form-group">
						<label>Mã đồ án</label>
						<input class="form-control" value="{{$theses -> id}}" readonly>
					</div>
					<div class="form-group" style="display:flex">
                        <div style = "width: 59%">
						<label>Tên đồ án</label>
						<input type="text" class="form-control" value="{{$theses -> title}}" required >
                        </div>
                        <div style = "width: 39%; margin-left: 2%">
                        <label>Họ tên SV</label>
						<input type="text" class="form-control" value="{{$theses -> student -> first_name}} {{$theses -> student -> last_name}}" required>
                        </div>
					</div>
					<div class="form-group">
						<label>Chương trình học</label>
						<input type="text" class="form-control" value="{{$theses -> program}}" required>
					</div>
                    <div class="form-group">
						<label>Giáo viên hướng dẫn</label>
						<input type="text" class="form-control" value="{{$theses -> supervisor}}" required>
					</div>
					<!-- <div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div> -->
					<div class="form-group" style="display:flex">
                        <div style = "width: 49%">
						<label>Ngày nộp</label>
						<input type="date" class="form-control" value="{{$theses -> submission_date}}" required>
                        </div>
                        <div style = "width: 49%; margin-left: 2%">
                        <label>Ngày bảo vệ</label>
						<input type="date" class="form-control" value="{{$theses -> defense_date}}" required>
                        </div>
					</div>
				</div>
				<div class="modal-footer">
					<a href=" {{route('theses.index')}} " type="button" class="btn btn-default">Cancel</a>
					<input href="" type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>

    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
    <h4 class="text-center text-uppercase fw-bold ">TLU</h4>
</footer>
</body>
