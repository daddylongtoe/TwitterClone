<footer class="footer">
    <div class="container">
        <p>&copy; Steve McLoughlin 2018</p>
    </div>
</footer>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="hidden" name="loginActive" id="loginActive" value="1">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email address">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a id="toggleLogin" href="#">Register</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="loginBtn" type="button" class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
    </div>

    <script>

        $("#toggleLogin").click(function () {
            if($("#loginActive").val() == "1"){
                $("#loginActive").val("0");
                $("#myModalLabel").html("Register");
                $("#loginBtn").html("Register");
                $("#toggleLogin").html("Login");
            }else{
                $("#loginActive").val("1");
                $("#myModalLabel").html("Login");
                $("#loginBtn").html("Login");
                $("#toggleLogin").html("Register");
            }

        })

        $("#loginBtn").click(function () {
            $.ajax({
                type: "POST",
                url: "actions.php?action=loginRegister",
                data: "email=" + $("#email").val() + "&password=" + $("#password").val() +"&loginActive=" + $("#loginActive").val(),
                success: function(result) {
                    alert(result);
                }
            })
        })
        
    </script>

</body>
</html>

