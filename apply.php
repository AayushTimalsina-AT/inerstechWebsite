<?php include 'layout/header.php'; ?>
<div id="inner_banner" class="section inner_banner_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="title-holder">
                        <div class="title-holder-cell text-left">
                            <h1 class="page-title">Applied for : Office Assistent</h1>
                            <ol class="breadcrumb">
                                <li><a href="recruitment.php">Office Assistent</a></li>
                                <li class="active">Apply Form</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <p style="text-align:center; color:black;">As our company is rebranding, we have put in an effort to revamp our job application site as well. Applying for a job had never been easier. Introducing new and improved site, created just to simplify your job applying process. It’s fast, it’s simple and it’s hassle free. <br><br>

        So what are you waiting for? Drop your CV today!!</p>

    <form action="">
        <div class="form-group">
            <label for="exampleInputEmail1" style="color:black; font-weight: bold;">Full Name</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Full Name" require>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" style="color:black; font-weight: bold;">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
            <small id="emailHelp" class="form-text text-muted">Please enter a valid email address.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" style="color:black; font-weight: bold;">Contact Number</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Contact Number">
            <small id="emailHelp" class="form-text text-muted">Please enter your contact number.</small>
        </div>
        <hr style="border-bottom:5px solid brown;">
       
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4" style="color:black; font-weight: bold;">Cover Letter</label>
                <input type="file" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4" style="color:black; font-weight: bold;">Resume</label>
                <input type="file" class="form-control" id="inputEmail4" >
            </div>

        </div>
        <input class="btn btn-primary" type="submit" value="Submit">
    </form> <br><br>

</div>
<?php include 'layout/footer.php'; ?>