<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- Bootstrap css link -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Bootstrap php modal crud</title>
</head>
<body>


<!-- Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add a New users</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                     <label for="completename">Name</label>
                    <input type="text" class="form-control" id="completename"placeholder="Enter Your Name" >
                </div>
                <div class="form-group">
                     <label for="completeemail">Email</label>
                    <input type="email" class="form-control" id="completeemail"
                    placeholder="Enter Your Email" >
                </div>
                <div class="form-group">
                     <label for="completemobile">Mobile</label>
                    <input type="text" class="form-control" id="completemobile"
                    placeholder="Enter Your Mobile" >
                </div>
                <div class="form-group">
                     <label for="completeplace">Place</label>
                    <input type="text" class="form-control"
                     id="completeplace"
                     placeholder="Enter Your Place" >
                </div>
            </div>
            
            <div class="modal-footer">
                <button type="submit" class="btn btn-dark" data-dismiss="modal" onclick="adduser()">Submit</button>
                <button type="button" class="btn btn-danger">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="container my-3">
    <h1 class="text-center">PHP Crud Operations Using Bootstrap Model </h1>
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#completeModal">
        A new users
    </button>
</div>




<!-- bootsrap javascript link -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>

<script>
function adduser(){
    var nameadd=$('#completename').val();
    var emailadd=$('#completeemail').val();
    var mobileadd=$('#completemobile').val();
    var placeadd=$('#completeplace').val();
    
    $.ajax({
        url:"insert.php",
        type:"POST",
        data:{
            nameSend:nameadd,
            emailSend:emailadd,
            mobileSend:mobileadd,
            placeSend:placeadd
        },

        success:function(data){
            //
            console.log('status');
        },
        error:function(data){
            //
            console.log('status not');
        }
    });
}

</script>


</body>
</html>