@extends('backend.admin_master')
@section('admin_content')
<div class="main-panel">
    <div class="content-wrapper">
    
        <div class=" rounded" >
<div class="row">



 <!-- ===============================================-->
 <div class="container">
	<div class="row">
        <div class="col-lg-3"></div>
		<div class="col-lg-6  bg-white card p-3">
            <form action="{{route('admin.update_password')}}" method="post">
                @csrf
		    <label>Current Password</label>
		    <div class="form-group pass_show"> 
                <input type="password" name="current_password" class="form-control" placeholder="Current Password" id="current_password"> 
                <p id="correct_password"></p>
            </div> 
		       <label>New Password</label>
            <div class="form-group pass_show"> 
                <input type="password" name="password" class="form-control" placeholder="New Password" id="pass_confirmation"> 
            </div> 
		       <label>Confirm Password</label>
            <div class="form-group pass_show"> 
                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" id="confirm_password"> 
            </div> 
            
	 <button type="submit" class="btn btn-primary">Reset</button>
     </form>
	</div>
    <div class="col-lg-3"></div>
</div>
</div>
</div>
</div>
</div>
    <!--    End of Main Content-->
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $("#current_password").keyup(function() {
        var current_password = $("#current_password").val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: 'check-password',
            data: {
                current_password: current_password
            },
            success: function(resp) {
                if (resp == "true") {
                    $("#correct_password").text("Current Password Matches").css("color", "green");
                } else if (resp == "false") {
                    $("#correct_password").text("Password Does Not Match").css("color", "rgb(185, 74, 72)");
                }
            },
            error: function(resp) {
                alert("Error");
            }
        });

    });
</script>
@endsection