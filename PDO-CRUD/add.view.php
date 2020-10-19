<?php include('includes/header.php'); ?>

    <div class="container" id="get-started">
        <div class="section">

        <div class="row">
            <form class="col s12" method="POST">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="name" id="name" type="text" class="validate">
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">work</i>
                        <input name="designation" id="designation" type="text" class="validate">
                        <label for="designation">Designation</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail</i>
                        <input name="email" id="email" type="email" class="validate">
                        <label for="mail">E-mail</label>
                    </div>
                    <div class="col s12">
                    <a type="submit" class="btn-large center waves-effect waves-light blue">Submit</a>
                    </div>
                </div>
            </form>
        </div>
                
        </div>
    
    <br><br>
    </div>

<?php include('includes/footer.php'); ?>