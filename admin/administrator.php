<body>
    <section class="two-rows">
        <div class="card">
            <div class="card-body">
                <div class="control-header">
                    <div class="search-bar"><i class="fa fa-search"></i><input type="text" placeholder="Search" class="search-text"></div><a class="btn btn-outline-dark" role="button" href="#"><i class="fa fa-trash"></i></a></div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="checkbox" style="width:14px;"></th>
                                <th>ID Number</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" class="checkbox"></td>
                                <td>1000390387</td>
                                <td>Arby</td>
                                <td>Encarnacion</td>
                                <td>Arceo</td>
                                <td style="display:grid;grid-template-columns:auto auto;"><a class="btn btn-primary admin-useroptions viewbtn" role="button" href="#" id="studenteditbtn">Edit</a><a class="btn btn-primary admin-useroptions viewbtn" role="button" href="#" id="studenteditbtn">Archive</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div class="row no-gutters pagination-container">
                <div class="col offset-9">
                    <div class="row no-gutters pagination-control">
                        <div class="col align-self-center prev-next"><a class="text-primary" href="#"><i class="fa fa-caret-left pgntn-arrow"></i>&nbsp;Previous</a></div>
                        <div class="col align-self-center pgntn-info"><span>1 of 4 pages</span></div>
                        <div class="col align-self-center prev-next"><a class="text-primary" href="#">Next&nbsp;<i class="fa fa-caret-right pgntn-arrow"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form>
                    <h4 class="text-center" style="margin-bottom:7px;">Add Administrator</h4>
                    <div class="form-group d-flex justify-content-center adduserimage"><label for="stud-imageInp" class="fileinput-lbl"><img class="rounded-circle user-image" src="../assets/img/user-icon.png" id="stud-user-image"></label></div>
                    <div class="form-group"><input type="file" accept="image/*" name="myImage" id="stud-imageInp" class="fileinput" hidden /></div>
                    <div class="form-group">
                        <h6>First Name</h6><input class="form-control addschoolyear-input" type="text"></div>
                    <div class="form-group">
                        <h6>Middle Name</h6><input class="form-control addschoolyear-input" type="text"></div>
                    <div class="form-group">
                        <h6>Last Name</h6><input class="form-control addschoolyear-input" type="text"></div>
                    <div class="form-group">
                        <h6>ID Number</h6><input class="form-control addschoolyear-input" type="text"></div>
                    <div class="form-group d-flex justify-content-center"><button class="btn btn-primary smallbtn" type="button">Add</button></div>
                </form><span class="badge badge-primary success-badge">This is success</span></div>
        </div>
    </section>
</body>